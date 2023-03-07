<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWeatherTable extends Migration
{
    public function up()
    {
        Schema::create('weathers', function (Blueprint $table) {
            $table->id();
            $table->float('temp');
            $table->float('feels_like');
            $table->float('temp_min');
            $table->float('temp_max');
            $table->integer('pressure');
            $table->integer('humidity');
            $table->unsignedBigInteger('cities_id');
            $table->timestamps();

            $table->foreign('cities_id')->references('cities_id')->on('cities');
        });
    }

    public function down()
    {
        Schema::dropIfExists('weathers');
    }
}
