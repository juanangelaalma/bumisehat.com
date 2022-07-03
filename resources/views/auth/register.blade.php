<x-guest-layout>
    <div class="flex flex-col overflow-y-auto md:flex-row">
        <div class="hidden md:block h-32 p-6 md:h-auto md:w-1/2">
            <img aria-hidden="true" class="object-cover w-full h-full"
                 src="{{ asset('svg/register.svg') }}"
                 alt="Office"/>
        </div>

        <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
            <div class="w-full">
                <div class="flex flex-row justify-start items-end mb-3">
                    <h1 class="text-user-lg font-semibold text-primary-index">
                        DAFTAR
                    </h1>
                    <img src="{{ asset('svg/brand.svg') }}" alt="Bumil Sehat">
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
                                 required
                                 placeholder="Masukkan nama lengkap anda"
                                 autofocus/>
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
                                 required/>
                    </div>

                    <div class="mt-4">
                        <x-label-user id="password_confirmation" :value="__('Konfirmasi Password')"/>
                        <x-input-user type="password"
                                 name="password_confirmation"
                                 class="block w-full"
                                 placeholder="Masukkan konfirmasi password"
                                 required/>
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
