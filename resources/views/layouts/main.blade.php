<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('layouts.front.head')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<body class="antialiased relative min-h-screen m-auto">
@include('layouts.front.header-fixed')
<main class="pt-headerMobile pb-footerMobile md:pt-headerDesktop md:pb-footerDesktop w-full">
    {{ $slot }}
</main>
@include('layouts.front.footer')
</body>
<script src="{{ asset('js/favorites.js') }}" ></script>
</html>

