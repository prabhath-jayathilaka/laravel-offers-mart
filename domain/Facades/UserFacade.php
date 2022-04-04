<?php

namespace Domain\Facades;

use Domain\Services\UserDashboardServices;

/**
 * @method static updateAddress(\Illuminate\Contracts\Auth\Authenticatable|null $user, array $all)
 * @method static viewReturnOrders(\Illuminate\Contracts\Auth\Authenticatable|null $user)
 * @method static viewOrders(\Illuminate\Contracts\Auth\Authenticatable|null $user)
 */
class UserFacade extends \Illuminate\Support\Facades\Facade
{
    protected static function getFacadeAccessor()
    {
        return UserDashboardServices::class;
    }
}
