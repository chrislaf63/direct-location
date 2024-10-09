@extends ('layouts.main')

@section('content')

<div class="lg:w-conversations m-auto">
    <div class="mt-8 mx-10">
        <div class="flex justify-between gap-4">
            <div class="hidden sm:block">
                <span class="mb-5 text-sm">{{ $ad->city->departement->region->name }} > {{ $ad->city->departement->name }} > {{ $ad->city->name }} ({{ $ad->city->zip_code }}) > {{ $ad->category->name }}</span>
            </div>
            @auth
            <div class="favorite-container">
                @include('partials.favorite-button', ['ad' => $ad])
            </div>
            @else
            <p>Connectez-vous pour ajouter aux favoris</p>
            @endauth
        </div>

        <h2 class="font-semibold text-2xl md:text-3xl mb-5">{{$ad->title}}</h2>
        <div class="flex gap-4 h-48 max- md:mx-5 mt-5 mb-8 rounded-lg ">
            @if(!empty($ad->picture_1))
            <a href="{{ asset('storage/'.$ad->picture_1) }}">
                <img class="object-contain h-48" src="{{ asset('storage/'.$ad->picture_1) }}"
                     alt="{{ $ad->title }}" height="100%">
            </a>
            @elseif(empty($ad->picture_1))
            <img src="{{ asset('images/no-image.png') }}" alt="no image" height="100%">
            @endif
            @if(!empty($ad->picture_2))
            <a href="{{ asset('storage/'.$ad->picture_2) }}">
                <img class="hidden object-contain h-48 md:block"
                     src="{{ asset('storage/'.$ad->picture_2) }}"
                     alt="{{ $ad->title }}" height="100%">
            </a>
            @endif
            @if(!empty($ad->picture_3))
            <a href="{{ asset('storage/'.$ad->picture_3) }}">
                <img class="hidden object-contain h-48 md:block"
                     src="{{ asset('storage/'.$ad->picture_3) }}"
                     alt="{{ $ad->title }}" height="100%">
            </a>
            @endif
        </div>
        @if(!empty($ad->picture_2) || !empty($ad->picture_3))
        <div class="md:hidden flex gap-2 mb-5">
            @if(!empty($ad->picture_2))
            <div class="border border-black/10 rounded-md h-24 object-cover">
                <a href="{{ asset('storage/'.$ad->picture_2) }}">
                    <img class="object-contain h-24 rounded-md"
                         src="{{ asset('storage/'.$ad->picture_2) }}"
                         alt="{{ $ad->title }}">
                </a>
            </div>
            @endif
            @if(!empty($ad->picture_3))
            <div class="border border-black/10 rounded-md h-24 object-cover">
                <a href="{{ asset('storage/'.$ad->picture_3) }}">
                    <img class="object-contain h-24 rounded-md"
                         src="{{ asset('storage/'.$ad->picture_3) }}"
                         alt="{{ $ad->title }}">
                </a>
            </div>
            @endif
        </div>
        @endif
        <div class="w-4/5">
            <p>{{ $ad->city->name }} ({{ $ad->city->zip_code }})</p>
            <p><span class="font-semibold">{{$ad->price}}€</span>&nbsp;/&nbsp;{{$ad->time_unity}}</p>
            <h3 class="font-semibold text-xl mb-2">Description</h3>
            <p class="my-2">{{$ad->description}}</p>

            <p class="font-semibold">Contacter {{ $ad->user->name }}</p>
            <div>
                <a href="{{ route('messages.create', $ad->id) }}">
                    <button class="mb-2 bg-green-500 text-white px-3 py-1 rounded-lg">Envoyer un message</button>
                </a>
                <button class="mb-2 bg-green-500 text-white px-3 py-1 rounded-lg">Appeler</button>
            </div>
        </div>
    </div>
</div>

@stop

