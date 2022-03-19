<?php

namespace Domain\Facades;

use Domain\Services\CartServices;

class CartFacade extends \Illuminate\Support\Facades\Facade
{
    protected static function getFacadeAccessor()
    {
        return CartServices::class;
    }
}
