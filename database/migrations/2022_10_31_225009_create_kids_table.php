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
        Schema::create('kids', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->integer('points')->default(0);
            $table->string('gender');
            $table->integer('age');
            $table->string('image_url')->nullable();
            $table->integer('level_id')->unsigned()->default(1);
            $table->foreign('level_id')
                ->references('id')->on('levels')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->string('password');
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
        Schema::dropIfExists('kids');
    }
};
