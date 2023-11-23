<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('form-login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();


        if (auth()->user()->hasRole('admin')) {
            return to_route('dashboard')->with('success');
        }

        if (auth()->user()->hasRole('staff')) {
            return to_route('dashboard')->with('success');
        }

        if (auth()->user()->hasRole('guru')) {
            return to_route('content.index')->with('success');
        }

        if (auth()->user()->hasRole('kepsek')) {
            return to_route('dashboard')->with('success');
        }

        return redirect()->intended(RouteServiceProvider::HOME);
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        // Toast::succes('Berhasil log out', 'success');

        return redirect('/')->with('success');
    }
}
