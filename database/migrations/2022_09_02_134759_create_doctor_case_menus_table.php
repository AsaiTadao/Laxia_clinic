<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorCaseMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctor_case_menus', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('case_id')->nullable();
            $table->unsignedBigInteger('menu_id')->nullable();
            $table->string('name', 191)->nullable();
            $table->unsignedBigInteger('cost')->nullable();
            $table->timestamps();
            
            $table->foreign('case_id', 'doctor_case_images_imb_1')->references('id')->on('doctor_cases')->onDelete('set NULL');
            $table->foreign('menu_id', 'doctor_case_menus_menu_id_foreign')->references('id')->on('menus');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doctor_case_menus');
    }
}
