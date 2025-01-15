<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PilotFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
              'name' => $this->faker->name,
            'age' => $this->faker->numberBetween(25, 60),
            'fightname' => $this->faker->word,
            'flight_id' => Flight::inRandomOrder()->first()->id,
        ];
    }
}