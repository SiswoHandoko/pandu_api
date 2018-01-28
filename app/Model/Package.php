<?php

namespace App\Model;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{

    /**
    * Table database
    */
    protected $table = 'packages';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'tourism_place_id', 'name', 'status'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'created_at', 'updated_at', 'tourism_place_id'
    ];

    /**
    * Belongs To Relation
    */
    public function tourismplace() {
        return $this->belongsTo(Tourismplace::class, 'tourism_place_id');
    }
}
