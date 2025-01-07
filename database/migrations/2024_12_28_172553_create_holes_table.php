<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHolesTable extends Migration
{
    public function up()
    {
        Schema::create('holes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tournament_id');
            $table->foreign('tournament_id')->references('id')->on('tournaments')->onDelete('cascade');
            $table->integer('hole_number');
            $table->integer('par');
            $table->integer('distance');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('holes');
    }
}
