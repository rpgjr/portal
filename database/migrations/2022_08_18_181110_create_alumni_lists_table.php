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
        Schema::create('alumni_lists', function (Blueprint $table) {
            $table->string('lastName');
            $table->string('firstName');
            $table->string('middleName');
            $table->string('studNumber');
            $table->string('courseID');
            $table->integer('batch');
            $table->string('gender');
            $table->integer('byear');
            $table->integer('bmonth');
            $table->integer('bday');
            $table->string('email')->unique();
            $table->string('number');
            $table->string('address');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alumni_lists');
    }
};
