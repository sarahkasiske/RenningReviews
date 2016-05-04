<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ReviewsTable extends Migration
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
