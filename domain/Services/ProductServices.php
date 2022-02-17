<?php

namespace Domain\Services;

use App\Models\Product;

class ProductServices
{
   public function featuredProduct(){
      return Product::all();
   }


    public function showProduct($slug)
    {
        return Product::where('slug',$slug)->firstOrFail();
//        return "inservices";
    }
}
