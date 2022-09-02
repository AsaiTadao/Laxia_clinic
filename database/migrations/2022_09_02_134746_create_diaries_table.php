<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diaries', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient_id')->comment("患者ID");
            $table->unsignedBigInteger('clinic_id')->comment("クリニックID");
            $table->date('treat_date')->nullable()->comment("施術を受けた日");
            $table->unsignedBigInteger('doctor_id')->index('diaries_doctor_id_foreign')->comment("担当ドクターID");
            $table->integer('price')->nullable()->comment("施術費用");
            $table->timestamps();
            $table->tinyInteger('rate_01')->nullable();
            $table->tinyInteger('rate_02')->nullable();
            $table->tinyInteger('rate_03')->nullable();
            $table->tinyInteger('rate_04')->nullable();
            $table->tinyInteger('rate_05')->nullable();
            $table->tinyInteger('rate_06')->nullable();
            $table->tinyInteger('rate_07')->nullable();
            $table->tinyInteger('rate_08')->nullable();
            $table->tinyInteger('rate_09')->nullable();
            $table->double('ave_rate', 2, 1)->nullable();
            $table->integer('cost_anesthetic')->nullable()->comment("麻酔費用");
            $table->integer('cost_drug')->nullable()->comment("処方薬の費用");
            $table->unsignedInteger('cost_other')->nullable()->comment("その他の費用");
            $table->boolean('public')->default(0);
            
            $table->foreign('clinic_id', 'diaries_clinic_id_foreign')->references('id')->on('clinics')->onDelete('cascade');
            $table->foreign('patient_id', 'diaries_patient_id_foreign')->references('id')->on('patients')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('diaries');
    }
}
