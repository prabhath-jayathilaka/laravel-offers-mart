<?php

namespace Domain\Facades;

use Domain\Services\ProductReviewServices;

/**
 * @method static productReviews($slug)
 */
class ProductReviewFacade extends \Illuminate\Support\Facades\Facade
{
    protected static function getFacadeAccessor()
    {
       return ProductReviewServices::class;
    }
}
