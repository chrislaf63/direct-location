@extends ('layouts.my-messages')

@section('content')
<div class="flex h-messages w-conversations m-auto">
    <!-- Colonne des annonces -->
    <div class="flex-col w-1/4 border-x border-black/30 h-messages overflow-auto">
        <div>
            <h3 class="py-4 font-semibold text-center border-b border-black/30">Vos conversations</h3>
        </div>
        @if (count($conversations) == 0)
        <p class="text-center text-sm text-gray-500 py-4">Vous n'avez pas de conversation</p>
        @else
        <div id="announcements" class="flex-col-reverse">
            @foreach ($conversations as $conversation)
            <div
                class="ad-item @if ($lastConversation && $lastConversation->id == $conversation->id) bg-green-300 @endif p-4 cursor-pointer text-center text-sm hover:bg-green-200"
                data-ad-id="{{ $conversation->ad->id }}"
                data-conversation-id="{{ $conversation->id }}">
                {{ $conversation->ad->title }}
            </div>
            @endforeach
        </div>
        @endif
    </div>
    <div class="flex flex-col justify-end w-1/2 h-messages">
        <div id="messages" class=" p-6 overflow-y-auto">
            <!-- Les messages seront insérés ici après sélection d'une annonce -->
            <div id="message-container" class="flex flex-col space-y-4">
                <!-- Les messages s'afficheront ici -->
            </div>
        </div>
        <div class="relative">
            <form id="response-form" action="" method="POST" style="display: none;" class="ml-50">
                @csrf
                <input type="hidden" name="ad_id" value="{{ !empty($conversation) ? $conversation->ad->id : '' }}">
                <input type="hidden" name="receiver_id" value="{{  !empty($conversation) ? $conversation->ad->user_id : '' }}">
                <input class="w-3/4 py-2.5 border-black/50 rounded-lg" type="text" name="content" placeholder="Votre message">
                <button type="submit" class="bg-green-200 border-2 border-black/30 rounded-lg p-2.5 absolute left-250 hover:bg-green-300">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                        <path d="M3.478 2.404a.75.75 0 0 0-.926.941l2.432 7.905H13.5a.75.75 0 0 1 0 1.5H4.984l-2.432 7.905a.75.75 0 0 0 .926.94 60.519 60.519 0 0 0 18.445-8.986.75.75 0 0 0 0-1.218A60.517 60.517 0 0 0 3.478 2.404Z" />
                    </svg>
                </button>
            </form>
        </div>
    </div>
    <div class="w-1/4 border-x-2 h-messages border-black"></div>
</div>
@stop

