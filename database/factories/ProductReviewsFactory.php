<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductReviews>
 */
class ProductReviewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            'user_name' => $this->faker->name(),
            'rating' => $this->faker->numberBetween(0, 5),
            'comment' => $this->faker->realText(50),
        ];
    }
}
