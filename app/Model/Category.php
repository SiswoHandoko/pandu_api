<?php
namespace App\Model;
use Illuminate\Database\Eloquent\Model;
/**
* Model item ads
*/
class Category extends Model
{
    /**
    * Table database
    */
    protected $table = 'categories';
    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [
        'id', 'name', 'status'
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
    * Belongs To Relation
    */
    public function tourism_place() {
        return $this->hasMany(TourismPlace::class);
    }
}
