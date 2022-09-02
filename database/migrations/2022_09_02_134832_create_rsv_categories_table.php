<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRsvCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rsv_categories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('reservation_id')->nullable();
            $table->unsignedSmallInteger('caegory_id')->nullable();
            $table->timestamps();
            
            $table->foreign('caegory_id', 'rsv_categories_caegory_id_foreign')->references('id')->on('mtb_part_categories')->onDelete('cascade');
            $table->foreign('reservation_id', 'rsv_categories_reservation_id_foreign')->references('id')->on('reservations')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rsv_categories');
    }
}
