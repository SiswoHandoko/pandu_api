<?php

namespace App\Model;
use Illuminate\Database\Eloquent\Model;

class PrivateUser extends Model
{
    /**
    * Table database
    */
    protected $table = 'private_users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'status'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'user_id', 'created_at', 'updated_at'
    ];

    /**
    * One to Many relationships
    */
    public function private_guide()
    {
        return $this->hasMany(PrivateGuide::class);
    }

    /**
    * Belongs To Relation
    */
    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
