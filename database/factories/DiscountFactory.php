<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DiscountFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'body' => $this->faker->text,
            'discount_start' => $this->faker->dateTime(),
            'discount_end' => $this->faker->dateTime(),
            'discount_quantity' => $this->faker->dateTime(),
            'discount_value' => $this->faker->dateTime(),
        ];
    }
}
