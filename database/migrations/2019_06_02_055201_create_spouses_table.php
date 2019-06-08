<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpousesTable extends Migration
{
   //method for creating and defining table stracturs
    public function up()
    {
        Schema::create('spouses', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->bigIncrements('id'); 
            $table->bigInteger('member_id')->unsigned()->index();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('gender');
            $table->string('Phonenumber');
            $table->string('email');
            $table->foreign('member_id')->references('id')->on('members')->onDelete('cascade')->onUpdate('cascade');
            
        }); 
    }
   //method for dropping tables
    public function down()
    {
        Schema::dropIfExists('spouses');
    }
}    