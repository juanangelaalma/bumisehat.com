@extends('layouts.user')

@section('content')
<div class="bg-white py-14">
  <x-title-header-user title="Hubungi Kami"></x-title-header-user>
  <div class="flex flex-col items-center">
    <div class="w-full flex justify-center py-5">
      <a target="__blank" href="https://wa.me/6283111064486">
        <img src="{{ asset('images/logo/whatsapp.png') }}" alt="">
      </a>
    </div>
    <div class="w-full flex justify-center items-center gap-3">
      <hr class="border-light-of-light w-1/4 md:w-1/6">
      <p class="text-dark text-user-base">Atau</p>
      <hr class="border-light-of-light w-1/4 md:w-1/6">
    </div>
    <div class="flex flex-col px-6 w-full md:px-0 md:w-[35%]">
      <div class="mt-4">
        <x-label-user :value="__('Email')"/>
        <x-input-user type="email"
                 id="email"
                 name="email"
                 value="{{ old('email') }}"
                 class="block w-full"
                 required
                 placeholder="Masukkan email"
                 autofocus/>
    </div>
      <div class="mt-4">
        <x-label-user :value="__('Email')"/>
        <textarea placeholder="Masukkan pesan anda" class="block w-full mt-1 h-[100px] border-gray-300 rounded-lg shadow-sm focus:border-primary-index placeholder:text-light placeholder:font-light focus:ring-opacity-50 focus:ring-1 focus:ring-primary-index focus-within:text-primary-index"></textarea>
    </div>
    <div class="mt-6">
      <x-button-user class="block w-full">
          {{ __('KIRIM') }}
      </x-button-user>
  </div>
    </div>
  </div>
</div>
@endsection