<div
    id="product-slide-wrapper " {{$attributes->merge([ 'class'=>"flex items-center "  ]) }}>
    <img id="card_slideLeft" class="arrow w-5 h-7 cursor-pointer opacity-50 hover:opacity-80  "  src="{{ asset('/storage/media/icons/chevron-left-solid.png') }}">

    <div id="card_slider" class="flex overflow-x-auto">
{{$slot}}
    </div>

    <img id="card_slideRight" class="arrow w-5 h-7 cursor-pointer opacity-50 hover:opacity-80  "  src="{{ asset('/storage/media/icons/chevron-right-solid.png') }}">

    <script>
        console.log("viewer");
            let card_buttonRight = document.getElementById('card_slideRight');
            let card_buttonLeft = document.getElementById('card_slideLeft');

           card_buttonLeft.addEventListener('click', function(){
               console.log("click left");
            document.getElementById('card_slider').scrollLeft -= 180
        })

        card_buttonRight.addEventListener('click', function(){
            document.getElementById('card_slider').scrollLeft += 180
            console.log("click right");
        })

    </script>
</div>


