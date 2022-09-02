<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCounselingReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('counseling_reports', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient_id')->nullable()->comment("患者ID");
            $table->unsignedBigInteger('clinic_id')->nullable()->comment("クリニックID");
            $table->unsignedBigInteger('doctor_id')->nullable()->comment("医師ID");
            $table->date('counseling_date')->nullable();
            $table->text('content')->nullable();
            $table->text('reason')->nullable();
            $table->text('before_counseling')->nullable();
            $table->text('after_ccounseling')->nullable();
            $table->integer('rate')->nullable();
            $table->timestamps();
            $table->text('title')->nullable();
            $table->integer('public')->default(0);
            
            $table->foreign('clinic_id', 'counseling_reports_clinic_id_foreign')->references('id')->on('clinics')->onDelete('set NULL');
            $table->foreign('patient_id', 'counseling_reports_patient_id_foreign')->references('id')->on('patients')->onDelete('set NULL');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('counseling_reports');
    }
}
