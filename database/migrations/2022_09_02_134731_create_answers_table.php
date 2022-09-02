<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('doctor_id')->nullable()->index('comments_patient_id_foreign');
            $table->unsignedBigInteger('question_id')->nullable();
            $table->text('answer');
            $table->timestamps();
            
            $table->foreign('question_id', 'answers_ibfk_1')->references('id')->on('questions')->onDelete('set NULL');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('answers');
    }
}
