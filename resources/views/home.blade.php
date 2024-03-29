@extends('layouts.user', ['active' => 'home'])

@section('content')
    <x-carousel></x-carousel>
    <div class="py-10">
        <x-title-section title="SELAMAT DATANG DI WANITA SUBUR" desc="kami menawarkan beberapa fitur yang bisa anda gunakan"
            line={{ true }}></x-title-section>
        <div class="px-4 py-10 md:px-24 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
            <a href=""
                class="flex items-center w-full bg-white px-4 py-10 h-[25rem] md:h-[20rem] transition-hover duration-500 hover:shadow-lg border hover:border-gray-100 cursor-pointer rounded-lg">
                <div class="flex flex-col items-center">
                    <div class="mb-4">
                        <img src="/svg/health-orange.svg">
                    </div>

                    <h4 class="mb-4 text-xl md:text-lg text-dark font-bold">Materi</h4>
                    <p class="text-center text-base text-dark md:text-base font-light">Lorem ipsum dolor sit, amet
                        consectetur adipisicing elit. Dignissimos quaerat nulla debitis tenetur voluptatibus consequatur
                        sapiente ratione vel itaque fugiat.</p>
                </div>

            </a>
            <a href=""
                class="flex items-center w-full bg-white px-4 py-10 h-[25rem] md:h-[20rem] transition-hover duration-500 hover:shadow-lg border hover:border-gray-100 cursor-pointer rounded-lg">
                <div class="flex flex-col items-center">
                    <div class="mb-4">
                        <img src="/svg/alert-orange.svg">
                    </div>

                    <h4 class="mb-4 text-xl md:text-lg text-dark font-bold">Tentang Stunting</h4>
                    <p class="text-center text-base text-dark md:text-base font-light">Lorem ipsum dolor sit, amet
                        consectetur adipisicing elit. Dignissimos quaerat nulla debitis tenetur voluptatibus consequatur
                        sapiente ratione vel itaque fugiat.</p>
                </div>

            </a>
            <a href=""
                class="flex items-center w-full bg-white px-4 py-10 h-[25rem] md:h-[20rem] transition-hover duration-500 hover:shadow-lg border hover:border-gray-100 cursor-pointer rounded-lg">
                <div class="flex flex-col items-center">
                    <div class="mb-4">
                        <img src="/svg/calculator.svg">
                    </div>

                    <h4 class="mb-4 text-xl md:text-lg text-dark font-bold">Kalkulator BMI</h4>
                    <p class="text-center text-base text-dark md:text-base font-light">Lorem ipsum dolor sit, amet
                        consectetur adipisicing elit. Dignissimos quaerat nulla debitis tenetur voluptatibus consequatur
                        sapiente ratione vel itaque fugiat.</p>
                </div>

            </a>

            <a href=""
                class="flex items-center w-full bg-white px-4 py-10 h-[25rem] md:h-[20rem] transition-hover duration-500 hover:shadow-lg border hover:border-gray-100 cursor-pointer rounded-lg">
                <div class="flex flex-col items-center">
                    <div class="mb-4">
                        <img src="/svg/nutrition.svg">
                    </div>

                    <h4 class="mb-4 text-xl md:text-lg text-dark font-bold">Nutrisi</h4>
                    <p class="text-center text-base text-dark md:text-base font-light">Lorem ipsum dolor sit, amet
                        consectetur adipisicing elit. Dignissimos quaerat nulla debitis tenetur voluptatibus consequatur
                        sapiente ratione vel itaque fugiat.</p>
                </div>

            </a>
        </div>
    </div>
@endsection
