@extends('layouts.user', ['active' => 'articles'])

@section('content')
@php
    $data = "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate nulla provident architecto eveniet voluptatum. Voluptatibus ad ipsa nulla alias, magnam tenetur cumque! Temporibus iste quam nam explicabo optio sapiente. Explicabo eos qui quod ipsam sapiente quaerat recusandae possimus voluptas commodi perspiciatis porro aliquid laboriosam eum quibusdam assumenda, minus nihil delectus provident eius esse quam eveniet placeat repellendus! Error veritatis eius ratione, molestiae quos totam aliquam quam nesciunt deleniti porro obcaecati reiciendis tempore officia fugit voluptatum perferendis beatae velit est nobis. Nostrum autem consectetur magnam quod laboriosam accusantium et ut vitae! Enim vel reprehenderit odio voluptatem fugiat incidunt fuga quisquam corrupti.</p>"
@endphp
<div class="bg-white py-14">
  <x-title-header-user title="{{ $article->title }}"></x-title-header-user>
  <div class="w-full px-3 md:px-24 my-2 mt-4 md:my-4 md:mt-8">
    <img class="w-full shadow-sm" src="{{ asset("storage/uploads/articles/thumbnails/$article->image") }}" alt="">
  </div>
  <div class="text-dark-gray text-user-base px-3 md:px-24 py-3">
    {!! $article->body !!}
  </div>
</div>
@endsection