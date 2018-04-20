<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->default('');
            $table->string('background')->default('');
            $table->integer('user_id')->default(0);
            $table->integer('guide_id')->default(0);
            $table->integer('total_adult')->default(0);
            $table->integer('total_child')->default(0);
            $table->integer('total_infant')->default(0);
            $table->integer('total_tourist')->default(0);
            $table->integer('days')->default(0);
            $table->date('start_date')->default('000-00-00');
            $table->date('end_date')->default('0000-00-00');
            $table->bigInteger('total_price')->default(0);
            $table->string('receipt')->default('');
            $table->string('type')->default('');
            $table->enum('status', ['active', 'booking', 'issued', 'ticketed', 'cancel', 'inactive'])->default('active');
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
        Schema::dropIfExists('plans');
    }
}
