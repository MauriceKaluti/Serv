<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MsafiriMoto extends Model
{
    //

    protected $fillable=['user_id','driver_name','id_no','departure_location','destination_location','dep_time','vehicle_reg','moto_price'];
   

}
