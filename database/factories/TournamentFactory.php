<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class TournamentFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     *  //        $table->unsignedBigInteger('user_id');
     * //        $table->string('name');
     * //        $table->date('date');
     * //        $table->time('start_time');
     * //        $table->string('tournament_type');
     */
    public function definition(): array
    {
        return [
            'user_id' => 1,
            'course_id' => 1,
            'name' => 'Redmen Invitational',
            'date' => '2024-12-31',
            'start_time' => '09:00:00',
            'tournament_type' => 1
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
