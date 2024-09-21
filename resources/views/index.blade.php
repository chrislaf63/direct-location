@extends('layouts.main')

@section('content')
    <h2 class="text-center font-semibold text-3xl">Dernières location disponibles</h2>
    <div class="flex flex-col space-y-20 w-3/4 m-auto pb-5 4xl:pb-64">
        @foreach($ads as $ad)
        <div class="flex m-auto w-3/4 gap-4 bg-gray-300">
            <div class="w-1/3">
                @if($ad->image->isNotEmpty())
                <img src="{{ $ad->image->first()->source}}" alt="{{$ad->title}}">
                @elseif($ad->image->isEmpty())
                <img src="{{ asset('images/no-image.png') }}" alt="no image">
                @endif
            </div>
            <div class="w-2/3">
                <p>{{$ad->title}}</p>
                <p>{{$ad->description}}</p>
                <p>{{$ad->price}}&ensp;€</p>
                <p><span>{{ $ad->city->zip_code }}</span><span>&ensp; {{ $ad->city->name }}</span></p>
                <p>{{$ad->user->name}}</p>
                <a href="{{ route('ad.show', $ad->id) }}">
                    <button>Voir l'annonce</button>
                </a>
            </div>
        </div>
        @endforeach
        {{ $ads->links() }}
    </div>
@stop
