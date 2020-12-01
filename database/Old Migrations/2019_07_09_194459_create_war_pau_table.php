<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWarPauTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('war_pau', function (Blueprint $table) 
        {
            $table->increments('id');
            $table->string('week');
            $table->date('date');
            $table->string('meeting_conference_attended');
            $table->string('consular_liason_visa_support');
            $table->Integer('created_by');
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
        Schema::dropIfExists('war_pau');
    }
}
