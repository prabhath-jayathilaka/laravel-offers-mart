<?php

namespace App\Http\Controllers;

use Domain\Facades\ProductFacade;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function featuredProducts()
    {
//        $user = ProductFacade::featuredProduct();
        $OnSaleProducts = ProductFacade::OnSaleProducts();
        $trendingProducts = ProductFacade::featuredProduct();
        $newArrivals = ProductFacade::newArrivals();
        return view('pages.home', compact('OnSaleProducts', 'trendingProducts', 'newArrivals'));
    }
}
