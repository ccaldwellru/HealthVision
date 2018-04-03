<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BmiMeasurement extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bmi_measurement', function (Blueprint $table) {
           $table->string('email')->unique();
           $table->double('previous');
           $table->double('current');
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
        Schema::dropIfExists('bmi_measurement');
    }
}
