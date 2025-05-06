<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>MW | @yield('title')</title>
        <link rel="icon"
        href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='currentColor' viewBox='0 0 440 376'%3E%3Cpath d='M 56.53 6.41 h 152.93 v 366.88 L 70.37 178.11 h 62.28 l 33.07 45.89 V 69.06 H 74.71 l -9.85 13.81 L 87.53 115.2 l -62.43 0.5 L 2 84 z' style='fill:%2399f'/%3E%3Cpath d='M229.93 6.29h152.83l54.2 76.26-72.48 101.38-0.18-87.61 9.85-13.31-9.67-13.81-23.22-0.25-0.35 148.54-43.63 61.17-1.76-206.77H271.3l1.05 239.85-45.03 61.17z' style='fill:%2399f;fill-opacity:.811765'/%3E%3C/svg%3E"
        sizes="any" type="image/svg+xml">
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body>
        <div class="font-sans text-gray-900 dark:text-gray-100 antialiased">
            {{ $slot }}
        </div>

        @livewireScripts
    </body>
</html>
