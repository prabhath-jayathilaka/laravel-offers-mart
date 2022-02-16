<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semi-bold text-xl text-gray-800 leading-tight">
            {{ __('My Cart') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <!-- Content -->
                    <!-- Product details container-->
                            <div class="  product container">
                                <div class=" grid grid-cols-12 product container-top">
                                    <div  id =" column" class="col-span-7  align-middle  p-2 ">

                                        <img id="featured" src="{{ asset('/storage/media/images/shoe_1.png') }} " class="border-2 border-gray-400 cursor-pointer min-w-[40.938rem] max-h-[39rem] object-fill align-middle" >

                                        <x-images-carousel name="productImages">

                                            <img class=" thumbnail active opacity-0.5 m-[0.313rem] border-2 border-gray-400 object-cover max-w-[11rem] max-h-[7rem] cursor-pointer " src="{{ asset('/storage/media/images/shoe_2.png') }} ">
                                            <img class=" thumbnail opacity-0.5 m-[0.313rem] border-2 border-gray-400 object-cover max-w-[11rem] max-h-[7rem] cursor-pointer " src="{{ asset('/storage/media/images/shoe_1.png') }} ">
                                            <img class=" thumbnail opacity-0.5 m-[0.313rem] border-2 border-gray-400 object-cover max-w-[11rem] max-h-[7rem] cursor-pointer" src="{{ asset('/storage/media/images/shoe_3.png') }} ">
                                            <img class=" thumbnail opacity-0.5 m-[0.313rem] border-2 border-gray-400 object-cover max-w-[11rem] max-h-[7rem] cursor-pointer" src="{{ asset('/storage/media/images/shoe_3.png') }} ">
                                            <img class=" thumbnail opacity-0.5 m-[0.313rem] border-2 border-gray-400 object-cover max-w-[11rem] max-h-[7rem] cursor-pointer" src="{{ asset('/storage/media/images/shoe_4.png') }} ">
                                            <img class=" thumbnail opacity-0.5 m-[0.313rem] border-2 border-gray-400 object-cover max-w-[11rem] max-h-[7rem] cursor-pointer" src="{{ asset('/storage/media/images/shoe_4.png') }} ">
                                            <img class=" thumbnail opacity-0.5 m-[0.313rem] border-2 border-gray-400 object-cover max-w-[11rem] max-h-[7rem] cursor-pointer" src="{{ asset('/storage/media/images/shoe_4.png') }} ">
                                        </x-images-carousel>

                                    </div>
                                    <div class=" col-span-5  details pt-2 pl-3 pr-2 pb-2">
                                        <h1 class=" font-bold text-3xl text-gray-800 leading-tight ">Simple Black T-Shirt</h1>

                                        <div class = "product-rating  text-yellow-400">
                                            <i class = "fas fa-star"></i>
                                            <i class = "fas fa-star"></i>
                                            <i class = "fas fa-star"></i>
                                            <i class = "fas fa-star"></i>
                                            <i class = "fas fa-star-half-alt"></i>
                                            <span class="text-gray-700 font-semibold">4.7(21)</span>
                                        </div>
                                        <p class="pt-2 text-base ">Seamlessly predominate enterprise metrics without performance based process improvements.</p>

                                        <div class = "product-price-wrap pt-2 ">
                                            <h2 class="text-lg">Price:</h2>
                                           <div class="flex items-center pl-2 pt-1 ">
                                               <p class = "new-price text-2xl text-red-700 font-medium ">$249.00 </p>
                                               <p class = "last-price text-xl pl-2 line-through">$257.00</p>
                                           </div>

                                        </div>

                                      <div class="variant pt-2">

                                         <div class="pro-detail-wrap pt-1">
                                             <h2 class="text-lg">Color:</h2>
                                             <ul class="pl-2 flex">
                                                 <li class="pl-2 pr-2"><a href="">Red</a></li>
                                                 <li class="pl-2 pr-2"><a href="">Yellow</a></li>
                                                 <li class="pl-2 pr-2"><a href="">Blue</a></li>

                                             </ul>
                                         </div>

                                      </div>
                                        <div class="action pt-5">
                                            <h2 class="text-lg">Quantity:</h2>
                                            <div class="flex w-60 items-center pl-4 pt-1 ontent-between" >
                                                <x-input id="quantity" class=" border-2 mt-1 w-20 p-0" type="number" name="quantity" :value="1" required autofocus></x-input>
                                                <div class=" ml-8 leading-5 font-semi-bold rounded-md bg-green-100 text-green-800 h-[1.73rem] flex items-center"> <P class="p-1">84 In Stock</P></div>
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
                                        Specification  | Description | Shipping
                                    </div>
                                </div>
                                <div class="product-review">

                                </div>
                            </div>

                    <!--     end of the product detail container -->

                            <div class=" mt-16 w-full bg-green-300 ">



                                 </div>
                    <!--        end of recommended -->
                    <!-- end of Content -->


                </div>
            </div>
        </div>
    </div>
</x-app-layout>





