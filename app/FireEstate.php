<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FireEstate extends Model
{
    //

    protected $fillable=['user_id','resident_name','cont_person','cont_person2','email','phone_one','phone_two','number_households','number_extra','county','town', 'serv_category','post_address','post_code','additional','fire_engine','fire_marshal','service_equip','supply_service','fire_safety','cost'];



        protected $fillable=['user_id','hotel_name','cont_person','cont_person2','email','phone_one','phone_two','number_staffs','county','town', 'serv_category','post_address','post_code','additional','fire_engine','fire_marshal','service_equip','supply_service','fire_safety','cost'];


    protected $fillable=['user_id','res_name','cont_person','cont_person2','email','phone_one','phone_two','county','town', 'serv_category','post_address','post_code','additional','fire_engine','fire_marshal','service_equip','supply_service','fire_safety','cost'];


        protected $fillable=['user_id','inst_name','cont_person','cont_person2','email','phone_one','phone_two','number_students','county','town', 'serv_category','post_address','post_code','additional','fire_engine','fire_marshal','service_equip','supply_service','fire_safety','cost'];

          protected $fillable=['user_id','org_name','cont_person','cont_person2','email','phone_one','phone_two','county','town', 'serv_category','post_address','post_code','additional','fire_engine','fire_marshal','service_equip','supply_service','fire_safety','cost'];

          resident_name
          number_households
          number_extra
          hotel_name
          number_staffs
          res_name
          inst_name
          number_students
           



}
