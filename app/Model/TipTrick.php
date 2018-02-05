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
        'created_at', 'updated_at'
    ];
}
