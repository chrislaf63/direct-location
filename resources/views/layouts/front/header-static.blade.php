<header class="border-b-black/50 border-b-2">
    {{-- Conteneur global --}}
    <div class="w-conversations m-auto flex">
        <div>
            <a href="{{ route('ad.index') }}"><img src="{{ asset('images/logo.png') }}" alt="logo"></a>
        </div>
        <div class="flex flex-col justify-center gap-5 w-full">
            {{-- Partie supérieure du conteneur --}}
            <div class="flex justify-between ">
                <div>
                    <a href="{{ route('ad.create') }}">
                        <button class="bg-green-600 text-white px-3 flex items-center justify-center px-3 py-2 rounded-lg hover:bg-green-500">
                            <span class="text-sm">Proposer une location&nbsp;&nbsp;</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                 stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"/>
                            </svg>
                        </button>
                    </a>
                </div>
                <div>
                    <form action=""
                          class="pb-2 pr-2 bg-indigo-50 rounded-t-lg flex items-center border-b border-b-slate-300 text-slate-300 focus-within:border-b-slate-900 focus-within:text-slate-900 transition">
                        <input id="search" value="" class="bg-indigo-50 px-2 w-full outline-none leading-none placeholder-slate-400 border-none focus:outline-none focus:ring-0"
                               type="search" name="search" placeholder="Rechercher un article">
                        <button>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                 class="w-4 h-4">
                                <path fill-rule="evenodd"
                                      d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z"
                                      clip-rule="evenodd"/>
                            </svg>
                        </button>
                    </form>
                </div>
                {{-- Icônes de navigation --}}
                @guest
                <div class="flex flex-col items-center w-28">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                    </svg>
                    <a href="{{ route('login') }}">Se connecter</a>
                </div>
                <div class="flex flex-col items-center w-28">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M18 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0ZM3 19.235v-.11a6.375 6.375 0 0 1 12.75 0v.109A12.318 12.318 0 0 1 9.374 21c-2.331 0-4.512-.645-6.374-1.766Z" />
                    </svg>
                    <a class="text-sm" href="{{ route('register') }}">S'inscrire</a>
                </div>
                @endguest
                @auth
                <div class="flex flex-col items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                    </svg>
                    <a class="text-xs mt-1" href="{{ route('user') }}">{{ Auth::user()->name }}<a>
                </div>
                <div class="flex flex-col items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                    </svg>

                    <a  class="text-xs mt-1" href="{{ route('favorites') }}">Favoris</a>
                </div>
                <div class="flex flex-col items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15m3 0 3-3m0 0-3-3m3 3H9" />
                    </svg>
                    <form method="post" action="{{ route('logout') }}">
                        @csrf
                        <button class="text-xs" type="submit">Déconnection</button>
                    </form>
                </div>
                @endauth
            </div>
            {{-- Partie inférieure du conteneur --}}
            <div>
                <nav class="flex justify-between w-full">
                    <ul class="flex justify-between w-full">
                        <li class="mr-4">
                            <a href="">Véhicules</a>
                        </li>
                        <li class="mr-4">
                            <a href="">Remorques</a>
                        </li>
                        <li class="mr-4">
                            <a href="">Maison</a>
                        </li>
                        <li class="mr-4">
                            <a href="">Jardin</a>
                        </li>
                        <li class="mr-4">
                            <a href="">Puériculture</a>
                        </li>
                        <li class="mr-4">
                            <a href="">Autre</a>
                        </li>
                    </ul>
            </div>
        </div>
    </div>
</header>
