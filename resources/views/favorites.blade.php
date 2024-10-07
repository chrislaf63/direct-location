@extends('layouts.main')

@section('content')
<div class="space-y-10">
@foreach(auth()->user()->favorites as $ad)
<x-preview :ad="$ad" route="ad.show" />
@endforeach
</div>
@stop
