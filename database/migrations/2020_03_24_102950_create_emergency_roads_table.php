<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmergencyRoadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emergency_roads', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_id')->nullable();            
            $table->string('owner_name');        
            $table->string('email');
            $table->string('phone');            
            $table->string('town');           
            $table->string('vehicle_model');
            $table->string('vehicle_type');
            $table->string('vehicle_reg');
            $table->string('insurance_yes')->nullable();
            $table->string('insurance_no')->nullable();
            $table->string('Saloon')->nullable();
            $table->string('SUV')->nullable();
            $table->string('Truck')->nullable();
            $table->string('Bus')->nullable();
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
        Schema::dropIfExists('emergency_roads');
    }
}
