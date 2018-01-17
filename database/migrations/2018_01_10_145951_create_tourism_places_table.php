<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTourismPlacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tourism_places', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('city_id');
            $table->string('name');
            $table->text('description');
            $table->bigInteger('adult_price');
            $table->bigInteger('child_price');
            $table->bigInteger('infant_price');
            $table->bigInteger('tourist_price');
            $table->string('longitude');
            $table->string('latitude');
            $table->text('facilities');
            $table->string('status');
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
        Schema::dropIfExists('tourism_places');
    }
}
