@extends('layouts.main')

@section('content')
<div class="bg-neutral-200 py-5">
    <form method="post" action="{{ route('ad.store') }}" enctype="multipart/form-data"
          class="max-w-2xl mx-auto p-6 bg-white rounded-lg shadow-[0px 14px 34px 0px rgba(0,0,0,0.08)]">
        @csrf
        @method('POST')
        <div class="flex flex-col gap-4">
            <div>
                <label for="category" class="text-sm font-semibold">Catégorie</label>
                <select name="category" id="category" class="w-full p-3 mt-2 border border-neutral-300 rounded-md"
                        required>
                    @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="region" class="text-sm font-semibold">Région</label>
                <select name="region" id="region" class="w-full p-3 mt-2 border border-neutral-300 rounded-md"
                        required>
                    @foreach($regions as $region)
                    <option value="{{ $region->id }}">{{ $region->name }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="departement" class="text-sm font-semibold">Département</label>
                <select name="departement" id="departement" class="w-full p-3 mt-2 border border-neutral-300 rounded-md"
                        required>
                    @foreach($departements as $departement)
                    <option value="{{ $departement->id }}">{{ $departement->name }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="title" class="text-sm font-semibold">Ville</label>
                <input type="text" name="city" id="city"
                       class="w-full p-3 mt-2 border border-neutral-300 rounded-md" required>
            </div>
            <div>
                <label for="title" class="text-sm font-semibold">Code postal</label>
                <input type="text" name="zip_code" id="zip_code"
                       class="w-full p-3 mt-2 border border-neutral-300 rounded-md" required>
            </div>
            <div>
                <label for="title" class="text-sm font-semibold">Titre de l'annonce</label>
                <input type="text" name="title" id="title"
                       class="w-full p-3 mt-2 border border-neutral-300 rounded-md" required>
            </div>
            <div>
                <label for="description" class="text-sm font-semibold">Description</label>
                <textarea name="description" id="description"
                          class="w-full p-3 mt-2 border border-neutral-300 rounded-md" required></textarea>
            </div>
            <div class="flex justify-between">
                <div class="w-1/3">
                    <label for="price" class="text-sm font-semibold">Prix</label>
                    <input type="number" name="price" id="price"
                           class="w-full p-3 mt-2 border border-neutral-300 rounded-md" required>
                </div>
                <div class="w-1/3">
                    <label for="time_unity" class="text-sm font-semibold">Par</label>
                    <select name="time_unity" id="time_unity"
                            class="w-full p-3 mt-2 border border-neutral-300 rounded-md"
                            required>
                        <option value="heure">heure</option>
                        <option value="demi-journée">demi-journée</option>
                        <option value="jour">jour</option>
                        <option value="semaine">semaine</option>
                        <option value="mois">mois</option>
                        <option value="année">année</option>
                    </select>
                </div>
            </div>
            <div>
                <label for="image1" class="text-sm font-semibold">Image n°1</label>
                <input type="file" name="image1" id="image1"
                       class="w-full p-3 mt-2 border border-neutral-300 rounded-md">
            </div>
            <div>
                <label for="image2" class="text-sm font-semibold">Image n°2</label>
                <input type="file" name="image2" id="image2"
                       class="w-full p-3 mt-2 border border-neutral-300 rounded-md">
            </div>
            <div>
                <label for="image3" class="text-sm font-semibold">Image n°3</label>
                <input type="file" name="image3" id="image3"
                       class="w-full p-3 mt-2 border border-neutral-300 rounded-md">
            </div>
            <input type="hidden" name="user_id" value="{{ $user->id }}">
            <input type="hidden" name="status" value="pending">
            <div>
                <button type="submit" class="w-full p-3 mt-2 bg-[#FF2D20] text-white rounded-md hover:bg-[#FF4E43]">
                    Publier
                </button>
            </div>
        </div>
    </form>
</div>
@stop
