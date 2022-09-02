<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('question_categories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('question_id')->nullable();
            $table->unsignedSmallInteger('category_id')->nullable();
            $table->timestamps();
            
            $table->foreign('category_id', 'question_categories_category_id_foreign')->references('id')->on('mtb_part_categories')->onDelete('cascade');
            $table->foreign('question_id', 'question_categories_question_id_foreign')->references('id')->on('questions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('question_categories');
    }
}
