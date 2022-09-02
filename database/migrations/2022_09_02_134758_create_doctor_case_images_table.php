<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorCaseImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctor_case_images', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('case_id')->nullable();
            $table->enum('type', ['before', 'after'])->nullable();
            $table->string('photo', 191)->nullable();
            $table->timestamps();
            
            $table->foreign('case_id', 'doctor_cases_images_ibfk_1')->references('id')->on('doctor_cases')->onDelete('set NULL')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doctor_case_images');
    }
}
