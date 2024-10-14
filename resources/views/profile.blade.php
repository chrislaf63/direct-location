<x-main-layout :title="$title">
    <div class="w-3/4  mt-5 m-auto">
        <div class="flex">
            <div class="flex flex-col items-center w-1/3">
                <a href="{{ route('ad.myads') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10"/>
                    </svg>
                </a>
                <p class="my-3 text-xs sm:text-sm">Annonces actives</p>
                <p>{{ $myads }}</p>
            </div>
            <div class="border-l-2 border-r-blue-900 flex flex-col items-center w-1/4 sm:w-1/3">
                <a href="{{ route('conversations.index') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75"/>
                    </svg>
                </a>
                <p class="my-3 text-xs sm:text-sm">Messages</p>
                <p>0</p>
            </div>
            <div class="border-l-2 border-r-blue-900 flex flex-col items-center w-1/3">
                <a href="{{ route('favorites') }} ">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0 1 11.186 0Z"/>
                    </svg>
                </a>
                <p class="my-3 text-xs sm:text-sm">Annonces enregistrées</p>
                <p>{{ $recordedAds }}</p>
            </div>
        </div>
        <div id="target"
             class="bg-gray-200 border border-black/20 rounded-xl shadow-xl m-auto my-5 py-4 md:w-profileDesktop">
            <h2 class="text-center font-semibold text-2xl pt-3 pb-5">Mes informations</h2>
            <div>
                <div class="md:w-1/2 m-auto text-center">
                    <p class="mb-3"><span class="font-semibold">Nom d'utilisateur : </span>{{ $user->name }}</p>
                    <p class="mb-3"><span class="font-semibold">Email :</span>{{ $user->email }} </p>
                </div>
                <div class="flex flex-col items-center md:flex-row justify-around">
                    <a href="{{ route('user.edit', ['id' => $user->id, 'from' => 'profile']) }}">
                        <button
                            class="bg-indigo-50 border-1 border-black rounded-xl flex items-center justify-center px-3 py-1 mb-3 hover:bg-indigo-100 hover:shadow-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                 stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z"/>
                            </svg>
                            <span>&nbsp;&nbsp;Modifier mes informations</span></button>
                    </a>
                    <button id="delete"
                            class="bg-gray-50 border-1 border-black/50 rounded-xl flex items-center justify-center px-3 py-1 hover:bg-gray-100 hover:shadow-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12"/>
                        </svg>
                        <span>&nbsp;&nbsp;Supprimer mon compte</span></button>
                </div>
            </div>

        </div>
        <div id="modal"
             class="hidden bg-gray-200 border border-black/20 rounded-xl shadow-xl m-auto my-5 py-4 md:w-profileDesktop">
            <h2>Attention</h2>
            <p>Votre compte va être supprimé</p>
            <p>Souhaitez-vous vraiment continuer ?</p>
            <div class="flex justify-around">
                <form action="{{ route('user.destroy', $user->id) }}" method="post">
                    @method('delete')
                    @csrf
                    <button id="confirm"
                            class="bg-red-500 text-white px-3 py-1 rounded-xl hover:bg-red-400 hover:shadow-md">Oui
                    </button>
                </form>
                <button id="back" class="bg-gray-500 text-white px-3 py-1 rounded-xl hover:bg-gray-400 hover:shadow-md">
                    Non
                </button>
            </div>
        </div>

        @if(Auth::user()->isAdmin())
        <div class="flex justify-center mb-3">
            <a href="{{ route('admin') }}">
                <button class="text-white px-3 py-1 bg-red-500 rounded-xl hover:bg-red-400 hover:shadow-md">Acceder au
                    dashboard ADMIN
                </button>
            </a>
        </div>
        @endif
</x-main-layout>



