@extends('layouts.user', ['active' => 'about'])

@section('content')
<div class="bg-white py-14">
  <x-title-header-user title="Tentang"></x-title-header-user>
  <div class="text-dark text-base text-light px-3 leading-8 md:px-48 py-5">
    {!! $about !!}
  </div>
</div>
@endsection
