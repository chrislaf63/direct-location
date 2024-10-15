<x-admin-layout :title="$title" class="bg-neutral-50">
    <div class="bg-neutral-100">
        <h2 class="text-center font-semibold py-6 text-3xl">Annonces actuellement publiées : {{ $nbpublishedads }}</h2>
        <div class="flex flex-col space-y-20 w-3/4 m-auto pb-5 4xl:pb-64">
            @foreach($publishedads as $ad)
            <x-preview :ad="$ad" route="ad.show"/>
            @endforeach
            {{ $publishedads->links() }}
        </div>
    </div>
    <script src="{{ asset('js/modal-ad-delete.js') }}" defer></script>
</x-admin-layout>
