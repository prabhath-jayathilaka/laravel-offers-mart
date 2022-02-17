<a
    id="product-card" {{$attributes->merge([ 'class'=>" min-w-[16rem] max-w-[16.5rem] h-[22rem]  border-2 border-gray-600 rounded-md grid place-content-center bg-gray-200 cursor-pointer m-2"  ]) }}>
    <div>
        <div class=" relative w-[15rem] h-[16rem] mt-1">
            <span
                class=" absolute  top-1 right-1 discount-tag bg-gray-50 p-1 uppercase text-red-700 rounded   ">50% off</span>

            {{$image}}

            <div class=" absolute inset-x-0 bottom-0 w-full h-1/6  grid place-content-center">
                <x-button-add-cart-one
                    class="p-1.5 border border-gray-900 text-slate-900 font-semi-bold bg-inherit hover:bg-gray-900 hover:text-gray-50 focus:outline-none ">
                    Add To cart
                </x-button-add-cart-one>
            </div>

        </div>
        <div class=" bg-slate-300 mt-2 rounded grid place-content-center text-center  pt-2 pb-2 ">
            <h3 class=" max-w-[13.125rem] text-base font-semi-bold truncate ...mr-1 ml-1 ">{{$title}}</h3>
            <p class="text-lg text-red-700 font-semi-bold"> $ {{$newprice}}<span
                    class=" pl-2 text-sm text-gray-400 font-semi-bold line-through">$ {{$oldprice}}</span></p>
        </div>
    </div>

</a>
