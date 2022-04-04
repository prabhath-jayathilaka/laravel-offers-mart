<div>
    <h2>Blank Page</h2>

    @if ( session('message') )
        <div {{ $attributes }}>
            <div class="font-medium text-red-600">
                {{ __('Whoops! Something went wrong.') }}
            </div>

            {{ session('message') }}
        </div>
    @endif

</div>
