@extends('layouts.user', ['active' => 'pregnancy'])

@section('content')
    <div class="bg-white py-14 h-screen relative">
        <x-title-header-user title="Pengingat Kehamilan">
        </x-title-header-user>


        <div class="px-3 md:px-24 py-5 flex flex-col">
            @if ($age <= env('MAX_PREGNANCY_AGE', 42))
                <x-pregnancy-progress age="{{ $age }}"></x-pregnancy-progress>
                <div class="ml-7 mr-2 mt-8 md:px-16">
                    <ol class="relative px-6 border-l border-gray-200 dark:border-gray-700">
                        @foreach ($pregnancy_alerts_before as $item)
                            <li class="mb-10 ml-4 space-y-3">
                                <div
                                    class="absolute w-[55px] h-[55px] flex justify-center items-center bg-[#ffb991] rounded-full -left-7 border border-white">
                                    <img class="w-[29px] h-[29px]" src="{{ asset('svg/date.svg') }}" alt="">
                                </div>
                                <div class="flex flex-row">
                                    <time class="mb-1 text-base font-normal text-dark-gray">Minggu
                                        {{ $item->weeks }}</time>
                                    <div class="ml-4 flex justify-center items-center px-2 py-0 rounded-lg bg-red-200">
                                        <p class="text-red-500 text-xs">Anda telah melewatinya</p>
                                    </div>
                                </div>
                                <h3 class="text-lg leading-10 md:text-user-md font-semibold text-dark">{{ $item->title }}
                                </h3>
                                @if ($item->image)
                                    <div class="w-full h-72 md:h-96 overflow-hidden">
                                        <img class="w-full h-full object-cover object-center"
                                            src="{{ asset('storage/uploads/pregnancy_alerts/thumbnails/' . $item->image) }}"
                                            alt="">
                                    </div>
                                @endif
                                <p class="mb-4 text-base font-normal text-dark-gray w-full">
                                    {{ strip_tags(substr($item->content, 0, 250), null) }} ...<a
                                        href="{{ route('pregnancy.read', $item->id) }}"
                                        class="text-primary-index font-semibold">Selengkapnya</a> </p>
                                @if (!$item->pregnancy_statuses()->where(['user_id' => $user->id, 'pregnancy_alert_id' => $item->id])->first())
                                    <x-btn-todo id="{{ $item->id }}"></x-btn-todo>
                                @endif
                            </li>
                        @endforeach
                        @foreach ($pregnancy_alerts as $item)
                            <li class="mb-10 ml-4 h-auto space-y-3">
                                <div
                                    class="absolute w-[55px] h-[55px] flex justify-center items-center bg-[#ffb991] rounded-full -left-7 border border-white">
                                    <img class="w-[29px] h-[29px]" src="{{ asset('svg/date.svg') }}" alt="">
                                </div>
                                <time class="mb-1 text-base font-normal text-dark-gray">Minggu {{ $item->weeks }}</time>
                                <h3 class="text-lg leading-10 md:text-user-md font-semibold text-dark">{{ $item->title }}
                                </h3>
                                @if ($item->image)
                                    <div class="w-full h-72 md:h-96 overflow-hidden">
                                        <img class="w-full h-full object-cover object-center"
                                            src="{{ asset('storage/uploads/pregnancy_alerts/thumbnails/' . $item->image) }}"
                                            alt="">
                                    </div>
                                @endif
                                <p class="mb-4 text-base font-normal text-dark-gray w-full">
                                    {{ strip_tags(substr($item->content, 0, 250), null) }} ...<a
                                        href="{{ route('pregnancy.read', $item->id) }}"
                                        class="text-primary-index font-semibold">Selengkapnya</a> </p>
                                @if (!$item->pregnancy_statuses()->where(['user_id' => $user->id, 'pregnancy_alert_id' => $item->id])->first())
                                    <x-btn-todo id="{{ $item->id }}"></x-btn-todo>
                                @endif
                            </li>
                        @endforeach
                        @if ($age == null && gettype($age) == 'NULL')
                            <li class="mb-10 ml-4 space-y-3">
                                <div
                                    class="absolute w-[55px] h-[55px] flex justify-center items-center bg-[#ffb991] rounded-full -left-7 border border-white">
                                    <img src="/svg/date.svg">
                                </div>
                                <time class="mb-1 text-base font-normal text-dark-gray">Minggu 1</time>
                                <h3 class="text-[30px] leading-10 md:text-user-md font-semibold text-dark"> ad deserunt
                                    reiciendis saepe fuga ut, non excepturi. Officia, quia hic!</h3>
                                <p class="mb-4 text-base font-normal text-dark-gray">Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit. Voluptatem culpa, placeat harum debitis ab blanditiis quisquam alias
                                    nam maiores totam non perferenm exercitationem unde inventore minima officia id a
                                    quaerat! Hic. ...<a href=""
                                        class="text-primary-index font-semibold">Selengkapnya</a> </p>
                            </li>
                        @endif
                    </ol>
                </div>
            @else
                <div class="text-center">Masa kehamilan anda telah usai</div>
            @endif
        </div>

        @if ($age == null && gettype($age) == 'NULL')
            <div id="authentication-modal" tabindex="-1"
                class="overflow-y-auto z-0 overflow-x-hidden absolute top-0 right-0 left-0 w-full md:inset-0 h-modal md:h-full justify-center items-center flex bg-ligh-of-light backdrop-blur-sm bg-opacity-50"
                aria-modal="true" role="dialog">
                <div class="relative p-4 w-full max-w-md h-screen md:h-auto">
                    <!-- Modal content -->
                    <div class="relative bg-white mt-32 md:mt-0 rounded-lg shadow dark:bg-gray-700">
                        <div class="py-8 px-6 lg:px-8">
                            <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Tanggal berapa pertama
                                kehamilan?</h3>
                            <form class="space-y-6" action="{{ route('pregnancy_start.submit') }}" method="POST">
                                @csrf
                                <div>
                                    <div class="flex flex-row nowrap items-center">
                                        {{-- <x-input-user type="date" class="w-full"></x-input-user> --}}
                                        <div class="relative w-full">
                                            <div
                                                class="absolute z-50 inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                                <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                        d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                            </div>
                                            <input name="pregnancy_start" datepicker tabindex="999" type="text"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-index focus:border-primary-index block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                placeholder="Pilih tanggal">
                                        </div>
                                    </div>
                                </div>
                                <x-button-user type="submit" class="w-full">Simpan</x-button-user>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
@endsection

@section('scripts')
    {{-- <script src="../../node_modules/flowbite/dist/datepicker.js"></script> --}}
@endsection
