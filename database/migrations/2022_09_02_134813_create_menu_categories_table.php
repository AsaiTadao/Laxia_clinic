<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenuCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu_categories', function (Blueprint $table) {
            $table->unsignedBigInteger('menu_id');
            $table->unsignedSmallInteger('category_id');
            
            $table->foreign('menu_id', 'FK_menu_categories_menus')->references('id')->on('menus')->onDelete('cascade');
            $table->foreign('category_id', 'FK_menu_categories_mtb_part_categories')->references('id')->on('mtb_part_categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menu_categories');
    }
}
