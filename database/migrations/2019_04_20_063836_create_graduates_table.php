<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGraduatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('graduates', function (Blueprint $table) {
            $table->increments('id');
            $table->string('student')->nullable();
            $table->string('pass')->nullable();
            $table->string('courses')->nullable();
            $table->string('link')->nullable();
            $table->text('details')->nullable();
            $table->enum('status',['publish','draft'])->nullable();
            $table->enum('color',['red','blue'])->nullable();
            $table->string('image')->nullable();
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
        Schema::dropIfExists('graduates');
    }
}
