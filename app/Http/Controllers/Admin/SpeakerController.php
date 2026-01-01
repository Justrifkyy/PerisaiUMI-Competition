<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Speaker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class SpeakerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $speakers = Speaker::latest()->get();
        return view('admin.speakers.index', compact('speakers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.speakers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'type' => 'required|in:juri,speaker', // Validasi Tipe
            'crop_data' => 'required|string',
        ]);

        $path = $this->saveCroppedImage($validated['crop_data']);

        Speaker::create([
            'name' => $validated['name'],
            'title' => $validated['title'],
            'type' => $validated['type'], // Simpan Tipe
            'image_path' => $path,
        ]);

        return redirect()->route('admin.speakers.index')->with('success', 'Data berhasil ditambahkan.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Speaker $speaker)
    {
        return view('admin.speakers.edit', compact('speaker'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Speaker $speaker)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'type' => 'required|in:juri,speaker', // Validasi Tipe
            'crop_data' => 'nullable|string',
        ]);

        $path = $speaker->image_path;
        if ($request->filled('crop_data')) {
            Storage::delete($speaker->image_path);
            $path = $this->saveCroppedImage($validated['crop_data']);
        }

        $speaker->update([
            'name' => $validated['name'],
            'title' => $validated['title'],
            'type' => $validated['type'], // Update Tipe
            'image_path' => $path,
        ]);

        return redirect()->route('admin.speakers.index')->with('success', 'Data berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Speaker $speaker)
    {
        Storage::delete($speaker->image_path);
        $speaker->delete();
        return redirect()->route('admin.speakers.index')->with('success', 'Data berhasil dihapus.');
    }

    /**
     * Helper function to save cropped image data.
     */
    private function saveCroppedImage(string $base64Data): string
    {
        list($type, $data) = explode(';', $base64Data);
        list(, $data)      = explode(',', $data);
        $decodedData = base64_decode($data);

        $imageName = 'speakers/' . Str::random(32) . '.jpg';
        Storage::put('public/' . $imageName, $decodedData);

        return $imageName;
    }
}
