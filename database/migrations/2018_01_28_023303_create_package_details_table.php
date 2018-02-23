<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePackageDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('package_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('package_id')->default(0);
            $table->integer('tourism_place_id')->default(0);
            $table->time('start_time')->default('00:00:00');
            $table->time('end_time')->default('00:00:00');
            $table->integer('day')->default(0);
            // $table->bigInteger('total_price')->default(0);
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
        Schema::dropIfExists('package_details');
    }
}
