<x-guest-layout>
    {{--    <x-slot name="header">--}}
    {{--        <h2 class="font-semi-bold text-xl text-gray-800 leading-tight">--}}
    {{--            {{ __('My Cart') }}--}}
    {{--        </h2>--}}
    {{--    </x-slot>--}}

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-4 bg-white border-b border-gray-200">

                    <div class="">
                        <!-- Content -->
                        @foreach($products as $product)


                            <x-product-slide-viewer href="{{ route('show-product',  $product->slug)}}">
                                <x-slot name="image">
                                    <img alt="product primary image"
                                         class=" thumbnail border-1 border-gray-600  rounded object-cover w-full h-full "
                                         src="{{ asset('/storage/media/images/'.$product->primary_image) }} ">
                                </x-slot>
                                <x-slot name="title">
                                    {{  $product->name}}
                                </x-slot>
                                <x-slot name="newprice">
                                    {{  $product->price/100}}
                                </x-slot>
                                <x-slot name="oldprice">
                                    $ 25.00
                                </x-slot>
                            </x-product-slide-viewer>
                            <!-- end of Content -->

                        @endforeach
                        {{$products->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>


</x-guest-layout>





