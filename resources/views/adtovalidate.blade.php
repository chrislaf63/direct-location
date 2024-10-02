@extends ('layouts.admin')

@section('content')
<div class="mt-8 ml-10">
    <span class="mb-5">{{ $ad->city->departement->region->name }} > {{ $ad->city->departement->name }} > {{ $ad->city->name }} ({{ $ad->city->zip_code }})</span>
    <h2 class="font-semibold text-3xl mb-5">{{$ad->title}}</h2>
    <div class="flex gap-2 h-48 max-w-1/2 mx-5 mt-5 mb-8 rounded-lg ">
        @if($ad->picture_1 != null)
        <img src="{{ asset('storage/'.$ad->picture_1) }}" alt="{{$ad->title}}" height="100%">
        @else
        <img src="{{ asset('images/no-image.png') }}" alt="no image" class="h-full object-cover">
        @endif
        @if($ad->picture_2 != null)
        <img src="{{ asset('storage/'.$ad->picture_2) }}" alt="{{$ad->title}}" height="100%">
        @endif
        @if($ad->picture_3 != null)
        <img src="{{ asset('storage/'.$ad->picture_3) }}" alt="{{$ad->title}}" height="100%">
        @endif
    </div>

    <div>
        <p>{{ $ad->city->name }} ({{ $ad->city->zip_code }})</p>
        <p><span class="font-semibold">{{$ad->price}}€</span>&nbsp;/&nbsp;{{$ad->time_unity}}</p>
        <h3 class="font-semibold text-xl mb-2">Description</h3>
        <p>{{$ad->description}}</p>

        <p class="font-semibold">Contacter {{ $ad->user->name }}</p>
        <div>
            <form method="post" action="{{ route('ad.validate', $ad->id) }}">
                @csrf
                @method('PUT')
                <button type="submit" class="bg-green-500 text-white px-3 py-1 rounded-lg">Valider l'annonce</button>
            </form>

            <x-delete :route="route('ad.todestroy', $ad->id)" content="Supprimer l'annonce" />
        </div>
    </div>
</div>
@stop
