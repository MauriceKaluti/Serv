<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKikwetusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kikwetus', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_id');
            $table->string('principal_name');
            $table->string('email');
            $table->string('phone');      
            $table->string('phone_alt');      
            $table->string('street_name');
            $table->string('town');
            $table->string('house_no');
            $table->string('blood_grp');
            $table->string('no_dependants');
            $table->string('kikwetu_price');
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
        Schema::dropIfExists('kikwetus');
    }
}
