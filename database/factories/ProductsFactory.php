<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ProductID' => $this->faker->unique()->randomDigit(),
            'ProductName' => $this->faker->title(),
            'ProductSlug' => $this->faker->slug(),
            'ProductSummary' => $this->faker->sentence(),
            'CategoryID' => $this->faker->numberBetween($min = 1, $max = 1000),
            'ProductPrice' => $this->faker->numberBetween($min = 10000, $max = 1000000),
            'ProductQuantity' => '1',
            'ProductDiscount' => $this->faker->numberBetween($min = 30, $max = 50),
        ];
    }
}
