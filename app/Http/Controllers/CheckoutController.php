<?php

namespace App\Http\Controllers;

use App\Http\Requests\CheckoutRequest;
use App\Http\Requests\OrderRequest;
use Domain\Facades\CartFacade;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{

    public function index()
    {
//        dd($request);
        $cart_items = CartFacade::indexCart(auth()->user());
        return view('auth.checkout', compact('cart_items'));
    }

    public function indexRequest(CheckoutRequest $request)
    {
//        dd($request);
        $checkout = CartFacade::checkoutCart(auth()->user(), $request->except('_method', '_token'));
//        dd($checkout);

//      dd(CartFacade::checkoutCart(auth()->user(),$request->except('_method','_token'))['sub_total']);
//      dd(CartFacade::checkoutCart(auth()->user(),$request->except('_method','_token')));

        return view('auth.checkout', compact('checkout'));
    }

    public function makeOrder(OrderRequest $request)
    {
//        dd($request);
//        dd(CartFacade::makeOrder(auth()->user(), $request->except('_method',)));
        return CartFacade::makeOrder(auth()->user(), $request->except('_method',));
//        return redirect()->route('make-order')->with(CartFacade::makeOrder(auth()->user(), $request->except('_method',)));
    }

}
