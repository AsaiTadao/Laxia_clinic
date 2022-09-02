<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTreatStatusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('treat_status', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('progress_id')->nullable();
            $table->unsignedTinyInteger('indicator_id')->nullable();
            $table->tinyInteger('value')->nullable();
            $table->timestamps();
            
            $table->foreign('indicator_id', 'treat_status_indicator_id_foreign')->references('id')->on('mtb_treat_indicators')->onDelete('set NULL');
            $table->foreign('progress_id', 'treat_status_progress_id_foreign')->references('id')->on('treat_progresses')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('treat_status');
    }
}
