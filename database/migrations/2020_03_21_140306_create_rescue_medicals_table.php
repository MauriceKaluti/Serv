<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRescueMedicalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rescue_medicals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_id');            
            $table->string('first_name');
            $table->string('last_name');
            $table->string('company_name');
            $table->string('email');
            $table->string('phone');
            $table->string('address');
            $table->string('postal_code');
            $table->string('city');
            $table->string('town');
            $table->string('vehicle_model');
            $table->string('vehicle_reg');
            $table->string('vehicle_photo');
            $table->string('passport_photo');
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
        Schema::dropIfExists('rescue_medicals');
    }
}
