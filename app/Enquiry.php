<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enquiry extends Model
{
    //

    protected $fillable=['user_id','name','email','phone','enquiry_details','service'];
    
}
