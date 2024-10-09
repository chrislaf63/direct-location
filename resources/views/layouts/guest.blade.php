<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="relative min-h-screen font-sans text-gray-900 antialiased">
    @include('layouts.front.header-fixed')
    <main class="pt-headerMobile pb-footerMobile md:pt-headerDesktop md:pb-footerDesktop w-full">
        <div class="flex flex-col sm:justify-center items-center sm:pt-0">
            <div class="sm:w-full max-w-md mt-10 mb-10 px-6 py-4 bg-gray-50 shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
    </main>
    @include('layouts.front.footer')
    </body>
</html>

