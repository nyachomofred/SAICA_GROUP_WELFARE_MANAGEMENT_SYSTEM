<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcademicinformationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('academicinformations', function (Blueprint $table) {
            $table->bigIncrements('id');
             $table->bigInteger('student_id')->unsigned()->index();
           
            $table->string('school_name');
            $table->string('type_of_school');
            $table->string('school_address');
            $table->string('location');
            $table->string('year_of_completion');
            $table->string('enrolled_in_school');
            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('academicinformations');
    }
}
