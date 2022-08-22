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
            $table->string('courseID');
            $table->string('number');
            $table->string('email');
            $table->date('ff_firstEmployment');
            $table->date('cc_currentEmployment');
            $table->string('cc_company');
            $table->string('cc_typeOfWork');
            $table->string('cc_position');
            $table->string('cc_status');
            $table->string('cc_income');
            $table->string('relatedToCourse');
            $table->string('cc_email');
            $table->string('cc_number');
            $table->string('ff_company');
            $table->string('ff_position');
            $table->string('ff_email');
            $table->string('ff_number');
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
