<?php

namespace App\Model;
use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'tp_id', 'image_url', 'status'
    ];

    /**
    * Belongs To Relation
    */
    public function tourismplace() {
        return $this->belongsTo(TourismPlace::class, 'tp_id');
    }
}
