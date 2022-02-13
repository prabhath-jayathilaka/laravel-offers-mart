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
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-black text-gray-600 uppercase tracking-wider">Oder Id</th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-black text-gray-600 uppercase tracking-wider">Transaction Id</th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-black text-gray-600 uppercase tracking-wider">Total</th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-black text-gray-600 uppercase tracking-wider">No Of Items</th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-black text-gray-600 uppercase tracking-wider">Status</th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-black text-gray-600 uppercase tracking-wider">Order Date</th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-black text-gray-600 uppercase tracking-wider">Return Date</th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-black text-gray-600 uppercase tracking-wider">reason</th>


                                        </tr>
                                        </thead>
                                        <tbody class="bg-white divide-y divide-gray-200">
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">7IYm2aRNkW</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">2cCQCfNCtrF9mdr</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">$500.00</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">3</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800"> Delivered </span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">2022-01-16</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">2022-01-28</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Not a Branded Product </td>
                                        </tr>

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
</x-app-layout>
