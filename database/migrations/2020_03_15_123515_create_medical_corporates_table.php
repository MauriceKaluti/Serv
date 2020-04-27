<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicalCorporatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medical_corporates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_id');
            $table->string('company_name');
            $table->string('contactp_name');
            $table->string('email');
            $table->string('phone_one');
            $table->string('phone_two');
            $table->string('industry');
            $table->string('town');
            $table->string('street');
            $table->string('post_address');
            $table->string('post_code');
            $table->string('building_no');
            $table->string('no_employees');
            $table->string('emergency_med_corp_price');        
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
        Schema::dropIfExists('medical_corporates');
    }
}
