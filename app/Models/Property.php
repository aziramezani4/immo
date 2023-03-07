<?php

namespace App\Models;

use Exception;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Property extends Model
{
    use HasFactory;
    use SoftDeletes;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 're_properties';

    /**
     * @var array
     */
    protected $fillable
        = [
            'name',
            'package',
            'type',
            'description',
            'content',
            'location',
            'images',
            'project_id',
            'number_bedroom',
            /// Edited v2
            'videos',
            'post_code',
            'house_number',
            'house_name',
            'gross_rent',
            'additional_costs',
            'net_rent',
            'garage',
            'parking_space',
            'contact_name',
            'contact_phone_number',
            'last_renovation',
            'last_reconstruction',
            'distance',
            /// End Edit V2

            //////// Edit v.1
            'number_wc',
            'construction_year',
            'available_date',
            ////// End Edited
            'number_bathroom',
            'number_floor',
            'square',
            'square_construction',
            'price',
            'status',
            'is_featured',
            'is_featured_vip',
            'currency_id',
            'city_id',
            'period',
            'author_id',
            'author_type',
            'category_id',
            'expire_date',
            'auto_renew',
            'longitude',
            'latitude',
            'state_id',
            'country_id',
            'square_construction',


            ///
            'neworedit',
            'advertising_type'
        ];

    /**
     * @var array
     */
    protected $casts
        = [
            'status'            => PropertyStatusEnum::class,
            'moderation_status' => ModerationStatusEnum::class,
            'type'              => PropertyTypeEnum::class,
            'period'            => PropertyPeriodEnum::class,

        ];



    /**
     * @var array
     */
    protected $dates
        = [
            'created_at',
            'updated_at',
            'expire_date',
        ];


    /**
     * @return BelongsToMany
     */
    public function features()
    {
        return $this->belongsToMany(Feature::class, 're_property_features',
            'property_id', 'feature_id');
    }

//// Add Categories
//    public function categories(): BelongsToMany
//    {
//        return $this->belongsToMany(Category::class, 're_property_categories',
//            'property_id', 'category_id');
//    }
//
//    /**
//     * @return BelongsToMany
//     */
//    public function facilities(): BelongsToMany
//    {
//        return $this->belongsToMany(Facility::class, 're_facilities_distances',
//            'reference_id')->withPivot('distance', 'reference_type');
//    }
//
    /**
     * @param string $value
     *
     * @return array
     */
    public function getImagesAttribute($value)
    {
        try {
            if ($value === '[null]') {
                return [];
            }

            return json_decode($value) ?: [];
        } catch (Exception $exception) {
            return [];
        }
    }

    /**
     * @param string $value
     *
     * @return array
     */
    public function getVideosAttribute($value)
    {
        try {
            if ($value === '[null]') {
                return [];
            }

            return json_decode($value) ?: [];
        } catch (Exception $exception) {
            return [];
        }
    }

    /**
     * @return string|null
     */
    public function getImageAttribute(): ?string
    {
        return Arr::first($this->images) ?? null;
    }
//
//    /**
//     * @return string
//     */
//    public function getSquareTextAttribute()
//    {
//        return $this->square . ' ' . setting('real_estate_square_unit', 'm²');
//    }

}
