<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Race extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('races', function (Blueprint $table) {
      $table->increments('id');
      $table->string('name');
      $table->integer('race_month');
      $table->string('type');
      $table->string('location');
      $table->integer('elevation_gain');
      $table->string('description');
      $table->integer('user_id');
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
