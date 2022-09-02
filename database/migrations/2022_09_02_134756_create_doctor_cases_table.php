<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorCasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctor_cases', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('doctor_id');
            $table->string('title', 191)->nullable()->index('cases_menu_id_foreign');
            $table->unsignedTinyInteger('age')->nullable()->index('cases_stuff_id_foreign');
            $table->string('gender', 11)->default('')->index('cases_speciality_id_foreign');
            $table->text('operation')->nullable();
            $table->text('operationRisk')->nullable();
            $table->text('majordoctorComment')->nullable();
            $table->timestamps();
            
            $table->foreign('doctor_id', 'doctor_cases_ibfk_1')->references('user_id')->on('doctors')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doctor_cases');
    }
}
