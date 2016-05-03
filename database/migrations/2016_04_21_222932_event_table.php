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
      $table->integer('user_id');
      $table->string('distance_id');
      $table->string('race_name');
      $table->string('picture');
      $table->string('month');
      $table->string('city');
      $table->string('state');
      $table->string('race_distance');
      $table->boolean('annual_occurence');
      $table->string('terrain');
      $table->string('description');
      $table->string('link');
      $table->string('slug')->unique();
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
      Schema::drop('events');
    }
}
