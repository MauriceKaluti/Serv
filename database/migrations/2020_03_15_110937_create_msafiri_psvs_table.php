<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMsafiriPsvsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('msafiri_psvs', function (Blueprint $table) {
            $table->bigIncrements('id');
              $table->string('user_id');
            $table->string('sacco_name');
            $table->string('route_name');
            $table->string('fleet_no');
            $table->string('booking_office');
            $table->string('county');
            $table->string('town');
            $table->string('booking_person');
            $table->string('departure_time');
            $table->string('vehicle_reg');
            $table->string('vehicle_driver');
            $table->string('psv_price');
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
        Schema::dropIfExists('msafiri_psvs');
    }
}
