<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateViewablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('viewables', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient_id');
            $table->string('viewable_type', 191);
            $table->unsignedBigInteger('viewable_id');
            $table->timestamps();
            
            $table->index(['viewable_type', 'viewable_id'], 'viewables_viewable_type_viewable_id_index');
            $table->foreign('patient_id', 'viewables_patient_id_foreign')->references('id')->on('patients')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('viewables');
    }
}
