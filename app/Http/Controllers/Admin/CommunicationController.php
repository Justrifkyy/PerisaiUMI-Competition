<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Jobs\SendBulkEmailJob;

class CommunicationController extends Controller
{
    public function create()
    {
        return view('admin.communication.create');
    }

    public function send(Request $request)
    {
        $validated = $request->validate([
            'target_group' => 'required|in:all,presenters,accepted_presenters,unpaid',
            'subject' => 'required|string|max:255',
            'body' => 'required|string',
        ]);

        $recipients = collect();

        switch ($validated['target_group']) {
            case 'all':
                $recipients = User::where('is_admin', false)->pluck('email');
                break;
            case 'presenters':
                $recipients = User::whereHas('registrations', fn($q) => $q->where('participant_type', 'Presenter'))->pluck('email');
                break;
            case 'accepted_presenters':
                $recipients = User::whereHas('submissions', fn($q) => $q->where('status', 'Accepted'))->pluck('email');
                break;
            case 'unpaid':
                $recipients = User::whereHas('registrations')
                    ->whereDoesntHave('registrations.payment', fn($q) => $q->where('status', 'Verified'))
                    ->pluck('email');
                break;
        }

        if ($recipients->isEmpty()) {
            return redirect()->back()->with('error', 'Tidak ada penerima di grup yang dipilih.');
        }

        // Masukkan tugas ke dalam antrian
        SendBulkEmailJob::dispatch($recipients, $validated['subject'], $validated['body']);

        return redirect()->route('admin.communication.create')->with('success', 'Pengumuman telah dimasukkan ke dalam antrian untuk dikirim ke ' . $recipients->count() . ' penerima.');
    }
}
