<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsultationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('use_id');
            $table->foreign('use_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('requestuse_id');
            $table->foreign('requestuse_id')->references('id')->on('user__requests')->onDelete('cascade');
            $table->longText('Consultationmessage');
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
        Schema::dropIfExists('consultations');
    }
}
