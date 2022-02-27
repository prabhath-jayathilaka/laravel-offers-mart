<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\Product;
use App\Models\ProductReviews;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

//        Product::factory(15)->create();
        User::factory(5)->create()->each(function ($user) {
            Order::factory(random_int(1, 4))->create([
                'user_id' => $user->id
            ]);
        });

        Product::factory(15)->create()->each(function ($product) {
            ProductReviews::factory(random_int(1, 4))->create([
                'slug' => $product->slug
            ]);
        });
    }
}
