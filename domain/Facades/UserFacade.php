<?php

namespace Domain\Facades;

use Domain\Services\UserDashboardServices;

class UserFacade extends \Illuminate\Support\Facades\Facade
{
    protected static function getFacadeAccessor()
    {
        return UserDashboardServices::class;
    }
}
