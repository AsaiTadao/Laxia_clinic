<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('clinic_id')->nullable();
            $table->string('kata_name', 191)->nullable()->comment("氏名（漢字）");
            $table->string('hira_name', 191)->nullable()->comment("氏名（カタカナ）");
            $table->string('gender', 191)->nullable()->comment("性別");
            $table->string('phone_number', 191)->nullable()->comment("電話番号");
            $table->date('birthday')->nullable()->comment("生年月日");
            $table->unsignedTinyInteger('area_id')->nullable()->comment("施術を考えているエリア");
            $table->timestamps();
            $table->unsignedTinyInteger('job_id')->nullable()->comment("役職");
            $table->tinyInteger('experience_year')->nullable()->comment("経歴");
            $table->unsignedBigInteger('spec0')->nullable()->comment("得意分野①");
            $table->unsignedBigInteger('spec1')->nullable()->comment("得意分野②");
            $table->unsignedBigInteger('spec2')->nullable()->comment("得意分野③");
            $table->text('profile')->nullable()->comment("経歴");
            $table->text('career')->nullable()->comment("資格・実績");
            $table->string('photo', 191)->nullable();
            
            $table->foreign('clinic_id', 'doctors_clinic_id_foreign')->references('id')->on('clinics');
            $table->foreign('area_id', 'doctors_ibfk_1')->references('id')->on('mtb_prefs')->onDelete('set NULL');
            $table->foreign('user_id', 'doctors_ibfk_2')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('job_id', 'doctors_ibfk_3')->references('id')->on('mtb_jobs')->onDelete('set NULL');
            $table->foreign('spec0', 'doctors_ibfk_4')->references('id')->on('mtb_specialities')->onDelete('set NULL');
            $table->foreign('spec1', 'doctors_ibfk_5')->references('id')->on('mtb_specialities')->onDelete('set NULL');
            $table->foreign('spec2', 'doctors_ibfk_6')->references('id')->on('mtb_specialities')->onDelete('set NULL');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doctors');
    }
}
