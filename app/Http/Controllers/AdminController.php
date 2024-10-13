<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ad;
use App\Models\User;

class AdminController extends Controller
{
    public function display()
    {
        $nbpublishedads = Ad::where('status', 'published')->count();
        $publishedads =  Ad::where('status', 'published')->paginate(10);
        return view('admin.published', [
            'title' => 'Panneau d\'administration',
            'nbpublishedads' => $nbpublishedads,
            'publishedads' => $publishedads,
        ]);
    }

    public function tovalidate()
    {
        $nbwaitingads = Ad::where('status', 'pending')->count();
        $tovalidate = Ad::where('status', 'pending')->paginate(10);
        return view('admin.tovalidate', [
            'title' => 'Admin | A valider',
            'tovalidate' => $tovalidate,
            'nbwaitingads' => $nbwaitingads,
        ]);
    }

    public function show($id)
    {
        $ad = Ad::find($id);
        return view('admin.adtovalidate', [
            'title' => 'Admin | A valider',
            'ad' => $ad,
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
        $registeredusers = User::all()->count();
        $users = User::all();
        return view('admin.users', compact('users'), [
            'title' => 'Admin | Utilisateurs',
            'registeredusers' => $registeredusers,
        ]);
    }
}
