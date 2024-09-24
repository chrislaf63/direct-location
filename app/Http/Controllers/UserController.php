<?php

namespace App\Http\Controllers;

use App\Models\Ads;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $nbwaitingads = Ads::where('status', 'pending')->count();
        $nbpublishedads = Ads::where('status', 'published')->count();
        $registeredusers = User::all()->count();
        $users = User::all();
        return view('users', compact('users'), [
            'nbwaitingads' => $nbwaitingads,
            'nbpublishedads' => $nbpublishedads,
            'registeredusers' => $registeredusers,
            ]);
    }

    public function edit(Request $request, $id)
    {
        $nbwaitingads = Ads::where('status', 'pending')->count();
        $nbpublishedads = Ads::where('status', 'published')->count();
        $registeredusers = User::all()->count();
        $user = User::find($id);
        return view('user-edit', compact('user'),[
            'from' => $request->query('from', 'defaultPage'),
            'title' => 'Modifier les informations',
            'nbwaitingads' => $nbwaitingads,
            'nbpublishedads' => $nbpublishedads,
            'registeredusers' => $registeredusers,
        ]);
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->update($request->all());
        return redirect()->route('users')
            ->with('success', 'User updated successfully');
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('users');
    }
}
