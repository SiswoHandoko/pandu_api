<?php

namespace App\Model;
use Illuminate\Database\Eloquent\Model;

class AccessLog extends Model
{

    /**
    * Table database
    */
    protected $table = 'access_logs';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'params', 'result'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
    ];
}
