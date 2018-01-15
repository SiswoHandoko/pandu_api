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
        'id','province_id','city_name',
    ];

    /**
    * Belongs To Relation
    */
    public function province() {
       return $this->belongsTo(Province::class, 'province_id');
   }
}
