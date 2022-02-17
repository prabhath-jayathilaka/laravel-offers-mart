<x-guest-layout>
    {{--    <x-slot name="header">--}}
    {{--        <h2 class="font-semi-bold text-xl text-gray-800 leading-tight">--}}
    {{--            {{ __('My Cart') }}--}}
    {{--        </h2>--}}
    {{--    </x-slot>--}}

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <!-- Content -->
                    <!-- Product details container-->
                    <div class="  product container">
                        <div class=" grid grid-cols-12 product container-top">
                            <div id=" column" class="col-span-7  align-middle  p-2 ">

                                <img id="featured" src="{{ asset('/storage/media/images/shoe_1.png') }} "
                                     class="border-2 border-gray-400 cursor-pointer min-w-[40.938rem] max-h-[39rem] object-fill align-middle rounded">

                                <x-images-carousel name="productImages">

                                    <img
                                        class=" images active opacity-0.5 m-[0.313rem] border-2 border-gray-400 object-cover max-w-[11rem] max-h-[7rem] cursor-pointer "
                                        src="{{ asset('/storage/media/images/shoe_2.png') }} ">
                                    <img
                                        class=" images opacity-0.5 m-[0.313rem] border-2 border-gray-400 object-cover max-w-[11rem] max-h-[7rem] cursor-pointer "
                                        src="{{ asset('/storage/media/images/shoe_1.png') }} ">
                                    <img
                                        class=" thumbnail opacity-0.5 m-[0.313rem] border-2 border-gray-400 object-cover max-w-[11rem] max-h-[7rem] cursor-pointer"
                                        src="{{ asset('/storage/media/images/shoe_3.png') }} ">
                                    <img
                                        class=" images opacity-0.5 m-[0.313rem] border-2 border-gray-400 object-cover max-w-[11rem] max-h-[7rem] cursor-pointer"
                                        src="{{ asset('/storage/media/images/shoe_3.png') }} ">
                                    <img
                                        class=" images opacity-0.5 m-[0.313rem] border-2 border-gray-400 object-cover max-w-[11rem] max-h-[7rem] cursor-pointer"
                                        src="{{ asset('/storage/media/images/shoe_3.png') }} ">
                                    <img
                                        class=" images opacity-0.5 m-[0.313rem] border-2 border-gray-400 object-cover max-w-[11rem] max-h-[7rem] cursor-pointer"
                                        src="{{ asset('/storage/media/images/shoe_3.png') }} ">
                                    <img
                                        class=" images opacity-0.5 m-[0.313rem] border-2 border-gray-400 object-cover max-w-[11rem] max-h-[7rem] cursor-pointer"
                                        src="{{ asset('/storage/media/images/shoe_4.png') }} ">
                                    <img
                                        class=" images opacity-0.5 m-[0.313rem] border-2 border-gray-400 object-cover max-w-[11rem] max-h-[7rem] cursor-pointer"
                                        src="{{ asset('/storage/media/images/shoe_4.png') }} ">
                                    <img
                                        class=" images opacity-0.5 m-[0.313rem] border-2 border-gray-400 object-cover max-w-[11rem] max-h-[7rem] cursor-pointer"
                                        src="{{ asset('/storage/media/images/shoe_4.png') }} ">
                                </x-images-carousel>

                            </div>
                            <div class=" col-span-5  details pt-2 pl-3 pr-2 pb-2">

                                <h1 class=" font-bold text-3xl text-gray-800 leading-tight ">{{$product->name}}</h1>

                                <div class="product-rating  text-yellow-400">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                    <span class="text-gray-700 font-semibold">4.7(21)</span>
                                </div>
                                <p class="pt-2 text-base ">{{$product->description}}</p>

                                <div class="product-price-wrap pt-2 ">
                                    <h2 class="text-lg">Price:</h2>
                                    <div class="flex items-center pl-2 pt-1 ">
                                        <p class="new-price text-2xl text-red-700 font-medium ">
                                            $ {{$product->price/100}}</p>
                                        <p class="last-price text-xl pl-2 line-through">$ 257.00</p>
                                    </div>

                                </div>

                                <div class="variant pt-2">
                                    @foreach($product->attributes as $attribute)
                                        <div class="pro-detail-wrap pt-1">
                                            <h2 class="text-lg">{{$attribute}}:</h2>
                                            <ul class="pl-2 flex">
                                                <li class="pl-2 pr-2"><a href="">Red</a></li>
                                                <li class="pl-2 pr-2"><a href="">Yellow</a></li>
                                                <li class="pl-2 pr-2"><a href="">Blue</a></li>

                                            </ul>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="action pt-5">
                                    <h2 class="text-lg">Quantity:</h2>
                                    <div class="flex w-60 items-center pl-4 pt-1 ontent-between">
                                        <x-input id="quantity" class=" border-2 mt-1 w-20 p-0" type="number"
                                                 name="quantity" :value="1" required></x-input>
                                        <div
                                            class=" ml-8 leading-5 font-semi-bold rounded-md bg-green-100 text-green-800 h-[1.73rem] flex items-center">
                                            <P class="p-1">84 In Stock</P></div>
                                    </div>
                                    <div class="buttons pt-5 w-full align-middle">
                                        <x-button class=" text-[1rem] h-10">
                                            {{ __('Add to Cart') }}
                                        </x-button>
                                        <x-button class=" text-[1rem] h-10 ">
                                            {{ __('Checkout') }}
                                        </x-button>
                                    </div>
                                    <div> Share social Links</div>
                                </div>
                            </div>

                        </div>

                        <div class=" mt-10  bg-indigo-600 product container-bottom">
                            <div>
                                Specification | Description | Shipping
                            </div>
                        </div>
                        <div class="product-review">

                        </div>
                    </div>

                    <!--     end of the product detail container -->

                    <div class=" mt-16 w-full  ">

                        <x-product-slider>
                            @foreach($products as $product)

                                <x-product-slide-viewer href="{{ route('show-product',  $product->slug)}}">
                                    <x-slot name="image">
                                        <img
                                            class=" thumbnail border-1 border-gray-600  rounded object-cover w-full h-full "
                                            ` src="{{ asset('/storage/media/images/shoe_1.png') }} ">
                                    </x-slot>
                                    <x-slot name="title">
                                        {{  $product->name}}
                                    </x-slot>
                                    <x-slot name="newprice">
                                        {{  $product->price}}
                                    </x-slot>
                                    <x-slot name="oldprice">
                                        $299.99
                                    </x-slot>
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





