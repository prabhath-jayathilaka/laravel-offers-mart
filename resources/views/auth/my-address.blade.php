<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semi-bold text-xl text-gray-800 leading-tight">
            {{ __('Edit Shipping address') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="grid grid-cols-2 gap-4 p-5">
                        <div>
                        {{--                        <x-auth-validation-errors class="mb-4" :errors="$errors"></x-auth-validation-errors>--}}
                        <!-- Alert Messages  -->
                            @if ( session('success-message'))
                                <x-success-message> {{session('success-message')}}</x-success-message>
                            @endif
                            @if ( session('error-message'))
                                <x-error-message> {{session('error-message')}}</x-error-message>
                        @endif

                        <!-- Form -->
                            <form method="POSt" action="{{ route('update-address') }}">
                            @method('PUT')
                            @csrf

                            <!-- Name -->
                                <div>
                                    <x-label for="first_name" :value="__('First Name')"></x-label>

                                    <x-input id="first_name" class="block mt-1 w-full" type="text" name="first_name" :value="old('first_name')" required autofocus></x-input>
                                </div>

                                <div>
                                    <x-label for="last_name" :value="__('Last Name')"></x-label>

                                    <x-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" :value="old('last_name')" required autofocus></x-input>
                                </div>

                            {{--                            <!-- Address 1 -->--}}
                            {{--                            <div>--}}
                            {{--                                <x-label for="address_1" :value="__('Address 1')"></x-label>--}}

                            {{--                                <x-input id="address_1" class="block mt-1 w-full" type="text" name="address_1" :value="old('address_1')" required autofocus></x-input>--}}
                            {{--                            </div>--}}

                            {{--                            <!-- Address 2 -->--}}
                            {{--                            <div>--}}
                            {{--                                <x-label for="address_2" :value="__('Address 2')"></x-label>--}}

                            {{--                                <x-input id="address_2" class="block mt-1 w-full" type="text" name="address_2" :value="old('address_2')"  autofocus></x-input>--}}
                            {{--                            </div>--}}

                            {{--                            <!-- city -->--}}
                            {{--                            <div>--}}
                            {{--                                <x-label for="city" :value="__('City')"></x-label>--}}

                            {{--                                <x-input id="city" class="block mt-1 w-full" type="text" name="city" :value="old('city')"  autofocus></x-input>--}}

                            {{--                            </div>--}}

                            {{--                            <!-- Post code -->--}}
                            {{--                            <div>--}}
                            {{--                                <x-label for="post_code" :value="__('Post Code')"></x-label>--}}

                            {{--                                <x-input id="post_code" class="block mt-1 w-full" type="text" name="post_code" :value="old('post_code')"  autofocus></x-input>--}}

                            {{--                            </div>--}}
                            {{--                            <!-- Country-->--}}
                            {{--                            <div>--}}
                            {{--                                <x-label for="country" :value="__('Country')"></x-label>--}}

                            {{--                                <x-input id="country" class="block mt-1 w-full" type="text" name="country" :value="old('country')"  autofocus></x-input>--}}

                            {{--                            </div>--}}

                            {{--                            <!-- State-->--}}
                            {{--                            <div>--}}
                            {{--                                <x-label for="state" :value="__('State')"></x-label>--}}

                            {{--                                <x-input id="state" class="block mt-1 w-full" type="text" name="state" :value="old('state')"  autofocus></x-input>--}}

                            {{--                            </div>--}}
                            {{--                            <!-- id default Address-->--}}
                            {{--                            <div>--}}

                            {{--                                <x-label for="state" :value="__('Default Address')">  </x-label>--}}
                            {{--                                <input type="checkbox" name="isdefault"  value="true" class="appearance-none indeterminate:bg-gray-300" />--}}

                            {{--                            </div>--}}

                            <!-- Submit button-->
                                <div class="flex items-center justify-end mt-4">
                                    <x-button class="ml-4">
                                        {{ __('Continue') }}
                                    </x-button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
