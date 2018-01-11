<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('user_id');
            $table->string('user_firstaname');
            $table->string('user_midlename')->nullable();;
            $table->string('user_lastname');
            $table->string('user_contact');
            $table->text('user_address');
            $table->date('user_birthdate');
            $table->string('user_username');
            $table->string('user_password');
            $table->string('user_mail')->unique();
            $table->boolean('user_st_login');
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
        Schema::dropIfExists('users');
    }
}
