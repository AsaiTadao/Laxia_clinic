<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiaryMenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diary_menu', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('diary_id');
            $table->unsignedBigInteger('menu_id');
            $table->timestamps();
            $table->integer('cost')->nullable()->comment("施術費用");
            
            $table->foreign('diary_id', 'diary_menu_diary_id_foreign')->references('id')->on('diaries')->onDelete('cascade');
            $table->foreign('menu_id', 'diary_menu_menu_id_foreign')->references('id')->on('menus')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('diary_menu');
    }
}
