<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ad;
use App\Models\User;

class AdminController extends Controller
{
    public function display()
    {
        $nbwaitingads = Ad::where('status', 'pending')->count();
        $nbpublishedads = Ad::where('status', 'published')->count();
        $publishedads =  Ad::where('status', 'published')->paginate(10);
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
        $nbwaitingads = Ad::where('status', 'pending')->count();
        $nbpublishedads = Ad::where('status', 'published')->count();
        $tovalidate = Ad::where('status', 'pending')->paginate(10);
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
        $nbwaitingads = Ad::where('status', 'pending')->count();
        $nbpublishedads = Ad::where('status', 'published')->count();
        $registeredusers = User::all()->count();
        $ad = Ad::find($id);
        return view('adtovalidate', [
            'ad' => $ad,
            'nbwaitingads' => $nbwaitingads,
            'nbpublishedads' => $nbpublishedads,
            'registeredusers' => $registeredusers,
        ]);
    }

    public function validate($id)
    {
        $ad = Ad::find($id);
        $ad->status = 'published';
        $ad->save();
        return redirect()->route('admin.tovalidate');
    }

    public function destroy($id)
    {
        $ad = Ad::find($id);
        $ad->delete();
        return redirect()->route('admin.tovalidate');
    }

    public function indexUsers()
    {
        $nbwaitingads = Ad::where('status', 'pending')->count();
        $nbpublishedads = Ad::where('status', 'published')->count();
        $registeredusers = User::all()->count();
        $users = User::all();
        return view('users', compact('users'), [
            'nbwaitingads' => $nbwaitingads,
            'nbpublishedads' => $nbpublishedads,
            'registeredusers' => $registeredusers,
        ]);
    }
}
