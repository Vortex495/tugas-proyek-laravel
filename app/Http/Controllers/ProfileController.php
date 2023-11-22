<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        $user = User::find(Auth::id());

        return view('laravel-examples.user-profile', compact('user'));
    }

    public function update(Request $request)
    {
        if (config('app.is_demo') && in_array(Auth::id(), [1])) {
            return back()->with('error', "You are in a demo version. You are not allowed to change the email for default users.");
        }

        $request->validate([
            'nama' => 'required|min:3|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . Auth::id(),
            'lokasi' => 'max:255',
            'nomor_hp' => 'numeric|digits:12',
            'deskripsi' => 'max:255',
        ], [
            'nama.required' => 'Nama is required',
            'email.required' => 'Email is required',
        ]);

        $user = User::find(Auth::id());

        $user->update([
            'nama' => $request->nama,
            'email' => $request->email,
            'lokasi' => $request->lokasi,
            'nomor_hp' => $request->nomor_hp,
            'deskripsi' => $request->deskripsi,
        ]);

        return back()->with('success', 'Profile Anda Berhasil diupdate.');
    }
}
