<?php

namespace Domain\Services;

use App\Models\Cart;

class CartServices
{


    public function indexCart($user)
    {
     return Cart::where('user_id', 'like', $user->id)->paginate(20);
    }

    public function addToCart($user, $req_data)
    {

        if (cart::create(['user_id' => $user->id,'item_list' => $req_data])) {
            return ['success-message' => 'Successfully Add'];
        }
        return ['error-message' => 'Something went wrong'];
    }
}
