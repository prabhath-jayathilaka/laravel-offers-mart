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
            'old_price' => $this->faker->numberBetween(10000, 200000),
            'quantity' => $this->faker->numberBetween(10, 300),
            'categories' => [
                'main' => Arr::random($categories),
                'sub' => Arr::random($sub),],
            'attributes' => [
                'size' => ['S', 'M', 'L', 'XL'],
                'color' => ['White', 'Black', 'Blue', 'Yellow', 'Light Green'],
                'pattern' => ['P1', 'P2', 'P3', 'P4'],
            ],
            'primary_image' => basename($this->faker->image('storage/app/public/media/images')),
            'images' => $this->setImages(),];

    }


    private function setImages(): array
    {
        $imageArray = [];
        for ($i = 0; $i < 6; $i++) {
            $imageArray[] = basename($this->faker->image('storage/app/public/media/images'));
        }
        return $imageArray;
    }

}
