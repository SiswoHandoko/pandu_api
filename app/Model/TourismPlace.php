<?php

namespace App\Model;
use Illuminate\Database\Eloquent\Model;

class TourismPlace extends Model
{

    /**
    * Table database
    */
    protected $table = 'tourism_places';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'city_id', 'name', 'description', 'adult_price', 'child_price', 'infant_price', 'tourist_price', 'longitude', 'latitude', 'facilities', 'status','additional_info'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'created_at', 'updated_at', 'city_id','category_id'
    ];

    /**
    * One to Many relationships
    */
    public function event()
    {
        return $this->hasMany(Event::class);
    }

    public function picture()
    {
        return $this->hasMany(Picture::class);
    }

    public function plandetail()
    {
        return $this->hasMany(PlanDetail::class);
    }

    public function packagedetail()
    {
        return $this->hasMany(PackageDetail::class);
    }

    /**
    * One to One relationships
    */
    public function special_deal()
    {
        return $this->hasOne(SpecialDeal::class);
    }

    /**
    * Belongs To Relation
    */
    public function city() {
        return $this->belongsTo(City::class, 'city_id');
    }

    /**
    * One to One relationships
    */
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

}
