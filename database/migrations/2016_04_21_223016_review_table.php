<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ReviewTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('reviews', function (Blueprint $table) {
      $table->increments('id');
      $table->integer('user_id');
      $table->integer('event_id');
      $table->boolean('participation');
      $table->integer('overall');
      $table->integer('packet_pickup');
      $table->integer('crowd_support');
      $table->string('title');
      $table->string('review');
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
      Schema::drop('reviews');
    }
}
