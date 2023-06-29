<?php

namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Patient>
 */
class PatientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => 1,
            'name' => fake()->name('es_ES'),
            'lastname' => fake()->lastName,
            'dni' => fake()->numerify('########'),
            'sex' => fake()->randomElement(['M', 'F']),
            'age' => fake()->numberBetween(18, 65),
        ];
    }
}
