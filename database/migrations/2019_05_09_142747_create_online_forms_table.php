<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOnlineFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('online_forms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('meeting')->nullable();
            $table->enum('nationality',['japanese','foreign'])->nullable();
            $table->string('first_name')->nullable();
            $table->string('furigana')->nullable();
            $table->enum('furigana2',['male','female'])->nullable();
            $table->string('street_address')->nullable();
            $table->string('address')->nullable();
            $table->string('building_name')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('mail_address')->nullable();
            $table->string('school_history')->nullable();
            $table->string('school_name')->nullable();
            $table->string('graduation')->nullable();
            $table->longText('message')->nullable();
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
        Schema::dropIfExists('online_forms');
    }
}
