<?php

namespace App\Model;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{

    /**
    * Table database
    */
    protected $table = 'packages';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description', 'days', 'start_date', 'end_date', 'status'
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
    * One to Many relationships
    */
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
}
