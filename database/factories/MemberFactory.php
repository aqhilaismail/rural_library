<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Member>
 */
class MemberFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'icNum' => fake()->randomElement(['0','9']).fake()->randomNumber(9,true).fake()->randomNumber(2, true),
            'address' => fake()->address(),
            'phone' =>fake()->phoneNumber(),
            'email'=> fake()->email(),
        ];
    }
}
