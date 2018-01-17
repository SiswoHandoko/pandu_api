<?php
namespace App\Model;
use Illuminate\Database\Eloquent\Model;
/**
* Model item ads
*/
class City extends Model
{
    /**
    * Table database
    */
    protected $table = 'cities';
    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [
        'id', 'province_id', 'name', 'status'
    ];

    /**
    * One to Many relationships
    */
    public function tourismplace()
    {
        return $this->hasMany(TourismPlace::class);
    }
    
    /**
    * Belongs To Relation
    */
    public function province() {
        return $this->belongsTo(Province::class, 'province_id');
    }
}
