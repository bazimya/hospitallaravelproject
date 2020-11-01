<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user__requests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('phone')->unique();;
            $table->string('code');
            $table->string('Decision');
            $table->string('email')->nullable();
            $table->string('nid')->unique();
            $table->unsignedBigInteger('village_you_from');
            $table->foreign('village_you_from')->references('id')->on('villages')->onDelete('cascade');
          $table->longText('mass');
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
        Schema::dropIfExists('user__requests');
    }
}
