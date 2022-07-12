@extends('layouts.user', ['active' => 'articles'])

@section('content')
<div class="bg-white py-14">
  <x-title-header-user title="Artikel" desc="Lorem, ipsum dolor sit amet consectetur adipisicing elit. Id velit quasi ad officiis placeat maxime ullam facilis aspernatur officia cumque." line={{ true }}></x-title-header-user>
  <div class="px-2 md:px-24 py-5">
    <div class="w-full grid grid-cols-1 gap-6 md:grid-cols-2">
      @foreach ($articles as $article)
      <div class="flex flex-col space-y-3">
        <div class="w-full h-[250px] lg:h-[350px] overflow-hidden">
          <img class="w-full h-full object-cover object-center" src="{{ asset("storage/uploads/articles/thumbnails/$article->image") }}" alt="">
        </div>
        <h1 class="text-dark text-[20px]">{{ $article->title }}</h1>
        <p class="text-dark-gray text-base">{{ strip_tags(substr($article->body, 0, 130), null) }} ...<a href="{{ route('articles.read', $article->slug) }}" class="text-primary-index font-semibold">Selengkapnya</a></p>
      </div>
      @endforeach
    </div>
  </div>
</div>
@endsection