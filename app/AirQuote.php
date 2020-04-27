<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AirQuote extends Model
{
    //

    protected $fillable=['user_id','name','email','phone','origin_location','facility_dest','nature_patient'];

}
