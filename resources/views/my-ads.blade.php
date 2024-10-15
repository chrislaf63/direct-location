<x-main-layout :title="$title">
    <h2 class="text-center py-6 font-semibold text-3xl">Mes annonces actives</h2>
    @if($ads->isEmpty())
    <p class="text-center">Vous n'avez pas encore déposé d'annonce</p>
    @endif
    <div class="flex flex-col space-y-20 w-3/4 m-auto pb-5 4xl:pb-64">
        @foreach($ads as $ad)
        <x-preview :ad="$ad" route="ad.show"/>
        @endforeach
        {{ $ads->links() }}
    </div>
    <script src="{{ asset('js/modal-ad-delete.js') }}" defer></script>
</x-main-layout>

