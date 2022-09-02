<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMailboxUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mailbox_users', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('mailbox_id');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('last_message_id')->nullable();
            $table->timestamps();
            
            $table->foreign('last_message_id', 'mailbox_users_last_message_id_foreign')->references('id')->on('messages')->onDelete('set NULL');
            $table->foreign('mailbox_id', 'mailbox_users_mailbox_id_foreign')->references('id')->on('mailboxes')->onDelete('cascade');
            $table->foreign('user_id', 'mailbox_users_user_id_foreign')->references('id')->on('users')->onDelete('set NULL');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mailbox_users');
    }
}
