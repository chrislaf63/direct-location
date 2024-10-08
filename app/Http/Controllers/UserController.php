<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{

    public function edit(Request $request, $id)
    {
        $nbwaitingads = Ad::where('status', 'pending')->count();
        $nbpublishedads = Ad::where('status', 'published')->count();
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
