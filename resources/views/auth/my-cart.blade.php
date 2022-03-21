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

                    <!-- This example requires Tailwind CSS v2.0+ -->
                    <div class="flex flex-col">
                        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                    <form method="POST" action="{{ route('check-out') }}">
                                        @method('POST')
                                        @csrf

                                        <table class="min-w-full divide-y divide-gray-200">
                                            <thead class="bg-gray-50">
                                            <tr>
                                                <th scope="col"
                                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                    Checkout
                                                </th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                    Name
                                                </th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                    Description
                                                </th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                    Stock
                                                </th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                    Unit Price
                                                </th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                    Quantity
                                                </th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                    Action
                                                </th>

                                            </tr>
                                            </thead>
                                            <tbody class="bg-white divide-y divide-gray-200">
                                            @foreach( $cart_items as $item)
                                                <tr>
                                                    <td class="px-6 pr-0 py-4 whitespace-nowrap text-sm text-gray-500">
                                                        <input type="checkbox" name="{{$item->cart_id}}"></td>

                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="flex items-center">
                                                            <div class="flex-shrink-0 h-10 w-10">
                                                                <img class="h-10 w-10 rounded-full"
                                                                     src="{{ asset('/storage/media/images/'.$item->primary_image) }} "
                                                                     alt="">
                                                            </div>
                                                            <div class="ml-4">
                                                                <div
                                                                    class="text-sm font-medium text-gray-900">{{$item->name}}</div>
                                                                <a href="#" class="text-sm text-gray-500"></a>

                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        {{--                                                {{$item->item_list}}}--}}

                                                        @foreach(  json_decode($item->item_list) as  $key=>$prop)
                                                            <div class="text-sm text-gray-900 uppercase ">{{$key}} :
                                                                <span class="text-sm text-gray-600">{{$prop}}</span>
                                                            </div>

                                                        @endforeach

                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        @if($item->quantity==0)
                                                            <span
                                                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-red-800"> Out Of Stock</span>

                                                        @else <span
                                                            class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800"> {{$item->quantity}} InStock</span>


                                                        @endif
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                        $ {{$item->price/100}}</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{$item->quantity}}</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Add
                                                        /Remove
                                                    </td>
                                                </tr>

                                            @endforeach
                                            <!-- More ... -->
                                            </tbody>
                                        </table>

                                        <div class="grid justify-end m-2">
                                            <x-button class=" text-[.8rem] h-10 " type="submit" id="submit">
                                                {{ __('Checkout') }}
                                            </x-button>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('script')
        <script>
            $('#submit').prop("disabled", true);
            $('input:checkbox').click(function() {
                if ($(this).is(':checked')) {
                    $('#submit').prop("disabled", false);
                } else {
                    if ($('.checks').filter(':checked').length < 1){
                        $('#submit').attr('disabled',true);}
                }
            });
        </script>
    @endpush
</x-app-layout>

