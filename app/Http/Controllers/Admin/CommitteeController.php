<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Committee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class CommitteeController extends Controller
{
    public function index()
    {
        $committees = Committee::all();
        return view('admin.committees.index', compact('committees'));
    }

    public function create()
    {
        return view('admin.committees.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'role' => 'required|string|max:255',
            'crop_data' => 'required|string', // Data gambar base64
        ]);

        $path = $this->saveCroppedImage($validated['crop_data']);

        Committee::create([
            'name' => $validated['name'],
            'role' => $validated['role'],
            'image_path' => $path,
        ]);

        return redirect()->route('admin.committees.index')->with('success', 'Panitia berhasil ditambahkan.');
    }

    public function edit(Committee $committee)
    {
        return view('admin.committees.edit', compact('committee'));
    }

    public function update(Request $request, Committee $committee)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'role' => 'required|string|max:255',
            'crop_data' => 'nullable|string',
        ]);

        $path = $committee->image_path;
        if ($request->filled('crop_data')) {
            Storage::delete($committee->image_path);
            $path = $this->saveCroppedImage($validated['crop_data']);
        }

        $committee->update([
            'name' => $validated['name'],
            'role' => $validated['role'],
            'image_path' => $path,
        ]);

        return redirect()->route('admin.committees.index')->with('success', 'Data panitia berhasil diperbarui.');
    }

    public function destroy(Committee $committee)
    {
        Storage::delete($committee->image_path);
        $committee->delete();
        return redirect()->route('admin.committees.index')->with('success', 'Panitia berhasil dihapus.');
    }

    private function saveCroppedImage(string $base64Data): string
    {
        list($type, $data) = explode(';', $base64Data);
        list(, $data)      = explode(',', $data);
        $decodedData = base64_decode($data);

        $imageName = 'committees/' . Str::random(32) . '.jpg';
        Storage::put('public/' . $imageName, $decodedData);

        return $imageName;
    }
}
