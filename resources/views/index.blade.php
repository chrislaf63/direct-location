@extends('layouts.main')

@section('content')
<h2 class="text-center font-semibold text-2xl md:text-3xl mt-5 mb-10">Dernières locations disponibles</h2>
<div id="target" class="flex flex-col space-y-16 m-auto md:w-3/4  pb-5 4xl:pb-64">
    @forelse($ads as $ad)
    <x-preview :ad="$ad" route="ad.show"/>
    @empty
    <p class="text-center">Aucun résultat pour votre recherche</p>
    @endforelse

    {{ $ads->links() }}
</div>
<div id="modal"
     class="hidden bg-gray-200 border-4 border-red-700 rounded-xl shadow-xl m-auto my-5 py-4 md:w-[450px]">
    <h2 class="text-center text-3xl font-bold">Attention !!!</h2>
    <p class="text-center">Cette annonce va être supprimée</p>
    <p class="text-center">Souhaitez-vous vraiement continuer ?</p>
    <div class="flex justify-around">
        <form action="{{ route('ad.destroy', $ad->id) }}" method="post">
            @method('delete')
            @csrf
            <button id="confirm" class="bg-red-500 text-white px-3 py-1 rounded-xl hover:bg-red-400 hover:shadow-md">
                Oui
            </button>
        </form>
        <button id="back" class="bg-gray-500 text-white px-3 py-1 rounded-xl hover:bg-gray-400 hover:shadow-md">Non
        </button>
    </div>
</div>
@stop
