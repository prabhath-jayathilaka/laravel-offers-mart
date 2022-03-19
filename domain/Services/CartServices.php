<?php

namespace Domain\Services;

use App\Models\Cart;
use Illuminate\Support\Facades\DB;

class CartServices
{


    public function indexCart($user)
    {
        return DB::table('carts')->where('user_id', '=', $user->id)->join('products', 'product_id', '=', 'products.id')->select('carts.*', 'products.name', 'products.price', 'products.primary_image')->get();

    }

    public function addToCart($user, $req_data)
    {

        $product_id = $req_data['product_id'];
        $qty = $req_data['quantity'];

        unset($req_data['product_id']);
        unset($req_data['quantity']);

        if (cart::create(['user_id' => $user->id, 'item_list' => $req_data, 'product_id' => $product_id, 'quantity' => $qty])) {
            return ['success-message' => 'Successfully Add'];

        }
        return ['error-message' => 'Something went wrong'];


    }


}
