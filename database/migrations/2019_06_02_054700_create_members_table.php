<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    //function for creating and defining table stracture
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->bigIncrements('id');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('email');
            $table->string('phonenumber');
            $table->string('gender');
            $table->string('id_no');
            $table->timestamps();
        });
    }
    //function for droping tables
    public function down()
    {
        Schema::dropIfExists('members');
    }
}

