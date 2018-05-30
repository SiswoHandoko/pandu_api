<?php

namespace App\Model;
use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{

    /**
    * Table database
    */
    protected $table = 'user_details';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id','calling_name', 'birth_place', 'gender', 'marriage_status', 'religion', 'nationality', 'child_of', 'amount_siblings', 'current_job', 'sim_type', 'ktp_number', 'ktp_address', 'another_contact', 'another_address', 'education_background', 'languages','drive_motorcycle','drive_car','private_vehicle','ktp_image','sim_image','kk_image','pas_photo','certificate','cv'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'created_at', 'updated_at'
    ];

    /**
    * Belongs To Relation
    */
    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
