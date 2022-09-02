<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCaseMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('case_menus', function (Blueprint $table) {
            $table->unsignedBigInteger('case_id');
            $table->unsignedBigInteger('menu_id');
            
            $table->foreign('case_id', 'FK_case_menus_cases')->references('id')->on('cases')->onDelete('cascade');
            $table->foreign('menu_id', 'FK_case_menus_menus')->references('id')->on('menus')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('case_menus');
    }
}
