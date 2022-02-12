<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $suffixes = ['Sweater', 'Pants', 'Shirt', 'Hat', 'Jeans', 'Socks'];
        return [
            'transaction_id' => $this->faker->slug(2),
            'total' => $this->faker->numberBetween(20000, 1000000),
            'item_list' => ['product_id' => $this->faker->asciify(),
                'product_name' => $this->faker->company() . ' ' . Arr::random($suffixes),
                'qty' => $this->faker->numberBetween(2, 5),
                'item_total' => $this->faker->numberBetween(20000, 100000)],
            'shipping_address' => ['street' => $this->faker->streetName(),
                'city' => $this->faker->city(),
                'state' => $this->faker->state(),
                'zip_code' => $this->faker->postcode()],
        ];
    }
}
