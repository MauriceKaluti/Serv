<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDharurasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dharuras', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_id');
            $table->string('dharura_package');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('company');
            $table->string('package_price');
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
        Schema::dropIfExists('dharuras');
    }
}
