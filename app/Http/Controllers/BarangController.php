<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Stok;
use Carbon\Carbon;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barangs = Barang::orderBy('id', 'asc')->get();

        $title = 'Hapus Request!';
        $text = "Apakah kau yakin ingin hapus request?";
        confirmDelete($title, $text);

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
            'jumlah_unit'           => 'required',
            'satuan'                => 'required',
            'harga_satuan'          => 'required',
        ]);
        
        $total_harga_tanpa_ppn = $request->jumlah_unit * $request->harga_satuan;
        $ppn = $total_harga_tanpa_ppn * 0.11;
        $total_harga_ppn = $total_harga_tanpa_ppn + $ppn;
        
        $barang = Barang::create([
            'nama_barang'           => $request->nama_barang,
            'jumlah_unit'           => $request->jumlah_unit,
            'satuan'                => $request->satuan,
            'harga_satuan'          => $request->harga_satuan,
            'total_harga_tanpa_ppn' => $total_harga_tanpa_ppn,
            'ppn'                   => $ppn,
            'total_harga_ppn'       => $total_harga_ppn,
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
        // $barang = Barang::findOrfail($barang);
        // activity()
        // ->performedOn($barang)
        // ->log('keluar');
        return view('admin.barang.edit', compact('barang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Barang $barang)
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
        
        $barang->update([
            'nama_barang'           => $request->nama_barang,
            'jumlah_unit'           => $request->jumlah_unit,
            'satuan'                => $request->satuan,
            'harga_satuan'          => $request->harga_satuan,
            'total_harga_tanpa_ppn' => $total_harga_tanpa_ppn,
            'ppn'                   => $ppn,
            'total_harga_ppn'       => $total_harga_ppn,
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
        $barang->delete();
        
        Alert::success('Berhasil', 'Barang dihapus');
        

        return to_route('barang.index')->with('success');
    }
    
    public function cetaktanggal(Request $request)
    {
        $tanggal_awal  = Carbon::parse($request->tglawal)->startOfDay();
        $tanggal_akhir = Carbon::parse($request->tglakhir)->endOfDay();

        $cetaktanggal = Barang::whereBetween('created_at', [$tanggal_awal, $tanggal_akhir])->get();
        return view('admin.barang.cetaktanggal', compact('cetaktanggal'));
    }  


}
