<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicalInstitutionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medical_institutions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_id');
            $table->string('institution_name');
            $table->string('email');            
            $table->string('phone_one');
            $table->string('phone_two');
            $table->string('contact_person');
            $table->string('county');
            $table->string('town');
            $table->string('no_students');
            $table->string('post_address');
            $table->string('post_code');
            $table->string('medical_facility');
            $table->string('facility_phone');
            $table->string('special_condition');
            $table->string('emergency_med_inst_price');            
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
        Schema::dropIfExists('medical_institutions');
    }
}
