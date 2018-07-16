<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModifiedCategoryTourismplaceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tourism_places', function (Blueprint $table) {
            $table->renameColumn('category', 'category_id');
            $table->integer('category_id')->default(0)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tourism_places', function (Blueprint $table) {
            $table->renameColumn('category_id', 'category');
            $table->string('category')->default('')->change();
        });
    }
}
