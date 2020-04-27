<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MedicalEstate extends Model
{
    //

    protected $fillable=['user_id','est_name','email','phone_one','phone_two','contact_person','town','post_address','post_code','no_households','special_geographical','emergency_med_estate_price'];
    
}
