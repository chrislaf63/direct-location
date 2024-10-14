<x-main-layout :title="$title">
    <h2 class="text-center py-6 font-semibold text-3xl">Mes annonces actives</h2>
    @if($ads->isEmpty())
    <p class="text-center">Vous n'avez pas encore déposé d'annonce</p>
    @endif
    <div id="target" class="flex flex-col space-y-20 w-3/4 m-auto pb-5 4xl:pb-64">
        @foreach($ads as $ad)
        <x-preview :ad="$ad" route="ad.show"/>
        @endforeach
        {{ $ads->links() }}
    </div>
    <div id="modal"
         class="hidden bg-gray-200 border-4 border-red-700 rounded-xl shadow-xl m-auto my-5 py-4 md:w-[450px]">
        <h2 class="text-center text-3xl font-bold">Attention !!!</h2>
        <p class="text-center">Cette annonce va être supprimée</p>
        <p class="text-center">Souhaitez-vous vraiment continuer ?</p>
        <div class="flex justify-around">
            @if(!empty($ad))
            <form action="{{ route('ad.destroy', $ad->id) }}" method="post">
                @method('delete')
                @csrf
                <button id="confirm"
                        class="bg-red-500 text-white px-3 py-1 rounded-xl hover:bg-red-400 hover:shadow-md">
                    Oui
                </button>
            </form>
            @endif
            <button id="back" class="bg-gray-500 text-white px-3 py-1 rounded-xl hover:bg-gray-400 hover:shadow-md">Non
            </button>
        </div>
    </div>
</x-main-layout>

