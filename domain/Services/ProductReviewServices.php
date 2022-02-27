<?php

namespace Domain\Services;

use App\Models\ProductReviews;

class ProductReviewServices
{
    public function productReviews($slug)
    {
        return ProductReviews::where('slug', $slug)->paginate(5);
    }
}
