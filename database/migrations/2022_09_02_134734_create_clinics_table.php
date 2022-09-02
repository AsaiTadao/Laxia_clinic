<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClinicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clinics', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('name', 191)->nullable()->comment("クリニック名");
            $table->unsignedTinyInteger('pref_id')->nullable()->comment("都道府県");
            $table->unsignedSmallInteger('city_id')->nullable();
            $table->unsignedSmallInteger('town_id')->nullable();
            $table->string('addr02', 191)->nullable()->comment("住所02");
            $table->string('nearest_station', 191)->nullable()->comment("最寄駅");
            $table->string('site', 191)->nullable()->comment("公式サイト");
            $table->string('access', 191)->nullable()->comment("アクセス");
            $table->string('phone_number', 191)->nullable()->comment("電話番号");
            $table->string('credit_card', 191)->nullable()->comment("クレジットカード");
            $table->string('parking', 191)->nullable()->comment("駐車場");
            $table->string('photo', 191)->nullable()->comment("写真");
            $table->timestamps();
            
            $table->foreign('pref_id', 'clinics_pref_id_foreign')->references('id')->on('mtb_prefs')->onDelete('set NULL');
            $table->foreign('user_id', 'clinics_user_id_foreign')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clinics');
    }
}
