<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ad;

class FavoriteController extends Controller
{
    public function addFavorite(Ad $ad)
    {
        $user = auth()->user();
        if(!$user->favorites()->where('ad_id', $ad->id)->exists()) {
            $user->favorites()->attach($ad->id);
        }
        return response()->json([
            'html' => view('partials.favorite-button', ['ad' => $ad])->render(),
        ]);
    }

    public function removeFavorite(Ad $ad)
    {
        $user = auth()->user();
        $user->favorites()->detach($ad->id);
        return response()->json([
            'html' => view('partials.favorite-button', ['ad' => $ad])->render(),
        ]);
    }

    public function index()
    {
        $favorites = auth()->user()->favorites;
        return view('favorites', compact('favorites'), ['title' => 'Mes favoris']);
    }
}
