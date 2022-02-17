<div
    id="product-slide-wrapper " {{$attributes->merge([ 'class'=>"flex items-center "  ]) }}>
    <img alt="left arrow" id="product_card_slideLeft" class="arrow w-5 h-7 cursor-pointer opacity-50 hover:opacity-80  "
         src="{{ asset('/storage/media/icons/chevron-left-solid.png') }}">

    <div id="product_card_slider" class="flex overflow-x-auto  scroll-smooth scroll-auto scrollbar-hide">
        {{$slot}}
    </div>

    <img alt="right arrow" id="product_card_slideRight"
         class="arrow w-5 h-7 cursor-pointer opacity-50 hover:opacity-80  "
         src="{{ asset('/storage/media/icons/chevron-right-solid.png') }}">


    <script>

        let product_card_buttonRight = document.getElementById('product_card_slideRight');
        let product_card_buttonLeft = document.getElementById('product_card_slideLeft');

        product_card_buttonLeft.addEventListener('click', function () {
            console.log("click left");
            document.getElementById('product_card_slider').scrollLeft -= 360
        })

        product_card_buttonRight.addEventListener('click', function () {
            document.getElementById('product_card_slider').scrollLeft += 360
            console.log("click right");
        })

    </script>
</div>


