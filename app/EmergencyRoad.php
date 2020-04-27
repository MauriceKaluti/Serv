<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmergencyRoad extends Model
{
    //

    protected $fillable=['user_id','owner_name','email','phone','vehicle_model','vehicle_type','town','vehicle_reg','insurance_yes','insurance_no','road_price'];

}
