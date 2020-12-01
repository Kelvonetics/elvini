<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWarCorporateServiceStaffMattersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('war_corporate_service_staff_matters', function (Blueprint $table) 
        {
            $table->increments('id');
            $table->string('week');
            $table->date('date');
            $table->string('staff_strength');
            $table->string('retired');
            $table->string('deceased');
            $table->string('commence_annual_leave');
            $table->string('resumed_annaul_leave');
            $table->string('new_disiplinary_case');
            $table->string('contractor_registered');
            $table->string('local_training');
            $table->string('overseas_training');
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
        Schema::dropIfExists('war_corporate_service_staff_matters');
    }
}
