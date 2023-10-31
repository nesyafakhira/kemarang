<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->middleware(['role:admin']);
        return view('admin.user.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->middleware(['role:admin']);
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request;
        $request->validate([
            'name'      => 'required|max:100',
            'npsn'      => 'required|max:50',
            'email'     => 'required',
            'password'  => 'required|min:8',
            'role'      => 'required',
        ]);
        
        $user = User::create([
            'name'      => $request->name,
            'npsn'      => $request->npsn,
            'email'     => $request->email,
            'password'  => Hash::make($request->password),
        ]);
        

        if ($request->role == 'admin') {
            $user->assignRole('admin');
            
        } elseif ($request->role == 'staff') {
            $user->assignRole('staff');
            
        } elseif ($request->role == 'guru') {
            $user->assignRole('guru');
            
        } elseif ($request->role == 'kepsek') {
            $user->assignRole('kepsek');
            
        }

        return to_route('user.index');


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
