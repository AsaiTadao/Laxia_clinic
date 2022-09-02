<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStuffSpecialitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stuff_specialities', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('stuff_id');
            $table->unsignedBigInteger('speciality_id');
            $table->timestamps();
            
            $table->foreign('speciality_id', 'stuff_specialities_speciality_id_foreign')->references('id')->on('mtb_specialities')->onDelete('cascade');
            $table->foreign('stuff_id', 'stuff_specialities_stuff_id_foreign')->references('id')->on('stuffs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stuff_specialities');
    }
}
