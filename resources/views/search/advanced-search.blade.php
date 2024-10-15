<x-main-layout :title="$title">
    <div>
        <form action="{{ route('advanced-search') }}" method="post">
            @csrf
            <fieldset class="m-auto px-6 flex flex-col w-4/5 py-6 justify-center mt-10 gap-6 border-2 border-black rounded-xl bg-neutral-50 sm:w-3/5 lg:flex-row">
                <legend class="ml-10 text-xl font-semibold">Localisation</legend>
                <select id="region-select" name="region" class="rounded-lg shadow-md focus:shadow-lg">
                    <option value="">Sélectionnez une région</option>
                    @foreach($regions as $region)
                    <option value="{{ $region->id }}">{{ $region->name }}</option>
                    @endforeach
                </select>

                <select id="department-select" name="department" class="rounded-lg shadow-md focus:shadow-lg" disabled>
                    <option value="">Sélectionnez un département</option>
                </select>
                <!--        <select id="city-select" disabled>-->
                <!--            <option value="">Sélectionnez une ville</option>-->
                <!--        </select>-->
                <!--                <input type="text" name="city-search" id="city-search" placeholder="Rechercher dans cette ville">-->
            </fieldset>
            <fieldset class="m-auto px-6 flex flex-col w-4/5 py-6 justify-center mt-10 gap-6 border-2 border-black rounded-xl bg-neutral-50 sm:w-3/5 lg:flex-row">
                <legend class="ml-10 text-xl font-semibold">Je recherche</legend>
                <select id="category-select" name="category" class="rounded-lg shadow-md focus:shadow-lg">
                    <option value="">Sélectionnez une catégorie</option>
                    @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
                <div class="lg:w-1/2">
                    <input class="w-full rounded-lg shadow-md focus:shadow-lg lg:w-3/4" type="search" name="search" id="search" value="{{ request()->search }}"
                           placeholder="Je recherche">
                    <div>
                        <input type="checkbox" name="intitle" id="in-title">
                        <label for="in-title">Rechercher uniquement dans le titre</label>
                    </div>
                </div>
            </fieldset>
            <div class="flex justify-center my-10">
                <button type="submit"
                    class="bg-green-600 shadow-md  text-white font-bold py-2 px-4 rounded hover:bg-green-500 hover:shadow-lg">
                    C'est parti !
                </button>
            </div>
        </form>
    </div>

    <script src="{{ asset('js/advanced-search.js') }}" defer></script>
</x-main-layout>
