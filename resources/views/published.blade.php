@extends('layouts.admin')

@section('content')
<h2 class="text-center font-semibold text-3xl">Annonces publiées</h2>
<div class="flex flex-col space-y-20 w-3/4 m-auto pb-5 4xl:pb-64">
    @foreach($publishedads as $ad)
        <x-preview :ad="$ad" route="ad.show"/>
    @endforeach
    {{ $publishedads->links() }}
</div>
@stop
