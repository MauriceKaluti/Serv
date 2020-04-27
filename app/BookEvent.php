<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookEvent extends Model
{
    //

    protected $fillable=['event_id','user_id','event_entity','event_title','applicant_name','applicant_email','applicant_entity','applicant_department','applicant_position','ticket_price'];

}
