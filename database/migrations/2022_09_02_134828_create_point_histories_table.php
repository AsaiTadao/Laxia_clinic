<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePointHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('point_histories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient_id');
            $table->integer('use_point')->default(0);
            $table->string('title', 191)->nullable();
            $table->timestamps();
            $table->string('type', 50)->nullable();
            $table->integer('type_id')->nullable();
            
            $table->foreign('patient_id', 'point_histories_patient_id_foreign')->references('id')->on('patients')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('point_histories');
    }
}
