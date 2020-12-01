<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Testmigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $tt=['did','name','gender','city','bg','amount'];
        //
        Schema::create('donor', function (Blueprint $table) use ($tt)
        {
            foreach($tt as $tt){
                $table->string($tt)->nullable();
            }

        });

              Schema::create('acceptor', function (Blueprint $table) use ($tt)
              {
                  foreach($tt as $tt){
                      $table->string($tt)->nullable();
                  }

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
    }
}
