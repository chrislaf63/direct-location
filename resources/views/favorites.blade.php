@extends('layouts.main')

@section('content')
<h1 class="my-5 text-center text-2xl">Mes annonces enregistrées</h1>
<div class="space-y-10">
@foreach(auth()->user()->favorites as $ad)
<x-preview :ad="$ad" route="ad.show" />
@endforeach
</div>
@stop
