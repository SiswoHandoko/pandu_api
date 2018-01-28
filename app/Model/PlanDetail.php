<?php

namespace App\Model;
use Illuminate\Database\Eloquent\Model;

class PlanDetail extends Model
{

    /**
    * Table database
    */
    protected $table = 'plan_details';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'plan_id', 'tourism_place_id', 'start_time', 'end_time', 'total_price', 'status'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'created_at', 'updated_at', 'plan_id', 'tourism_place_id'
    ];

    /**
    * Belongs To Relation
    */
    public function plan() {
        return $this->belongsTo(Plan::class, 'plan_id');
    }

    public function tourismplace() {
        return $this->belongsTo(TourismPlace::class, 'tourism_place_id');
    }
}
