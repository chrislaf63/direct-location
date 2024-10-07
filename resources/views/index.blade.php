@extends('layouts.main')

@section('content')
    <h2 class="text-center font-semibold text-2xl md:text-3xl mb-10">Dernières locations disponibles</h2>
    <div class="flex flex-col space-y-20 m-auto md:w-3/4  pb-5 4xl:pb-64">
        @forelse($ads as $ad)
            <x-preview :ad="$ad" route="ad.show" />

        @empty
            <p class="text-center">Aucun résultat pour votre recherche</p>
        @endforelse

        {{ $ads->links() }}
    </div>
@stop
