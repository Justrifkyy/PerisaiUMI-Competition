<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Registration;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index()
    {
        // Eager load relasi registration dan payment untuk efisiensi
        $user = Auth::user()->load(['registration.payment']);

        return view('user.dashboard', [
            'registration' => $user->registration,
            'payment' => $user->registration?->payment // Null safe operator
        ]);
    }
}
