<!DOCTYPE html>
<html x-data="data" lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="{{ asset('js/init-alpine.js') }}"></script>
</head>
<body>
<div
    class="flex bg-white w-full flex-col"
>
    <x-navbar-user active="{{ $active }}"></x-navbar-user>
    @if(session('successAlert'))
        <x-alert-success header="Sukses" message="{{ session('successAlert') }}"></x-alert-success>
    @endif
    @if(session('errorAlert'))
        <x-alert-fail header="Failed" message="{{ session('errorAlert') }}"></x-alert-fail>
    @endif
    
    @yield('content')

    <script src="{{ asset('js/flowbite.js') }}"></script>
    @yield('scripts')
</div>
</body>
</html>
