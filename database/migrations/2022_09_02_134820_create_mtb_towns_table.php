<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMtbTownsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mtb_towns', function (Blueprint $table) {
            $table->mediumIncrements('id');
            $table->unsignedSmallInteger('city_id');
            $table->string('name', 191);
            $table->timestamps();
            
            $table->foreign('city_id', 'mtb_towns_city_id_foreign')->references('id')->on('mtb_cities')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mtb_towns');
    }
}
