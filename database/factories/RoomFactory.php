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
            'roomNumber' => fake()->randomFloat(2, 1, 99),
            'name' => fake()->sentence(3),
            'price' => fake()->randomFloat(4, 100, 3000),
            'picture' => fake()->imageUrl(),


        ];
    }
}
