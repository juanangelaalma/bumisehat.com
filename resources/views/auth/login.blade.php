<x-guest-layout>
    <div class="flex flex-col overflow-y-auto md:flex-row">
        <div class="h-32 p-6 md:h-auto md:w-1/2">
            <img aria-hidden="true" class="object-cover w-full h-full"
                 src="{{ asset('svg/login.svg') }}"
                 alt="Office"/>
        </div>
        <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
            <div class="w-full">
                <div class="flex flex-row justify-start items-end mb-3">
                    <h1 class="text-user-lg font-semibold text-primary-index">
                        LOGIN
                    </h1>
                    <img src="{{ asset('svg/brand.svg') }}" alt="Bumil Sehat">
                </div>

                <p class="text-dark text-base mb-3">Masukkan email dan password untuk mengakses akun anda</p>

                <x-auth-validation-errors :errors="$errors"/>

                <hr>

                <form method="POST" action="{{ route('login') }}">
                @csrf

                    <!-- Input[ype="email"] -->
                    <div class="mt-4">
                        <x-label-user :value="__('Email')"/>
                        <x-input-user type="email"
                                 id="email"
                                 name="email"
                                 value="{{ old('email') }}"
                                 class="block w-full"
                                 required
                                 autofocus/>
                    </div>

                    <!-- Input[ype="password"] -->
                    <div class="mt-4">
                        <x-label-user for="password" :value="__('Password')"/>
                        <x-input-user type="password"
                                 id="password"
                                 name="password"
                                 class="block w-full"/>
                    </div>

                    <div class="flex mt-6 text-sm">
                        <label class="flex items-center dark:text-gray-400">
                            <input type="checkbox"
                                   name="remember"
                                   class="text-secondary form-checkbox focus:border-secondary focus:outline-none focus:shadow-outline-secondary">
                            <span class="ml-2">{{ __('Remember me') }}</span>
                        </label>
                    </div>

                    <div class="mt-4">
                        <x-button-user class="block w-full">
                            {{ __('MASUK') }}
                        </x-button-user>
                    </div>
                </form>

                <p class="text-dark text-base mt-3">Belum mempunyai akun? <a class="text-secondary font-medium text-md" href="/register">Daftar</a> </p>
            </div>
        </div>
    </div>
</x-guest-layout>
