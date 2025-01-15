<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
             'name' => $this->faker->firstName,
            'lastname' => $this->faker->lastName,
            'email' => $this->faker->unique()->safeEmail,
            'age' => $this->faker->numberBetween(18, 70),
            'gender' => $this->faker->randomElement(['male', 'female']),
            'fightname' => $this->faker->word,
            'flight_id' => Flight::inRandomOrder()->first()->id,
        ];
    }
}