<!DOCTYPE html>
<html x-data="data" lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="icon" href="{{ asset('images/brand.png') }}">

        <title>{{ (request()->routeIs('login') ? 'Login' : 'Register') . " | " }} {{ config('app.name', 'Laravel') }}</title>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="{{ asset('js/init-alpine.js') }}"></script>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,400&display=swap');
        </style>
</head>
<body>

    <div class="flex items-center min-h-screen p-4 bg-green-light">
        <div class="flex-1 h-full max-w-4xl mx-auto overflow-hidden bg-white rounded-lg">
            {{ $slot }}
        </div>
    </div>

</body>
</html>
