<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDwpProgressReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dwp_progress_reports', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('dwp_id');
            $table->integer('achievement_status_id');
            $table->date('submitted_date');
            $table->string('added_by');
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
        Schema::dropIfExists('dwp_progress_reports');
    }
}
