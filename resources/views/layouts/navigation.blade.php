<aside class="z-20 hidden w-64 overflow-y-auto bg-white md:block flex-shrink-0">
    <div class="py-4 text-gray-500">
        <a class="h-auto w-auto" href="{{ route('home') }}">
            <img src="{{ asset('images/brand.png') }}" class="ml-6 h-10" alt="">
        </a>

        <ul class="mt-6">
            <li class="relative px-6 py-3">
                <x-nav-link href="{{ route('admin.dashboard') }}" :active="request()->routeIs('admin.dashboard')">
                    <x-slot name="icon">
                        <img src="{{ asset('svg/home.svg') }}" class="w-5 h-5" />
                    </x-slot>
                    {{ __('Dashboard') }}
                </x-nav-link>
            </li>

            {{-- <li class="relative px-6 py-3">
                <x-nav-link href="{{ route('admin.pregnancy_alerts') }}" :active="request()->routeIs('admin.pregnancy_alerts')">
                    <x-slot name="icon">
                        <img src="{{ asset('images/alert_black.png') }}" class="w-5 h-auto" />
                    </x-slot>
                    {{ __('Pengingat Kesehatan') }}
                </x-nav-link>
            </li> --}}

            <li class="relative px-6 py-3">
                <button
                  class="inline-flex items-center outline-none justify-between w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                  @click="togglePagesMenu"
                  aria-haspopup="true"
                >
                    <x-nav-link :active="request()->routeIs('admin.pregnancy_alerts') || request()->routeIs('admin.pregnancy_alerts.list') || request()->routeIs('admin.pregnancy_alerts.list.edit') || request()->routeIs('admin.pregnancy_alerts.list.create')">
                      <x-slot name="icon">
                          <img src="{{ asset('images/alert_black.png') }}" class="w-5 h-auto" />
                      </x-slot>
                      {{ __('Pengingat Kesehatan') }}
                  </x-nav-link>
                  <svg
                    class="w-4 h-4"
                    aria-hidden="true"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                      clip-rule="evenodd"
                    ></path>
                  </svg>
                </button>
                <template x-if="isPagesMenuOpen">
                  <ul
                    x-transition:enter="transition-all ease-in-out duration-300"
                    x-transition:enter-start="opacity-25 max-h-0"
                    x-transition:enter-end="opacity-100 max-h-xl"
                    x-transition:leave="transition-all ease-in-out duration-300"
                    x-transition:leave-start="opacity-100 max-h-xl"
                    x-transition:leave-end="opacity-0 max-h-0"
                    class="p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium text-gray-500 rounded-md shadow-inner bg-gray-50 dark:text-gray-400 dark:bg-gray-900"
                    aria-label="submenu"
                  >
                    <li
                      class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                    >
                      <a class="w-full" href="{{ route('admin.pregnancy_alerts') }}">Monitoring User</a>
                    </li>
                    <li
                      class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                    >
                      <a class="w-full" href="{{ route('admin.pregnancy_alerts.list') }}">
                        Daftar pengingat
                      </a>
                    </li>
                  </ul>
                </template>
              </li>

            <li class="relative px-6 py-3">
                <x-nav-link href="{{ route('admin.articles') }}" :active="request()->routeIs('admin.articles') ||
                    request()->routeIs('admin.articles.create') ||
                    request()->routeIs('admin.articles.edit')">
                    <x-slot name="icon">
                        <img src="{{ asset('images/materi_black.png') }}" class="w-5 h-auto" />
                    </x-slot>
                    {{ __('Materi') }}
                </x-nav-link>
            </li>

            <li class="relative px-6 py-3">
                <x-nav-link href="{{ route('admin.short_content') }}" :active="request()->routeIs('admin.short_content') ||
                    request()->routeIs('admin.short_content.create') ||
                    request()->routeIs('admin.short_content.edit')">
                    <x-slot name="icon">
                        <img src="{{ asset('images/materi_black.png') }}" class="w-5 h-auto" />
                    </x-slot>
                    {{ __('Short Content') }}
                </x-nav-link>
            </li>

            <li class="relative px-6 py-3">
                <x-nav-link href="{{ route('admin.quiz') }}" :active="request()->routeIs('admin.quiz') || request()->routeIs('admin.quiz.show')">
                    <x-slot name="icon">
                        <img src="{{ asset('images/quiz.png') }}" class="w-5 h-auto" />
                    </x-slot>
                    {{ __('Quiz') }}
                </x-nav-link>
            </li>

            <li class="relative px-6 py-3">
                <x-nav-link href="{{ route('admin.evaluation') }}" :active="request()->routeIs('admin.evaluation') || request()->routeIs('admin.evaluation.show')">
                    <x-slot name="icon">
                        <img src="{{ asset('images/evaluasi.png') }}" class="w-5 h-auto" />
                    </x-slot>
                    {{ __('Evaluasi') }}
                </x-nav-link>
            </li>

            <li class="relative px-6 py-3">
                <x-nav-link href="{{ route('admin.user') }}" :active="request()->routeIs('admin.user')">
                    <x-slot name="icon">
                        <img src="{{ asset('images/akun.png') }}" class="w-5 h-auto" />
                    </x-slot>
                    {{ __('User') }}
                </x-nav-link>
            </li>

            <li class="relative px-6 py-3">
                <x-nav-link href="{{ route('admin.about') }}" :active="request()->routeIs('admin.about')">
                    <x-slot name="icon">
                        <img src="{{ asset('images/info.png') }}" class="w-5 h-auto" />
                    </x-slot>
                    {{ __('Tentang') }}
                </x-nav-link>
            </li>

            {{-- <li class="relative px-6 py-3">
                <button class="inline-flex items-center justify-between w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                        @click="toggleMultiLevelMenu" aria-haspopup="true">
                <span class="inline-flex items-center">
                    <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M4 6h16M4 10h16M4 14h16M4 18h16"></path>
                    </svg>
                    <span class="ml-4">Two-level menu</span>
                </span>
                    <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                              d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                              clip-rule="evenodd"></path>
                    </svg>
                </button>
                <template x-if="isMultiLevelMenuOpen">
                    <ul x-transition:enter="transition-all ease-in-out duration-300"
                        x-transition:enter-start="opacity-25 max-h-0" x-transition:enter-end="opacity-100 max-h-xl"
                        x-transition:leave="transition-all ease-in-out duration-300"
                        x-transition:leave-start="opacity-100 max-h-xl" x-transition:leave-end="opacity-0 max-h-0"
                        class="p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium text-gray-500 rounded-md shadow-inner bg-gray-50 dark:text-gray-400 dark:bg-gray-900"
                        aria-label="submenu">
                        <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                            <a class="w-full" href="#">Child menu</a>
                        </li>
                    </ul>
                </template>
            </li> --}}
        </ul>
    </div>
</aside>
