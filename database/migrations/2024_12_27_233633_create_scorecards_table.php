<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScorecardsTable extends Migration
{
    public function up()
    {
        Schema::create('scorecards', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tournament_id');
            $table->foreign('tournament_id')->references('id')->on('tournaments')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('player_scorecard', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('player_id');
            $table->unsignedBigInteger('tournament_id');
            $table->unsignedBigInteger('scorecard_id');
            $table->foreign('player_id')->references('id')->on('players')->onDelete('cascade');
            $table->foreign('tournament_id')->references('id')->on('tournaments')->onDelete('cascade');
            $table->foreign('scorecard_id')->references('id')->on('scorecards')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('player_scorecard');
        Schema::dropIfExists('scorecards');
    }
}


//use Illuminate\Database\Migrations\Migration;
//use Illuminate\Database\Schema\Blueprint;
//use Illuminate\Support\Facades\Schema;
//
//class CreateScorecardsTable extends Migration
//{
//    /**
//     * Run the migrations.
//     *
//     * @return void
//     */
//    public function up()
//    {
//        Schema::create('scorecards', function (Blueprint $table) {
//            $table->id();
//            $table->unsignedBigInteger('player_id');
//            $table->integer('card_number');
//            $table->integer('tournament_id');
//            $table->timestamps();
//
//            // Add a foreign key constraint
//            $table->foreign('player_id')->references('id')->on('players')->onDelete('cascade');
//        });
//    }
//
//    /**
//     * Reverse the migrations.
//     *
//     * @return void
//     */
//    public function down()
//    {
//        Schema::dropIfExists('scorecards');
//    }
//}
