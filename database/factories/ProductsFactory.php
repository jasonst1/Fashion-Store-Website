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
            'ProductID' => $this->faker->unique()->uuid(),
            'ProductName' => $this->faker->word(),
            // 'ProductSlug' => $this->faker->slug(),
            'ProductSummary' => $this->faker->sentence(mt_rand(1, 5)),
            // 'CategoryID' => $this->faker->numberBetween(1, 2),
            'ProductPrice' => $this->faker->numberBetween(10000, 1000000),
            'ProductQuantity' => $this->faker->numberBetween(10, 100),
            'ProductDiscount' => $this->faker->numberBetween(30, 50),
        ];
    }
}
