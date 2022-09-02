<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name', 191)->nullable();
            $table->string('email', 191)->unique('users_email_unique');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password', 191)->nullable();
            $table->enum('role', ['admin', 'clinic', 'patient', 'doctor']);
            $table->rememberToken();
            $table->timestamps();
            $table->string('firebase_key', 191)->nullable();
            $table->string('confirmation_code', 191)->nullable();
            $table->boolean('is_active')->default(0);
            $table->string('provider', 191)->nullable();
            $table->string('provider_id', 191)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
