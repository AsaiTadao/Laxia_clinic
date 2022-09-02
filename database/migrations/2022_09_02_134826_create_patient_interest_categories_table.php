<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientInterestCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_interest_categories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient_id');
            $table->unsignedSmallInteger('interest_category_id');
            $table->timestamps();
            
            $table->foreign('interest_category_id', 'patient_interest_categories_interest_category_id_foreign')->references('id')->on('mtb_interest_categories')->onDelete('cascade');
            $table->foreign('patient_id', 'patient_interest_categories_patient_id_foreign')->references('id')->on('patients')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patient_interest_categories');
    }
}
