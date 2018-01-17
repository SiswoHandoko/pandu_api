<?php

namespace App\Model;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'tp_id', 'guide_id', 'start_date', 'end_date', 'status'
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
