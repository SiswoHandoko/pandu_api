<?php
namespace App\Model;
use Illuminate\Database\Eloquent\Model;
/**
* Model item ads
*/
class Province extends Model
{
    /**
    * Table database
    */
    protected $table = 'provinces';
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
    * One to Many relationships
    */
    public function city()
    {
        return $this->hasMany(City::class);
    }
}
