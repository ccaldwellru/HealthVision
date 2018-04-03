<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Routine extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('routine', function (Blueprint $table) {
            $table->string('name');
            $table->string('email')->unique();
            $table->string('workout_level');
            $table->double('calories_burned');
            $table->double('length_of_time');
            $table->string('image');
            $table->string('instructions');
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
        Schema::dropIfExists('routine');
    }
}
