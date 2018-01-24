<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGuidesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guides', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstname')->default('');
            $table->string('lastname')->default('');
            $table->string('contact')->default('');
            $table->text('address')->default('');
            $table->date('birthdate')->default('0000-00-00');
            $table->string('nik')->default('');
            $table->string('username')->unique()->default('');
            $table->string('password')->default('');
            $table->string('email')->unique()->default('');
            $table->text('web_token')->default('');
            $table->text('android_token')->default('');
            $table->text('ios_token')->default('');
            $table->string('status')->default('');
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
