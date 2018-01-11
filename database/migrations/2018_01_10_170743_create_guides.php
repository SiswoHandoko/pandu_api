<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGuides extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guides', function (Blueprint $table) {
            $table->increments('guide_id');
            $table->string('guide_firstaname');
            $table->string('guide_midlename')->nullable();;
            $table->string('guide_lastname');
            $table->string('guide_contact');
            $table->text('guide_address');
            $table->date('guide_birthdate');
            $table->string('guide_nik');
            $table->bigInteger('guide_price');
            $table->string('guide_username');
            $table->string('guide_password');
            $table->string('guide_email')->unique();
            $table->boolean('guide_st_login');
            $table->rememberToken();
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
        Schema::dropIfExists('guides');
    }
}
