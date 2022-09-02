<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient_id')->nullable();
            $table->string('commentable_type', 191);
            $table->unsignedBigInteger('commentable_id');
            $table->unsignedBigInteger('parent_id')->nullable();
            $table->text('comment');
            $table->timestamps();
            
            $table->index(['commentable_type', 'commentable_id'], 'comments_commentable_type_commentable_id_index');
            $table->foreign('patient_id', 'comments_patient_id_foreign')->references('id')->on('patients')->onDelete('set NULL');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
