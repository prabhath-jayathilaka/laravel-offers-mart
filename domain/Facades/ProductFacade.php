<?php

namespace Domain\Facades;

use Domain\Services\ProductServices;

/**
 * @method static showProduct($slug)
 * @method static featuredProduct()
 * @method static searchProduct(mixed $input)
 * @method static carouselfeaturedProduct()
 */
class ProductFacade extends \Illuminate\Support\Facades\Facade
{
    protected static function getFacadeAccessor()
    {
        return ProductServices::class;
    }
}
