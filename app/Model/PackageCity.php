<?php

namespace App\Model;
use Illuminate\Database\Eloquent\Model;

class PackageCity extends Model
{

    /**
    * Table database
    */
    protected $table = 'package_cities';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'package_id', 'city_id', 'status'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'created_at', 'updated_at', 'package_id', 'city_id'
    ];
}
