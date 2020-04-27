<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MedicalResidence extends Model
{
    //

    protected $fillable=['user_id','res_name','email','phone_one','phone_two','contact_person','town','post_address','post_code','duration_cover','medical_condition','emergency_med_res_price'];

}
