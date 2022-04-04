<header class="">
    <div class="w-full text-center bg-slate-300 p-2"><h2 class="text-xl">Enjoy Shopping</h2></div>

    <nav class=" border-gray-300  px-2 sm:px-4 py-2.5  dark:bg-gray-800">

        <div class=" mt-2 container flex flex-wrap justify-between items-center mx-auto ">

            <a href="{{ route('not-set') }}">
                <x-application-logo class="w-3/4 h-full "></x-application-logo>
            </a>

            <button data-collapse-toggle="mobile-menu" type="button"
                    class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="mobile-menu-2" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                          d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                          clip-rule="evenodd"></path>
                </svg>
                <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                          d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                          clip-rule="evenodd"></path>
                </svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="mobile-menu">
                <ul class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-md md:font-bold md:text-lg">
                    <li>
                        <a href="{{ route('not-set') }}"
                           class="block py-2 pr-4 pl-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white"
                           aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="{{ route('shop') }}"
                           class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Shop</a>
                    </li>
                    <li>
                        <a href="{{ route('about-us') }}"
                           class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About</a>
                    </li>
                    <li>
                        <a href="{{ route('contact-us') }}"
                           class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
                    </li>
                    <li>
                        <a href="{{ route('blog') }}"
                           class="block py-2 pr-4 pl-3 text-gray-700 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Blog</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <div class="bg-slate-300 w-full h-0.5">
    </div>
    <div class="nav-bottom  px-2  pb-3 border-1 border-gray-100 ">

        <div class="container flex flex-wrap justify-between items-center mx-auto   px-2">

            <form method="GET" action="{{ route('search') }}" class="flex md:order-1 w-1/3 ">

                <div class="hidden relative mr-3 md:mr-0 md:block w-full">
                    <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                        <svg class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20"
                             xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                  d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                  clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <x-input name="keyword" required type="text" id="search-box"
                             class="block p-2 pl-10 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400
                             dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 text-white"
                             placeholder="Search Products..."></x-input>

                </div>
                <x-button class="ml-4">
                    {{ __('Search') }}
                </x-button>

            </form>


            @if (Route::has('login'))
                <div class=" px-6 py-4 order-2 w-1/3  flex justify-end  ">

                    <ul class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-md md:font-medium">


                        @auth
                            <li><a href="{{ route('register') }}"
                                   class="ml-4 text-md text-gray-700 dark:text-gray-500  underline">Dashboard</a></li>
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <button class="text-md text-gray-700 dark:text-gray-500 underline"
                                            :href="route('logout')"
                                            onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                        Log Out
                                    </button>
                                </form>
                            </li>
                            <li>
                                <h2 class="ml-4 text-md text-gray-700 dark:text-gray-500  font-bold">{{ Auth::user()->name }} </h2>

                            </li>


                        @else
                            <li><a href="{{ route('login') }}"
                                   class="text-md text-gray-700 dark:text-gray-500 underline">Log in</a></li>

                            @if (Route::has('register'))
                                <li><a href="{{ route('register') }}"
                                       class="ml-4 text-md text-gray-700 dark:text-gray-500 underline">Register</a></li>
                            @endif
                        @endauth


                    </ul>
                </div>
            @endif


        </div>

    </div>
    <div class="bg-slate-300 w-full h-0.5"></div>
</header>
