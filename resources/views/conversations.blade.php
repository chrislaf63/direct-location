@extends ('layouts.my-messages')

@section('content')
<div class="flex h-screen">
    <!-- Colonne des annonces -->
    <div id="announcements" class="w-1/4 border-r h-full overflow-auto">
        @foreach ($conversations as $conversation)
        <div
            class="ad-item @if ($lastConversation && $lastConversation->id == $conversation->id) bg-gray-300 @endif p-4 cursor-pointer hover:bg-gray-200"
            data-ad-id="{{ $conversation->ad->id }}"
            data-conversation-id="{{ $conversation->id }}">
            {{ $conversation->ad->title }}
        </div>
        @endforeach
    </div>
    <div id="messages" class="w-3/4 h-full p-6 overflow-y-auto">
        <!-- Les messages seront insérés ici après sélection d'une annonce -->
        <div id="message-container" class="flex flex-col space-y-4">
            <!-- Les messages s'afficheront ici -->
        </div>
        <form id="response-form" action="" method="POST" style="display: none;">
            @csrf
            <textarea name="message" placeholder="Votre message"></textarea>
            <button type="submit">Envoyer</button>
        </form>
    </div>

    <div class="w-1/4 border-l-2 border-black"></div>
</div>
@stop

