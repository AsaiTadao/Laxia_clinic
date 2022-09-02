<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTreatProgressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('treat_progresses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('diary_id')->nullable();
            $table->integer('from_treat_day')->nullable();
            $table->text('content')->nullable();
            $table->timestamps();
            
            $table->foreign('diary_id', 'treat_progresses_diary_id_foreign')->references('id')->on('diaries')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('treat_progresses');
    }
}
