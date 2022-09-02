<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStuffsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stuffs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('clinic_id');
            $table->string('name', 191)->comment("氏名(漢字)");
            $table->string('kana', 191)->comment("シメイ(カタカナ)");
            $table->string('duty', 191)->nullable()->comment("役職");
            $table->unsignedTinyInteger('job_id')->nullable()->comment("職種");
            $table->string('experience_year', 191)->nullable()->comment("医師歴");
            $table->text('career')->nullable()->comment("資格");
            $table->text('profile')->nullable()->comment("経歴");
            $table->string('photo', 191)->nullable()->comment("写真");
            $table->timestamps();
            $table->double('ave_diaries_rate', 2, 1)->nullable()->comment("日記平均");
            
            $table->foreign('clinic_id', 'stuffs_clinic_id_foreign')->references('id')->on('clinics')->onDelete('cascade');
            $table->foreign('job_id', 'stuffs_job_id_foreign')->references('id')->on('mtb_jobs')->onDelete('set NULL');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stuffs');
    }
}
