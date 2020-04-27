<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RescueFire extends Model
{
    //

    protected $fillable=['user_id','first_name','last_name','company_name','email','phone','address', 'postal_code','city','town','vehicle_model','vehicle_reg','vehicle_photo','passport_photo'];
}
