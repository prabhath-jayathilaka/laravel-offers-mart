<?php

namespace Domain\Services;

use App\Models\Cart;
use App\Models\Order;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Facade;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Throwable;

class CartServices
{

    // retrieve cart items
    public function indexCart($user)
    {
        return DB::table('carts')->where('user_id', '=', $user->id)->join('products', 'product_id', '=', 'products.id')->select('carts.*', 'products.name', 'products.price', 'products.primary_image')->get();

    }


//    add to cart function
    public function addToCart($user, $req_data)
    {

        $product_id = $req_data['product_id'];
        $cart_id = Str::random(32);
        $qty = $req_data['quantity'];

        unset($req_data['product_id']);
        unset($req_data['quantity']);
        unset($req_data['_token']);

        if (cart::create(['cart_id' => $cart_id, 'user_id' => $user->id, 'item_list' => $req_data, 'product_id' => $product_id, 'quantity' => $qty])) {
            return ['success-message' => 'Successfully Add'];

        }
        return ['error-message' => 'Something went wrong'];

    }


    public function checkoutCart($user, $req_data)
    {
         $selectedItems = [];
        foreach ($this->indexCart($user) as $item) {
            foreach ($req_data as $key => $on) {
                if ($item->cart_id == $key) {

                    $selectedItems[] = $item;

                }
            }
        }
        // calculate total
        $sub_total = $this->calculateSubTotal($selectedItems);

        $discount = 20000;

        $total = $sub_total-$discount;

        Session::put('checkoutDetails',array("selectedItems" => $selectedItems, "sub_total" => $sub_total, "discount" => $discount, "total" => $total));

        return Session::get('checkoutDetails');
    }


    public function makeOrder($user, $req_data)
    {
        $item_list = Session::get('checkoutDetails')['selectedItems'];
        $no_of_items = count( $item_list);

        $total = Session::get('checkoutDetails')['total'];

        if (Order::create(['user_id' => $user->id,  'transaction_id' => Str::random(24), 'total' => $total, 'item_list' => $item_list, 'shipping_address'=>'address','order_date'=>$date = Carbon::now(), 'status' => 'PROCESSING', 'no_of_items' => $no_of_items])) {
//            return ['success-message' => 'Thank for your Oder!'];
            $this->updateCart($item_list);
            return 'Thank for your Oder!';


        }

//        return ['error-message' => 'Something went wrong'];
        return  'Something went wrong';

    }

    public function calculateSubTotal($selectedItems)
    {
        $total = 000;

        foreach ($selectedItems as $item) {
            $total += $item->quantity * $item->price;
        }
        return $total;
    }

    private function updateCart($item_list)
    {
        foreach ($item_list as $item){
            Cart::find($item->id)->delete();
        }
    }
}

