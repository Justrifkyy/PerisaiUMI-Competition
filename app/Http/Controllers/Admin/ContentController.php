<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function editDates()
    {
        // Ambil semua settings, ubah jadi collection yg key-nya adalah nama setting
        $settings = Setting::all()->pluck('value', 'key');
        return view('admin.content.dates', compact('settings'));
    }

    public function updateDates(Request $request)
    {
        $data = $request->except('_token');
        foreach ($data as $key => $value) {
            Setting::where('key', $key)->update(['value' => $value]);
        }
        return redirect()->back()->with('success', 'Tanggal penting berhasil diperbarui!');
    }
}
