<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFirePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fire_packages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_id');
            $table->string('package_type');
            $table->string('resident_name');
            $table->string('number_households');
            $table->string('number_extra');
            $table->string('hotel_name');
            $table->string('number_staffs');
            $table->string('res_name');
            $table->string('org_name');
            $table->string('inst_name');
            $table->string('cont_person');
            $table->string('cont_person2');
            $table->string('email');
            $table->string('phone_one');
            $table->string('phone_two');
            $table->string('number_students');
            $table->string('county');
            $table->string('town');
            $table->string('serv_category');
            $table->string('post_address');
            $table->string('post_code');
            $table->string('additional');
            $table->string('fire_engine');
            $table->string('fire_marshal');
            $table->string('service_equip');  
            $table->string('supply_service');  
            $table->string('fire_safety');  
            $table->string('cost'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fire_packages');
    }
}
