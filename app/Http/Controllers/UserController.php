<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = User::where('id', '!=', auth()->user()->id);
        $users = $datas->orderBy('id', 'asc')->get();
        return view('admin.user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'      => 'required|max:100',
            'npsn'      => 'required|max:50',
            'email'     => 'required',
            'password'  => 'required|min:8',
            'role'      => 'required', // Ini inputan dropdown
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

        Alert::success('Berhasil', 'User ditambahkan');
        return to_route('user.index')->with('success');


    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view('admin.user.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('admin.user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name'      => 'required|max:100',
            'npsn'      => 'required|max:50',
            'role'      => 'required', // Ini inputan dropdown
        ]);

        if ($user->hasRole('admin')) {
            $user->removeRole('admin');
        } elseif ($user->hasRole('staff')) {
            $user->removeRole('staff');
        } elseif ($user->hasRole('guru')) {
            $user->removeRole('guru');
        } elseif ($user->hasRole('kepsek')) {
            $user->removeRole('kepsek');
        }
        
        $user->update([
            'name'      => $request->name,
            'npsn'      => $request->npsn,
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

        Alert::success('Berhasil', 'User di-update');
        return to_route('user.index')->with('success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();

        Alert::success('Berhasil', 'User dihapus');
        return to_route('user.index')->with('success');
    }
}
