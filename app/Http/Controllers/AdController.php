<?php

namespace App\Http\Controllers;

use App\Models\Ads;
use Illuminate\Http\Request;
use App\Models\Region;
use App\Models\Departement;
use App\Models\City;

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
        $user = 1;
        $regions = Region::all();
        $departements = Departement::all();
        return view('create', compact(['regions', 'departements', 'user']), [
            'title' => 'Créer une annonce',
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'region' => 'required',
            'departement' => 'required',
            'city' => 'required',
            'zip_code' => 'required',
            'title' => 'required',
            'description' => 'required',
            'price' => 'required',
            'category' => 'required',

        ]);
        $compare = City::select('zip_code')->get();
        $city = new City();
        $city->name = $request->city;
        $city->zip_code = $request->zip_code;
        $city->departement_id = $request->departement;
        foreach ($compare as $zip) {
            if ($zip->zip_code == $request->zip_code) {
                $city->id = $zip->id;
            } else {
                $city->save();
            }
        }

        $insert_city = City::where('zip_code', $request->zip_code)->first();


        $ad = new Ads();
        $ad->user_id = $request->user_id;
        $ad->city_id = $insert_city->id;
        $ad->title = $request->title;
        $ad->description = $request->description;
        $ad->price = $request->price;
        $ad->category_id = $request->category;
        $ad->save();
    }
}
