<div class="flex m-auto w-[900px] h-preview gap-4 bg-gray-300 items-center overflow-hidden">
    <div class="w-1/3 p-2 overflow-hidden">
        @if($ad->image->isNotEmpty())
        <img src="{{ $ad->image->first()->source}}" alt="{{$ad->title}}" class="h-full object-cover">
        @elseif($ad->image->isEmpty())
        <img src="{{ asset('images/no-image.png') }}" alt="no image" class="h-full object-cover">
        @endif
    </div>
    <div class="w-2/3 pr-3">
        <p class="font-semibold mb-2 pt-2">{{$ad->title}}</p>
        <p class="mb-2">{{$ad->excerpt}}</p>
        <p class="mb-2"><span class="font-medium">{{$ad->city->name}}</span><span>({{$ad->city->zip_code}})</span></p>
        <p class="mb-2"><span class="font-medium">{{$ad->price}}€</span>&ensp;/&nbsp;{{$ad->time_unity}}</p>
    <div class="flex justify-between">
        <a href="{{ route($route, $ad->id) }}">
            <button class="bg-gray-100 px-3 py-1 rounded-lg mb-2">Voir l'annonce</button>
        </a>
        @if($ad->user_id === Auth::id())
        <a href="{{ route('ad.edit', $ad->id) }}">
            <button class="bg-gray-100 px-3 py-1 rounded-lg">Modifier l'annonce</button>
        </a>
        <a href="{{ route('ad.destroy', $ad->id) }}">
            <x-delete :route="route('ad.destroy', $ad->id)" content="Supprimer l'annonce" />
        </a>
        @endif
        </div>
    </div>
</div>
