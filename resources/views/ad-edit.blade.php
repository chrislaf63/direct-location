@extends('layouts.main')

@section('content')

<form action="{{ route('ad.update', $ad->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="w-3/4 m-auto">
        <div class="flex flex-col space-y-5">
            <div class="flex flex-col space-y-5">
                <label for="title">Titre</label>
                <input type="text" name="title" id="title" value="{{ $ad->title }}" class="border-2 border-gray-300 p-2 rounded-lg">
            </div>
            <div class="flex flex-col space-y-5">
                <label for="description">Description</label>
                <textarea name="description" id="description" class="border-2 border-gray-300 p-2 rounded-lg">{{ $ad->description }}</textarea>
            </div>
            <div class="flex flex-col space-y-5">
                <label for="price">Prix</label>
                <input type="number" name="price" id="price" value="{{ $ad->price }}" class="border-2 border-gray-300 p-2 rounded-lg">
            </div>
            <div class="flex flex-col space-y-5">
                <label for="city">Ville</label>
                <input type="text" name="city" id="city" value="{{ $ad->city->name }}" class="border-2 border-gray-300 p-2 rounded-lg">
            </div>
            <div class="flex flex-col space-y-5">
                <label for="category">Catégorie</label>
                <select name="category" id="category" class="border-2 border-gray-300 p-2 rounded-lg">
                    <option value="1" {{ $ad->category->id == 1 ? 'selected' : '' }}>Véhicules</option>
                    <option value="2" {{ $ad->category->id == 2 ? 'selected' : '' }}>Remorques</option>
                    <option value="3" {{ $ad->category->id == 3 ? 'selected' : '' }}>Maison</option>
                    <option value="4" {{ $ad->category->id == 4 ? 'selected' : '' }}>Jardin</option>
                    <option value="5" {{ $ad->category->id == 5 ? 'selected' : '' }}>Puériculture</option>
                    <option value="6" {{ $ad->category->id == 6 ? 'selected' : '' }}>Autre</option>
                </select>
            </div>
            <div class="flex flex-col space-y-5">
                <label for="time_unity">Unité de temps</label>
                <select name="time_unity" id="time_unity" class="border-2 border-gray-300 p-2 rounded-lg">
                    <option value="heure" {{ $ad->time_unity == 'heure' ? 'selected' : '' }}>Heure</option>
                    <option value="demi-journée" {{ $ad->time_unity == 'demi-journée' ? 'selected' : '' }}>Demi-journée</option>
                    <option value="jour" {{ $ad->time_unity == 'jour' ? 'selected' : '' }}>Jour</option>
                    <option value="semaine" {{ $ad->time_unity == 'semaine' ? 'selected' : '' }}>Semaine</option>
                    <option value="mois" {{ $ad->time_unity == 'mois' ? 'selected' : '' }}>Mois</option>
                    <option value="année" {{ $ad->time_unity == 'année' ? 'selected' : '' }}>Année</option>
                </select>
            </div>
            <div class="flex flex-col space-y-5">
                <label for="image">Image</label>
                <input type="file" name="image" id="image" class="border-2 border-gray-300 p-2 rounded-lg">
            </div>
            <div class="flex flex-col space-y-5">
                <button type="submit" class="bg-gray-100 px-4 py-2 rounded-xl">Modifier l'annonce</button>
            </div>
        </div>
    </div>
</form>

@stop
