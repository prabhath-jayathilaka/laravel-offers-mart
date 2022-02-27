<?php

namespace App\Http\Controllers;

use App\Models\ProductReviews;
use App\Http\Requests\StoreProductReviewsRequest;
use App\Http\Requests\UpdateProductReviewsRequest;

class ProductReviewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductReviewsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductReviewsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductReviews  $productReviews
     * @return \Illuminate\Http\Response
     */
    public function show(ProductReviews $productReviews)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductReviews  $productReviews
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductReviews $productReviews)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductReviewsRequest  $request
     * @param  \App\Models\ProductReviews  $productReviews
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductReviewsRequest $request, ProductReviews $productReviews)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductReviews  $productReviews
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductReviews $productReviews)
    {
        //
    }
}
