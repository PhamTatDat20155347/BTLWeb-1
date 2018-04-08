<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCvTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Cv', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('users_id')->unsigned();
            $table->foreign('users_id')->references('id')->on('Users');
            $table->string('fullname');
            $table->string('gender');
            $table->string('email');
            $table->string('phone');
            $table->date('birthday');
            $table->string('job_position');
            $table->text('information');
            $table->text('education');
            $table->text('skill');
            $table->text('experience');
            $table->text('project');
            $table->boolean('status');
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
        Schema::dropIfExists('Cv');
    }
}
