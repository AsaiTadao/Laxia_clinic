<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMtbCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mtb_cities', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->unsignedTinyInteger('pref_id');
            $table->string('name', 191);
            $table->timestamps();

            $table->foreign('pref_id', 'mtb_cities_pref_id_foreign')->references('id')->on('mtb_prefs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mtb_cities');
    }
}
