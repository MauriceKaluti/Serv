<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dharura extends Model
{
    //

    protected $fillable=['user_id','dharura_package','name','email','phone','postal_address','town','reg_no','vehicle_model','vehicle_type','year_manuf','package_price'];

}
