<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semi-bold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard > Returns') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <!-- This example requires Tailwind CSS v2.0+ -->
                    <div class="flex flex-col">
                        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                    <table class="min-w-full divide-y divide-gray-200">
                                        <thead class="bg-gray-50">
                                        <tr>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-xs font-black text-gray-600 uppercase tracking-wider">
                                                Oder Id
                                            </th>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-xs font-black text-gray-600 uppercase tracking-wider">
                                                Transaction Id
                                            </th>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-xs font-black text-gray-600 uppercase tracking-wider">
                                                Total
                                            </th>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-xs font-black text-gray-600 uppercase tracking-wider">
                                                No Of Items
                                            </th>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-xs font-black text-gray-600 uppercase tracking-wider">
                                                Status
                                            </th>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-xs font-black text-gray-600 uppercase tracking-wider">
                                                Order Date
                                            </th>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-xs font-black text-gray-600 uppercase tracking-wider">
                                                Return Date
                                            </th>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-xs font-black text-gray-600 uppercase tracking-wider">
                                                reason
                                            </th>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-xs font-black text-gray-600 uppercase tracking-wider">
                                                Action
                                            </th>


                                        </tr>
                                        </thead>
                                        <tbody class="bg-white divide-y divide-gray-200">
                                        @foreach( $return_orders as $order)
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                    {{$order->id}}
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                    {{$order->transaction_id}}
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                    $ {{$order->total/100}}
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{$order->no_of_items}}</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">

                                                    @if($order->status === 'DISPATCHED')
                                                        <span
                                                            class="px-2 inline-flex text-xs leading-5 font-semi-bold rounded-full bg-red-200 text-red-600"> {{$order->status}} </span>
                                                    @elseif($order->status === 'RETURNING')
                                                        <span
                                                            class="px-2 inline-flex text-xs leading-5 font-semi-bold rounded-full bg-orange-100 text-orange-600"> {{$order->status}} </span>
                                                    @endif
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{$order->order_date}}
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{$order->return_date}}
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 max-w-[11rem] truncate ...">
                                                    {{$order->return_reason}}
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 flex justify-between">
                                                    <button type="button" data-modal-toggle="order--view-model"
                                                            class="mx-1 px-1.5 py-1 text-xs  text-gray-600 rounded uppercase tracking-wider font-semi-bold bg-slate-300 hover:bg-slate-600 hover:text-white  ">
                                                        View
                                                    </button>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- order--view-model  -->
    <div id="order--view-model" aria-hidden="true"
         class=" bg-gray-200 bg-opacity-75 hidden overflow-x-hidden overflow-y-auto fixed h-modal md:h-full top-4 left-0 right-0 md:inset-0 z-50 justify-center items-center">
        <div class="relative w-full max-w-4xl px-4 h-full md:h-auto ">
            <!-- Modal content -->
            <div class="bg-white rounded-lg shadow relative border-2 border-gray-300 ">
                <!-- Modal header -->
                <div class="flex items-start justify-between p-5 border-b rounded-t border-gray-600">
                    <h3 class="text-gray-900 text-xl lg:text-xl font-semi-bold ">
                        Return Details
                    </h3>
                    <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-toggle="order--view-model">
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
                    <button data-modal-toggle="order--view-model" type="button"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Close
                    </button>

                </div>
            </div>
        </div>
    </div>
    <!-- end order--view-model  -->
</x-app-layout>
