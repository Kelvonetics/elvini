<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForecastingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    
    public function up()
    {
        Schema::create('forecastings', function (Blueprint $table) {
            $table->increments('id');
            $table->date('startdate');
            $table->date('enddate');
            $table->decimal('ago')->nullable();
            $table->decimal('dpk')->nullable();
            $table->decimal('pms')->nullable();
            $table->text('constraint')->nullable();
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
        Schema::dropIfExists('forecastings');
    }
}
