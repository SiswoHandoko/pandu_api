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
        'id', 'province_id', 'name', 'image_url', 'rate', 'status'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'created_at','updated_at', 'province_id'
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
