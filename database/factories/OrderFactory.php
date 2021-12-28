<?php

namespace Database\Factories;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Order::class;    

    public function definition()
    {
        return [
            'total' => $this->faker->numberBetween(10000, 100000),
        ];
    }
}
