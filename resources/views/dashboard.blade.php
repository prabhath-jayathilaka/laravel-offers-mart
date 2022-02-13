<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semi-bold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <!-- Container Content -->

                    <div class="grid grid-rows-3 gap-8 min-h-[80%] ">
                        <div>
                            <h3 class="text-xl">Shopping</h3>
                            <div class="grid grid-cols-4 gap-4 p-5 ">

                                <x-dash-link :href="route('my-cart')" ><img src="{{ asset('/storage/media/icons/shopping_cart_black_48dp.svg')}}"
                                                                            alt="icon"> Modify Cart
                                </x-dash-link>

                            </div>
                        </div>

                        <div class="account-setting">
                            <h3 class="text-xl">Account Setting</h3>
                            <div class=" group grid grid-cols-4 gap-4 p-5">
                                <x-dash-link :href="route('my-info')" ><img
                                        src="{{ asset('/storage/media/icons/settings_accessibility_black_48dp.svg')}}"
                                        alt="">Edit personal info
                                </x-dash-link>

                                <x-dash-link :href="route('not-set')" ><img src="{{ asset('/storage/media/icons/password_black_48dp.svg')}}"
                                                                              alt="icon">Change Password
                                </x-dash-link>
                                <x-dash-link :href="route('my-address')" ><img src="{{ asset('/storage/media/icons/local_shipping_black_48dp.svg')}}"
                                                                              alt="">Edit shipping Address
                                </x-dash-link>

                            </div>

                        </div>
                        <div class="orders">
                            <h3 class="text-xl">My Orders</h3>
                            <div class=" grid grid-cols-4 gap-4 p-5 content-center ">
                                <x-dash-link :href="route('my-orders')" ><img src="{{ asset('/storage/media/icons/list_alt_black_48dp.svg')}}"
                                                                              alt="">My orders
                                </x-dash-link>

                                <x-dash-link :href="route('my-returns')" ><img
                                        src="{{ asset('/storage/media/icons/keyboard_return_black_48dp.svg')}}" alt="">
                                    View Returns
                                </x-dash-link>

                                <x-dash-link :href="route('my-payments')" ><img src="{{ asset('/storage/media/icons/paid_black_48dp.svg')}}" alt="">
                                    Transaction
                                </x-dash-link>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
