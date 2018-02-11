<?php

namespace App\Model;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{

    /**
    * Table database
    */
    protected $table = 'plans';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'guide_id', 'start_date', 'end_date', 'type', 'status'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'created_at', 'updated_at', 'user_id', 'guide_id',
    ];

    /**
    * Belongs To Relation
    */
    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function guide() {
        return $this->belongsTo(User::class, 'guide_id');
    }

    /**
    * One to Many relationships
    */
    public function plandetail()
    {
        return $this->hasMany(PlanDetail::class);
    }
}
