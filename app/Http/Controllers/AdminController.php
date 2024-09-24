<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ads;
use App\Models\User;

class AdminController extends Controller
{
    public function display()
    {
        $nbwaitingads = Ads::where('status', 'pending')->count();
        $nbpublishedads = Ads::where('status', 'published')->count();
        $publishedads =  Ads::where('status', 'published')->paginate(10);
        $registeredusers = User::all()->count();
        return view('published', [
            'nbwaitingads' => $nbwaitingads,
            'nbpublishedads' => $nbpublishedads,
            'publishedads' => $publishedads,
            'registeredusers' => $registeredusers,
        ]);
    }

    public function tovalidate()
    {
        $nbwaitingads = Ads::where('status', 'pending')->count();
        $nbpublishedads = Ads::where('status', 'published')->count();
        $tovalidate = Ads::where('status', 'pending')->paginate(10);
        $registeredusers = User::all()->count();
        return view('tovalidate', [
            'tovalidate' => $tovalidate,
            'nbwaitingads' => $nbwaitingads,
            'nbpublishedads' => $nbpublishedads,
            'registeredusers' => $registeredusers,
        ]);
    }

    public function show($id)
    {
        $nbwaitingads = Ads::where('status', 'pending')->count();
        $nbpublishedads = Ads::where('status', 'published')->count();
        $registeredusers = User::all()->count();
        $ad = Ads::find($id);
        return view('adtovalidate', [
            'ad' => $ad,
            'nbwaitingads' => $nbwaitingads,
            'nbpublishedads' => $nbpublishedads,
            'registeredusers' => $registeredusers,
        ]);
    }

    public function validate($id)
    {
        $ad = Ads::find($id);
        $ad->status = 'published';
        $ad->save();
        return redirect()->route('admin.tovalidate');
    }

    public function destroy($id)
    {
        $ad = Ads::find($id);
        $ad->delete();
        return redirect()->route('admin.tovalidate');
    }
}
