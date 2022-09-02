<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('mailbox_id');
            $table->unsignedBigInteger('user_id');
            $table->text('message')->comment("メッセージ");
            $table->boolean('is_file')->default(0)->comment("メッセージタイプ");
            $table->timestamps();
            
            $table->foreign('mailbox_id', 'messages_mailbox_id_foreign')->references('id')->on('mailboxes')->onDelete('cascade');
            $table->foreign('user_id', 'messages_user_id_foreign')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('messages');
    }
}
