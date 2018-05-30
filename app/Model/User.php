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
        'role_id', 'firstname', 'lastname', 'contact', 'address', 'birthdate', 'username', 'password', 'email', 'web_token', 'android_token', 'ios_token', 'photo', 'status', 'remember_token', 'city_id'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'web_token', 'android_token', 'ios_token', 'created_at', 'updated_at', 'role_id', 'remember_token', 'city_id'
    ];

    /**
    * One to Many relationships
    */
    public function plan()
    {
        return $this->hasMany(Plan::class);
    }

    public function private_user()
    {
        return $this->hasMany(PrivateUser::class);
    }

    /**
    * Belongs To Relation
    */
    public function city() {
        return $this->belongsTo(City::class, 'city_id');
    }

    public function user_detail()
    {
        return $this->hasOne(UserDetail::class);
    }
}
