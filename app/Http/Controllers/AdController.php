<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use App\Models\Image;
use Illuminate\Http\Request;
use App\Models\Region;
use App\Models\Departement;
use App\Models\City;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class AdController extends Controller
{
    public function index()
    {
        $ads = Ad::where('status', '=', 'published' )->latest()->paginate(10);
        return view('index', compact('ads'), [
            'title' => 'Annonces',
        ]);
    }

    public function myads()
    {
        $user = Auth::user();
        $ads = $user->ads()->paginate(10);
        return view('my-ads', compact('ads'), [
            'title' => 'Mes annonces',
        ]);
    }

    public function show($id)
    {
        $ad = Ad::findOrFail($id);
        return view('show', compact('ad'), [
            'title' => $ad->title,
        ]);
    }

    public function create()
    {
        $user = Auth::user();
        $categories = Category::all();
        $regions = Region::all();
        $departements = Departement::all();
        return view('create', compact(['regions', 'departements', 'user', 'categories']), [
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
            'status' => 'required',
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

        $ad = new Ad();
        $ad->user_id = $request->user_id;
        $ad->city_id = $city->id;
        $ad->title = $request->title;
        $ad->status = $request->status;
        $ad->description = $request->description;
        $ad->excerpt = substr($request->description, 0, 150);
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

    public function edit($id)
    {
        $ad = Ad::findOrFail($id);
        $categories = Category::all();
        $regions = Region::all();
        $departements = Departement::all();
        return view('ad-edit', compact(['ad', 'regions', 'departements', 'categories']), [
            'title' => 'Modifier une annonce',
        ]);
    }

    Public function update(Request $request, $id)
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
            'status' => 'required',
            'image1' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp',
            'image2' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp',
            'image3' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp',

        ]);

        $ad = Ad::findOrFail($id);
        $city = City::firstOrCreate(
            [
                'name' => $request->city,
                'zip_code' => $request->zip_code,
            ],
            [
                'departement_id' => $request->departement,
            ]
        );

        $ad->user_id = $request->user_id;
        $ad->city_id = $city->id;
        $ad->title = $request->title;
        $ad->status = $request->status;
        $ad->description = $request->description;
        $ad->excerpt = substr($request->description, 0, 150);
        $ad->price = $request->price;
        $ad->time_unity = $request->time_unity;
        $ad->category_id = $request->category;
        $ad->save();
        for ($i = 1; $i <= 3; $i++) {
            $image = "image$i";
            if ($request->hasFile($image)) {
                $photoName = time() . $i . '.' . $request->$image->extension();
                $request->$image->move(public_path('images'), $photoName);
                $img = new Image();
                $appUrl = config('app.url');
                $img->source = $appUrl . "/images/" . $photoName;
                $img->ads_id = $ad->id;
                $img->user_id = $request->user_id;
                $img->save();
            }
        }
        return redirect()->route('ad.myads')->with('success', 'Annonce modifiée avec succès');

    }

    public function destroy($id)
    {
        $ad = Ad::findOrFail($id);
        $ad->delete();
        return redirect()->route('ad.myads')->with('success', 'Annonce supprimée avec succès');
    }

}
