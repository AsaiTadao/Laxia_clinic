<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cases', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('clinic_id');
            $table->unsignedBigInteger('doctor_id')->nullable()->comment("担当医師");
            $table->string('name', 200)->nullable();
            $table->tinyInteger('patient_age')->nullable()->comment("施術者の年齢");
            $table->string('patient_gender', 191)->nullable()->comment("施術者の性別");
            $table->text('case_description')->nullable()->comment("症例の解説");
            $table->text('treat_risk')->nullable()->comment("副作用・リスク");
            $table->text('doctor_opinion')->nullable()->comment("担当ドクターからのコメント");
            $table->timestamps();
            
            $table->foreign('clinic_id', 'cases_clinic_id_foreign')->references('id')->on('clinics')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cases');
    }
}
