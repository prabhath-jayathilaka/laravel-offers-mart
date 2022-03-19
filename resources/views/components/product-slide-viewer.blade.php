<div
    id="product-card" {{$attributes->merge([ 'class'=>" min-w-[16rem] max-w-[16.5rem] h-[22rem]  border-2 border-gray-600 rounded-md grid place-content-center bg-gray-200 cursor-pointer m-2"  ]) }}>
    <div>
        <form method="POST" action="{{ route('add-to-cart') }}">
            @method('POST')
            @csrf
            <input type="hidden" name="product_id" value="{{$product->id}}">
            <div class=" relative w-[15rem] h-[16rem] mt-1">
            <span
                class=" absolute  top-1 right-1 discount-tag bg-gray-50 p-1 uppercase text-red-700 rounded   ">50% off</span>
                <a href="{{ route('show-product',  $product->slug)}}">
                    <img alt="Primary Image"
                         class=" thumbnail border-1 border-gray-600  rounded object-cover w-full h-full "
                         src="{{ asset('/storage/media/images/'.$product->primary_image) }} ">
                </a>
                <div class=" absolute inset-x-0 bottom-0 w-full h-1/6  grid place-content-center">
                    <x-button-add-cart-one data-modal-toggle="add-to-cart-model" type="button "
                                           class="p-1.5 border border-gray-900 text-slate-900 font-semi-bold bg-inherit hover:bg-gray-900 hover:text-gray-50 focus:outline-none ">
                        Add To cart
                    </x-button-add-cart-one>

                    <!-- cart-model  -->

                    <div id="add-to-cart-model" aria-hidden="true"
            `             class=" bg-gray-200 bg-opacity-75 hidden overflow-x-hidden overflow-y-auto fixed h-modal md:h-full top-4 left-0 right-0 md:inset-0 z-50 justify-center items-center">
                        <div class="relative w-full max-w-2xl px-4 h-full md:h-auto ">
                            <!-- Modal content -->
                            <div class="bg-white rounded-lg shadow relative border-2 border-gray-300 ">
                                <!-- Modal header -->
                                <div
                                    class="flex items-start justify-between p-5 border-b rounded-t dark:border-gray-600">
                                    <h3 class="text-gray-900 text-xl lg:text-xl font-semi-bold ">
                                        select Your Product Variation

                                    </h3>
                                    <button type="button"
                                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                            data-modal-toggle="add-to-cart-model">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                  d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                  clip-rule="evenodd"></path>
                                        </svg>
                                    </button>
                                </div>
                                <!-- Modal body -->
                                <div class="p-6 space-y-6">
                                    @foreach($product->attributes as  $key=>$attribute)
                                        <div class="pro-detail-wrap pt-1">
                                            <h2 class="text-lg">{{ $key }} :</h2>
                                            <select name="{{ $key }}" class="pl-2 block w-full  border-0 h-[2.7rem] align-middle scrollbar-hide" multiple required>
                                                @foreach( $attribute as $value )
                                                    <option value="{{$value}}" class="pl-2 pr-2 border border-gray-400 rounded ml-2 inline-block">
                                                        {{$value}}
                                                    </option>
                                                @endforeach
                                            </select>

                                        </div>
                                    @endforeach

                                    <div class="action pt-5">
                                        <h2 class="text-lg">Quantity:</h2>
                                        <div class="flex w-60 items-center pl-4 pt-1 ontent-between">
                                            <x-input id="quantity" class=" border-2 mt-1 w-20 p-0" type="number"
                                                     min="1" max="{{$product->quantity}}"  name="quantity" :value="1" required></x-input>
                                            <div
                                                class=" ml-8 leading-5 font-semi-bold rounded-md bg-green-100 text-green-800 h-[1.73rem] flex items-center">
                                                @if($product->quantity==0)
                                                    <P class="p-1 bg-red-100 text-red-800">Out Stock</P>
                                                @else <P class="p-1">{{$product->quantity}} In Stock</P>
                                                @endif

                                            </div>
                                        </div>

                                        <div> Share social Links</div>
                                    </div>
                                </div>
                                <!-- Modal footer -->
                                <div
                                    class="flex space-x-2 items-center p-6 border-t border-gray-200 rounded-b dark:border-gray-600">
                                    <button data-modal-toggle="return-model" type="submit"
                                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                        Continue
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end cart-model  -->
                </div>

            </div>
            <div class=" bg-slate-300 mt-2 rounded grid place-content-center text-center  pt-2 pb-2 ">
                <h3 class=" max-w-[13.125rem] text-base font-semi-bold truncate ...mr-1 ml-1 ">  {{  $product->name}}</h3>
                <p class="text-lg text-red-700 font-semi-bold"> $ {{  $product->price/100}} <span
                        class=" pl-2 text-sm text-gray-400 font-semi-bold line-through">$ {{  $product->old_price/100}}</span></p>

            </div>
        </form>
    </div>

</div>



