<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicalFamiliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medical_families', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_id');
            $table->string('first_name');
            $table->string('second_name');            
            $table->string('email');            
            $table->string('phone_one');
            $table->string('idp_no');
            $table->string('dob');
            $table->string('gender');
            $table->string('medical_facility');
            $table->string('facility_phone');
            $table->string('facility_county');                 
            $table->string('county');
            $table->string('town');            
            $table->string('post_address');
            $table->string('post_code');
            $table->string('med_info');
            $table->string('blood_group');
            $table->string('med_condition');
            $table->string('no_dependants');          
            $table->string('emergency_med_fam_price'); 
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
        Schema::dropIfExists('medical_families');
    }
}
