<li>
    <div @click.away="open = false" class="relative"
        x-data="dropdownComponent()"
        x-cloak
    >
        <button @click="toggleDropdown"
            class="flex flex-row items-center w-full text-base text-white font-normal py-3 md:py-2 pr-4 pl-3 md:px-0 bg-transparent rounded-lg"
        >
            <span>{{ $title }}</span>
            <svg fill="currentColor" viewBox="0 0 20 20"
                :class="{ 'rotate-180': open, 'rotate-0': !open }"
                class="inline w-5 h-5 mt-1 ml-1 transition-transform duration-200 transform"
            >
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
            </svg>
        </button>
        <div x-show="open"
            x-transition:enter="transition ease-out duration-100"
            x-transition:enter-start="transform opacity-0 scale-95"
            x-transition:enter-end="transform opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-75"
            x-transition:leave-start="transform opacity-100 scale-100"
            x-transition:leave-end="transform opacity-0 scale-95"
            class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48"
        >
            <div class="px-2 py-2 bg-white rounded-md shadow dark-mode:bg-gray-800">
                {{ $slot }}
            </div>
        </div>
    </div>
</li>

<script>
    function dropdownComponent() {
        return {
            open: false,
            toggleDropdown() {
                this.open = !this.open;
            },
        };
    }
</script>
