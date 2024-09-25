@extends ('layouts.main')

@section('content')

<div class="w-1/2 m-auto">
    <div class="mt-8 ml-10">
        <div class="flex justify-between"
        <span class="mb-5">{{ $ad->city->departement->region->name }} > {{ $ad->city->departement->name }} > {{ $ad->city->name }} ({{ $ad->city->zip_code }})</span>

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
        @foreach($ad->image as $image)
        <img src="{{$image->source}}" alt="{{$ad->title}}" height="100%">
        @endforeach
    </div>

    <div>
        <p>{{ $ad->city->name }} ({{ $ad->city->zip_code }})</p>
        <p><span class="font-semibold">{{$ad->price}}€</span>&nbsp;/&nbsp;{{$ad->time_unity}}</p>
        <h3 class="font-semibold text-xl mb-2">Description</h3>
        <p>{{$ad->description}}</p>

        <p class="font-semibold">Contacter {{ $ad->user->name }}</p>
        <div>
            <a href="{{ route('messages.create', $ad->id) }}"><button class="bg-green-500 text-white px-3 py-1 rounded-lg">Envoyer un message</button></a>
            <button class="bg-green-500 text-white px-3 py-1 rounded-lg">Appeler</button>
        </div>
    </div>
</div>
</div>
@stop

