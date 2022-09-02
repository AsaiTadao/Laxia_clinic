<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMediasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medias', function (Blueprint $table) {
            $table->id();
            $table->string('mediable_type', 191)->nullable();
            $table->unsignedBigInteger('mediable_id')->nullable();
            $table->boolean('type')->default(1)->comment("画像か動画か");
            $table->string('category', 191)->nullable();
            $table->string('path', 191)->nullable();
            $table->string('thumb_path', 191)->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->timestamps();
            
            $table->index(['mediable_type', 'mediable_id'], 'medias_mediable_type_mediable_id_index');
            $table->foreign('user_id', 'medias_user_id_foreign')->references('id')->on('users')->onDelete('set NULL');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medias');
    }
}
