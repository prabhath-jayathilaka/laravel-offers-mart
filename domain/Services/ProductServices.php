<?php

namespace Domain\Services;

use App\Models\Product;

class ProductServices
{
    public function featuredProduct()
    {
        return Product::paginate(3);

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
//        $products = Product::where('name', 'like', '%' . $keyword . '%')->get();
        return Product::where('name', 'like', '%' . $keyword . '%')->paginate(20);

    }
}
