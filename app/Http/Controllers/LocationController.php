<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Region;
use App\Models\Departement;
use App\Models\City;

class LocationController extends Controller
{
    public function getDepartments(Region $region)
    {
        return response()->json($region->departements);
    }

    public function getCities(Departement $department)
    {
        return response()->json($department->cities);
    }
}
