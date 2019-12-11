<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('course_period');
            $table->string('self_sponsered');
            $table->string('student_id');
            $table->string('full_name');
            $table->string('date_of_birth');
            $table->string('id_no');
            $table->string('gender_gender');

            $table->string('email');
            $table->string('phonenumber');
            $table->string('alternate_phonenumber');

            $table->string('citizenship');
            $table->string('gender');
            $table->string('future_career');

            $table->string('physical_address');
            $table->string('religion');
            $table->string('medical_condition');

            $table->string('campus');
            $table->string('intake');
            $table->string('level');
            $table->string('status');

            $table->timestamps();
        });
    }

  
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
