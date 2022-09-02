<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCounselingQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('counseling_questions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('counseling_report_id');
            $table->text('question')->nullable();
            $table->text('answer')->nullable();
            $table->timestamps();
            
            $table->foreign('counseling_report_id', 'counseling_questions_counseling_report_id_foreign')->references('id')->on('counseling_reports')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('counseling_questions');
    }
}
