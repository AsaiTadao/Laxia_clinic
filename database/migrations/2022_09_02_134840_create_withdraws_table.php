<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWithdrawsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('withdraws', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('clinic_id')->nullable();
            $table->string('month', 191)->comment("年・月");
            $table->integer('price')->default(0)->comment("売上");
            $table->double('tax', 8, 2)->default(10.00)->comment("手数料");
            $table->integer('system_fee')->default(50000)->comment("システム利用料");
            $table->dateTime('paid_at')->nullable()->comment("支払日");
            $table->timestamps();
            $table->bigInteger('point')->default(0);
            
            $table->foreign('clinic_id', 'withdraws_clinic_id_foreign')->references('id')->on('clinics')->onDelete('set NULL');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('withdraws');
    }
}
