@extends ('layouts.main')

@section('content')

<div class="w-conversations m-auto">
    <div class="mt-8 ml-10">
        <div class="flex justify-between"
        <span class="mb-5">{{ $ad->city->departement->region->name }} > {{ $ad->city->departement->name }} > {{ $ad->city->name }} ({{ $ad->city->zip_code }}) > {{ $ad->category->name }}</span>

        @auth
        <div class="favorite-container">
            @include('partials.favorite-button', ['ad' => $ad])
        </div>
        @else
        <p>Connectez-vous pour ajouter aux favoris</p>
        @endauth
    </div>

    <h2 class="font-semibold text-3xl mb-5">{{$ad->title}}</h2>
    <div class="flex gap-2 h-48 max-w-1/2 mx-5 mt-5 mb-8 rounded-lg ">
        @if(!empty($ad->picture_1))
        <img src="{{ asset('storage/'.$ad->picture_1) }}" alt="{{ $ad->title }}" height="100%">
        @elseif(empty($ad->picture_1))
        <img src="{{ asset('images/no-image.png') }}" alt="no image" height="100%">
        @endif
        @if(!empty($ad->picture_2))
        <img src="{{ asset('storage/'.$ad->picture_2) }}" alt="{{ $ad->title }}" height="100%">
        @endif
        @if(!empty($ad->picture_3))
        <img src="{{ asset('storage/'.$ad->picture_3) }}" alt="{{ $ad->title }}" height="100%">
        @endif
    </div>
    <div class="w-4/5">
        <p>{{ $ad->city->name }} ({{ $ad->city->zip_code }})</p>
        <p><span class="font-semibold">{{$ad->price}}€</span>&nbsp;/&nbsp;{{$ad->time_unity}}</p>
        <h3 class="font-semibold text-xl mb-2">Description</h3>
        <p class>{{$ad->description}}</p>

        <p class="font-semibold">Contacter {{ $ad->user->name }}</p>
        <div>
            <a href="{{ route('messages.create', $ad->id) }}"><button class="bg-green-500 text-white px-3 py-1 rounded-lg">Envoyer un message</button></a>
            <button class="bg-green-500 text-white px-3 py-1 rounded-lg">Appeler</button>
        </div>
    </div>
</div>
</div>
@stop

