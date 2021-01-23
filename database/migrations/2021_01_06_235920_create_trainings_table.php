<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trainings', function (Blueprint $table) {
            $table->id();
            $table->string("fullname");
            $table->string("birthdate");
            $table->string("email");
            $table->string("university");
            $table->string("field");
            $table->string("motivation");
            $table->string("study");
            $table->string("comptence");
            $table->string("training_type");
            $table->string("duration");
            $table->string("date");
            $table->integer("activated");
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
        Schema::dropIfExists('trainings');
    }
}
