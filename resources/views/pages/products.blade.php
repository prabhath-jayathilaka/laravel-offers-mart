<x-guest-layout>
    {{--    <x-slot name="header">--}}
    {{--        <h2 class="font-semi-bold text-xl text-gray-800 leading-tight">--}}
    {{--            {{ __('My Cart') }}--}}
    {{--        </h2>--}}
    {{--    </x-slot>--}}

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-2 bg-white border-b border-gray-200 content-center">

                    <div class=" grid justify-center sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 2xl:grid-cols-4 ">
                        <!-- Content -->
                    @foreach($products as $product)

                        <!-- Product viewer  -->


                            <x-product-slide-viewer :product="$product">

                            </x-product-slide-viewer>

                            <!-- end of Content -->
                        @endforeach

                    </div>
                    {{$products->links()}}
                </div>
            </div>
        </div>
    </div>


</x-guest-layout>





