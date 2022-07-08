@extends('layouts.user', ['active' => 'home'])

@section('content')
    <x-carousel></x-carousel>
    <div class="py-10">
        <x-title-section title="SELAMAT DATANG DI BUMIL SEHAT" desc="kami menawarkan beberapa fitur yang bisa anda gunakan" line={{ true }}></x-title-section>
    <div class="px-4 py-10 md:px-24 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
        <div class="flex items-center w-full bg-white px-4 py-10 h-[25rem] md:h-[20rem] shadow-lg">
            <div class="flex flex-col items-center"> 
                <div class="mb-4">
                    <svg width="63" height="63" viewBox="0 0 63 63" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="31.5" cy="31.5" r="31.5" fill="#FF8039" fill-opacity="0.54" />
                        <path
                            d="M42.2916 16.9167H20.7083C19.4816 16.9167 18.3052 17.3777 17.4379 18.1982C16.5705 19.0186 16.0833 20.1314 16.0833 21.2917V41.7084C16.0833 42.8687 16.5705 43.9815 17.4379 44.802C18.3052 45.6225 19.4816 46.0834 20.7083 46.0834H42.2916C43.5182 46.0834 44.6946 45.6225 45.562 44.802C46.4293 43.9815 46.9166 42.8687 46.9166 41.7084V21.2917C46.9166 20.1314 46.4293 19.0186 45.562 18.1982C44.6946 17.3777 43.5182 16.9167 42.2916 16.9167ZM43.8333 41.7084C43.8333 42.0952 43.6708 42.4661 43.3817 42.7396C43.0926 43.0131 42.7005 43.1667 42.2916 43.1667H20.7083C20.2994 43.1667 19.9072 43.0131 19.6181 42.7396C19.329 42.4661 19.1666 42.0952 19.1666 41.7084V21.2917C19.1666 20.905 19.329 20.534 19.6181 20.2606C19.9072 19.9871 20.2994 19.8334 20.7083 19.8334H42.2916C42.7005 19.8334 43.0926 19.9871 43.3817 20.2606C43.6708 20.534 43.8333 20.905 43.8333 21.2917V41.7084ZM39.2083 27.1251H36.1249V24.2084C36.1249 23.8216 35.9625 23.4507 35.6734 23.1772C35.3843 22.9037 34.9921 22.7501 34.5833 22.7501H28.4166C28.0077 22.7501 27.6156 22.9037 27.3265 23.1772C27.0373 23.4507 26.8749 23.8216 26.8749 24.2084V27.1251H23.7916C23.3827 27.1251 22.9906 27.2787 22.7015 27.5522C22.4123 27.8257 22.2499 28.1966 22.2499 28.5834V34.4167C22.2499 34.8035 22.4123 35.1745 22.7015 35.4479C22.9906 35.7214 23.3827 35.8751 23.7916 35.8751H26.8749V38.7917C26.8749 39.1785 27.0373 39.5495 27.3265 39.8229C27.6156 40.0964 28.0077 40.2501 28.4166 40.2501H34.5833C34.9921 40.2501 35.3843 40.0964 35.6734 39.8229C35.9625 39.5495 36.1249 39.1785 36.1249 38.7917V35.8751H39.2083C39.6171 35.8751 40.0093 35.7214 40.2984 35.4479C40.5875 35.1745 40.7499 34.8035 40.7499 34.4167V28.5834C40.7499 28.1966 40.5875 27.8257 40.2984 27.5522C40.0093 27.2787 39.6171 27.1251 39.2083 27.1251ZM37.6666 32.9584H34.5833C34.1744 32.9584 33.7822 33.1121 33.4931 33.3855C33.204 33.659 33.0416 34.03 33.0416 34.4167V37.3334H29.9583V34.4167C29.9583 34.03 29.7958 33.659 29.5067 33.3855C29.2176 33.1121 28.8255 32.9584 28.4166 32.9584H25.3333V30.0417H28.4166C28.8255 30.0417 29.2176 29.8881 29.5067 29.6146C29.7958 29.3411 29.9583 28.9702 29.9583 28.5834V25.6667H33.0416V28.5834C33.0416 28.9702 33.204 29.3411 33.4931 29.6146C33.7822 29.8881 34.1744 30.0417 34.5833 30.0417H37.6666V32.9584Z"
                            fill="#066F6A" />
                    </svg>
                </div>
        
                <h4 class="mb-4 text-xl md:text-lg text-dark font-bold">Quiz</h4>
                <p class="text-center text-lg text-dark md:text-base font-light">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dignissimos quaerat nulla debitis tenetur voluptatibus consequatur sapiente ratione vel itaque fugiat.</p>
            </div>
        
        </div>
        <div class="flex items-center w-full bg-white px-4 py-10 h-[25rem] md:h-[20rem] shadow-lg">
            <div class="flex flex-col items-center"> 
                <div class="mb-4">
                    <svg width="63" height="63" viewBox="0 0 63 63" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="31.5" cy="31.5" r="31.5" fill="#FF8039" fill-opacity="0.54" />
                        <path
                            d="M42.2916 16.9167H20.7083C19.4816 16.9167 18.3052 17.3777 17.4379 18.1982C16.5705 19.0186 16.0833 20.1314 16.0833 21.2917V41.7084C16.0833 42.8687 16.5705 43.9815 17.4379 44.802C18.3052 45.6225 19.4816 46.0834 20.7083 46.0834H42.2916C43.5182 46.0834 44.6946 45.6225 45.562 44.802C46.4293 43.9815 46.9166 42.8687 46.9166 41.7084V21.2917C46.9166 20.1314 46.4293 19.0186 45.562 18.1982C44.6946 17.3777 43.5182 16.9167 42.2916 16.9167ZM43.8333 41.7084C43.8333 42.0952 43.6708 42.4661 43.3817 42.7396C43.0926 43.0131 42.7005 43.1667 42.2916 43.1667H20.7083C20.2994 43.1667 19.9072 43.0131 19.6181 42.7396C19.329 42.4661 19.1666 42.0952 19.1666 41.7084V21.2917C19.1666 20.905 19.329 20.534 19.6181 20.2606C19.9072 19.9871 20.2994 19.8334 20.7083 19.8334H42.2916C42.7005 19.8334 43.0926 19.9871 43.3817 20.2606C43.6708 20.534 43.8333 20.905 43.8333 21.2917V41.7084ZM39.2083 27.1251H36.1249V24.2084C36.1249 23.8216 35.9625 23.4507 35.6734 23.1772C35.3843 22.9037 34.9921 22.7501 34.5833 22.7501H28.4166C28.0077 22.7501 27.6156 22.9037 27.3265 23.1772C27.0373 23.4507 26.8749 23.8216 26.8749 24.2084V27.1251H23.7916C23.3827 27.1251 22.9906 27.2787 22.7015 27.5522C22.4123 27.8257 22.2499 28.1966 22.2499 28.5834V34.4167C22.2499 34.8035 22.4123 35.1745 22.7015 35.4479C22.9906 35.7214 23.3827 35.8751 23.7916 35.8751H26.8749V38.7917C26.8749 39.1785 27.0373 39.5495 27.3265 39.8229C27.6156 40.0964 28.0077 40.2501 28.4166 40.2501H34.5833C34.9921 40.2501 35.3843 40.0964 35.6734 39.8229C35.9625 39.5495 36.1249 39.1785 36.1249 38.7917V35.8751H39.2083C39.6171 35.8751 40.0093 35.7214 40.2984 35.4479C40.5875 35.1745 40.7499 34.8035 40.7499 34.4167V28.5834C40.7499 28.1966 40.5875 27.8257 40.2984 27.5522C40.0093 27.2787 39.6171 27.1251 39.2083 27.1251ZM37.6666 32.9584H34.5833C34.1744 32.9584 33.7822 33.1121 33.4931 33.3855C33.204 33.659 33.0416 34.03 33.0416 34.4167V37.3334H29.9583V34.4167C29.9583 34.03 29.7958 33.659 29.5067 33.3855C29.2176 33.1121 28.8255 32.9584 28.4166 32.9584H25.3333V30.0417H28.4166C28.8255 30.0417 29.2176 29.8881 29.5067 29.6146C29.7958 29.3411 29.9583 28.9702 29.9583 28.5834V25.6667H33.0416V28.5834C33.0416 28.9702 33.204 29.3411 33.4931 29.6146C33.7822 29.8881 34.1744 30.0417 34.5833 30.0417H37.6666V32.9584Z"
                            fill="#066F6A" />
                    </svg>
                </div>
        
                <h4 class="mb-4 text-xl md:text-lg text-dark font-bold">Quiz</h4>
                <p class="text-center text-lg text-dark md:text-base font-light">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dignissimos quaerat nulla debitis tenetur voluptatibus consequatur sapiente ratione vel itaque fugiat.</p>
            </div>
        
        </div>
        <div class="flex items-center w-full bg-white px-4 py-10 h-[25rem] md:h-[20rem] shadow-lg">
            <div class="flex flex-col items-center"> 
                <div class="mb-4">
                    <svg width="63" height="63" viewBox="0 0 63 63" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="31.5" cy="31.5" r="31.5" fill="#FF8039" fill-opacity="0.54" />
                        <path
                            d="M42.2916 16.9167H20.7083C19.4816 16.9167 18.3052 17.3777 17.4379 18.1982C16.5705 19.0186 16.0833 20.1314 16.0833 21.2917V41.7084C16.0833 42.8687 16.5705 43.9815 17.4379 44.802C18.3052 45.6225 19.4816 46.0834 20.7083 46.0834H42.2916C43.5182 46.0834 44.6946 45.6225 45.562 44.802C46.4293 43.9815 46.9166 42.8687 46.9166 41.7084V21.2917C46.9166 20.1314 46.4293 19.0186 45.562 18.1982C44.6946 17.3777 43.5182 16.9167 42.2916 16.9167ZM43.8333 41.7084C43.8333 42.0952 43.6708 42.4661 43.3817 42.7396C43.0926 43.0131 42.7005 43.1667 42.2916 43.1667H20.7083C20.2994 43.1667 19.9072 43.0131 19.6181 42.7396C19.329 42.4661 19.1666 42.0952 19.1666 41.7084V21.2917C19.1666 20.905 19.329 20.534 19.6181 20.2606C19.9072 19.9871 20.2994 19.8334 20.7083 19.8334H42.2916C42.7005 19.8334 43.0926 19.9871 43.3817 20.2606C43.6708 20.534 43.8333 20.905 43.8333 21.2917V41.7084ZM39.2083 27.1251H36.1249V24.2084C36.1249 23.8216 35.9625 23.4507 35.6734 23.1772C35.3843 22.9037 34.9921 22.7501 34.5833 22.7501H28.4166C28.0077 22.7501 27.6156 22.9037 27.3265 23.1772C27.0373 23.4507 26.8749 23.8216 26.8749 24.2084V27.1251H23.7916C23.3827 27.1251 22.9906 27.2787 22.7015 27.5522C22.4123 27.8257 22.2499 28.1966 22.2499 28.5834V34.4167C22.2499 34.8035 22.4123 35.1745 22.7015 35.4479C22.9906 35.7214 23.3827 35.8751 23.7916 35.8751H26.8749V38.7917C26.8749 39.1785 27.0373 39.5495 27.3265 39.8229C27.6156 40.0964 28.0077 40.2501 28.4166 40.2501H34.5833C34.9921 40.2501 35.3843 40.0964 35.6734 39.8229C35.9625 39.5495 36.1249 39.1785 36.1249 38.7917V35.8751H39.2083C39.6171 35.8751 40.0093 35.7214 40.2984 35.4479C40.5875 35.1745 40.7499 34.8035 40.7499 34.4167V28.5834C40.7499 28.1966 40.5875 27.8257 40.2984 27.5522C40.0093 27.2787 39.6171 27.1251 39.2083 27.1251ZM37.6666 32.9584H34.5833C34.1744 32.9584 33.7822 33.1121 33.4931 33.3855C33.204 33.659 33.0416 34.03 33.0416 34.4167V37.3334H29.9583V34.4167C29.9583 34.03 29.7958 33.659 29.5067 33.3855C29.2176 33.1121 28.8255 32.9584 28.4166 32.9584H25.3333V30.0417H28.4166C28.8255 30.0417 29.2176 29.8881 29.5067 29.6146C29.7958 29.3411 29.9583 28.9702 29.9583 28.5834V25.6667H33.0416V28.5834C33.0416 28.9702 33.204 29.3411 33.4931 29.6146C33.7822 29.8881 34.1744 30.0417 34.5833 30.0417H37.6666V32.9584Z"
                            fill="#066F6A" />
                    </svg>
                </div>
        
                <h4 class="mb-4 text-xl md:text-lg text-dark font-bold">Quiz</h4>
                <p class="text-center text-lg text-dark md:text-base font-light">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dignissimos quaerat nulla debitis tenetur voluptatibus consequatur sapiente ratione vel itaque fugiat.</p>
            </div>
        
        </div>
        <div class="flex items-center w-full bg-white px-4 py-10 h-[25rem] md:h-[20rem] shadow-lg">
            <div class="flex flex-col items-center"> 
                <div class="mb-4">
                    <svg width="63" height="63" viewBox="0 0 63 63" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="31.5" cy="31.5" r="31.5" fill="#FF8039" fill-opacity="0.54" />
                        <path
                            d="M42.2916 16.9167H20.7083C19.4816 16.9167 18.3052 17.3777 17.4379 18.1982C16.5705 19.0186 16.0833 20.1314 16.0833 21.2917V41.7084C16.0833 42.8687 16.5705 43.9815 17.4379 44.802C18.3052 45.6225 19.4816 46.0834 20.7083 46.0834H42.2916C43.5182 46.0834 44.6946 45.6225 45.562 44.802C46.4293 43.9815 46.9166 42.8687 46.9166 41.7084V21.2917C46.9166 20.1314 46.4293 19.0186 45.562 18.1982C44.6946 17.3777 43.5182 16.9167 42.2916 16.9167ZM43.8333 41.7084C43.8333 42.0952 43.6708 42.4661 43.3817 42.7396C43.0926 43.0131 42.7005 43.1667 42.2916 43.1667H20.7083C20.2994 43.1667 19.9072 43.0131 19.6181 42.7396C19.329 42.4661 19.1666 42.0952 19.1666 41.7084V21.2917C19.1666 20.905 19.329 20.534 19.6181 20.2606C19.9072 19.9871 20.2994 19.8334 20.7083 19.8334H42.2916C42.7005 19.8334 43.0926 19.9871 43.3817 20.2606C43.6708 20.534 43.8333 20.905 43.8333 21.2917V41.7084ZM39.2083 27.1251H36.1249V24.2084C36.1249 23.8216 35.9625 23.4507 35.6734 23.1772C35.3843 22.9037 34.9921 22.7501 34.5833 22.7501H28.4166C28.0077 22.7501 27.6156 22.9037 27.3265 23.1772C27.0373 23.4507 26.8749 23.8216 26.8749 24.2084V27.1251H23.7916C23.3827 27.1251 22.9906 27.2787 22.7015 27.5522C22.4123 27.8257 22.2499 28.1966 22.2499 28.5834V34.4167C22.2499 34.8035 22.4123 35.1745 22.7015 35.4479C22.9906 35.7214 23.3827 35.8751 23.7916 35.8751H26.8749V38.7917C26.8749 39.1785 27.0373 39.5495 27.3265 39.8229C27.6156 40.0964 28.0077 40.2501 28.4166 40.2501H34.5833C34.9921 40.2501 35.3843 40.0964 35.6734 39.8229C35.9625 39.5495 36.1249 39.1785 36.1249 38.7917V35.8751H39.2083C39.6171 35.8751 40.0093 35.7214 40.2984 35.4479C40.5875 35.1745 40.7499 34.8035 40.7499 34.4167V28.5834C40.7499 28.1966 40.5875 27.8257 40.2984 27.5522C40.0093 27.2787 39.6171 27.1251 39.2083 27.1251ZM37.6666 32.9584H34.5833C34.1744 32.9584 33.7822 33.1121 33.4931 33.3855C33.204 33.659 33.0416 34.03 33.0416 34.4167V37.3334H29.9583V34.4167C29.9583 34.03 29.7958 33.659 29.5067 33.3855C29.2176 33.1121 28.8255 32.9584 28.4166 32.9584H25.3333V30.0417H28.4166C28.8255 30.0417 29.2176 29.8881 29.5067 29.6146C29.7958 29.3411 29.9583 28.9702 29.9583 28.5834V25.6667H33.0416V28.5834C33.0416 28.9702 33.204 29.3411 33.4931 29.6146C33.7822 29.8881 34.1744 30.0417 34.5833 30.0417H37.6666V32.9584Z"
                            fill="#066F6A" />
                    </svg>
                </div>
        
                <h4 class="mb-4 text-xl md:text-lg text-dark font-bold">Quiz</h4>
                <p class="text-center text-lg text-dark md:text-base font-light">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dignissimos quaerat nulla debitis tenetur voluptatibus consequatur sapiente ratione vel itaque fugiat.</p>
            </div>
        
        </div>
    </div>
        {{-- <x-card-feature></x-card-feature>
        <x-card-feature></x-card-feature>
        <x-card-feature></x-card-feature> --}}
    </div>
@endsection