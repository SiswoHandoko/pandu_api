<?php

namespace App\Model;
use Illuminate\Database\Eloquent\Model;

class InfoPayment extends Model
{

    /**
    * Table database
    */
    protected $table = 'info_payments';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'bank', 'no_rek', 'name', 'status'
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
