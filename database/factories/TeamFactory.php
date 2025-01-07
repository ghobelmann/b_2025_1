<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class TeamFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     *     $table->string('name');
     * //        $table->string('classification');
     * //        $table->string('logo')->nullable();
     * //        $table->string('regional');
     * //        $table->unsignedBigInteger('user_id');
     */
    public function definition(): array
    {
        return [
            'name' => 'Smith Center',
            'classification' => '2A',
            'logo' => '1.jpg',
            'regional' => '2',
            'user_id' => 1,
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
