@extends('layouts.main')

@section('content')
<div class="bg-neutral-200 py-5">
    <form method="post" action="{{ $ad->exists() ? route('ad.update', $ad->id) : route('ad.store') }}" enctype="multipart/form-data"
          class="max-w-2xl mx-auto p-6 bg-white rounded-lg shadow-[0px 14px 34px 0px rgba(0,0,0,0.08)]">
        @csrf
        @if ($ad->exists())
            @method('PUT')
        @endif
        <div class="flex flex-col gap-4">
            <div>
                <label for="category" class="text-sm font-semibold">Catégorie</label>
                <select name="category" id="category" class="w-full p-3 mt-2 border border-neutral-300 rounded-md"
                        required>
                    @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ !empty($ad->category->id) && $ad->category->id == $category->id ? 'selected' : ''}}>{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="departement" class="text-sm font-semibold">Département</label>
                <select name="departement" id="departement" class="w-full p-3 mt-2 border border-neutral-300 rounded-md"
                        required>
                    @foreach($departements as $departement)
                    <option value="{{ $departement->id }}" {{ !empty($ad->city->departement->id) && $ad->city->departement->id == $departement->id ? 'selected' : ''}}>{{ $departement->name }}</option>
                    @endforeach
                </select>
            </div>
            <x-input name="city" id="city" label="Ville" :value="$ad->exists() ? $ad->city->name : null" />
            <x-input name="zip_code" id="zip_code" label="Code postal" :value="$ad->exists() ? $ad->city->zip_code : null" />
            <x-input name="title" id="title" label="Titre" :value="$ad->title" />
            <div>
                <label for="description" class="text-sm font-semibold">Description</label>
                <textarea name="description" id="description"
                          class="w-full p-3 mt-2 border border-neutral-300 rounded-md" required>{{ $ad->description }}</textarea>
            </div>
            <div class="flex justify-between">
                <div class="w-1/3">
                    <x-input name="price" id="price" type="text" label="Prix" :value="$ad->price" />
                </div>
                <div class="w-1/3">
                    <label for="time_unity" class="text-sm font-semibold">Par</label>
                    <select name="time_unity" id="time_unity"
                            class="w-full p-3 mt-2 border border-neutral-300 rounded-md"
                            required>
                        <option value="heure"  >heure</option>
                        <option value="demi-journée">demi-journée</option>
                        <option value="jour">jour</option>
                        <option value="semaine">semaine</option>
                        <option value="mois">mois</option>
                        <option value="année">année</option>
                    </select>
                </div>
            </div>
            <x-input name="picture_1" id="picture_1" type="file" label="Image n°1" :value="$ad->picture_1" />
            <x-input name="picture_2" id="picture_2" type="file" label="Image n°2" :value="$ad->picture_2" />
            <x-input name="picture_3" id="picture_3" type="file" label="Image n°3" :value="$ad->picture_3" />
            <input type="hidden" name="user_id" value="{{ $user->id }}">
            <input type="hidden" name="status" value="{{ $ad->exists() ? 'published' : 'pending' }}">
            <div>
                <button type="submit" class="w-full p-3 mt-2 bg-[#FF2D20] text-white rounded-md hover:bg-[#FF4E43]">
                    Publier
                </button>
            </div>
        </div>
    </form>

</div>
@stop
