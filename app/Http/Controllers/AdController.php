<?php

namespace App\Http\Controllers;

use App\Models\Ads;
use Illuminate\Http\Request;

class AdController extends Controller
{
    public function index()
    {
        $ads = Ads::all();
        return view('index', compact('ads'), [
            'title' => 'Annonces',
        ]);
    }

    public function show($id)
    {
        $ad = Ads::findOrFail($id);
        return view('show', compact('ad'), [
            'title' => $ad->title,
        ]);
    }

    public function create()
    {
        return view('create', [
            'title' => 'Créer une annonce',
        ]);
    }
}
