<?php


namespace App\Models;

//use Botble\Base\Traits\EnumCastable;
//use Botble\Base\Enums\BaseStatusEnum;
//use Botble\Base\Models\BaseModel;

use App\Enums\BaseStatusEnum;
use App\Models\Base\BaseModel;
use App\Traits\EnumCastable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Facility extends BaseModel
{
    use EnumCastable;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 're_facilities';

    /**
     * @var array
     */
    protected $fillable
        = [
            'name',
            'icon',
            'status',
        ];

    /**
     * @var array
     */
    protected $casts
        = [
            'status' => BaseStatusEnum::class,
        ];

    protected $appends
        = ['reference_type'];

    protected static function booted()
    {
        static::addGlobalScope('is_published', function (Builder $builder) {
            $builder->where('status', '=', 'published');
        });
    }

    public function getReferenceTypeAttribute()
    {
        return "Botble\RealEstate\Models\Property";
    }
}
