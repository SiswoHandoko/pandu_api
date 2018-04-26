<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddTotalAdultChildInfantTouristPlanDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('plan_details', function (Blueprint $table) {
            $table->integer('total_adult')->default(0);
            $table->integer('total_child')->default(0);
            $table->integer('total_infant')->default(0);
            $table->integer('total_tourist')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('plan_details', function($table) {
            $table->dropColumn('total_adult');
            $table->dropColumn('total_child');
            $table->dropColumn('total_infant');
            $table->dropColumn('total_tourist');
        });
    }
}
