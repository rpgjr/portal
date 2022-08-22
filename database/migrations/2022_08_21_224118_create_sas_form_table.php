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
        Schema::create('sas_form', function (Blueprint $table) {
            $table->increments('sasID');
            $table->unsignedInteger('userID');
            $table->foreign('userID')->references('userID')->on('tbl_alumni');
            $table->string('lastName');
            $table->string('firstName');
            $table->string('middleName');
            $table->string('gender');
            $table->string('age');
            $table->string('email');
            $table->string('stakeholder');
            $table->string('semesters');

            $table->integer('sas_q1');
            $table->integer('sas_q2');
            $table->integer('sas_q3');
            $table->integer('sas_q4');
            $table->integer('sas_q5');
            $table->integer('sas_q6');
            $table->integer('sas_q7');
            $table->integer('sas_q8');
            $table->integer('sas_q9');
            $table->integer('sas_q10');

            $table->integer('sas_q11');
            $table->integer('sas_q12');
            $table->integer('sas_q13');
            $table->integer('sas_q14');
            $table->integer('sas_q15');
            $table->integer('sas_q16');
            $table->integer('sas_q17');
            $table->integer('sas_q18');
            $table->integer('sas_q19');
            $table->integer('sas_q20');

            $table->integer('sas_q21');
            $table->integer('sas_q22');
            $table->integer('sas_q23');
            $table->integer('sas_q24');
            $table->integer('sas_q25');
            $table->integer('sas_q26');
            $table->integer('sas_q27');
            $table->integer('sas_q28');
            $table->integer('sas_q29');
            $table->integer('sas_q30');

            $table->integer('sas_q31');
            $table->integer('sas_q32');
            $table->integer('sas_q33');
            $table->integer('sas_q34');
            $table->integer('sas_q35');
            $table->integer('sas_q36');
            $table->integer('sas_q37');
            $table->integer('sas_q38');
            $table->integer('sas_q39');
            $table->integer('sas_q40');

            $table->integer('sas_q41');
            $table->integer('sas_q42');
            $table->integer('sas_q43');
            $table->integer('sas_q44');
            $table->integer('sas_q45');
            $table->integer('sas_q46');
            $table->integer('sas_q47');
            $table->integer('sas_q48');
            $table->integer('sas_q49');
            $table->integer('sas_q50');

            $table->integer('sas_q51');
            $table->integer('sas_q52');
            $table->integer('sas_q53');
            $table->integer('sas_q54');
            $table->integer('sas_q55');
            $table->integer('sas_q56');
            $table->integer('sas_q57');
            $table->integer('sas_q58');
            $table->integer('sas_q59');
            $table->integer('sas_q60');

            $table->integer('sas_q61');
            $table->integer('sas_q62');
            $table->integer('sas_q63');
            $table->integer('sas_q64');
            $table->integer('sas_q65');
            $table->integer('sas_q66');
            $table->integer('sas_q67');
            $table->integer('sas_q68');
            $table->integer('sas_q69');
            $table->integer('sas_q70');

            $table->integer('sas_q71');
            $table->integer('sas_q72');
            $table->integer('sas_q73');
            $table->integer('sas_q74');

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
        Schema::dropIfExists('sas_form');
    }
};
