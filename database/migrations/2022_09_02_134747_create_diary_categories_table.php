<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiaryCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diary_categories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('diary_id');
            $table->unsignedSmallInteger('category_id');
            $table->timestamps();
            
            $table->foreign('category_id', 'diary_categories_category_id_foreign')->references('id')->on('mtb_part_categories')->onDelete('cascade');
            $table->foreign('diary_id', 'diary_categories_diary_id_foreign')->references('id')->on('diaries')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('diary_categories');
    }
}
