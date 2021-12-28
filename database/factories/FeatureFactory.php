<?php

namespace Database\Factories;

use App\Models\Feature;
use Illuminate\Database\Eloquent\Factories\Factory;

class FeatureFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Feature::class;

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
            'value' => $values[array_rand($values)],
        ];
    }
}
