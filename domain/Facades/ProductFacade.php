<?php

namespace Domain\Facades;

use Domain\Services\ProductServices;

class ProductFacade extends \Illuminate\Support\Facades\Facade
{
    protected static function getFacadeAccessor()
    {
        return ProductServices::class;
    }
}
