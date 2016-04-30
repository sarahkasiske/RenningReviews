<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EventTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('events', function (Blueprint $table) {
      $table->increments('id');
      $table->string('race_name');
      $table->integer('month');
      $table->string('city');
      $table->string('state');
      $table->string('distance');
      $table->boolean('annual_occurence');
      $table->integer('terrain');
      $table->integer('other_terrain');
      $table->string('description');
      $table->string('link');
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
