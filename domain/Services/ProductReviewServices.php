<?php

namespace Domain\Services;

use App\Models\ProductReviews;

class ProductReviewServices
{
    public function productReviews($slug)
    {
        return ProductReviews::where('slug', $slug)->paginate(5);
    }

    public function productRating($slug)
    {

        $value = 0;
        $reviews = $this->productReviews($slug);
        $no_of_rating = count($reviews);
        foreach ($reviews as $review) {
            $value += $review->rating;
        }
        $value /= $no_of_rating;

        $rating = new ProductRating();
        $rating->value = round($value, 2);
        $rating->count = $no_of_rating;

        return $rating;

    }
}
