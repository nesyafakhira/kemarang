<?php

namespace App\Http\Controllers;

use App\Models\Stok;
use App\Models\Barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use RealRashid\SweetAlert\Facades\Alert;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barangs = Barang::orderBy('id', 'asc')->get();
        setlocale(LC_TIME, 'id');

        return view('admin.barang.index', compact('barangs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.barang.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_barang'           => 'required',
            'jumlah_unit'           => 'required|numeric',
            'satuan'                => 'required',
            'harga_satuan'          => 'required',
            'gambar_barang'         => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        
        $hargaSatuan = str_replace(['.', ','], '', $request->harga_satuan);

        if (!is_numeric($hargaSatuan)) {
            return redirect()->back()->withInput()->with('error', 'Harga harus angka');
        }

        $total_harga_tanpa_ppn = $request->jumlah_unit * $hargaSatuan;
        $ppn = $total_harga_tanpa_ppn * 0.11;
        $total_harga_ppn = $total_harga_tanpa_ppn + $ppn;
        
        $namaFile = $request->file('gambar_barang')->getClientOriginalName();
        $request->file('gambar_barang')->move(public_path('gambar/gambar_barang'), $namaFile);
        
        $barang = Barang::create([
            'nama_barang'           => $request->nama_barang,
            'jumlah_unit'           => $request->jumlah_unit,
            'satuan'                => $request->satuan,
            'harga_satuan'          => $hargaSatuan,
            'total_harga_tanpa_ppn' => $total_harga_tanpa_ppn,
            'ppn'                   => $ppn,
            'total_harga_ppn'       => $total_harga_ppn,
            'gambar_barang'         => 'gambar/gambar_barang/' . $namaFile,
        ]);

        
        activity()
        ->performedOn($barang)
        ->log('Masuk');
        
        Stok::create([
            'barang_id'     => $barang->id, 
            'nama_stok'     => $request->nama_barang,
            'stok_awal'     => $request->jumlah_unit,
            'stok_keluar'   => 0,
            'stok_akhir'    => $request->jumlah_unit,
        ]);
        
        
        
        Alert::success('Berhasil', 'Barang ditambahkan');
        
        return to_route('barang.index')->with('success');
    }

    /**
     * Display the specified resource.
     */
    public function show(Barang $barang)
    {
        return view('admin.barang.show', compact('barang'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Barang $barang)
    {
        return view('admin.barang.edit', compact('barang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Barang $barang)
    {
        $request->validate([
            'nama_barang'           => 'required',
            'jumlah_unit'           => 'required|numeric',
            'satuan'                => 'required',
            'harga_satuan'          => 'required',
            'gambar_barang'         => 'image|mimes:jpeg,png,jpg,gif|max:2048',

        ]);
        $hargaSatuan = str_replace(['.', ','], '', $request->harga_satuan);

        
        $total_harga_tanpa_ppn = $request->jumlah_unit * $hargaSatuan;
        $ppn = $total_harga_tanpa_ppn * 0.11;
        $total_harga_ppn = $total_harga_tanpa_ppn + $ppn;

        if ($request->file('gambar_barang')) {
            $namaFile = $request->file('gambar_barang')->getClientOriginalName();
            if ($barang->gambar_barang) {
                File::delete(public_path($barang->gambar_barang));
            }
            $request->file('gambar_barang')->move(public_path('gambar/gambar_barang'), $namaFile);
        }
        
        $barang->update([
            'nama_barang'           => $request->nama_barang,
            'jumlah_unit'           => $request->jumlah_unit,
            'satuan'                => $request->satuan,
            'harga_satuan'          => $hargaSatuan,
            'total_harga_tanpa_ppn' => $total_harga_tanpa_ppn,
            'ppn'                   => $ppn,
            'total_harga_ppn'       => $total_harga_ppn,
            'gambar_barang'         => 'gambar/gambar_barang/' . $namaFile,
        ]);


        Stok::create([
            'barang_id'     => $request->barang_id,
            'nama_stok'     => $request->nama_barang,
            'stok_awal'     => $request->jumlah_unit,
            'stok_keluar'   => 0,
            'stok_akhir'    => $request->jumlah_unit
        ]);

        Alert::success('Berhasil', 'Barang di-update');
        
        return to_route('barang.index')->with('success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Barang $barang)
    {
        File::delete(public_path($barang->gambar_barang));
        $barang->delete();
        
        Alert::success('Berhasil', 'Barang dihapus');
        

        return to_route('barang.index')->with('success');
    }
    


}
