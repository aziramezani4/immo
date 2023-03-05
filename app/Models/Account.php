<?php

namespace App\Models;

//use Botble\Base\Supports\Avatar;
//use Botble\Media\Models\MediaFile;
use App\Models\Media\MediaFile;
use App\Notifications\ResetPasswordNotification;
use App\Notifications\VerifyEmail;
use App\Notifications\VerifySms;
use Botble\Base\Supports\Avatar;
use Carbon\Carbon;
use Faker\Extension\Helper;
use Illuminate\Contracts\Routing\UrlGenerator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Storage;
use Tymon\JWTAuth\Contracts\JWTSubject;


class Account extends Authenticatable //, MustVerifyEmail
{
    use Notifiable,
        HasFactory;

    /**
     * @var string
     */
    protected $table = 're_accounts';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable
        = [
            'first_name',
            'last_name',
            'email',
            'password',
            'avatar_id',
            'dob',
            'phone',
            'description',
            'gender',
            'credits',
            'username'
        ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden
        = [
            'password',
            'remember_token',
            'email_verify_token'
        ];

    /**
     * @var array
     */
    protected $dates
        = [
            'created_at',
            'updated_at',
            'dob',
            'package_start_date',
            'package_end_date',
            'confirmed_at',
            'confirmed_phone_at'
        ];

    protected $appends
        = ['photo_url', 'full_name'];

    /**
     * @var array
     */
    protected $casts
        = [
            'dob' => 'datetime:Y-m-d',
        ];

    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     *
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPasswordNotification($token));
    }

    /**
     * Send the email verification notification.
     *
     * @return void
     */
    public function sendEmailVerificationNotification()
    {
        $this->notify(new VerifyEmail);
    }

    /**
     * @return BelongsTo
     */
    public function avatar()
    {
        return $this->belongsTo(MediaFile::class)->withDefault();
    }

    /**
     * Get the profile photo URL attribute.
     *
     * @return string
     */
    public function getPhotoUrlAttribute()
    {
        return $this->avatar->url
            ? $this->avatar->url
            : vsprintf('https://www.gravatar.com/avatar/%s.jpg?s=200&d=%s', [
                md5(strtolower($this->email)),
                $this->name
                    ? urlencode("https://ui-avatars.com/api/$this->name")
                    : 'mp',
            ]);
    }

    /**
     * @return UrlGenerator|string
     */
    public function getAvatarUrlAttribute()
    {
        return $this->avatar->url ? Storage::url($this->avatar->url)
            : (new Avatar)->create($this->getFullName())->toBase64();
    }

    /**
     * Always capitalize the first name when we retrieve it
     *
     * @param  string  $value
     *
     * @return string
     */
    public function getFirstNameAttribute($value)
    {
        return ucfirst($value);
    }

    /**
     * Always capitalize the last name when we retrieve it
     *
     * @param  string  $value
     *
     * @return string
     */
    public function getLastNameAttribute($value)
    {
        return ucfirst($value);
    }

    /**
     * @return string
     */
    public function getFullName()
    {
        return ucfirst($this->first_name).' '.ucfirst($this->last_name);
    }

    public function getFullNameAttribute()
    {
        return $this->getFullName();
    }

    /**
     * @return HasMany
     */
    public function properties()
    {
        return $this->hasMany(Property::class, 'author_id', 'id')->with(['package', 'payments']);
    }

    /**
     * @return bool
     */
    public function canPost(): bool
    {
        return $this->credits > 0;
    }

    /**
     * @param  int  $value
     *
     * @return int
     */
    public function getCreditsAttribute($value)
    {
        return $value ? $value : 0;
    }

    /**
     * @return HasMany
     */
    public function transactions()
    {
        return $this->hasMany(Transaction::class, 'account_id');
    }

    /**
     * @return BelongsToMany
     */
    public function packages(): BelongsToMany
    {
        return $this->belongsToMany(Package::class, 're_account_packages',
            'account_id', 'package_id');
    }

    /**
     * Get the oauth providers.
     *
     * @return HasMany
     */
    public function oauthProviders()
    {
        return $this->hasMany(OAuthProvider::class);
    }

    /**
     * @return int
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }

    /**
     * Determine if the user has verified their email address.
     *
     * @return bool
     */
    public function hasVerifiedEmail()
    {
        return !is_null($this->confirmed_at);
    }

    /**
     * Mark the given user's email as verified.
     *
     * @return bool
     */
    public function markEmailAsVerified()
    {
        return $this->forceFill([
            'confirmed_at' => $this->freshTimestamp(),
        ])->save();
    }

    public function makeUsername(): bool
    {
        do {
            $username = rand(1234, 9999999999);
        } while (Account::where('username', '=', $username)->count());

        return $this->forceFill([
            'username' => $username,
        ])->save();
    }

    public function hasVerifiedPhone()
    {
        return !is_null($this->confirmed_phone_at);
    }

    public function markPhoneAsVerified()
    {
        return $this->forceFill([
            'confirmed_phone_at' => $this->freshTimestamp(),
        ])->save();
    }

    /**
     * Send the phone verification notification.
     *
     * @return void
     */
    public function sendPhoneVerificationNotification()
    {
        $code = Helper::numerify('###-###');

        VerifyMobile::create([
            'user_id'     => $this->id,
            'mobile'      => $this->phone,
            'code'        => $code,
            'expire_date' => Carbon::now()->addMinutes(2),
        ]);
        $this->notify(new VerifySms($code));
    }

}
