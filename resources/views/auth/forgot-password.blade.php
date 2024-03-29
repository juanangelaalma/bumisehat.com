<x-guest-layout>
    <div class="flex overflow-y-auto flex-col md:flex-row">
        <div class="h-32 md:h-auto md:w-1/2">
            <img aria-hidden="true" class="object-cover w-full h-full"
                 src="{{ asset('images/login.png') }}" alt="Office"/>
        </div>
        <div class="flex justify-center items-center p-6 sm:p-12 md:w-1/2">
            <div class="w-full">
                <h1 class="mb-4 font-semibold text-gray-700">
                    {{ __('Lupa password?') }}
                    <span class="font-light text-sm">
                        Tidak masalah. Cukup beri alamat email anda dan kami akan mengirimkan email yang berisi tautan untuk memperarui password anda.
                    </span>
                </h1>

                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')"/>

                <!-- Validation Errors -->
                <x-auth-validation-errors class="mb-4" :errors="$errors"/>

                <form method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <div class="mt-4">
                        <x-label for="email" :value="__('Email')"/>
                        <x-input-user type="email"
                                 class="block w-full"
                                 name="email"
                                 id="email"
                                 required
                        />
                    </div>

                    <x-button class="block mt-4 w-full">
                        {{ __('Kirim permintaan') }}
                    </x-button>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
