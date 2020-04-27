<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    //

    protected $fillable=['title','category_id','details','slug','image','posted_by'];
    
}
