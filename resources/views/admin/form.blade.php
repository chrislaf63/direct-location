@extends ('layouts.main')

@section('content')
<form action="{{ $ad->exists() ? route('ad.update', ['ad' => $ad]) : route('ad.store') }}" method="POST" enctype="multipart/form-data"
      class="max-w-2xl mx-auto p-6 bg-white rounded-lg shadow-[0px 14px 34px 0px rgba(0,0,0,0.08)]">
    @csrf
    @if ($ad->exists())
    @method('PATCH')
    @endif
    <div class="spay-y-12">
        <x-input name="city" id="city" type="text" label="Ville" :value="$ad->city->name" />
        <x-input name="zip" id="zip" type="text" label="Code postal" :value="$ad->city->zip_code" />
        <x-input name="title" id="title" type="text" label="Titre de l'annonce" :value="$ad->title" />

        <x-input name="price" id="price" type="text" label="Prix" :value="$ad->price" />
    </div>
</form>
@stop
