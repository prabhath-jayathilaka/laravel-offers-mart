<?php

namespace Domain\Services;

use App\Models\Order;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserDashboardServices
{


    public function viewOrders($user)
    {
        return Order::where('user_id', 'like', $user->id)->paginate(20);
    }

    public function viewReturnOrders($user)
    {
        return Order::where('user_id', 'like', $user->id)->where('status', 'like', 'DISPATCHED')->orwhere('status', 'like', 'RETURNING')->paginate(20);
    }

    public function updateAddress($user, $req_data): array
    {
        // check affected rows for validation and return a messages for user
        if (User::where('id', '=', $user->id)->update(['address' => $req_data]) === 1) {
            return ['success-message' => 'Update Successfully'];
        }
        return ['error-message' => 'Something went wrong'];

    }
}
