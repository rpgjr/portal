<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tracer_form', function (Blueprint $table) {
            $table->increments('tracerID');
            $table->unsignedInteger('userID');
            $table->foreign('userID')->references('userID')->on('tbl_alumni');
            $table->string('lastName');
            $table->string('firstName');
            $table->string('middleName');
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
        Schema::dropIfExists('tracer_form');
    }
};
