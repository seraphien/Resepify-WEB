<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('profile', compact('user'));
    }

    public function updateProfile(Request $request)
    {
        $request->validate([
            'email'   => 'required|email',
            'telepon' => 'nullable',
            'lokasi'  => 'nullable',
        ]);

        $user = User::find(Auth::id());

        $user->update($request->only('email', 'telepon', 'lokasi'));

        return back()->with('success', 'Profile berhasil diperbarui!');
    }

    public function updateSettings(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'nullable|confirmed|min:6',
        ]);

        $user = User::find(Auth::id()); 

        $user->username = $request->username;

        if ($request->filled('password')) {
            $user->password = bcrypt($request->password);
        }

        $user->save();

        return back()->with('success', 'Pengaturan berhasil disimpan.');
    }
}
