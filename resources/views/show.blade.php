@extends ('layouts.main')

@section('content')
<div class="mt-8 ml-10">
    <span class="mb-5">{{ $ad->city->departement->region->name }} > {{ $ad->city->departement->name }} > {{ $ad->city->name }} ({{ $ad->city->zip_code }})</span>
    <div class="flex gap-2 h-48 max-w-1/2 mx-5 mt-5 mb-8 rounded-lg ">
        @foreach($ad->image as $image)
        <img src="{{$image->source}}" alt="{{$ad->title}}" height="100%">
        @endforeach
    </div>
    <h2 class="font-semibold text-3xl mb-5">{{$ad->title}}</h2>
    <div>
        <h3 class="font-semibold text-xl">Description</h3>
        <p>{{$ad->description}}</p>
        <p>{{$ad->price}}</p>
        <p>{{$ad->user->name}}</p>
    </div>
</div>
@stop
