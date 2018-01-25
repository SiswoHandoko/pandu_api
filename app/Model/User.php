<?php

namespace App\Model;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{

    /**
    * Table database
    */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname', 'lastname', 'contact', 'address', 'birthdate', 'username', 'password', 'email','type', 'web_token','android_token','ios_token', 'status', 'remember_token'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'web_token','android_token','ios_token','created_at','updated_at'
    ];

    /**
    * One to Many relationships
    */
    public function plan()
    {
        return $this->hasMany(Plan::class);
    }
}
