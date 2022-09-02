<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttachmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attachments', function (Blueprint $table) {
            $table->id();
            $table->string('attachable_type', 191)->nullable();
            $table->unsignedBigInteger('attachable_id')->nullable();
            $table->string('path', 191)->comment("ファイルパース");
            $table->boolean('img_type')->default(0);
            $table->timestamps();
            
            $table->index(['attachable_type', 'attachable_id'], 'attachments_attachable_type_attachable_id_index');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attachments');
    }
}
