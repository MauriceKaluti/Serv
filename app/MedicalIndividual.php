<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MedicalIndividual extends Model
{
    //

    protected $fillable=['user_id','ind_name','phone_one','phone_two','email','town','refer_facility','special_condition','emergency_med_ind_price'];

}
