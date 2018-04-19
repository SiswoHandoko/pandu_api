<?php

namespace App\Model;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{

    /**
    * Table database
    */
    protected $table = 'messages';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'title', 'description', 'status', 'created_by','is_read'
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
    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
    * Belongs To Relation
    */
    public function admin() {
        return $this->belongsTo(User::class, 'created_by');
    }
}
