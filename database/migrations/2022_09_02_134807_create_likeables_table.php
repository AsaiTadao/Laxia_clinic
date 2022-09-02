<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLikeablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('likeables', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient_id');
            $table->string('likeable_type', 191);
            $table->unsignedBigInteger('likeable_id');
            $table->timestamps();
            
            $table->index(['likeable_type', 'likeable_id'], 'likeables_likeable_type_likeable_id_index');
            $table->foreign('patient_id', 'likeables_patient_id_foreign')->references('id')->on('patients')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('likeables');
    }
}
