<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trainers', function (Blueprint $table) {
            $table->id();
            $table->string("fullname");
            $table->string("birthday");
            $table->string("email");
            $table->string("university");
            $table->string("study_level");
            $table->string("study_field");
            $table->string("motivation");
            $table->string("comptence");
            $table->string("type");
            $table->string("duration");
            $table->string("date");
            $table->boolean("activated");
            $table->rememberToken();
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
        Schema::dropIfExists('trainers');
    }
}
