<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiaryRateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diary_rate_questions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('question_id');
            $table->unsignedBigInteger('diary_id');
            $table->double('rate', 8, 2)->nullable();
            $table->timestamps();
            
            $table->foreign('diary_id', 'diary_rate_questions_diary_id_foreign')->references('id')->on('diaries')->onDelete('cascade');
            $table->foreign('question_id', 'diary_rate_questions_question_id_foreign')->references('id')->on('mtb_diary_rate_questions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('diary_rate_questions');
    }
}
