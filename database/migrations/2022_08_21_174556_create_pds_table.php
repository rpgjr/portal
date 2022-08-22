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
        Schema::create('pds', function (Blueprint $table) {
            $table->increments('pdsID');
            $table->unsignedInteger('userID');
            $table->foreign('userID')->references('userID')->on('tbl_alumni');
            $table->string('lastName');
            $table->string('firstName');
            $table->string('middleName');
            $table->string('gender');
            $table->string('age');
            $table->date('bday');
            $table->string('number');
            $table->string('email');
            $table->string('religion');
            $table->string('courseID');
            $table->string('batch');
            $table->string('cityAddress');
            $table->string('provincialAddress')->nullable();
            $table->string('fathersName');
            $table->string('fathersNumber');
            $table->string('mothersName');
            $table->string('mothersNumber');
            $table->string('office');
            $table->string('position');
            $table->string('officeDates');
            $table->string('seminar1')->nullable();
            $table->string('seminar1Date')->nullable();
            $table->string('seminar2')->nullable();
            $table->string('seminar2Date')->nullable();
            $table->string('seminar3')->nullable();
            $table->string('seminar3Date')->nullable();
            $table->date('submissionDate');
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
        Schema::dropIfExists('pds');
    }
};
