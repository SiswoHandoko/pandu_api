<?php

namespace App\Model;
use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{

    /**
    * Table database
    */
    protected $table = 'pictures';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'tourism_place_id', 'image_url', 'status'
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
        return $this->belongsTo(TourismPlace::class, 'tourism_place_id');
    }
}
