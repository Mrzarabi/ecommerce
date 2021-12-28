<?php

namespace Database\Factories;

use App\Models\Discount;
use Illuminate\Database\Eloquent\Factories\Factory;

class DiscountFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Discount::class;

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
