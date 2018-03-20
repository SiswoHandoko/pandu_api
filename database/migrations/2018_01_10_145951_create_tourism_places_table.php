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
            $table->integer('city_id')->default(0);
            $table->string('category')->default('');
            $table->string('name')->default('');
            $table->text('description')->default('');
            $table->bigInteger('adult_price')->default(0);
            $table->bigInteger('child_price')->default(0);
            $table->bigInteger('infant_price')->default(0);
            $table->bigInteger('tourist_price')->default(0);
            $table->double('longitude')->default(0);
            $table->double('latitude')->default(0);
            $table->text('facilities')->default('');
            $table->integer('rate')->default(0);
            $table->string('status')->default('');
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
