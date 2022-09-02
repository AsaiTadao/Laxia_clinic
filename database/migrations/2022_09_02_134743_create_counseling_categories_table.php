<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCounselingCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('counseling_categories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('counseling_id');
            $table->unsignedSmallInteger('category_id')->nullable();
            $table->timestamps();
            
            $table->foreign('category_id', 'counseling_categories_category_id_foreign')->references('id')->on('mtb_part_categories')->onDelete('cascade');
            $table->foreign('counseling_id', 'counseling_categories_counseling_id_foreign')->references('id')->on('counseling_reports')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('counseling_categories');
    }
}
