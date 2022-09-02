<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiaryTextQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diary_text_questions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('question_id');
            $table->unsignedBigInteger('diary_id');
            $table->text('answer')->nullable();
            $table->timestamps();
            
            $table->foreign('diary_id', 'diary_text_questions_diary_id_foreign')->references('id')->on('diaries')->onDelete('cascade');
            $table->foreign('question_id', 'diary_text_questions_question_id_foreign')->references('id')->on('mtb_diary_text_questions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('diary_text_questions');
    }
}
