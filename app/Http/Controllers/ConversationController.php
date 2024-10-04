<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Conversation;
use Illuminate\Support\Facades\Auth;

class ConversationController extends Controller
{
    public function index()
    {
        $id = Auth::id();
        $conversations = Conversation::whereHas('messages', function ($query) use ($id) {
            $query->where('sender_id', $id)
                ->orWhere('receiver_id', $id);
        })->get();

        $lastConversation = $conversations->last();

        return view('conversations', compact('conversations', 'lastConversation'), [
            'title' => 'Conversations',
        ]);


    }

    public function getMessages($conversationId)
    {
        $conversation = Conversation::find($conversationId);

        if (!$conversation) {
            return response()->json([], 404);  // Renvoie une erreur si la conversation n'existe pas
        }

        // Récupère tous les messages liés à la conversation
        $messages = $conversation->messages()->orderBy('created_at', 'asc')->get();

        return response()->json([
            'success' => true,
            'messages' => $messages
        ]);
    }

}
