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
        Schema::create('test', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('kid_id')->unsigned();
            $table->integer('quiz_id')->unsigned();
            $table->integer('score');
            $table->foreign('kid_id')
            ->references('id')
            ->on('kids')->onDelete("cascade")->onUpdate("cascade");

            $table->foreign('quiz_id')
            ->references('id')
            ->on('quizzes')->onDelete("cascade")->onUpdate("cascade");
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
        //
    }
};
