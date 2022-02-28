<x-guest-layout>
    {{--    <x-slot name="header">--}}
    {{--        <h2 class="font-semi-bold text-xl text-gray-800 leading-tight">--}}
    {{--            {{ __('My Cart') }}--}}
    {{--        </h2>--}}
    {{--    </x-slot>--}}

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 xl:px-10">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <!-- Content -->
                    <!-- Product details container-->
                    <div class="  product container">
                        <div class=" grid grid-cols-12 product container-top">
                            <!-- Product image container -->
                            <div id=" column" class="col-span-7  align-middle  p-2  ">

                                <img alt="primary Image" id="featured"
                                     src="{{ asset('/storage/media/images/'.$product->primary_image) }} "
                                     class="border-2 border-gray-400 cursor-pointer min-w-[40.938rem] max-h-[39rem] object-fill align-middle rounded">

                                <x-images-carousel name="productImages">
                                    <img alt="primary Image"
                                         class=" images active opacity-0.5 m-[0.313rem] border-2 border-gray-400
                                        object-cover max-w-[11rem] max-h-[7rem] cursor-pointer "
                                         src="{{ asset('/storage/media/images/'.$product->primary_image) }} ">
                                    @foreach($product->images as $key=>$image)
                                        <img alt="image gallery"
                                             class=" images active opacity-0.5 m-[0.313rem] border-2 border-gray-400 object-cover max-w-[11rem] max-h-[7rem] cursor-pointer "
                                             src="{{ asset('/storage/media/images/'. $image ) }} "> @endforeach
                                </x-images-carousel>

                            </div>
                            <!-- End of product image container -->
                            <!-- Product Details -->
                            <div class=" col-span-5  details pt-2 pl-4 pr-2 pb-2  ">
                                <form method="POST" action="{{ route('add-to-cart') }}">
                                    @method('POST')
                                    @csrf
                                    <input type="hidden" name="product_id" value="{{$product->id}}">
                                    <h1 class=" font-bold text-3xl text-gray-800 leading-tight ">{{$product->name}}</h1>
                                    <!-- Product Reviews container -->
                                    <div class="product-rating  ">
                                        @for($i=1 ;$i<= $rating->value ;$i++)
                                            <i class="fas fa-star text-yellow-400"></i>
                                        @endfor

                                        @for($i=$rating->value ;$i< 5 ;$i++)
                                            @if($rating->value-floor($rating->value) != 0 && $i == $rating->value)
                                                <i class=" fas fa-star-half-alt text-yellow-400"></i>
                                            @else<i class="fas fa-star text-gray-300"></i>
                                            @endif
                                        @endfor


                                        <span class="text-gray-700 font-semi-bold ml-1">{{$rating->value}} <span class="ml-0.5">({{$rating->count}})</span></span>
                                    </div>
                                    <p class="pt-2 text-base ">{{$product->description}}</p>

                                    <div class="product-price-wrap pt-2 ">
                                        <h2 class="text-lg">Price:</h2>
                                        <div class="flex items-center pl-2 pt-1 ">
                                            <p class="new-price text-2xl text-red-700 font-medium ">
                                                $ {{$product->price/100}}</p>
                                            <p class="last-price text-xl pl-2 line-through">$ {{  $product->old_price/100}}</p>
                                        </div>

                                    </div>
                                    <!-- Product variation container -->
                                    <div class="variant pt-2">
                                        @foreach($product->attributes as  $key=>$attribute)

                                            <div class="pro-detail-wrap pt-1">
                                                <h2 class="text-lg">{{ $key }} :</h2>
                                                <select name="{{ $key }}" class="pl-2 block w-full  border-0 h-[2.7rem] align-middle scrollbar-hide" multiple required>
                                                    @foreach( $attribute as $value )
                                                        <option value="{{$value}}" class="pl-2 pr-2 border border-gray-400 rounded ml-2 inline-block">
                                                            {{$value}}
                                                        </option>
                                                    @endforeach
                                                </select>

                                            </div>
                                        @endforeach
                                    </div>
                                    <!-- End of product variation container -->
                                    <!-- user's actions for product -->
                                    <div class="action pt-5">
                                        <h2 class="text-lg">Quantity:</h2>
                                        <div class="flex w-60 items-center pl-4 pt-1 ontent-between">
                                            <x-input id="quantity" class=" border-2 mt-1 w-20 p-0" type="number"
                                                     min="1" name="quantity" :value="1" required></x-input>
                                            <div
                                                class=" ml-8 leading-5 font-semi-bold rounded-md bg-green-100 text-green-800 h-[1.73rem] flex items-center">
                                                @if($product->quantity==0)
                                                    <P class="p-1 bg-red-100 text-red-800">Out Stock</P>
                                                @else <P class="p-1">{{$product->quantity}} In Stock</P>
                                                @endif
                                            </div>


                                        </div>
                                    </div>
                                    <div class="buttons pt-5 w-full align-middle">
                                        <x-button type="submit" class=" text-[1rem] h-10">
                                            {{ __('Add to Cart') }}
                                        </x-button>
                                        <a href="{{ route('check-out') }}">
                                            <x-button class=" text-[1rem] h-10 " type="button">
                                                {{ __('Checkout') }}
                                            </x-button>
                                        </a>
                                    </div>
                                    <div> Share social Links</div>
                            </div>
                            </form>
                        </div>


                    </div>

                    <div class=" mt-10   product container-bottom">
                        <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
                            <ul class="flex flex-wrap -mb-px" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
                                <li class="mr-2" role="presentation">
                                    <button
                                        class=" uppercase inline-block py-4 px-4 text-lg font-semi-bold text-center text-gray-500 rounded-t-lg border-b-2 border-transparent hover:text-blue-600  hover:border-blue-600 "
                                        id="specifications-tab" data-tabs-target="#specifications" type="button" role="tab" aria-controls="specifications" aria-selected="false">Specifications
                                    </button>
                                </li>
                                <li class="mr-2" role="presentation">
                                    <button
                                        class=" uppercase inline-block py-4 px-4 text-lg font-semi-bold  text-center text-gray-500 rounded-t-lg border-b-2 border-transparent hover:text-blue-600  hover:border-blue-600
                                        active"
                                        id="customer-reviews-tab" data-tabs-target="#customer-reviews" type="button" role="tab" aria-controls="customer-reviews" aria-selected="true">customer-reviews
                                    </button>
                                </li>
                                <li class="mr-2" role="presentation">
                                    <button
                                        class=" uppercase inline-block py-4 px-4 text-lg font-semi-bold  text-center text-gray-500 rounded-t-lg border-b-2 border-transparent hover:text-blue-600 hover:border-blue-600 "
                                        id="shipping-tab" data-tabs-target="#shipping" type="button" role="tab" aria-controls="shipping" aria-selected="false">shipping
                                    </button>
                                </li>

                            </ul>
                        </div>
                        <div id="myTabContent">
                            <div class="hidden p-4 bg-gray-50 rounded-md border-2 border-gray-800 " id="specifications" role="tabpanel" aria-labelledby="specifications-tab">
                                <p>specifications</p>
                            </div>
                            <div class="p-4 bg-gray-50 rounded-md border-2 border-gray-800 " id="customer-reviews" role="tabpanel" aria-labelledby="customer-reviews-tab">
                            @foreach($reviews as $review)
                                <!--     customer Name -->
                                    <h3 class="pt-3">User Name : <span class="ml-2">{{$review->user_name}}</span></h3>
                                    <!--     customer rating  -->
                                    <div class="customer-rating ml-24 pt-3 ">
                                        @for($i=1 ;$i<= $review->rating ;$i++)
                                            <i class="fas fa-star text-yellow-400"></i>
                                        @endfor

                                        @for($i=$review->rating;$i< 5 ;$i++)
                                            @if( $review->rating - floor($review->rating)  != 0 &&  $i==$review->rating  )
                                                <i class=" fas fa-star-half-alt text-yellow-400"></i>
                                            @else<i class="fas fa-star text-gray-300"></i>
                                            @endif
                                        @endfor
                                        <span class="text-gray-700 font-semi-bold ml-1">{{$review->rating}}</span>
                                    </div>
                                    <!--     Comments -->
                                    <div class=" ml-24 pt-3">
                                        <p>{{$review->comment}} </p>
                                    </div>
                                @endforeach
                                {{$reviews->links()}}
                            </div>
                            <div class="hidden p-4 bg-gray-50 rounded-md border-2 border-gray-800 " id="shipping" role="tabpanel" aria-labelledby="shipping-tab">
                                <p>Shipping</p>
                            </div>

                        </div>

                    </div>

                    <!--     end of the product detail container -->

                    <div class=" mt-16 w-full  ">

                        <x-product-slider>
                        @foreach($products as $product)

                            <!-- Product viewer  -->
                                <x-product-slide-viewer :product="$product">

                                </x-product-slide-viewer>
                                <!-- end of Content -->

                            @endforeach
                        </x-product-slider>
                    </div>
                    <!--        end of recommended -->
                    <!-- end of Content -->

                </div>
            </div>
        </div>
    </div>
    </div>
    <script>
        let thumbnails = document.getElementsByClassName('images')

        let activeImages = document.getElementsByClassName('active')

        for (var i = 0; i < thumbnails.length; i++) {

            thumbnails[i].addEventListener('mouseover', function () {
                console.log(activeImages)

                if (activeImages.length > 0) {
                    activeImages[0].classList.remove('active')
                }

                this.classList.add('active')
                document.getElementById('featured').src = this.src
            })
        }
        console.log('product')
    </script>
</x-guest-layout>

