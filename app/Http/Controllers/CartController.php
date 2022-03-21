<?php

namespace App\Http\Controllers;

use App\Http\Requests\addToCartRequest;
use App\Models\User;
use Domain\Facades\CartFacade;
use Illuminate\Http\Request;

class CartController extends Controller
{

    public function indexCart()
    {
        $cart_items =CartFacade::indexCart(auth()->user());
        return view('auth.my-cart', compact('cart_items'));

    }

    public function addToCart(addToCartRequest $request)
    {

      dd(  CartFacade::addToCart( auth()->user(),$request->except('_method',)));

    }
}
