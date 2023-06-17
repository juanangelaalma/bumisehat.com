<x-guest-layout :webTitle="$webTitle">
    <div class="flex flex-col overflow-y-auto md:flex-row">
        <div class="hidden md:block h-32 p-6 md:h-auto md:w-1/2">
            <img aria-hidden="true" class="object-cover w-full h-full"
                 src="{{ asset('images/register.png') }}"
                 alt="Office"/>
        </div>

        <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
            <div class="w-full">
                <div class="flex flex-row justify-start items-center mb-3">
                    <h1 class="text-user-lg font-semibold text-primary-index">
                        DAFTAR
                    </h1>
                    <img src="{{ asset('images/brand.png') }}" class="ml-3 h-8 sm:h-9" alt="Flowbite Logo">
                </div>

                <p class="text-dark text-base mb-3 font-light">Masukkan data diri anda untuk mendaftar</p>

                <x-auth-validation-errors :errors="$errors"/>

                <hr>

                <form method="POST" action="{{ route('register') }}">
                @csrf
                    <div class="mt-4">
                        <x-label-user for="name" :value="__('Nama Lengkap')"/>
                        <x-input-user type="text"
                                 id="name"
                                 name="name"
                                 class="block w-full"
                                 value="{{ old('name') }}"
                                 
                                 placeholder="Masukkan nama lengkap anda"
                                 autofocus/>
                    </div>

                    <div class="mt-4">
                        <x-label-user for="phone" :value="__('Nomor HP')"/>
                        <x-input-user name="phone"
                                 type="tel"
                                 class="block w-full"
                                 placeholder="083111xxxxxx"
                                 {{-- pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" --}}
                                 value="{{ old('phone') }}"/>
                    </div>

                    <div class="mt-4">
                        <x-label-user for="email" :value="__('Alamat Email')"/>
                        <x-input-user name="email"
                                 type="email"
                                 class="block w-full"
                                 placeholder="Masukkan alamat email anda"
                                 value="{{ old('email') }}"/>
                    </div>

                    <div class="mt-4">
                        <x-label-user for="password" :value="__('Password')"/>
                        <x-input-user type="password"
                                 name="password"
                                 class="block w-full"
                                 placeholder="Masukkan password"
                                 />
                    </div>

                    <div class="mt-4">
                        <x-label-user for="address" :value="__('Alamat')"/>
                        <x-input-user type="text"
                                 name="address"
                                 class="block w-full"
                                 value="{{ old('address') }}"
                                 placeholder="Masukkan alamat"
                                 />
                    </div>

                    <div class="mt-4">
                        <x-label-user for="puskesmas" :value="__('Puskesmas')"/>
                        <x-input-user type="text"
                                 name="puskesmas"
                                 class="block w-full"
                                 placeholder="Masukkan puskesmas"
                                 value="{{ old('puskesmas') }}"
                                 />
                    </div>

                    <div class="mt-4">
                        <x-button-user class="block w-full">
                            {{ __('DAFTAR') }}
                        </x-button-user>
                    </div>
                </form>

                <p class="text-dark text-base mt-3 font-light">Sudah mempunyai akun? <a class="text-secondary font-medium text-md" href="/login">Masuk</a> </p>
            </div>
        </div>
</x-guest-layout>
