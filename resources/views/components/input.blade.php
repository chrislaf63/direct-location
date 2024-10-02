<div>
    <div>
        <label for="{{ $id }}" class="text-sm font-semibold">{{ $label }}</label>
        <input id="{{ $id }}" name="{{ $name }}" type="{{ $type }}" value="{{ $value }}"
               class="w-full p-3 mt-2 border border-neutral-300 rounded-md">
    </div>
    @if ($help)
    <p class="mt-2 text-sm text-gray-500">{{ $help }}</p>
    @endif

    @if ($type === 'file' && $value && $isImage())
    <img src="{{ asset('storage/' . $value) }}" alt="Image de l'annonce" class="w-1/4 mt-2">
    @endif
</div>
