<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->date('visit_date')->nullable()->comment("来院日時");
            $table->time('start_time')->nullable()->comment("診察時間");
            $table->time('end_time')->nullable()->comment("診察時間");
            $table->unsignedBigInteger('clinic_id')->nullable();
            $table->unsignedBigInteger('patient_id')->nullable()->index('reservations_patient_info_id_foreign');
            $table->unsignedBigInteger('doctor_id')->nullable()->index('reservations_stuff_id_foreign');
            $table->smallInteger('type')->default(5)->comment("予約方法");
            $table->smallInteger('status')->nullable()->comment("ステータス");
            $table->smallInteger('hope_treat')->nullable()->comment("当日は施術を希望されますか？");
            $table->text('note')->nullable()->comment("希望・相談");
            $table->integer('use_point')->default(0)->comment("使用ポイント");
            $table->timestamps();
            
            $table->foreign('clinic_id', 'reservations_clinic_id_foreign')->references('id')->on('clinics')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservations');
    }
}
