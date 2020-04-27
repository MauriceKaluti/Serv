<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MedicalFamily extends Model
{
    //

    protected $fillable=['user_id','first_name', 'email','phone_one','idp_no','dob', 'medical_facility','facility_phone', 'town','post_address','post_code','med_info','blood_group','med_condition','no_dependants','emergency_med_fam_price'];
    
}
