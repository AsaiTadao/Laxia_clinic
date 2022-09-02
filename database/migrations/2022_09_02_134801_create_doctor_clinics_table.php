<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorClinicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctor_clinics', function (Blueprint $table) {
            $table->unsignedBigInteger('doctor_id');
            $table->unsignedBigInteger('clinic_id');
            
            $table->foreign('clinic_id', 'doctor_clinics_clinic_id_foreign')->references('user_id')->on('clinics');
            $table->foreign('doctor_id', 'doctor_clinics_doctor_id_foreign')->references('user_id')->on('doctors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doctor_clinics');
    }
}
