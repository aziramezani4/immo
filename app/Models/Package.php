<?php


namespace App\Models;
//use Botble\Base\Traits\EnumCastable;
//use Botble\Base\Enums\BaseStatusEnum;
//use Botble\Base\Models\BaseModel;
//use Botble\RealEstate\Models\Currency;
use App\Enums\BaseStatusEnum;
use App\Models\Base\BaseModel;
use App\Traits\EnumCastable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Package
{


    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 're_packages';

    /**
     * @var array
     */
    protected $fillable = [
        'name',
        'price',
        'currency_id',
        'percent_save',
        'number_of_listings',
        'account_limit',
        'order',
        'is_default',
        'status',
    ];

    /**
     * @var array
     */
    protected $casts = [
        'status' => BaseStatusEnum::class,
    ];

    protected static function booted()
    {
        static::addGlobalScope('is_published', function (Builder $builder) {
            $builder->where('status', '=', 'published')
                ->orderBy('order', 'asc');
        });
    }

    /**
     * @return BelongsTo
     */
    public function currency()
    {
        return $this->belongsTo(Currency::class)->withDefault();
    }

    /**
     * @return BelongsToMany
     */
    public function accounts(): BelongsToMany
    {
        return $this->belongsToMany(Account::class, 're_account_packages', 'package_id', 'account_id');
    }
}
