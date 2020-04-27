<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MsafiriPsv extends Model
{
    //

    protected $fillable=['user_id','sacco_name','route_name','fleet_no','booking_office','county','town', 'booking_person','departure_time','vehicle_reg','vehicle_driver','psv_price'];

}
