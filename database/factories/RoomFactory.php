<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class RoomFactory extends Factory
{

   
    public function definition(): array
    { 
        return [

            'name' => $this->faker->sentence(1),
            'price' => $this->faker->numberBetween(1, 1500),
            'number' => $this->faker->numberBetween(1, 10),

        ];
    }
}
