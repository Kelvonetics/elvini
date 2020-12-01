<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateUpReserveGasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('up_reserves_gas', function (Blueprint $table) {
            $table->integer('pending_id')->nullable();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('up_reserves_gas', function (Blueprint $table) {
            $table->dropColumn('pending_id');
        });
    }
}
