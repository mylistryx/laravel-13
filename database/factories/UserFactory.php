<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends Factory<User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $baseName = fake()->name();
        $tailing = mb_substr($baseName, -3);
        if ($tailing === 'вна' || $tailing === 'вич') {
            [$lastName, $firstName, $patronymic] = explode(' ', $baseName);
        } else {
            [$firstName, $patronymic, $lastName] = explode(' ', $baseName);
        }

        return [
            'name'              => implode(' ', [$lastName, $firstName, $patronymic]),
            'email'             => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password'          => static::$password ??= Hash::make('password'),
            'remember_token'    => Str::random(100),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn(array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
