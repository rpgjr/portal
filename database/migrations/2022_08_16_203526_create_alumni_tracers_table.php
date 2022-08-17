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
        Schema::create('alumni_tracers', function (Blueprint $table) {
            $table->integer('studNumber')->unsigned();
            $table->foreign('studNumber')->references('studNumber')->on('user_accounts');
            $table->integer('questionID')->unsigned();
            $table->foreign('questionID')->references('questionID')->on('tracers');
            $table->string('answer');
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
        Schema::dropIfExists('alumni_tracers');
    }
};
