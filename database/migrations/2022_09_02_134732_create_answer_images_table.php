<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnswerImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answer_images', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('answer_id')->nullable();
            $table->string('photo', 191);
            $table->timestamps();
            
            $table->foreign('answer_id', 'answer_images_ibfk_1')->references('id')->on('answers')->onDelete('set NULL');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('answer_images');
    }
}
