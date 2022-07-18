<header class="z-10 py-4 bg-white shadow-md">
    <div class="container flex justify-between items-center px-6 mx-auto h-full text-primary-index md:justify-end">
        <!-- Mobile hamburger -->
        <button
            class="p-1 mr-5 -ml-1 rounded-md md:hidden focus:outline-none focus:shadow-outline-primary-index"
            @click="toggleSideMenu"
            aria-label="Menu"
        >
            <svg
                class="w-6 h-6"
                aria-hidden="true"
                fill="currentColor"
                viewBox="0 0 20 20"
            >
                <path
                    fill-rule="evenodd"
                    d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                    clip-rule="evenodd"
                ></path>
            </svg>
        </button>

        <x-dropdown>
            <x-slot name="trigger">
                <button
                    class="align-middle rounded-full focus:shadow-outline-primary-index focus:outline-none"
                    @click="toggleProfileMenu"
                    @keydown.escape="closeProfileMenu"
                    aria-label="Account"
                    aria-haspopup="true"
                >
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M16.9 9.19999C16.5 8.79999 15.9 8.79999 15.5 9.19999L12 12.7L8.50005 9.19999C8.10005 8.79999 7.50005 8.79999 7.10005 9.19999C6.70005 9.59999 6.70005 10.2 7.10005 10.6L11.3 14.8C11.5 15 11.7 15.1 12 15.1C12.3 15.1 12.5 15 12.7 14.8L16.9 10.6C17.3 10.2 17.3 9.59999 16.9 9.19999Z" fill="#262727"/>
                    </svg>                    
                </button>
            </x-slot>

            <x-slot name="content">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-dropdown-link :href="route('logout')"
                                     onclick="event.preventDefault(); this.closest('form').submit();">
                        <x-slot name="icon">
                            <svg class="mr-3 w-4 h-4" aria-hidden="true" fill="none" stroke-linecap="round"
                                 stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path
                                    d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"></path>
                            </svg>
                        </x-slot>
                        {{ __('Log Out') }}
                    </x-dropdown-link>
                </form>
            </x-slot>
        </x-dropdown>

    </div>
</header>
