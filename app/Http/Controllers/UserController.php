<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateAddressRequest;
use Domain\Facades\UserFacade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{




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
//        return view('auth.my-orders');
        $orders = UserFacade::viewOrders(auth()->user());
        return view('auth.my-orders', compact('orders'));
    }

    public function indexReturns()
    {
        $return_orders = UserFacade::viewReturnOrders(auth()->user());
        return view('auth.my-returns', compact('return_orders'));
    }

    public function indexTransaction()
    {
        return view('auth.my-transaction');
    }

    public function updateInfo()
    {
        $user = auth()->user();

        return "Hello";
    }

    public function updateAddress(UpdateAddressRequest $request)
    {
        return redirect()->route('my-address')->with(UserFacade::updateAddress(auth()->user(), $request->except(['_method', '_token'])));
    }
}
