<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Diet extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diet', function (Blueprint $table) {
            $table->string('name');
            $table->string('email')->unique();
            $table->string('rating');
            $table->double('daily_calories');
            $table->double('length_of_time');
            $table->string('image');
            $table->string('instructions');
        });
    }

     /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
        Schema::dropIfExists('diet');
    }
}
