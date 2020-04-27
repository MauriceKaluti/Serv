<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAirQuotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('air_quotes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_id');            
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('origin_location');
            $table->string('facility_dest');
            $table->string('nature_patient');
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
        Schema::dropIfExists('air_quotes');
    }
}
