<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Post', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('recruiters_id')->unsigned();
            $table->foreign('recruiters_id')->references('id')->on('Recruiters');
            $table->string('title');
            $table->text('description');
            $table->text('content');
            $table->string('keywork');
            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('Category');
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
        Schema::dropIfExists('Post');
    }
}
