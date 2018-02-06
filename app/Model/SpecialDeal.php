<?php

namespace App\Model;
use Illuminate\Database\Eloquent\Model;

class SpecialDeal extends Model
{

    /**
    * Table database
    */
    protected $table = 'special_deals';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'tourism_place_id', 'package_id', 'rate', 'status'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'created_at', 'updated_at'
    ];

    /**
    * Belongs to relationships
    */
    public function tourismplace()
    {
        return $this->belongsTo(TourismPlace::class, 'tourism_place_id');
    }

    public function package()
    {
        return $this->belongsTo(Package::class, 'package_id');
    }

}
