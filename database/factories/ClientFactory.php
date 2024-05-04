<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'full_name' => $this->faker->firstName() . ' ' . $this->faker->lastName(),
            'phone_number' => $this->faker->numerify('###########'),
            'accumulated_points' => random_int(0, 1000)
        ];
    }
}
