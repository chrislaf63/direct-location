<?php

namespace App\Http\Controllers;

use App\Models\Ads;
use App\Models\Image;
use Illuminate\Http\Request;
use App\Models\Region;
use App\Models\Departement;
use App\Models\City;

class AdController extends Controller
{
    public function index()
    {
        $ads = Ads::latest()->paginate(10);
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
            'time_unity' => 'required',
            'category' => 'required',
            'image1' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp',
            'image2' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp',
            'image3' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp',

        ]);

        // Utilisation de firstOrCreate pour éviter les doublons
        $city = City::firstOrCreate(
            [
                'name' => $request->city,
                'zip_code' => $request->zip_code,
            ],
            [
                'departement_id' => $request->departement,
            ]
        );

        $ad = new Ads();
        $ad->user_id = $request->user_id;
        $ad->city_id = $city->id;
        $ad->title = $request->title;
        $ad->description = $request->description;
        $ad->price = $request->price;
        $ad->time_unity = $request->time_unity;
        $ad->category_id = $request->category;
        $ad->save();
        for($i = 1; $i <= 3; $i++){
            $image = "image$i";
            if($request->hasFile($image)) {
                $photoName = time().$i.'.'.$request->$image->extension();
                $request->$image->move(public_path('images'), $photoName);
                $img = new Image();
                $appUrl = config('app.url');
                $img->source = $appUrl."/images/".$photoName;
                $img->ads_id = $ad->id;
                $img->user_id = $request->user_id;
                $img->save();
            }
        };
        return redirect()->route('ad.index')->with('success', 'Annonce créée avec succès');
    }


}
