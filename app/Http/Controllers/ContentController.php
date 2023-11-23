<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Request as MRequest;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $requests = MRequest::where('guru_id', auth()->user()->id)->oldest('id')->with('guru')->get();
        
        return view('landing-page.content', compact('requests'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('form-request');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function edit(MRequest $request)
    {
        $barangs = Barang::orderBy('id', 'asc')->get();


        return view('form-edit-request', compact('request', 'barangs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $minta, MRequest $request)
    {
        $minta->validate([
            'nama_barang'           => 'required',
            'jumlah_unit'        => 'required',
        ]);

        $request->update([
            'nama_barang' => $minta->nama_barang,
            'jumlah_unit' => $minta->jumlah_unit,
        ]);
// 
        // return $minta;

        Alert::success('Berhasil', 'Request berhasil di-update');
        return to_route('content.index')->with('success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MRequest $id)
    {
        $id->delete();

        return to_route('content.index');
    }
}
