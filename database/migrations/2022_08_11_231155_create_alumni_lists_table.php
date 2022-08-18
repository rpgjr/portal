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
            $table->string('lastname');
            $table->string('firstname');
            $table->string('middlename');
            $table->string('studNumber');
            $table->string('course');
            $table->integer('batch');
            $table->integer('byear');
            $table->integer('bmonth');
            $table->integer('bday');
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
        Schema::dropIfExists('alumni_lists');
    }
};
