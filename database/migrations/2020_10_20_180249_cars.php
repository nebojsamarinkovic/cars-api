<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Cars extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table){
            $table->id();
            $table->string('brand');
            $table->string('model');
            $table->unsignedInteger('year');
            $table->unsignedInteger('maxSpeed');
            $table->boolean('isAutomatic');
            $table->string('engine');
            $table->unsignedInteger('numberOfDoors');
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
}
