<?php

namespace Domain\Services;

use App\Models\Product;

class ProductServices
{
    public function featuredProduct()
    {
        return Product::paginate(20);

    }


    public function OnSaleProducts()
    {
        return Product::inRandomOrder()->paginate(20);
    }

    public function newArrivals()
    {
        return Product::inRandomOrder()->paginate(20);

    }

    public function carouselfeaturedProduct()
    {
        return Product::paginate(10);

    }

    public function showProduct($slug)
    {
        return Product::where('slug', $slug)->firstOrFail();

    }


    public function searchProduct($keyword)
    {
        return Product::where('name', 'like', '%' . $keyword . '%')->orwhere('description', 'like', '%' . $keyword . '%')->orwhere('slug', 'like', '%' . $keyword . '%')->paginate(20);

    }
}
