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
        'id','province_name',
    ];
    /**
    * One to Many relationships
    */
    public function city()
    {
        return $this->hasMany(City::class);
    }
}
