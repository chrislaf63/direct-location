@extends('layouts.main')

@section('content')
<div class="flex flex-col justify-center items-center gap-6 my-10 lg:flex-row lg:gap-x-14 lg:items-stretch">
    <div class="w-previewSmall sm:w-previewMedium border-2 border-gray-200 py-8 px-4 rounded-2xl shadow-lg">
        <h2 class="font-semibold text-center text-xl mb-3">Envoyer un message à {{ $ad->user->name }}</h2>
        <div>
            <form action="{{ route('messages.store') }}" method="POST">
                @csrf
                <input type="hidden" name="ad_id" value="{{ $ad->id }}">
<!--                <input type="hidden" name="sender_id" value="{{ Auth::id() }}">-->
                <input type="hidden" name="receiver_id" value="{{ $ad->user_id }}">
                <div class="flex flex-col gap-4">
                    <div class="flex flex-col">
                        <label class="text-sm" for="content">Votre message*</label>
                        <textarea class="rounded-2xl resize-none mt-2" name="content" id="content" cols="42" rows="15"></textarea>
                    </div>
                    <button class="text-white font-medium py-2 bg-blue-900 rounded-xl hover:bg-blue-800" type="submit">Envoyer</button>
                </div>
        </div>
    </div>
    <div class="flex flex-col w-previewSmall sm:w-previewMedium border-2 border-gray-200 py-8 px-4 rounded-2xl shadow-lg">
        <h2 class="font-semibold text-2xl mb-3">Récapitulatif de l'annonce</h2>
        <div class="h-28 mb-5">
            <img class="object-contain h-28" src="{{ asset('storage/'.$ad->picture_1) }}">
        </div>
        <h3 class="mb-2 font-semibold text-lg">{{ $ad->title }}</h3>
        <p class="mb-4"><span class="font-semibold">{{ $ad->price }}€</span>&nbsp;/&nbsp;{{ $ad->time_unity }}</p>
        <p class="text-sm mb-2">Publiée le {{ $ad->created_at }}</p>
        <p class="text-sm mb-4">par <span class="font-semibold">{{ $ad->user->name }}</span></p>
        <h2 class="font-semibold text-lg mb-3">Description</h2>


        <div class="px-2 py-1 border border-gray-100 h-20 overflow-y-scroll">
            <p class="text-sm">{{ $ad->description }}</p>
        </div>
        <h3 class="font-semibold text-lg mt-5 mb-1">Localisation</h3>
        <p class="text-sm">{{ $ad->city->name }}&nbsp;{{ $ad->city->zip_code}}</p>
    </div>
</div>
@stop
