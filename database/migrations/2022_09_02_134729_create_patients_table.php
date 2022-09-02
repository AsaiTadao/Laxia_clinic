<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('name', 191)->nullable()->comment("氏名（漢字）");
            $table->string('kana', 191)->nullable()->comment("氏名（カタカナ）");
            $table->string('gender', 191)->nullable()->comment("性別");
            $table->string('phone_number', 191)->nullable()->comment("電話番号");
            $table->date('birthday')->nullable()->comment("生年月日");
            $table->timestamps();
            $table->string('unique_id', 191)->nullable()->comment("ニックネーム");
            $table->string('nickname', 191)->nullable()->comment("ニックネーム");
            $table->text('intro')->nullable()->comment("自己紹介");
            $table->string('photo', 191)->nullable();
            $table->integer('point')->default(0);
            $table->unsignedTinyInteger('area_id')->nullable()->comment("施術を考えているエリア");
            
            $table->foreign('area_id', 'patients_area_id_foreign')->references('id')->on('mtb_prefs')->onDelete('set NULL');
            $table->foreign('user_id', 'patients_user_id_foreign')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patients');
    }
}
