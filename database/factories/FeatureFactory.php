<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class FeatureFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $color = 'رنگ';
        $values = array(
            'قرمز',
            'آبی',
            'زرد',
            'سیاه',
        );

        return [
            'name' => $color,
            'value' => $this->str_random($values),
        ];
    }
}
