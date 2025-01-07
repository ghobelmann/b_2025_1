<?php

namespace Database\Seeders;

use App\Models\Player;
use App\Models\Scorecard;
use App\Models\Team;
use App\Models\Tournament;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
//        $table->string('name');
//        $table->string('classification');
//        $table->string('logo')->nullable();
//        $table->string('regional');
//        $table->unsignedBigInteger('user_id');
//        $table->unsignedBigInteger('user_id');
//        $table->string('name');
//        $table->date('date');
//        $table->time('start_time');
//        $table->string('tournament_type');
//        $table->unsignedBigInteger('team_id');
//        $table->string('first_name');
//        $table->string('last_name');
//        $table->string('status');
//        $table->year('grad_year');
//        $table->unsignedBigInteger('player_id');
//        $table->integer('card_number');
//        $table->integer('tournament_id');


        Team::factory()->create([
            'name' => 'Smith Center',
            'classification' => '2A',
            'logo' => '1.jpg',
            'regional' => '2',
            'user_id' => 1
        ]);


        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'team_id' => '1'
        ]);

        Player::factory()->create([
            'first_name' => 'Austin',
            'last_name' => 'Hobelmann',
            'status' => '1',
            'grad_year' => '2025'
        ]);


        Tournament::factory()->create([
            'name' => 'Redmen Invitational',
            'date' => '2024-12-29',
            'start_time' => '01:00:00',
            'tournament_type' => '1'
        ]);





        Scorecard::factory()->create([
            'player_id' => '1',
            'card_number' => '1',
            'tournament_id' => '1',
        ]);
    }
}
