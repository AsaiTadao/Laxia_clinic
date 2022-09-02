<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorCaseCategoryRelationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctor_case_category_relation', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('case_id')->nullable();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->timestamps();
            
            $table->foreign('case_id', 'doctor_case')->references('id')->on('doctor_cases')->onDelete('set NULL');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doctor_case_category_relation');
    }
}
