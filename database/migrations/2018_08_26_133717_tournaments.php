<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Tournaments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('tournaments', function (Blueprint $table) {
          $table->increments('id');
          $table->string('name')->unique();
          $table->string('slug')->unique();
          $table->date('start');
          $table->date('end');
          $table->timestamps();
      });

      Schema::create('events', function (Blueprint $table) {
          $table->increments('id');
          $table->string('name')->unique();
          $table->string('slug')->unique();
          $table->integer('nparticipant');
          $table->date('start');
          $table->integer('t_id')->unsigned();
          $table->foreign('t_id')->references('id')->on('tournaments');
          $table->timestamps();
      });

      Schema::create('participants', function (Blueprint $table) {
          $table->integer('event_id')->unsigned();
          $table->foreign('event_id')->references('id')->on('events');
          $table->integer('user_id')->unsigned();
          $table->foreign('user_id')->references('id')->on('users');
          $table->integer('puntos')->default(0);
          $table->string('order');
          $table->timestamps();
          $table->primary(['event_id', 'user_id']);
      });

      Schema::create('rounds', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('event_id')->unsigned();
          $table->foreign('event_id')->references('id')->on('events');
          $table->string('order');
          $table->string('round')->default(-1);
          $table->integer('user1_id')->unsigned();
          $table->foreign('user1_id')->references('user_id')->on('participants');
          $table->integer('user2_id')->unsigned();
          $table->foreign('user2_id')->references('user_id')->on('participants');
          $table->integer('puntos1');
          $table->integer('puntos2');
          $table->string('video')->nullable();
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
      Schema::disableForeignKeyConstraints();
      Schema::dropIfExists('tournaments');
      Schema::dropIfExists('events');
      Schema::dropIfExists('participants');
      Schema::dropIfExists('rounds');
      Schema::enableForeignKeyConstraints();
    }
}
