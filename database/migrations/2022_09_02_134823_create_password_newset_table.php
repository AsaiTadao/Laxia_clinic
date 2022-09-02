<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePasswordNewsetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('password_newset', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('type_id');
            $table->string('token')->nullable();
            $table->timestamps();
            $table->boolean('used')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('password_newset');
    }
}
