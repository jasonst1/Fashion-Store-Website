<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class WishlistFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'UserID' => $this->faker->numberBetween(1, 5),
            'ProductID' => $this->faker->numberBetween(1, 5)
        ];
    }
}
