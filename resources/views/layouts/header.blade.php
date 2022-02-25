<header>
    This is header
    <form method="GET" action="{{ route('search') }}">
        <div class=" max-w-2xl flex">
            <x-input placeholder="search products .... " id="first_name" class="block mt-1 w-full" type="text"
                     name="keyword">"
                required >
            </x-input>

            <div class="flex items-center justify-end mt-4">
                <x-button class="ml-4">
                    {{ __('Search') }}
                </x-button>
            </div>
        </div>
    </form>
</header>
