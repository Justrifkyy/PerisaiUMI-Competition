<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class JuriController extends Controller
{
    /**
     * Menampilkan daftar akun Juri.
     */
    public function index()
    {
        // Ambil hanya user yang role-nya 2 (Juri)
        $juris = User::where('role', 2)->latest()->get();
        return view('admin.juris.index', compact('juris'));
    }

    /**
     * Menampilkan form tambah Juri.
     */
    public function create()
    {
        return view('admin.juris.create');
    }

    /**
     * Menyimpan akun Juri baru.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'institution' => ['nullable', 'string', 'max:255'], // Asal Instansi Juri
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'institution' => $request->institution,
            'password' => Hash::make($request->password),
            'role' => 2, // PENTING: Role 2 adalah Juri
        ]);

        return redirect()->route('admin.juris.index')->with('success', 'Akun Juri berhasil dibuat.');
    }

    /**
     * Menghapus akun Juri.
     */
    public function destroy(User $juri)
    {
        if ($juri->role !== 2) {
            return back()->with('error', 'User ini bukan Juri.');
        }

        $juri->delete();
        return redirect()->route('admin.juris.index')->with('success', 'Akun Juri berhasil dihapus.');
    }
}
