<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

    public function indexCart()
    {
        return view('auth.my-cart');
    }

    public function indexPersonalInfo()
    {
        return view('auth.personal-info');
    }

    public function indexAddress()
    {
        return view('auth.my-address');
    }


    public function indexOrders()
    {
        return view('auth.my-orders');
    }

    public function indexReturns()
    {
        return view('auth.my-returns');
    }

    public function indexTransaction()
    {
        return view('auth.my-transaction');
    }


}
