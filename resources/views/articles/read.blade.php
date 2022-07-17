@extends('layouts.user', ['active' => 'articles'])

@section('content')
    <div class="bg-white px-4 md:px-24 py-14 flex flex-wrap">
        <div class="w-full px-0 md:px-2 md:w-[70%] mb-4">
            <div class="flex flex-col">
                <span class="px-7 mb-5 py-1 font-semibold bg-primary-index self-start rounded-full text-white">Materi</span>
                <h1 class="font-semibold text-lg md:text-user-header mb-5">{{ $article->title }}</h1>
                <div class="flex items-center gap-3 text-dark font-normal">
                  <p>{{ timestamp_to_tanggal($article->created_at) }} </p>
                  <svg width="3" height="3" viewBox="0 0 3 3" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <circle cx="1.5" cy="1.5" r="1.5" fill="#262727" />
                  </svg>
                  <p>By admin</p>
                </div>
            </div>
            <div class="w-full my-2 mt-4 h-[210px] md:my-4 md:h-[435px] rounded-lg overflow-hidden md:mt-8">
                <img class="w-full h-full object-cover object-center shadow-sm" src="{{ asset("storage/uploads/articles/thumbnails/$article->image") }}"
                    alt="{{ $article->title }}">
            </div>
            <div class="text-dark text-sm md:text-base py-3">
                {!! $article->body !!}
              </div>
        </div>
        <div class="self-start pt-3 px-0 md:px-2 w-full md:w-[30%]  sticky top-0 left-0">
            <h6 class="w-full text-base text-dark font-semibold mb-4">Materi terbaru</h6>
            <div class="grid grid-cols-2 md:grid-cols-1 lg:grid-cols-2 gap-4">
                @foreach ($new_articles as $item)
                <a href="{{ route('articles.read', $item->slug) }}">
                    <div class="w-full">
                        <div class="h-28 w-full mb-3 overflow-hidden rounded-lg">
                            <img src="{{ asset("storage/uploads/articles/thumbnails/$item->image") }}" class="w-full h-full object-cover object-center shadow-sm" alt="{{ $item->title }}">
                        </div>
                        <p class="text-xs font-normal text-dark">{{ $item->title }}</p>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </div>
@endsection
