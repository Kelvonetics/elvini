<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWarDownstreamRefineryPerformanceUtilizationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('war_downstream_refinery_performance_utilization', function (Blueprint $table) 
        {
            $table->increments('id');
            $table->string('refinery_id');
            $table->string('week');
            $table->date('date');
            $table->string('install_capacity');
            $table->string('opening_stock');
            $table->string('crude_receipt');
            $table->string('crude_processed');
            $table->string('closing_stock');
            $table->string('capacity_utilization');
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
        Schema::dropIfExists('war_downstream_refinery_performance_utilization');
    }
}
