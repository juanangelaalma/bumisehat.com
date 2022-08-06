<nav class="bg-primary-index w-full px-2 py-4 md:px-24 sm:px-7 transition-all">
    <div class="container flex flex-wrap md:flex-nowrap justify-between items-center mx-auto">
        <a href="/" class="flex md:hidden lg:flex items-center">
            <img src="{{ asset('images/brand.png') }}" class="mr-3 h-8 sm:h-9" alt="Flowbite Logo">
        </a>
        <div class="flex items-center md:order-2">
            @auth
                <button type="button"
                        class="flex mr-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-2 focus:ring-secondary"
                        id="user-menu-button" aria-expanded="false" data-dropdown-toggle="dropdown">
                    <span class="sr-only">Open user menu</span>
                    <img class="w-8 h-8 rounded-full"
                         src="https://i.pinimg.com/474x/76/94/84/769484dafbe89bf2b8a22379658956c4.jpg" alt="user photo">
                </button>
            @else
                <div class="flex flex-row mr-2 md:mr-0">
                    <a href="{{ route('register') }}"
                       class="bg-transparent px-4 py-2 mx-2 rounded-lg text-white hover:text-secondary transition-colors duration-300 font-semibold">Daftar</a>
                    <a href="{{ route('login') }}"
                       class="bg-secondary px-8 py-2 rounded-lg text-white font-md hover:bg-secondary-dark transition-colors duration-500  shadow-lg">Masuk</a>
                </div>
            @endauth
            <!-- Dropdown menu -->
            @auth
                <div class="hidden z-50 my-4 text-base list-none bg-white rounded divide-y divide-gray-100 shadow"
                     id="dropdown" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="top"
                     style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate(956px, 1135px);">
                    <div class="py-3 px-4">
                        <span class="block text-sm text-gray-900">{{ $user->name }}</span>
                        <span class="block text-sm font-medium text-gray-500 truncate">{{ $user->email }}</span>
                    </div>
                    <ul class="py-1" aria-labelledby="dropdown">
                        @if (auth()->user()->isAdmin())
                            <li>
                                <a href="{{ route('admin.dashboard') }}"
                                   class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100">Dashboard</a>
                            </li>
                        @endif
                        <li>
                            <a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100"
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Keluar</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
            @endauth
            <button data-collapse-toggle="mobile-menu-2" type="button"
                    class="inline-flex items-center p-2 ml-1 text-sm text-white rounded-lg md:hidden hover:bg-primary-dark focus:outline-none focus:ring-2 focus:ring-secondary"
                    aria-controls="mobile-menu-2" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg width="29" height="29" viewBox="0 0 29 29" fill="none"
                     xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M25.3748 8.45841H3.62484C3.30437 8.45841 2.99702 8.33111 2.77042 8.1045C2.54381 7.8779 2.4165 7.57055 2.4165 7.25008C2.4165 6.92961 2.54381 6.62227 2.77042 6.39566C2.99702 6.16905 3.30437 6.04175 3.62484 6.04175H25.3748C25.6953 6.04175 26.0027 6.16905 26.2293 6.39566C26.4559 6.62227 26.5832 6.92961 26.5832 7.25008C26.5832 7.57055 26.4559 7.8779 26.2293 8.1045C26.0027 8.33111 25.6953 8.45841 25.3748 8.45841ZM20.5415 13.2917H3.62484C3.30437 13.2917 2.99702 13.1644 2.77042 12.9378C2.54381 12.7112 2.4165 12.4039 2.4165 12.0834C2.4165 11.7629 2.54381 11.4556 2.77042 11.229C2.99702 11.0024 3.30437 10.8751 3.62484 10.8751H20.5415C20.862 10.8751 21.1693 11.0024 21.3959 11.229C21.6225 11.4556 21.7498 11.7629 21.7498 12.0834C21.7498 12.4039 21.6225 12.7112 21.3959 12.9378C21.1693 13.1644 20.862 13.2917 20.5415 13.2917ZM25.3748 18.1251H3.62484C3.30437 18.1251 2.99702 17.9978 2.77042 17.7712C2.54381 17.5446 2.4165 17.2372 2.4165 16.9167C2.4165 16.5963 2.54381 16.2889 2.77042 16.0623C2.99702 15.8357 3.30437 15.7084 3.62484 15.7084H25.3748C25.6953 15.7084 26.0027 15.8357 26.2293 16.0623C26.4559 16.2889 26.5832 16.5963 26.5832 16.9167C26.5832 17.2372 26.4559 17.5446 26.2293 17.7712C26.0027 17.9978 25.6953 18.1251 25.3748 18.1251ZM20.5415 22.9584H3.62484C3.30437 22.9584 2.99702 22.8311 2.77042 22.6045C2.54381 22.3779 2.4165 22.0706 2.4165 21.7501C2.4165 21.4296 2.54381 21.1223 2.77042 20.8957C2.99702 20.6691 3.30437 20.5417 3.62484 20.5417H20.5415C20.862 20.5417 21.1693 20.6691 21.3959 20.8957C21.6225 21.1223 21.7498 21.4296 21.7498 21.7501C21.7498 22.0706 21.6225 22.3779 21.3959 22.6045C21.1693 22.8311 20.862 22.9584 20.5415 22.9584Z"
                        fill="white"/>
                </svg>
            </button>
        </div>
        <div class="hidden justify-between md:ml-auto md:mr-8 items-center w-full md:flex md:w-auto md:order-1"
             id="mobile-menu-2">
            <ul class="flex flex-col mt-4 pb-4 md:pb-0 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium">
                <li>
                    <a href="{{ route('home') }}"
                       class="block text-base text-white font-normal py-3 md:py-2 pr-4 pl-3 rounded md:bg-transparent md:p-0{{ $active == 'home' ? ' md:text-secondary bg-secondary' : '' }}"
                       aria-current="page">Beranda</a>
                </li>
                @auth
                    <li>
                        <a href="{{ route('pregnancy.index') }}"
                           class="block text-base text-white font-normal py-3 md:py-2 pr-4 pl-3 rounded md:bg-transparent md:p-0{{ $active == 'pregnancy' ? ' md:text-secondary bg-secondary' : '' }}">Pengingat
                            Kehamilan</a>
                    </li>
                    <li>
                        <a href="{{ route('quiz.index') }}"
                           class="block text-base text-white font-normal py-3 md:py-2 pr-4 pl-3 rounded md:bg-transparent md:p-0{{ $active == 'quiz' ? ' md:text-secondary bg-secondary' : '' }}">Quiz</a>
                    </li>
                    <li>
                        <a href="{{ route('evaluation.index') }}"
                           class="block text-base text-white font-normal py-3 md:py-2 pr-4 pl-3 rounded md:bg-transparent md:p-0{{ $active == 'evaluation' ? ' md:text-secondary bg-secondary' : '' }}">Evaluasi</a>
                    </li>
                    <li>
                        <a href="{{ route('articles.index') }}"
                           class="block text-base text-white font-normal py-3 md:py-2 pr-4 pl-3 rounded md:bg-transparent md:p-0{{ $active == 'articles' ? ' md:text-secondary bg-secondary' : '' }}">Materi</a>
                    </li>
                @endauth
                <li>
                    <a href="{{ route('about.index') }}"
                       class="block text-base text-white font-normal py-3 md:py-2 pr-4 pl-3 rounded md:bg-transparent md:p-0{{ $active == 'about' ? ' md:text-secondary bg-secondary' : '' }}">Tentang</a>
                </li>
                <li>
                    <a href="{{ route('contact.index') }}"
                       class="block text-base text-white font-normal py-3 md:py-2 pr-4 pl-3 rounded md:bg-transparent md:p-0{{ $active == 'contact' ? ' md:text-secondary bg-secondary' : '' }}">Hubungi
                        Kami</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
