<?php

namespace App\Model;
use Illuminate\Database\Eloquent\Model;

class PrivateGuide extends Model
{
    /**
    * Table database
    */
    protected $table = 'private_guides';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'question_id', 'user_id', 'answer', 'status'
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
