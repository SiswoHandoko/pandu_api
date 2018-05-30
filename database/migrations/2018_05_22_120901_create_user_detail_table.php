<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->default('0');
            $table->string('calling_name')->default('');
            $table->string('birth_place')->default('');
            $table->enum('gender', ['l', 'p'])->default('l');
            $table->enum('marriage_status', ['married', 'not_married'])->default('not_married');
            $table->string('religion')->default('');
            $table->string('nationality')->default('');
            $table->string('child_of')->default('');
            $table->string('amount_siblings')->default('');
            $table->string('current_job')->default('');
            $table->string('sim_type')->default('');
            $table->string('ktp_number')->default('');
            $table->string('ktp_address')->default('');
            $table->string('another_contact')->default('');
            $table->string('another_address')->default('');
            $table->text('education_background')->default('');
            $table->text('languages')->default('');
            $table->enum('drive_motorcycle', ['1', '0'])->default('0');
            $table->enum('drive_car', ['1', '0'])->default('0');
            $table->enum('private_vehicle', ['car', 'motorcycle',''])->default('');
            $table->text('ktp_image')->default('');
            $table->text('sim_image')->default('');
            $table->text('kk_image')->default('');
            $table->text('pas_photo')->default('');
            $table->text('certificate')->default('');
            $table->text('cv')->default('');
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
        Schema::dropIfExists('user_detail');
    }
}
