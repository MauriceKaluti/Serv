<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicalEstatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medical_estates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_id');
            $table->string('est_name');
            $table->string('phone_one');            
            $table->string('phone_two');            
            $table->string('email');            
            $table->string('contact_person');
            $table->string('town');
            $table->string('post_address');
            $table->string('post_code');
            $table->string('no_households');
            $table->string('special_geographical');
            $table->string('emergency_med_estate_price');
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
        Schema::dropIfExists('medical_estates');
    }
}
