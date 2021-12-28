<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class OrderItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'quantity' => $this->faker->numberBetween(10000, 100000),
            'price' => $this->faker->numberBetween(10000, 100000),
            'offer' => $this->faker->numberBetween(10000, 100000),
        ];
    }
}
