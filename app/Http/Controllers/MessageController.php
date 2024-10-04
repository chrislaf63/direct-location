<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use App\Models\Ad;
use App\Models\Conversation;

class MessageController extends Controller
{
    public function create($id)
    {
        $ad = Ad::findOrFail($id);
        return view('messages', compact('ad'),
            [
                'title' => 'Messages',
            ]);
    }

    public function store(Request $request)
    {
        // Valider les données de la requête
        $validated = $request->validate([
            'ad_id' => 'required|exists:ads,id',
            'receiver_id' => 'required|exists:users,id',
            'content' => 'required|string|max:255',
        ]);

        $user = auth()->user();
        $adId = $validated['ad_id'];
        $receiverId = $validated['receiver_id'];

        // Vérifier si une conversation existe déjà entre l'utilisateur connecté et le destinataire
        $conversation = Conversation::where('ad_id', $adId)
            ->whereHas('messages', function ($query) use ($user, $receiverId) {
                $query->where(function ($q) use ($user, $receiverId) {
                    $q->where('sender_id', $user->id)
                        ->where('receiver_id', $receiverId);
                })->orWhere(function ($q) use ($user, $receiverId) {
                    $q->where('sender_id', $receiverId)
                        ->where('receiver_id', $user->id);
                });
            })->first();

        // Si la conversation n'existe pas, la créer
        if (!$conversation) {
            $conversation = Conversation::create([
                'ad_id' => $adId,
            ]);
        }

        $message = Message::create([
            'conversation_id' => $conversation->id,
            'sender_id' => auth()->id(),
            'receiver_id' => $validated['receiver_id'],
            'content' => $validated['content'],
        ]);

        $conversations = $conversation;
        return redirect()->route('conversations.index', $conversations);
    }

    public function reply(Request $request, $conversationId)
    {
        $validated = $request->validate([
            'ad_id' => 'required|exists:ads,id',
            'receiver_id' => 'required|exists:users,id',
            'content' => 'required|string|max:255',
        ]);

        $adId = $validated['ad_id'];
        $receiverId = $validated['receiver_id'];


        $user = auth()->user();
        $conversation = Conversation::find($conversationId);
        $ref = $conversation->messages->first();
        if($receiverId == $user->id) {
            $receiverId = $ref->sender_id;
        }

        $message = Message::create([
            'conversation_id' => $conversationId,
            'sender_id' => auth()->id(),
            'receiver_id' => $receiverId,
            'content' => $validated['content'],
        ]);

        return redirect()->route('conversations.index');
    }
}
