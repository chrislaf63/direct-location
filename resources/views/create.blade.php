<x-main-layout :title="$title">
    <div class="bg-white py-5">
        @if ($ad->exists())
        <h1 class="text-center text-2xl mb-2">Modifier une annonce</h1>
        @else
        <h1 class="text-center text-2xl mb-2">Déposer une annonce</h1>
        @endif
        <form method="post" action="{{ $ad->exists() ? route('ad.update', $ad->id) : route('ad.store') }}"
              enctype="multipart/form-data"
              class="bg-neutral-50 border border-black/30 max-w-2xl mx-auto p-6 rounded-lg shadow-lg">
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
                        <option value="{{ $category->id }}" {{ !empty($ad->category->id) && $ad->category->id ==
                            $category->id ? 'selected' : ''}}>{{ $category->name }}
                        </option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label for="departement" class="text-sm font-semibold">Département</label>
                    <select name="departement" id="departement"
                            class="w-full p-3 mt-2 border border-neutral-300 rounded-md"
                            required>
                        @foreach($departements as $departement)
                        <option value="{{ $departement->id }}" {{ !empty($ad->city->departement->id) &&
                            $ad->city->departement->id == $departement->id ? 'selected' : ''}}>{{ $departement->name }}
                        </option>
                        @endforeach
                    </select>
                </div>
                <div class="flex gap-3">
                    <div class="w-2/3">
                        <x-input name="city" id="city" label="Ville" :value="$ad->exists() ? $ad->city->name : null"/>
                        <x-input-error :messages="$errors->get('city')" class="mt-1"/>
                    </div>
                    <div class="w-1/3">
                        <x-input name="zip_code" id="zip_code" label="Code postal"
                                 :value="$ad->exists() ? $ad->city->zip_code : null"/>
                        <x-input-error :messages="$errors->get('zip_code')" class="mt-1"/>
                    </div>
                </div>
                <x-input name="title" id="title" label="Titre" :value="$ad->title"/>
                <x-input-error :messages="$errors->get('title')" class="mt-1"/>
                <div>
                    <label for="description" class="text-sm font-semibold">Description</label>
                    <textarea name="description" id="description"
                              class="w-full p-3 mt-2 border border-neutral-300 rounded-md">{{ $ad->description }}</textarea>
                    <x-input-error :messages="$errors->get('description')" class="mt-1"/>
                </div>
                <div class="flex justify-between">
                    <div class="w-1/3">
                        <x-input name="price" id="price" type="text" label="Prix" :value="$ad->price"/>
                        <x-input-error :messages="$errors->get('price')" class="mt-1"/>
                    </div>
                    <div class="w-1/3">
                        <label for="time_unity" class="text-sm font-semibold">Par</label>
                        <select name="time_unity" id="time_unity"
                                class="w-full p-3 mt-2 border border-neutral-300 rounded-md"
                                required>
                            <option value="heure" {{ $ad->exists() && $ad->time_unity == "heure" ? 'selected' : '' }}>heure</option>
                            <option value="demi-journée" {{ $ad->exists() && $ad->time_unity == "demi-journée" ? 'selected' : '' }} >demi-journée</option>
                            <option value="jour" {{ $ad->exists() && $ad->time_unity == "jour" ? 'selected' : '' }}>jour</option>
                            <option value="semaine" {{ $ad->exists() && $ad->time_unity == "semaine" ? 'selected' : '' }}>semaine</option>
                            <option value="mois" {{ $ad->exists() && $ad->time_unity == "mois" ? 'selected' : '' }}>mois</option>
                            <option value="année" {{ $ad->exists() && $ad->time_unity == "année" ? 'selected' : '' }}>année</option>
                        </select>
                    </div>
                </div>
                <div class="flex">
                    <x-input name="picture_1" id="picture_1" type="file" label="Image n°1" :value="$ad->picture_1"/>
                    <x-input-error :messages="$errors->get('picture_1')" class="mt-1"/>
                    <x-input name="picture_2" id="picture_2" type="file" label="Image n°2" :value="$ad->picture_2"/>
                    <x-input-error :messages="$errors->get('picture_2')" class="mt-1"/>
                    <x-input name="picture_3" id="picture_3" type="file" label="Image n°3" :value="$ad->picture_3"/>
                    <x-input-error :messages="$errors->get('picture_3')" class="mt-1"/>
                </div>
                <input type="hidden" name="user_id" value="{{ $user->id }}">
                <input type="hidden" name="status" value="{{ $ad->exists() ? 'published' : 'pending' }}">
                <div>
                    <button type="submit"
                            class="w-full p-3 mt-2 bg-green-600 text-white rounded-md shadow-md hover:bg-green-500 hover:shadow-lg">
                        Publier
                    </button>
                </div>
            </div>
        </form>

    </div>
</x-main-layout>
