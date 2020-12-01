<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateCountryDataAddRegion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('country', function (Blueprint $table) {
//            $table->increments('id');
            $table->string('region_id')->default(0);
//            $table->timestamps();
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
        Schema::table('country', function (Blueprint $table) {
//            $table->increments('id');
            $table->dropColumn('region_id');
//            $table->timestamps();
        });
    }
}
