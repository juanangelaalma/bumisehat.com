<header class="z-10 py-4 bg-white shadow-sm">
    <div class="container flex justify-between items-center px-6 mx-auto h-full text-primary-index md:justify-end">
        <!-- Mobile hamburger -->
        <button
            class="p-1 mr-5 -ml-1 rounded-md md:hidden focus:outline-none focus:shadow-outline-primary-index"
            @click="toggleSideMenu"
            aria-label="Menu"
        >
        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <line y1="1" x2="16" y2="1" stroke="black" stroke-width="2"/>
            <line y1="8" x2="16" y2="8" stroke="black" stroke-width="2"/>
            <line y1="15" x2="16" y2="15" stroke="black" stroke-width="2"/>
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
                <svg width="18" height="8" viewBox="0 0 18 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14.6597 0L7.32996 6.02051L8.87546 7.28992L17.7507 0H14.6597Z" fill="black"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0 0L8.10257 6.65521L9.64806 5.38578L3.09099 0H0Z" fill="black"/>
                    </svg>
            </x-slot>

            <x-slot name="content">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-dropdown-link :href="route('logout')"
                                     onclick="event.preventDefault(); this.closest('form').submit();">
                        {{ __('Keluar') }}
                    </x-dropdown-link>
                </form>
            </x-slot>
        </x-dropdown>

    </div>
</header>
