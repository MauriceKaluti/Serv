<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MedicalInstitution extends Model
{
    //
    protected $fillable=['user_id','institution_name','phone_one','email','phone_two','contact_person','county','town', 'no_students','post_address','post_code','medical_facility','facility_phone','special_condition','emergency_med_inst_price'];

}
