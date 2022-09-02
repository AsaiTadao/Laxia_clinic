<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMtbInterestCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mtb_interest_categories', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->unsignedSmallInteger('parent_id')->nullable();
            $table->string('name', 191)->comment("カテゴリー名");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mtb_interest_categories');
    }
}
