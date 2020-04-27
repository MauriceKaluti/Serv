<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_events', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('event_id');
            $table->string('user_id');            
            $table->string('event_entity');
            $table->string('event_title');
            $table->string('applicant_name');
            $table->string('applicant_email');
            $table->string('applicant_entity');
            $table->string('applicant_department');
            $table->string('applicant_position');
            $table->string('ticket_price');            
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
        Schema::dropIfExists('book_events');
    }
}
