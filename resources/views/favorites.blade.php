@extends('layouts.main')

@section('content')

@foreach(auth()->user()->favorites as $ad)
<x-preview :ad="$ad" route="ad.show" />
@endforeach
@stop
