<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservation_categories', function (Blueprint $table) {
            $table->unsignedBigInteger('reservation_id');
            $table->unsignedSmallInteger('category_id');
            
            $table->foreign('category_id', 'reservation_categories_category_id_foreign')->references('id')->on('mtb_interest_categories')->onDelete('cascade');
            $table->foreign('reservation_id', 'reservation_categories_reservation_id_foreign')->references('id')->on('reservations')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservation_categories');
    }
}
