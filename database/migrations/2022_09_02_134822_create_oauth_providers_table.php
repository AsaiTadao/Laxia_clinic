<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOauthProvidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oauth_providers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('provider', 191);
            $table->string('provider_user_id', 191)->index('oauth_providers_provider_user_id_index');
            $table->string('access_token', 191)->nullable();
            $table->string('refresh_token', 191)->nullable();
            $table->timestamps();
            
            $table->foreign('user_id', 'oauth_providers_user_id_foreign')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('oauth_providers');
    }
}
