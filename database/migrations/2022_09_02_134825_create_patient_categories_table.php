<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_categories', function (Blueprint $table) {
            $table->unsignedBigInteger('patient_id');
            $table->unsignedSmallInteger('category_id');
            
            $table->foreign('category_id', 'patient_categories_category_id_foreign')->references('id')->on('mtb_part_categories')->onDelete('cascade');
            $table->foreign('patient_id', 'patient_categories_patient_id_foreign')->references('id')->on('patients')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patient_categories');
    }
}
