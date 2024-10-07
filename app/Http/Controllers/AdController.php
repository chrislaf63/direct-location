<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Region;
use App\Models\Departement;
use App\Models\City;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\Http\Requests\AdRequest;


class AdController extends Controller
{

    /**
     * Display all ads with Status Published.
     *
     * @return View
     */
    public function index(Request $request)
    {
        $ads = Ad::query()->where('status', '=', 'published' );
        if($search = $request->search) {
            $ads->where(function ($query) use ($search) {
                $query->where('title', 'LIKE', "%{$search}%")
                    ->orWhere('description', 'LIKE', "%{$search}%");
            });
        };

        return view('index', [
            'title' => 'Annonces',
            'ads' => $ads->latest()->paginate(10),
        ]);
    }

    /**
     * Display ads by category.
     *
     * @param Category $category
     * @return View
     */
    public function adsByCategory(Category $category)
    {
        return view('index', [
            'ads' => $category->ads()->where('status', '=', 'published')->latest()->paginate(10),
            'title' => 'Annonces de la catégorie ' . $category->name,
        ]);
    }

    /**
     * Display connected user ads.
     *
     * @return View
     */
    public function myads()
    {
        $user = Auth::user();
        $ads = $user->ads()->where('status','=','published')->latest()->paginate(10);
        return view('my-ads', compact('ads'), [
            'title' => 'Mes annonces',
        ]);
    }

    /**
     * Display ad details.
     *
     * @param int $id
     * @return View
     */
    public function show($id)
    {
        $ad = Ad::findOrFail($id);
        return view('show', compact('ad'), [
            'title' => $ad->title,
        ]);
    }

    /**
     * Return ad creation form.
     *
     * @return View
     */
    public function create(): View
    {
        return $this->showForm();
    }

    public function edit(Ad $ad)
    {
        return $this->showForm($ad);
    }

    protected function showForm(Ad $ad = new Ad): View
    {
        return view('create', [
            'ad' => $ad,
            'user' => Auth::user(),
            'categories' => Category::all(),
            'regions' => Region::all(),
            'departements' => Departement::all(),
            'title' => $ad->exists ? 'Modifier l\'annonce' : 'Déposer une annonce',
        ]);
    }

    public function store(Request $request)
    {
        // Validation rule
        $request->validate([
            'user_id' => 'required',
            'departement' => 'required',
            'city' => 'required',
            'zip_code' => 'required',
            'title' => 'required|between:2,35',
            'description' => 'required',
            'price' => 'required|numeric',
            'time_unity' => 'required',
            'category' => 'required',
            'status' => 'required',
            'picture_1' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'picture_2' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'picture_3' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        // Create city if don't exist
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
        $ad->excerpt = substr($request->description, 0, 75);
        $ad->price = $request->price;
        $ad->time_unity = $request->time_unity;
        $ad->category_id = $request->category;
        if(isset($request->picture_1)) {
            $ad->picture_1 = $request->picture_1->store('picture_1');
        }
        if(isset($request->picture_2)) {
            $ad->picture_2 = $request->picture_2->store('picture_2');
        }
        if(isset($request->picture_3)) {
            $ad->picture_3 = $request->picture_3->store('picture_3');
        }
        $ad->save();

        return redirect()->route('ad.index')->with('success', 'Annonce créée avec succès');
    }



    Public function update(Request $request, $id)
    {
//        Validation rule
        $request->validate([
            'user_id' => 'required',
            'departement' => 'required',
            'city' => 'required',
            'zip_code' => 'required',
            'title' => 'required|between:2,35',
            'description' => 'required',
            'price' => 'required|numeric',
            'time_unity' => 'required',
            'category' => 'required',
            'status' => 'required',
            'picture_1' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'picture_2' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'picture_3' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        // Create city if don't exist
        $ad = Ad::findOrNew($id);
        $city = City::firstOrCreate(
            [
                'name' => $request->city,
                'zip_code' => $request->zip_code,
            ],
            [
                'departement_id' => $request->departement,
            ]
        );

        // Update ad
        $ad->user_id = $request->user_id;
        $ad->city_id = $city->id;
        $ad->title = $request->title;
        $ad->status = $request->status;
        $ad->description = $request->description;
        $ad->excerpt = substr($request->description, 0, 75);
        $ad->price = $request->price;
        $ad->time_unity = $request->time_unity;
        $ad->category_id = $request->category;
        if(isset($request->picture_1)) {
            if(isset($ad->picture_1)) {
                Storage::delete($ad->picture_1);
            }
            $ad->picture_1 = $request->picture_1->store('picture_1');
        }
        if(isset($request->picture_2)) {
            if(isset($ad->picture_2)) {
                Storage::delete($ad->picture_2);
            }
            $ad->picture_2 = $request->picture_2->store('picture_2');
        }
        if(isset($request->picture_3)) {
            if(isset($ad->picture_3)) {
                Storage::delete($ad->picture_3);
            }
            $ad->picture_3 = $request->picture_3->store('picture_3');
        }
        $ad->save();

        return redirect()->route('ad.index')->with('success', 'Annonce modifiée avec succès');
    }

    /**
     * Delete ad.
     *
     * @param int $id
     * @return RedirectResponse
     */
    public function destroy(Ad $ad)
    {
        If(isset($ad->picture_1)) {
            Storage::delete($ad->picture_1);
        }
        If(isset($ad->picture_2)) {
            Storage::delete($ad->picture_2);
        }
        If(isset($ad->picture_3)) {
            Storage::delete($ad->picture_3);
        }
        $ad->delete();
        return redirect()->route('ad.myads')->with('success', 'Annonce supprimée avec succès');
    }

}
