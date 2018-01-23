<?php

namespace App\Model;
use Illuminate\Database\Eloquent\Model;

class Guide extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname', 'lastname', 'contact', 'address', 'birthdate', 'nik', 'username', 'password', 'email', 'web_token','android_token','ios_token', 'status'
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
