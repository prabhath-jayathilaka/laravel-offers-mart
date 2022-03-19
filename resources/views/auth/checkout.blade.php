<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semi-bold text-xl text-gray-800 leading-tight">
            {{ __('Checkout') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <form method="POST" action="{{ route('make-order') }}">
                        @method('POST')
                        @csrf
                    <div class="flex justify-around">

                        <div class="border-2 border-gray-600 p-4 w-[22rem]">
                            <h4 class="font-medium text-xl font-black mb-4" >Billing Address</h4>
                            <h6 >Chanuka Ravishan</h6>
                            <p>No 9A Tickell Rd,<br> Colombo 00800</p>
                            <x-button class="mt-6"  type="button"  data-modal-toggle="change-address-model">Change Address</x-button>
                        </div>
                        <div class="block border-2 border-gray-600 p-4 w-[22rem] ">
                            <h4 class="font-medium text-xl font-black mb-4">Shipping Method</h4>
                           <div>
                               <label>
                                   <x-input type="radio" name="shippingMethod" value="promtx"></x-input>
                                   PromtX
                               </label>
                           </div>
                           <div>
                               <label>
                                   <x-input type="radio" name="shippingMethod" value="dhl"></x-input>
                                   DHL
                               </label>
                           </div>
                            <div>
                                <label>
                                    <x-input type="radio" name="shippingMethod" value="pickup"></x-input>
                                    Pick Up
                                </label>
                            </div>

                        </div>
                        <div class="block border-2 border-gray-600 p-4 w-[22rem]">
                            <h4 class="font-medium text-xl font-black mb-4">Payment Method</h4>
                            <div>
                                <label>
                                    <x-input type="radio" name="paymentType" value="cash"></x-input>
                                    Cash On delivery
                                </label>
                            </div>
                            <div>
                                <label>
                                    <x-input type="radio" name="paymentType" value="deposit"></x-input>
                                    BankTransfer
                                </label>
                            </div>

                            <div>
                                <label>
                                    <x-input type="radio" name="paymentType" value="card"></x-input>
                                    Visa/Master
                                </label>
                            </div>

                        </div>

                    </div>
                    <!-- Shopping cart  -->
                    <div class="mt-6">

                        <div>

                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                <tr>
{{--                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Checkout</th>--}}
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Variation</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Unit Price</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Quantity</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Total</th>

                                </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                @foreach( $cart_items as $item)

                                    <tr>
{{--                                        <td class="px-6 pr-0 py-4 whitespace-nowrap text-sm text-gray-500"><input--}}
{{--                                                type="checkbox" name="{{$item->id}}"></td>--}}
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="flex-shrink-0 h-10 w-10">
                                                    <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60" alt="">
                                                </div>
                                                <div class="ml-4">
                                                    <div class="text-sm font-medium text-gray-900">Jane Cooper</div>
                                                    <div class="text-sm text-gray-500">jane.cooper@example.com</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">Regional Paradigm Technician</div>
                                            <div class="text-sm text-gray-500">Optimization</div>
                                        </td>

                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">$200.00</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">2</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">$400.00</td>

                                    </tr>

                                @endforeach
                                <!-- More ... -->
                                </tbody>
                            </table>
                        </div>

                        <div class="text-right grid justify-items-end pr-6" >
                            <p class="m-1"><span class="text-lg font-bold text-indigo-600" >SubTotal : </span>$1200.00</p>
                            <p class="m-1" ><span class="text-lg font-bold text-indigo-600">Discount : </span>$50.60</p>
                            <p class="m-1"><span class="text-lg font-bold text-indigo-600">Total : </span>$1149.40</p>
                        </div>
                        <x-button  data-modal-toggle="card-payment-model" type="button" >Proceed</x-button>
                    </div>

                    <div id="card-payment-model" aria-hidden="true"
                         class=" bg-gray-200 bg-opacity-75 hidden overflow-x-hidden overflow-y-auto fixed h-modal md:h-full top-4 left-0 right-0 md:inset-0 z-50 justify-center items-center">
                        <div class="relative w-full max-w-4xl px-4 h-full md:h-auto ">
                            <!-- Modal content -->
                            <div class="bg-white rounded-lg shadow relative border-2 border-gray-300 ">
                                <!-- Modal header -->
                                <div class="flex items-start justify-between p-5 border-b rounded-t border-gray-600">
                                    <h3 class="text-gray-900 text-xl lg:text-xl font-semi-bold ">
                                        Enter Payment Details
                                    </h3>
                                    <button type="button"
                                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                            data-modal-toggle="card-payment-model">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                  d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                  clip-rule="evenodd"></path>
                                        </svg>
                                    </button>
                                </div>
                                <!-- Modal body -->
                                <div class="p-6 space-y-6">
                                    <div class="grid grid-cols-2 w-[30rem]">
                                        <div class="m-1 col-span-2">
                                            <x-label for="card-number" :value="__('Card Number')"></x-label>

                                            <x-input  maxlength="16" minlength="16" id="card-number" class="block mt-1 w-full" type="text" name="card-number"
                                                     :value="old('card-number')" autofocus></x-input>

                                        </div>
                                        <div class="m-1">
                                            <x-label for="expire-date" :value="__('Expire-date')"></x-label>

                                            <x-input id="expire-date" class="block mt-1 w-full" type="text" name="expire-date"
                                                     :value="old('expire-date')" autofocus></x-input>

                                        </div>
                                        <div class="m-1">
                                            <x-label for="csv" :value="__('CSV')"></x-label>

                                            <x-input maxlength="3" id="csv" class="block mt-1 w-full" type="password" name="csv"
                                                     :value="old('csv')" autofocus></x-input>

                                        </div>

                                        <div class="m-1 flex justify-between pt-4">
                                            <p class="m-1"><span class="text-lg font-bold text-indigo-600">Amount : </span>$1149.40</p>
                                        </div>

                                    </div>
                                </div>
                                <!-- Modal footer -->
                                <div class="flex space-x-2 items-center p-6 border-t border-gray-200 rounded-b border-gray-600">
                                    <button data-modal-toggle="card-payment-model" type="submit"
                                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                        Confirm
                                    </button>

                                </div>
                            </div>
                        </div>
                    </div>

                        <div id="change-address-model" aria-hidden="true"
                             class=" bg-gray-200 bg-opacity-75 hidden overflow-x-hidden overflow-y-auto fixed h-modal md:h-full top-4 left-0 right-0 md:inset-0 z-50 justify-center items-center">
                            <div class="relative w-full max-w-4xl px-4 h-full md:h-auto ">
                                <!-- Modal content -->
                                <div class="bg-white rounded-lg shadow relative border-2 border-gray-300 ">
                                    <!-- Modal header -->
                                    <div class="flex items-start justify-between p-5 border-b rounded-t border-gray-600">
                                        <h3 class="text-gray-900 text-xl lg:text-xl font-semi-bold ">
                                            Enter Address
                                        </h3>
                                        <button type="button"
                                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                data-modal-toggle="change-address-model">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                      d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                      clip-rule="evenodd"></path>
                                            </svg>
                                        </button>
                                    </div>
                                    <!-- Modal body -->
                                    <div class="p-6 space-y-6">

                                    </div>
                                    <!-- Modal footer -->
                                    <div class="flex space-x-2 items-center p-6 border-t border-gray-200 rounded-b border-gray-600">
                                        <button data-modal-toggle="change-address-model" type="button"
                                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                            Confirm
                                        </button>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>

</x-app-layout>
