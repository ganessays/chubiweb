<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->nullable();
            $table->integer('cat_id')->nullable();
            $table->string('title')->nullable();
            $table->string('event_image')->nullable();
            $table->text('event_details')->nullable();
            $table->enum('status',['publish','draft'])->nullable();
            $table->string('start_date')->nullable();
            $table->string('end_date')->nullable();
            $table->string('post_date')->nullable();
            $table->string('expiry_date')->nullable();
            $table->string('slug')->nullable();
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
        Schema::dropIfExists('events');
    }
}
