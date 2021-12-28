<?php

namespace Database\Factories;

use App\Models\Variation;
use Illuminate\Database\Eloquent\Factories\Factory;

class VariationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Variation::class;

    public function definition()
    {
        return [
            'number' => $this->faker->numberBetween(10, 100),
            'unit' => $this->faker->numberBetween(10, 100),
            'off' => $this->faker->numberBetween(10000, 100000),
            'off_start' => $this->faker->time(),
            'off_end' => $this->faker->time(),
        ];
    }
}
