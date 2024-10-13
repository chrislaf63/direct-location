<x-admin-layout :title="$title">
    <div class="bg-neutral-100">
        <h2 class="py-6 text-center font-semibold text-3xl">Annonces en attente de validation : {{ $nbwaitingads }}</h2>
        <div class="flex flex-col space-y-20 w-3/4 m-auto pb-5 4xl:pb-64">
            @foreach($tovalidate as $ad)
            <x-preview :ad="$ad" route="ad.tovalidate.show"/>
            @endforeach
            {{ $tovalidate->links() }}
        </div>
    </div>
</x-admin-layout>
