<?php

namespace App\Model;
use Illuminate\Database\Eloquent\Model;

class TipTrick extends Model
{

    /**
    * Table database
    */
    protected $table = 'tip_tricks';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'description', 'status'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'updated_at'
    ];

    /**
    * Belongs To Relation
    */
    public function city() {
        return $this->belongsTo(City::class, 'city_id');
    }
}
