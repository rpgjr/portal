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
        Schema::create('user_accounts', function (Blueprint $table) {
            $table->increments('userID');
            $table->string('lastName');
            $table->string('firstName');
            $table->string('middleName');
            $table->string('courseID');
            $table->integer('batch');
            $table->string('gender');
            $table->date('bday');
            $table->string('studNumber');
            $table->string('email')->unique();
            $table->string('number');
            $table->string('address');
            $table->string('username');
            $table->string('password');
            $table->string('accessType');
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
        Schema::dropIfExists('user_accounts');
    }
};
