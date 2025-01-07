<?php

// database/migrations/xxxx_xx_xx_xxxxxx_create_teams_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamsTable extends Migration
{
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('classification');
            $table->string('logo')->nullable();
            $table->string('regional');
            $table->unsignedBigInteger('user_id')->default(1); // Ensure this line exists

            $table->timestamps();

        });
    }

    public function down()
    {
        Schema::dropIfExists('teams');
    }
}
