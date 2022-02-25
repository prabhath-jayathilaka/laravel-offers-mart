<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $suffixes = ['Sweater', 'Pants', 'Shirt', 'Hat', 'Jeans', 'Socks'];
        $categories = ['Electronic Devices',
            'Electronic Accessories',
            'Women\'s Fashion',
            'Men\'s Fashion',
            'Sports & Outdoor'
        ];
        $sub = ['T-Shirts',
            'Shirts',
            'Trousers & pants',
            'Jeans'];

        return [
            'name' => $this->faker->company() . ' ' . Arr::random($suffixes),
            'slug' => $this->faker->slug(),
            'description' => $this->faker->realText(200),
            'price' => $this->faker->numberBetween(10000, 200000),
            'categories' => [
                'main' => Arr::random($categories),
                'sub' => Arr::random($sub),],
            'attributes' => [
                'size' => ['S', 'M', 'L', 'XL'][random_int(2, 3)],
                'color' => ['White', 'Black', 'Blue', 'Yellow', 'Light Green'][rand(2, 4)],
            ],
            'primary_image' => basename($this->faker->image('storage/app/public/media/images')),
            'images' => [
                'image1' => basename($this->faker->image('storage/app/public/media/images')),
                'image2' => basename($this->faker->image('storage/app/public/media/images')),
            ],
            'reviews' => [
                'user_name' => $this->faker->name(),
                'rating' => $this->faker->numberBetween(0, 5),
                'comment' => $this->faker->realText(50),
            ]];
    }
}
