<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('layouts.front.head')
<body class="relative min-h-screen">
<header>
    <div class="flex justify-around">
        <div>
            <a href="{{ route('ad.index') }}"><img src="{{ asset('images/logo.png') }}" alt="logo"></a>
        </div>
        <div>
            <h1 class="font-semibold text-4xl text-center mt-6">Interface d'administration</h1>
            <div class="flex justify-center mt-4">
                <a href="{{ route('user') }}"><button class=" flex bg-red-500 shadow-md text-white px-2 py-1 rounded-lg hover:bg-red-400 hover:shadow-lg"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
                        </svg>
                        &nbsp;&nbsp;Retour à mon profil</button></a>
            </div>
        </div>
</header>
<main>
    <div>
        <nav>
            <ul class="flex w-full">
                <li class="py-3 text-center w-1/3 border-l border-t border-r rounded-t-lg border-black @if(!request()->is('admin')) border-b @endif @if(request()->is('admin')) bg-neutral-100 @endif hover:bg-neutral-50">
                    <a href="{{ route('admin') }}">Annonces publiées
                    </a>
                </li>
                <li class="py-3 text-center w-1/3 border-l border-t border-r rounded-t-lg border-black @if(!request()->is('admin/annonces-en-attente-de-validation')) border-b @endif @if(request()->is('admin/annonces-en-attente-de-validation')) bg-neutral-100 @endif hover:bg-neutral-50">
                    <a href="{{ route('admin.tovalidate') }}">Annonces en attente de validation</a>
                </li>
                <li class="py-3 text-center w-1/3 border-l border-t border-r rounded-t-lg border-black @if(!request()->is('admin/liste-des-utilisateurs')) border-b @endif @if(request()->is('admin/liste-des-utilisateurs')) bg-neutral-100 @endif hover:bg-neutral-50">
                    <a href="{{ route('users') }}">Utilisateurs</a>
                </li>
            </ul>
        </nav>
    </div>


        <div>
           {{ $slot }}
        </div>

</main>
</body>
</html>
