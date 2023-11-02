<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.dashboard.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_barang'           => 'required',
            'jumlah_unit'           => 'required',
            'satuan'                => 'required',
            'harga_satuan'          => 'required',
            'total_harga_tanpa_ppn' => '',
            'ppn'                   => '',
            'total_harga_ppn'       => '',
        ]);
        
        $total_harga_tanpa_ppn = $request->jumlah_unit * $request->harga_satuan;
        $ppn = $total_harga_tanpa_ppn * 0.11;
        $total_harga_ppn = $total_harga_tanpa_ppn + $ppn;
        
        Barang::create([
            'nama_barang'           => $request->nama_barang,
            'jumlah_unit'           => $request->jumlah_unit,
            'satuan'                => $request->satuan,
            'harga_satuan'          => $request->harga_satuan,
            'total_harga_tanpa_ppn' => $total_harga_tanpa_ppn,
            'ppn'                   => $ppn,
            'total_harga_ppn'       => $total_harga_ppn,
        ]);
        

        return to_route('dashboard')->with('success');
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
