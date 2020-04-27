<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFanakaTestsTable extends Migration
{
    /**
     * Run the migrations.

    *
     * @return void
     */
    public function up()
    {
        Schema::create('fanaka_tests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_id');
            $table->string('user_name');
            $table->string('email');
            $table->string('phone');
            $table->string('sacco_name');
            $table->string('vehicle_driver');
            $table->string('vehicle_reg');
            $table->string('county');
            $table->string('town');
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
        Schema::dropIfExists('fanaka_tests');
    }
}
