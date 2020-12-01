<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWarDownstreamTruckOutTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('war_downstream_truck_out', function (Blueprint $table) 
        {
            $table->increments('id');
            $table->string('week');
            $table->date('date');
            $table->string('pms');
            $table->string('hhk');
            $table->string('ago');
            $table->string('atk');
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
        Schema::dropIfExists('war_downstream_truck_out');
    }
}
