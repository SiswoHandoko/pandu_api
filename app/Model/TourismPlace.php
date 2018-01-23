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
        'city_id', 'name', 'description', 'adult_price', 'child_price', 'infant_price', 'tourist_price', 'longitude', 'latitude', 'facilities', 'status'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'created_at','updated_at'
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

    public function plan()
    {
        return $this->hasMany(Plan::class);
    }

    /**
    * Belongs To Relation
    */
    public function city() {
        return $this->belongsTo(City::class, 'city_id');
    }
}
