<?php

namespace App\Http\Controllers;

use App\Http\Requests\CheckoutRequest;
use App\Http\Requests\OrderRequest;
use Domain\Facades\CartFacade;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{

    public function index(){
//        dd($request);
        $cart_items = CartFacade::indexCart(auth()->user());
        return view('auth.checkout',compact('cart_items'));
    }
    public function indexRequest(CheckoutRequest $request){
//        dd($request);
        $cart_items = CartFacade::indexCart(auth()->user());
        return view('auth.checkout',compact('cart_items'));
    }

public  function makeOrder(OrderRequest $request){
        dd($request);
}

}
