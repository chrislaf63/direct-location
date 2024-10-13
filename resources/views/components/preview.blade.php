{{-- Preview component for ads --}}
<div class="target flex flex-col  bg-neutral-50 m-auto w-previewSmall sm:w-previewMedium lg:flex-row  lg:w-previewLarge lg:h-previewHLarge overflow-hidden border-2 border-gray-400 rounded-xl shadow-xl">
    {{-- Image --}}
    <div class="bg-green-50 border border-black/30 rounded-xl h w-imagePrevLgw h-imagePrevLg overflow-hidden self-center my-3 md:ml-1 lg:my-0">
        @if(!empty($ad->picture_1))
        <img class="object-contain w-imagePrevLgw h-imagePrevLg rounded-xl" src="{{ asset('storage/'.$ad->picture_1) }}" alt="{{$ad->title}}">
        @elseif(empty($ad->picture_1))
        <img class="rounded-xl" src="{{ asset('images/no-image.png') }}" alt="no image">
        @endif
    </div>
    {{-- Content --}}
    <div class="lg:w-2/3 pr-3 ml-6 self-center lg:self-end">
        <div class="flex justify-between">
            <div><p class="text-lg font-semibold mb-1 pt-2 lg:text-2xl">{{$ad->title}}</p></div>
            <div class="ml-auto">
                @auth
                <div class="favorite-container">
                    {{-- Favorite button --}}
                    @include('partials.favorite-button', ['ad' => $ad])
                </div>
                @endauth
            </div>
        </div>
        <p class="mb-3"><span class="text-lg font-medium lg:text-2xl">{{$ad->price}}€</span>/&nbsp;{{$ad->time_unity}}</p>
        <p class="mb-6 text-sm">{{$ad->excerpt}}</p>
        <div class="flex justify-between mb-5">
            <a href="{{ route($route, $ad->id) }}">
                <button class="text-sm bg-green-100 px-3 py-1 rounded-lg mb-1 shadow-md hover:bg-green-200 hover:shadow-lg lg:text-lg">Voir l'annonce</button>
            </a>
            @if(($ad->user_id === Auth::id() && !request()->is('/')) || request()->is('admin'))
            <a href="{{ route('ad.edit', $ad->id) }}">
                <button class="text-sm bg-indigo-50 px-3 py-1 rounded-lg shadow-md hover:bg-indigo-100 hover:shadow-lg lg:text-lg" aria-label="modifier annonce">Modifier l'annonce</button>
            </a>
            <button class="delete-button text-sm bg-red-600 text-white px-3 py-1 rounded-lg shadow-md hover:bg-red-500 hover:shadow-lg lg:text-lg" data-ad-id="{{ $ad->id }}">Supprimer l'annonce</button>
            @endif

        </div>
        <p class="mt-2 text-sm" >{{ $ad->category->name }}</p>
        <p class="mb-2 text-sm"><span class="font-medium">{{$ad->city->name}}</span><span>({{$ad->city->zip_code}})</span></p>
    </div>
</div>
{{-- Modal --}}
<div id="modal"
     class="hidden bg-gray-200 border-4 border-red-700 rounded-xl shadow-xl m-auto my-5 py-4 md:w-[450px]">
    <div class="modal-content"></div>
</div>
