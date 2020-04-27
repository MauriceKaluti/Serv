<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicalIndividualsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medical_individuals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_id');
            $table->string('ind_name');
            $table->string('phone_one');            
            $table->string('phone_two');            
            $table->string('email');            
            $table->string('facility_phone');
            $table->string('town');
            $table->string('post_address');
            $table->string('post_code');
            $table->string('refer_facility');
            $table->string('special_condition');
            $table->string('duration');
            $table->string('emergency_med_ind_price');          
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
        Schema::dropIfExists('medical_individuals');
    }
}
