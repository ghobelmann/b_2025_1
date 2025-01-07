<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class PlayerFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     *  //        $table->unsignedBigInteger('team_id');
     * //        $table->string('first_name');
     * //        $table->string('last_name');
     * //        $table->string('status');
     * //        $table->year('grad_year');
     */
    public function definition(): array
    {
        return [
            'team_id' => 1,
            'first_name' => 'Austin',
            'last_name' => 'Hobelmann',
            'status' => 1,
            'grad_year' => 2025
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
