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
            $table->increments('tp_id');
            $table->integer('city_id');
            $table->string('tp_name');
            $table->text('tp_description');
            $table->bigInteger('tp_price');
            $table->string('tp_longitude');
            $table->string('tp_latitude');
            $table->text('tp_facilities');
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
