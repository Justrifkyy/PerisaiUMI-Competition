<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str; // <-- TAMBAHKAN IMPORT INI
use Intervention\Image\ImageManagerStatic as Image;


class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $user = $request->user();
        $user->fill($request->validated());

        if ($user->isDirty('email')) {
            $user->email_verified_at = null;
        }

        // Logika baru untuk menyimpan foto profil yang sudah di-crop
        if ($request->filled('crop_data')) {
            // Hapus avatar lama jika ada
            if ($user->avatar) {
                // Hapus path 'public/' karena Storage::delete sudah mengasumsikannya
                Storage::delete('public/' . $user->avatar);
            }

            // Decode data base64
            $data = $request->input('crop_data');
            list($type, $data) = explode(';', $data);
            list(, $data)      = explode(',', $data);
            $data = base64_decode($data);

            // Buat nama file unik
            $imageName = 'avatars/' . Str::random(32) . '.jpg';

            // Simpan file menggunakan Storage
            Storage::put('public/' . $imageName, $data);

            // Set path avatar di user model
            $user->avatar = $imageName;
        }

        $user->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
