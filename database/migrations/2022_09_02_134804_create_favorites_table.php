<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFavoritesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('favorites', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient_id')->nullable();
            $table->string('favoriable_type', 191);
            $table->unsignedBigInteger('favoriable_id');
            $table->timestamps();
            
            $table->index(['favoriable_type', 'favoriable_id'], 'favorites_favoriable_type_favoriable_id_index');
            $table->foreign('patient_id', 'favorites_patient_id_foreign')->references('id')->on('patients')->onDelete('set NULL');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('favorites');
    }
}
