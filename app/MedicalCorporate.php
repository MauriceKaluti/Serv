<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MedicalCorporate extends Model
{
    //

    protected $fillable=['user_id','company_name','contactp_name','email','phone_one','phone_two','industry','town', 'street','post_address','post_code','building_no','no_employees','emergency_med_corp_price'];

}
