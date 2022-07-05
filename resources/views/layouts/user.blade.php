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
    class="flex bg-gray-50 w-full flex-col"
>
    <x-navbar-user></x-navbar-user>
    @yield('content')

    <script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
</div>
</body>
</html>
