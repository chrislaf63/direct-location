{{-- Preview component for ads --}}
<div class="flex m-auto w-[900px] h-preview overflow-hidden border-2 border-gray-400 rounded-xl shadow-xl">
    {{-- Image --}}
    <div class="w-1/3 overflow-hidden self-end">
        @if(!empty($ad->picture_1))
        <img src="{{ asset('storage/'.$ad->picture_1) }}" alt="{{$ad->title}}" class="h-full object-cover">
        @elseif(empty($ad->picture_1))
        <img src="{{ asset('images/no-image.png') }}" alt="no image" class="h-full object-cover">
        @endif
    </div>
    {{-- Content --}}
    <div class="w-2/3 pr-3 ml-6 self-end">
        <div class="flex justify-between">
            <div><p class="font-semibold mb-2 pt-2 text-2xl">{{$ad->title}}</p></div>
            <div class="ml-auto">
                @auth
                <div class="favorite-container">
                    {{-- Favorite button --}}
                    @include('partials.favorite-button', ['ad' => $ad])
                </div>
                @endauth
            </div>
        </div>
        <p class="mb-2"><span class="font-medium text-2xl">{{$ad->price}}€</span>/&nbsp;{{$ad->time_unity}}</p>
        <p class="mb-3 text-sm">{{$ad->excerpt}}</p>
        <div class="flex justify-between">
            <a href="{{ route($route, $ad->id) }}">
                <button class="bg-green-100 px-3 py-1 rounded-lg mb-1 shadow-md hover:bg-green-200 hover:shadow-lg ">Voir l'annonce</button>
            </a>
            @if($ad->user_id === Auth::id())
            <a href="{{ route('ad.edit', $ad->id) }}">
                <button class="bg-indigo-50 px-3 py-1 rounded-lg shadow-md hover:bg-indigo-100 hover:shadow-lg">Modifier l'annonce</button>
            </a>
            <a href="{{ route('ad.destroy', $ad->id) }}">
                <x-delete :route="route('ad.destroy', $ad->id)" content="Supprimer l'annonce" />
            </a>
            @endif
        </div>
        <p class="mt-2 text-sm" >{{ $ad->category->name }}</p>
        <p class="mb-2 text-sm"><span class="font-medium">{{$ad->city->name}}</span><span>({{$ad->city->zip_code}})</span></p>
    </div>
</div>
