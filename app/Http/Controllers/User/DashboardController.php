<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse; // <-- Import RedirectResponse

class DashboardController extends Controller
{
    /**
     * Redirect user to the main action page.
     */
    public function index(): RedirectResponse // <-- Ubah return type
    {
        // Langsung arahkan ke halaman registrasi konferensi
        return redirect()->route('registration.create');
    }
}
