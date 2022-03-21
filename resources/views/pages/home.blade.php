<x-guest-layout>

    <div id="default-carousel" data-carousel="slide" class="relative mt-6">

        <!-- Carousel wrapper -->
        <div
            class="  overflow-hidden relative  rounded-lg h-56 sm:h-[24rem] md:h-[28rem]  lg:h-[32rem] xl:h-[35rem] 2xl:h-[33rem]">

            <!-- Item 1 -->
            <div id="1" class=" duration-700 ease-in-out" data-carousel-item="active">
                <img src="{{ asset('/storage/media/banners/gettyimages-5.jpg')}} "
                     class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
            </div>

            <!-- Item 2 -->
            <div id="2" class="bg-red-300 hidden  duration-700 ease-in-out" data-carousel-item="">
                <img src="{{ asset('/storage/media/banners/gettyimages-1.jpg')}} "
                     class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
            </div>

            <!-- Item 3 -->
            <div class="bg-pink-300 hidden duration-700 ease-in-out" data-carousel-item="">
                <img src="{{ asset('/storage/media/banners/gettyimages-4.jpg')}} "
                     class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                {{--                <img src="/docs/images/carousel/carousel-3.svg" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">--}}
            </div>

            <!-- Item 4 -->
            <div class="bg-green-300 hidden duration-700 ease-in-out" data-carousel-item="">
                <img src="{{ asset('/storage/media/banners/gettyimages-3.jpg')}} "
                     class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                {{--                <img src="/docs/images/carousel/carousel-4.svg" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">--}}
            </div>

            <!-- Item 5 -->
            <div class="bg-yellow-300 hidden duration-700 ease-in-out" data-carousel-item="">
                <img src="{{ asset('/storage/media/banners/gettyimages-2.jpg')}} "
                     class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                {{--                <img src="/docs/images/carousel/carousel-5.svg" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">--}}
            </div>
        </div>

        <!-- Slider indicators -->
        <div class="flex absolute bottom-5 left-1/2 space-x-3 -translate-x-1/2">
            <button type="button" class="w-3 h-3 bg-white rounded-full dark:bg-gray-800" aria-current="true"
                    aria-label="Slide 1" data-carousel-slide-to="0"></button>
            <button type="button"
                    class="w-3 h-3 rounded-full bg-white/50 dark:bg-gray-800/50 hover:bg-white dark:hover:bg-gray-800"
                    aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
            <button type="button"
                    class="w-3 h-3 rounded-full bg-white/50 dark:bg-gray-800/50 hover:bg-white dark:hover:bg-gray-800"
                    aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
            <button type="button"
                    class="w-3 h-3 rounded-full bg-white/50 dark:bg-gray-800/50 hover:bg-white dark:hover:bg-gray-800"
                    aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
            <button type="button"
                    class="w-3 h-3 rounded-full bg-white/50 dark:bg-gray-800/50 hover:bg-white dark:hover:bg-gray-800"
                    aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
        </div>

        <!-- Slider controls -->
        <button type="button"
                class="flex absolute top-0 left-0 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none"
                data-carousel-prev>
        <span
            class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor"
                 viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round"
                                                                              stroke-linejoin="round" stroke-width="2"
                                                                              d="M15 19l-7-7 7-7"></path></svg>
            <span class="hidden">Previous</span>
        </span>
        </button>
        <button type="button"
                class="flex absolute top-0 right-0 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none"
                data-carousel-next>
        <span
            class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor"
                 viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round"
                                                                              stroke-linejoin="round" stroke-width="2"
                                                                              d="M9 5l7 7-7 7"></path></svg>
            <span class="hidden">Next</span>
        </span>
        </button>
    </div>

<x-company-services></x-company-services>

    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-4 ">

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg ">

                <div class="py-4 px-1 bg-white border-b border-gray-200 ">
                    <p class="ml-8 text-3xl leading-8 font-extrabold  uppercase tracking-tight text-gray-900 sm:text-2xl ">
                        Featured Products</p>
                    <!-- product tabs-->
                    <div class="w-full">

                        <div class="mb-4 border-b border-gray-200 dark:border-gray-700">

                            <ul class="flex flex-wrap  justify-end -mb-px" id="myTab" data-tabs-toggle="#myTabContent"
                                role="tablist">
                                <li class="mr-2" role="presentation">
                                    <button
                                        class="inline-block py-4 px-4 text-md font-medium text-center text-gray-500 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:text-gray-400 dark:hover:text-gray-300"
                                        id="profile-tab" data-tabs-target="#profile" type="button" role="tab"
                                        aria-controls="profile" aria-selected="false">Trending
                                    </button>
                                </li>
                                <li class="mr-2" role="presentation">
                                    <button
                                        class="inline-block py-4 px-4 text-md font-medium text-center text-gray-500 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:text-gray-400 dark:hover:text-gray-300 active"
                                        id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab"
                                        aria-controls="dashboard" aria-selected="true">On Sale
                                    </button>
                                </li>
                                <li class="mr-2" role="presentation">
                                    <button
                                        class="inline-block py-4 px-4 text-md font-medium text-center text-gray-500 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:text-gray-400 dark:hover:text-gray-300"
                                        id="settings-tab" data-tabs-target="#settings" type="button" role="tab"
                                        aria-controls="settings" aria-selected="false">New Arrivals
                                    </button>
                                </li>

                            </ul>
                        </div>

                        <div id="myTabContent">

                            <div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="profile" role="tabpanel"
                                 aria-labelledby="profile-tab">
                                <div
                                    class=" grid justify-center sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 2xl:grid-cols-4 ">
                                    <!-- Content -->
                                @foreach($trendingProducts as $product)

                                    <!-- Product viewer  -->
                                        <x-product-slide-viewer :product="$product">

                                        </x-product-slide-viewer>

                                        <!-- end of Content -->
                                    @endforeach

                                </div>

                            </div>
                            <div class="p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="dashboard" role="tabpanel"
                                 aria-labelledby="dashboard-tab">
                                <div
                                    class=" grid justify-center sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 2xl:grid-cols-4 ">
                                    <!-- Content -->
                                @foreach($OnSaleProducts as $product)

                                    <!-- Product viewer  -->
                                        <x-product-slide-viewer :product="$product">

                                        </x-product-slide-viewer>

                                        <!-- end of Content -->
                                    @endforeach

                                </div>

                            </div>
                            <div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="settings" role="tabpanel"
                                 aria-labelledby="settings-tab">
                                <div
                                    class=" grid justify-center sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 2xl:grid-cols-4 ">
                                    <!-- Content -->
                                @foreach($newArrivals as $product)

                                    <!-- Product viewer  -->
                                        <x-product-slide-viewer :product="$product">

                                        </x-product-slide-viewer>

                                        <!-- end of Content -->
                                    @endforeach

                                </div>

                            </div>

                        </div>


                    </div>

                    <!-- end of product tabs -->




                    <!-- cta section -->
                    <div class="flex pt-8 justify-around px-2">
                        <x-CTA></x-CTA>

                        <x-CTA></x-CTA>

                    </div>
                    <!-- end of cta section -->
                    <!-- blog post -->
                    <p class="ml-8 mt-8 text-3xl leading-8 font-extrabold  uppercase tracking-tight text-gray-900 sm:text-2xl ">
                        Blog Posts</p>
                    <div class="flex mt-8 pt-4 justify-around">
                        <x-blog-post></x-blog-post>
                        <x-blog-post></x-blog-post>
                        <x-blog-post></x-blog-post>
                    </div>
                    <!-- end of blog -->
                </div>
            </div>
        </div>
    </div>

    <div>

    </div>


</x-guest-layout>
