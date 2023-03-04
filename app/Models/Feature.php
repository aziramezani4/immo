<?php


namespace App\Models;
//use Botble\Base\Models\BaseModel;
use App\Models\Base\BaseModel;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;

class Feature
{
    /**
     * @var bool disable timestamp
     */
    public $timestamps = false;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 're_features';
    /**
     * @var array
     */
    protected $fillable = [
        'name',
        'icon',
    ];

    protected static function booted()
    {
        static::addGlobalScope('is_published', function (Builder $builder) {
            $builder->where('status', '=', 'published');
        });
    }

    /**
     * @return BelongsToMany
     */
    public function properties(): BelongsToMany
    {
        return $this->belongsToMany(Property::class, 're_property_features', 'feature_id', 'property_id');

    }

    /**
     * @return BelongsToMany
     */
    public function projects(): BelongsToMany
    {
        return $this->belongsToMany(Project::class, 're_project_features', 'feature_id', 'project_id');
    }
}
