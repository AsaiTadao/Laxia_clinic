<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecentSearchTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recent_search', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('search_id')->index('follows_patient_id_foreign');
            $table->unsignedBigInteger('patient_id')->default(0)->index('follows_follow_id_foreign');
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
        Schema::dropIfExists('recent_search');
    }
}
