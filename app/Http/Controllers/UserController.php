<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateAddressRequest;
use Domain\Facades\UserFacade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function updateInfo(){
        $user = auth()->user();

        return "Hello";
    }

    public function updateAddress(UpdateAddressRequest $request){

     $component =  UserFacade::updateAddress( auth()->user(), $request->all());

        return redirect()->route('my-address')->with('error-message','Update Successfully');
//        return view('blank')->with('message','from controller');
    }
}
