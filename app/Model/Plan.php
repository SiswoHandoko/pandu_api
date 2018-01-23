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
        'user_id', 'tp_id', 'guide_id', 'start_date', 'end_date', 'status'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'created_at','updated_at'
    ];

    /**
    * Belongs To Relation
    */
    public function tourismplace() {
        return $this->belongsTo(TourismPlace::class, 'tp_id');
    }

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function guide() {
        return $this->belongsTo(Guide::class, 'guide_id');
    }
}
