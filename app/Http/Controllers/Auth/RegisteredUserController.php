<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('form-register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'              => ['required', 'string', 'max:50'],
            'nip_nikki'         => ['required', 'min:6', 'max:18', 'unique:'.User::class],
            'email'             => ['required', 'string', 'email:rfc,dns', 'unique:'.User::class],
            'password'          => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
        
        $user = User::create([
            'name'              => $request->name,
            'nip_nikki'         => $request->nip_nikki,
            'email'             => $request->email,
            'password'          => Hash::make($request->password),
        ]);
        
        $user->assignRole('guru');

        event(new Registered($user));

        Auth::login($user);

        toast('Register berhasil','success');

        return to_route('content.index')->with('success');
    }
}
