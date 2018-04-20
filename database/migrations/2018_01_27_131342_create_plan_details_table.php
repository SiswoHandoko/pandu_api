<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlanDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plan_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('plan_id')->default(0);
            $table->integer('tourism_place_id')->default(0);
            $table->time('start_time')->default('00:00:00');
            $table->time('end_time')->default('00:00:00');
            $table->integer('day')->default(0);
            $table->bigInteger('adult_price')->default(0);
            $table->bigInteger('child_price')->default(0);
            $table->bigInteger('infant_price')->default(0);
            $table->bigInteger('tourist_price')->default(0);
            $table->string('no_ticket')->default('');
            $table->enum('status', ['active', 'inactive', 'deleted'])->default('active');
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
        Schema::dropIfExists('plan_details');
    }
}
