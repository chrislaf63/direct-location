<x-admin-layout :title="$title">
    <div class="bg-neutral-100">
        <h2 class="text-center font-semibold text-3xl py-6">Utilisateurs enregistrés : {{ $registeredusers }}</h2>
        <div class="target">
            @foreach($users as $user)
            <div class="w-1/2 p-4 bg-white m-auto border-2 border-gray-300 rounded-xl flex justify-between items-center mb-5">
                <div>
                    <p><span class="font-semibold">Nom d'utilisateur:&nbsp;</span>{{$user->name}}</p>
                    <p><span class="font-semibold">Email:&nbsp;</span>{{$user->email}}</p>
                    <p><span class="font-semibold">Role:&nbsp;</span>{{$user->role}}</p>
                    <p><span class="font-semibold">Créé le:&nbsp;</span>{{$user->created_at}}</p>
                </div>
                <div class="flex gap-8">
                    <div>
                        <a href="{{ route('user.update', ['id' => $user->id, 'from' => 'users']) }}">
                            <button
                                class="bg-blue-900 shadow-md text-white px-3 py-1 rounded-lg hover:bg-blue-700 hover:shadow-lg">
                                Modifier
                            </button>
                        </a>
                    </div>
                    <div>
                        <button
                            class="delete-button bg-red-600 text-white px-3 py-1 rounded-lg shadow-md hover:bg-red-500 hover:shadow-lg"
                            data-user-id="{{ $user->id }}">
                            Supprimer
                        </button>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        {{-- Modal --}}
        <div id="modal"
             class="hidden bg-gray-200 border-4 border-red-700 rounded-xl shadow-xl m-auto my-5 py-4 md:w-[450px]">
            <div class="modal-content"></div>
        </div>
    </div>
    <script src="{{ asset('js/modal-user-delete.js') }}" defer></script>
</x-admin-layout>
