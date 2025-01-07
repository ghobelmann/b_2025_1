<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('slope');
            $table->decimal('red_tee_rating', 4, 1);
            $table->decimal('white_tee_rating', 4, 1);
            $table->decimal('blue_tee_rating', 4, 1);
            $table->integer('red_tee_yardage');
            $table->integer('white_tee_yardage');
            $table->integer('blue_tee_yardage');
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
        Schema::dropIfExists('courses');
    }
}
