<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semi-bold text-xl text-gray-800 leading-tight">
            {{ __('Personal info') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="grid grid-cols-2 gap-4 p-5">

                        <!-- Code block starts -->


                        <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
                            <ul class="flex flex-wrap -mb-px" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
                                <li class="mr-2" role="presentation">
                                    <button
                                        class="inline-block py-4 px-4 text-lg font-semi-bold text-center text-gray-500 rounded-t-lg border-b-2 border-transparent hover:text-blue-600  hover:border-blue-600 "
                                        id="specifications-tab" data-tabs-target="#specifications" type="button" role="tab" aria-controls="specifications" aria-selected="false">Specifications
                                    </button>
                                </li>
                                <li class="mr-2" role="presentation">
                                    <button
                                        class="inline-block py-4 px-4 text-lg font-semi-bold  text-center text-gray-500 rounded-t-lg border-b-2 border-transparent hover:text-blue-600  hover:border-blue-600
                                        active"
                                        id="customer-reviews-tab" data-tabs-target="#customer-reviews" type="button" role="tab" aria-controls="customer-reviews" aria-selected="true">customer-reviews
                                    </button>
                                </li>
                                <li class="mr-2" role="presentation">
                                    <button
                                        class="inline-block py-4 px-4 text-lg font-semi-bold  text-center text-gray-500 rounded-t-lg border-b-2 border-transparent hover:text-blue-600 hover:border-blue-600 "
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
                                <p>Customer Reviews</p>
                            </div>
                            <div class="hidden p-4 bg-gray-50 rounded-md border-2 border-gray-800 " id="shipping" role="tabpanel" aria-labelledby="shipping-tab">
                                <p>Shipping</p>
                            </div>

                        </div>

                        <!-- Code block ends -->

                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
