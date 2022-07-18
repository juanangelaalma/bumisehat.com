
{{-- <div id="indicator-carousel" class="relative" data-carousel="slide">
    <!-- Carousel wrapper -->
    <div class="overflow-hidden relative h-[35rem] md:h-[30rem]">
         <!-- Item 1 -->
        <div class="duration-700 ease-in-out absolute inset-0 transition-all transform translate-x-0 z-20" data-carousel-item="active">
            <img src="https://awsimages.detik.net.id/community/media/visual/2021/11/08/ilustrasi-ibu-hamil_169.jpeg?w=700&q=90" class="block absolute object-cover top-1/2 left-1/2 h-full md:min-h-full md:w-full lg:h-auto lg:w-full -translate-x-1/2 -translate-y-1/2" alt="...">
            <div class="z-[2] w-full h-full absolute left-0 top-0 bg-dark opacity-40"></div>
            <div class="absolute w-full h-full z-10 md:w-3/5 lg:3/5 flex justify-center flex-col px-5 md:px-24 text-white">
                <h1 class="text-user-md mb-4 font-semibold">Nomor 1</h1>
                <p class="text-base mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, placeat animi? Praesentium numquam iure architecto exercitationem magnam amet unde officiis!</p>
                <div class="w-full justify-start">
                    <x-button-user>
                        Mulai Sekarang
                    </x-button-user>
                </div>
            </div>
        </div>
        <div class="duration-700 ease-in-out absolute inset-0 transition-all transform translate-x-0 z-20" data-carousel-item>
            <span class="absolute top-1/2 left-1/2 text-2xl font-semibold text-white -translate-x-1/2 -translate-y-1/2 sm:text-3xl dark:text-gray-800">First Slide</span>
            <img src="https://awsimages.detik.net.id/community/media/visual/2021/11/08/ilustrasi-ibu-hamil_169.jpeg?w=700&q=90" class="block absolute object-cover top-1/2 left-1/2 h-full md:min-h-full md:w-full lg:h-auto lg:w-full -translate-x-1/2 -translate-y-1/2" alt="...">
            <div class="z-[2] w-full h-full absolute left-0 top-0 bg-dark opacity-40"></div>
            <div class="absolute w-full h-full z-10 md:w-3/5 lg:3/5 flex justify-center flex-col px-5 md:px-24 text-white">
                <h1 class="text-user-md mb-4 font-semibold">Nomor 2</h1>
                <p class="text-base mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, placeat animi? Praesentium numquam iure architecto exercitationem magnam amet unde officiis!</p>
                <div class="w-full justify-start">
                    <x-button-user>
                        Mulai Sekarang
                    </x-button-user>
                </div>
            </div>
        </div>
        
    </div>
    <!-- Slider indicators -->
    <div class="flex absolute bottom-5 left-1/2 z-30 space-x-3 -translate-x-1/2">
        <button type="button" class="w-3 h-3 rounded-full bg-white dark:bg-gray-800" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
        <button type="button" class="w-3 h-3 rounded-full bg-white/50 dark:bg-gray-800/50 hover:bg-white dark:hover:bg-gray-800" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
        <button type="button" class="w-3 h-3 rounded-full bg-white/50 dark:bg-gray-800/50 hover:bg-white dark:hover:bg-gray-800" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
    </div>
    <!-- Slider controls -->
    <button type="button" class="hidden md:flex absolute top-0 left-0 z-30 justify-center items-center px-5 h-full cursor-pointer group focus:outline-none" data-carousel-prev="">
        <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
            <span class="hidden">Previous</span>
        </span>
    </button>
    <button type="button" class="hidden md:flex absolute top-0 right-0 z-30 justify-center items-center px-5 h-full cursor-pointer group focus:outline-none" data-carousel-next="">
        <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            <span class="hidden">Next</span>
        </span>
    </button>
</div> --}}



<div id="indicators-carousel" class="relative" data-carousel="static">
    <!-- Carousel wrapper -->
    <div class="overflow-hidden relative h-[35rem] md:h-[30rem]">
         <!-- Item 1 -->
        @foreach ($shorts as $short)
        <div class="duration-700 ease-in-out absolute inset-0 transition-all transform translate-x-0 z-20" data-carousel-item="active">
            <img src="{{ asset("storage/uploads/short_contents/thumbnails/$short->image") }}" class="block absolute object-cover top-1/2 left-1/2 h-full md:min-h-full md:w-full lg:h-auto lg:w-full -translate-x-1/2 -translate-y-1/2" alt="...">
            <div class="z-[2] w-full h-full absolute left-0 top-0 bg-dark opacity-40"></div>
            <div class="absolute w-full h-full z-10 md:w-3/5 lg:3/5 flex justify-center flex-col px-5 md:px-24 text-white">
                <h1 class="text-user-md mb-4 font-semibold">Nomor 1</h1>
                <p class="text-base mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, placeat animi? Praesentium numquam iure architecto exercitationem magnam amet unde officiis!</p>
                <div class="w-full justify-start">
                    <x-button-user>
                        Mulai Sekarang
                    </x-button-user>
                </div>
            </div>
        </div>
        @endforeach
        <!-- Item 2 -->
        <div class="duration-700 ease-in-out absolute inset-0 transition-all transform translate-x-full z-10" data-carousel-item="">
            <img src="https://awsimages.detik.net.id/community/media/visual/2021/11/08/ilustrasi-ibu-hamil_169.jpeg?w=700&q=90" class="block absolute object-cover top-1/2 left-1/2 h-full md:min-h-full md:w-full lg:h-auto lg:w-full -translate-x-1/2 -translate-y-1/2" alt="...">
            <div class="z-[2] w-full h-full absolute left-0 top-0 bg-dark opacity-40"></div>
            <div class="absolute w-full h-full z-10 md:w-3/5 lg:3/5 flex justify-center flex-col px-5 md:px-24 text-white">
                <h1 class="text-user-md mb-4 font-semibold">Nomor 1</h1>
                <p class="text-base mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, placeat animi? Praesentium numquam iure architecto exercitationem magnam amet unde officiis!</p>
                <div class="w-full justify-start">
                    <x-button-user>
                        Mulai Sekarang
                    </x-button-user>
                </div>
            </div>
        </div>
        <div class="duration-700 ease-in-out absolute inset-0 transition-all transform translate-x-full z-10" data-carousel-item="">
            <img src="https://awsimages.detik.net.id/community/media/visual/2021/11/08/ilustrasi-ibu-hamil_169.jpeg?w=700&q=90" class="block absolute object-cover top-1/2 left-1/2 h-full md:min-h-full md:w-full lg:h-auto lg:w-full -translate-x-1/2 -translate-y-1/2" alt="...">
            <div class="z-[2] w-full h-full absolute left-0 top-0 bg-dark opacity-40"></div>
            <div class="absolute w-full h-full z-10 md:w-3/5 lg:3/5 flex justify-center flex-col px-5 md:px-24 text-white">
                <h1 class="text-user-md mb-4 font-semibold">Nomor 1</h1>
                <p class="text-base mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, placeat animi? Praesentium numquam iure architecto exercitationem magnam amet unde officiis!</p>
                <div class="w-full justify-start">
                    <x-button-user>
                        Mulai Sekarang
                    </x-button-user>
                </div>
            </div>
        </div>
    </div>
    <!-- Slider indicators -->
    <div class="flex absolute bottom-5 left-1/2 z-30 space-x-3 -translate-x-1/2">
        <button type="button" class="w-3 h-3 rounded-full bg-white/50 dark:bg-gray-800/50 hover:bg-white dark:hover:bg-gray-800" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="0"></button>
    </div>
    <!-- Slider controls -->
    <button type="button" class="flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-prev="">
        <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
            <span class="sr-only">Previous</span>
        </span>
    </button>
    <button type="button" class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-next="">
        <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            <span class="sr-only">Next</span>
        </span>
    </button>
</div>
