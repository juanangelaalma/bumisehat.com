@extends('layouts.user', ['active' => 'pregnancy'])

@section('content')
    <div class="bg-white py-14 relative">
        <x-title-header-user title="Pengingat Kehamilan" 
        {{-- line={{ true }} --}}
            {{-- desc="Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum ipsa molestiae in quia, ad distinctio ipsam enim nisi sapiente architecto." --}}
            >
        </x-title-header-user>


        <div class="px-2 md:px-24 py-5 flex flex-col">
            <x-pregnancy-progress age="{{ $age }}"></x-pregnancy-progress>
            <div class="ml-7 mr-2 mt-4 md:px-16">
                <ol class="relative px-6 border-l border-gray-200 dark:border-gray-700">
                    @foreach ($pregnancy_alerts as $item)
                    <li class="mb-10 ml-4 space-y-3">
                        <div
                            class="absolute w-[55px] h-[55px] flex justify-center items-center bg-[#ffb991] rounded-full -left-7 border border-white">
                            <svg width="31" height="31" viewBox="0 0 31 31" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M24.5416 5.16665H21.9583V3.87498C21.9583 3.53241 21.8222 3.20387 21.5799 2.96163C21.3377 2.7194 21.0092 2.58331 20.6666 2.58331C20.324 2.58331 19.9955 2.7194 19.7532 2.96163C19.511 3.20387 19.3749 3.53241 19.3749 3.87498V5.16665H11.6249V3.87498C11.6249 3.53241 11.4888 3.20387 11.2466 2.96163C11.0044 2.7194 10.6758 2.58331 10.3333 2.58331C9.99068 2.58331 9.66214 2.7194 9.41991 2.96163C9.17767 3.20387 9.04158 3.53241 9.04158 3.87498V5.16665H6.45825C5.43054 5.16665 4.44492 5.5749 3.71821 6.30161C2.99151 7.02831 2.58325 8.01393 2.58325 9.04165V24.5416C2.58325 25.5694 2.99151 26.555 3.71821 27.2817C4.44492 28.0084 5.43054 28.4166 6.45825 28.4166H24.5416C25.5693 28.4166 26.5549 28.0084 27.2816 27.2817C28.0083 26.555 28.4166 25.5694 28.4166 24.5416V9.04165C28.4166 8.01393 28.0083 7.02831 27.2816 6.30161C26.5549 5.5749 25.5693 5.16665 24.5416 5.16665ZM25.8333 24.5416C25.8333 24.8842 25.6972 25.2128 25.4549 25.455C25.2127 25.6972 24.8842 25.8333 24.5416 25.8333H6.45825C6.11568 25.8333 5.78714 25.6972 5.54491 25.455C5.30267 25.2128 5.16659 24.8842 5.16659 24.5416V15.5H25.8333V24.5416ZM25.8333 12.9166H5.16659V9.04165C5.16659 8.69907 5.30267 8.37053 5.54491 8.1283C5.78714 7.88607 6.11568 7.74998 6.45825 7.74998H9.04158V9.04165C9.04158 9.38422 9.17767 9.71276 9.41991 9.95499C9.66214 10.1972 9.99068 10.3333 10.3333 10.3333C10.6758 10.3333 11.0044 10.1972 11.2466 9.95499C11.4888 9.71276 11.6249 9.38422 11.6249 9.04165V7.74998H19.3749V9.04165C19.3749 9.38422 19.511 9.71276 19.7532 9.95499C19.9955 10.1972 20.324 10.3333 20.6666 10.3333C21.0092 10.3333 21.3377 10.1972 21.5799 9.95499C21.8222 9.71276 21.9583 9.38422 21.9583 9.04165V7.74998H24.5416C24.8842 7.74998 25.2127 7.88607 25.4549 8.1283C25.6972 8.37053 25.8333 8.69907 25.8333 9.04165V12.9166Z"
                                    fill="#066F6A" />
                            </svg>

                        </div>
                        <time class="mb-1 text-base font-normal text-dark-gray">Minggu {{ $item->weeks }}</time>
                        <h3 class="text-[30px] leading-10 md:text-user-md font-semibold text-dark">{{ $item->title }}</h3>
                        <p class="mb-4 text-base font-normal text-dark-gray">{{ strip_tags(substr($item->content, 0, 250), null) }} ...<a href="" class="text-primary-index font-semibold">Selengkapnya</a> </p>
                    </li>
                    @endforeach
                </ol>
            </div>
        </div>

        @if ($age == NULL)
        <div id="authentication-modal" tabindex="-1" class="overflow-y-auto overflow-x-hidden absolute top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center flex bg-white backdrop-blur-sm bg-opacity-50" aria-modal="true" role="dialog">
            <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                <!-- Modal content -->
                <div class="relative bg-white mt-32 md:mt-0 rounded-lg shadow dark:bg-gray-700">
                    <div class="py-8 px-6 lg:px-8">
                        <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Berapa umur kehamilan anda?</h3>
                        <form class="space-y-6" action="#">
                            <div>
                                <div class="flex flex-row nowrap items-center space-x-4">
                                    <x-input-user type="number" class="w-full"></x-input-user>
                                    <span class="text-md text-dark">Minggu</span>
                                </div>
                            </div>
                            <x-button-user class="w-full">Simpan</x-button-user>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endif
    </div>
@endsection
