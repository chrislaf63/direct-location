<?php

namespace App\Http\Controllers;

use App\Models\Departement;
use Illuminate\Http\Request;
use App\Models\Ad;
use App\Models\Category;
use App\Models\Region;
use App\Models\City;

class AdvancedSearchController extends Controller
{

    /**
     * Display the search form.
     *
     */
    public function searchForm()
    {
        return view('search.advanced-search', [
            'title' => 'Recherche avancée',
            'regions' => Region::all(),
            'categories' => Category::all(),
            'departments' => Departement::all(),
        ]);
    }

    /**
     * Search for ads.
     *
     */
    public function search(Request $request)
    {
        $ads = Ad::query()->where('status', '=', 'published');

        if ($request->region) {
            $ads->whereHas('city.departement.region', function ($query) use ($request) {
                $query->where('region_id', $request->region);
            });
        }

        if ($request->department) {
            $ads->whereHas('city.departement', function ($query) use ($request) {
                $query->where('departement_id', $request->department);
            });
        }

        if ($request->category) {
            $ads->where('category_id', $request->category);
        }

        if ($request->search) {
            $ads->where(function ($query) use ($request) {
                if ($request->intitle) {
                    $query->where('title', 'like', '%' . $request->search . '%');
                } else {
                $query->where('title', 'like', '%' . $request->search . '%')
                    ->orWhere('description', 'like', '%' . $request->search . '%');
            }
            });
        }

        return view('search.results', [
            'title' => 'Résultats de la recherche',
            'ads' => $ads->latest()->paginate(10),
        ]);
    }

}
