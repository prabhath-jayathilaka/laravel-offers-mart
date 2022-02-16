<div
    id="product-card" {{$attributes->merge([ 'class'=>" w-[16rem] h-[22rem]  border-2 border-gray-600 rounded-md grid place-content-center bg-gray-200 cursor-pointer ml-1 mr-1"  ]) }}>
<div>
   <div >
    <img class=" thumbnail border-1 border-gray-600  rounded object-cover max-w-[15rem] max-h-[16rem] cursor-pointer" src="{{ asset('/storage/media/images/shoe_2.png') }} ">
   </div>
   <div class=" bg-slate-300 mt-2 rounded grid place-content-center text-center pt-2 pb-2 ">
       <h3 class="text-xl font-semibold">Nike Shoes</h3>
       <p class="text-lg text-red-700 font-semibold" >$299.99</p>
       {{-- <x-button class=" border border-gray-900 text-slate-900 font-semibold bg-inherit mb-1 hover:bg-gray-900 hover:text-gray-50 focus:outline-none ">Add To cart</x-button> --}}
   </div>
</div>

</div>
