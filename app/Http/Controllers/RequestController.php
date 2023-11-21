<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Request as MRequest;
use App\Models\Stok;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class RequestController extends Controller
{
    public function __construct()
    {
        $this->middleware(['role:staff|admin'])->only(['store', 'create', 'index']);
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $requests = MRequest::orderBy('id', 'desc')->with('guru', 'barang')->get();


        return view('admin.request.index', compact('requests'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $barangs = Barang::orderBy('id', 'asc')->get();
        if ($request->user()->hasRole('guru')) {
            return view('form-request', compact('barangs'));
        }

        return view('admin.request.create', compact('barangs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request;
        $request->validate(
            [
                'nama_barang' => 'required',
                'jumlah_unit' => 'required|max:2',
            ],
            [
                'nama_barang.required'  => 'Pilih nama barang',
                'jumlah_unit.required'  => 'Masukkan jumlah barang',
            ]
        );

        $mrequest = MRequest::create([
            'guru_id'       => $request->guru_id,
            'barang_id'     => $request->barang_id,
            'nama_barang'   => $request->nama_barang,
            'jumlah_unit'   => $request->jumlah_unit
        ]);

        activity()
            ->performedOn($mrequest)
            ->log('Keluar');


        Alert::success('Berhasil', 'Request berhasil dibuat, mohon tunggu untuk dikonfirmasi staff kami');

        return to_route('content.index')->with('success');
    }

    /**
     * Display the specified resource.
     */
    public function show(MRequest $request)
    {
        $this->middleware('role:guru|staff');
        // return $request;
        $request->load('barang');
        return view('admin.request.show', compact('request'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MRequest $request)
    {
        $barangs = Barang::orderBy('id', 'asc')->get();

        return view('admin.request.edit', compact('request', 'barangs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $minta, MRequest $request)
    {
        // return $minta;
        $minta->validate(
            [
                'status'                => 'required',
                'jumlah_request'        => 'required',
                'jumlah_tersedia'       => 'required',
            ],
            [
                'status.required' => 'Pilih status'
            ]
        );

        $jumlah_unit    = $minta->jumlah_tersedia;
        $jumlah_req     = $minta->jumlah_request;

        $jumlah_akhir = $jumlah_unit - $jumlah_req;

        if (auth()->user()->hasRole('staff|admin')) {
            $request->update([
                'tu_id' => $minta->user()->id,
                'status' => $minta->status
            ]);
        } else {
            $request->update([
                'barang_id'     => $minta->barang_id,
                'nama_barang'   => $minta->nama_barang,
                'jumlah_unit'   => $minta->jumlah_unit
            ]);
        }



        if ($minta->status == 'terima') {
            $barang = Barang::find($minta->barang_id); // Gantilah $barangId dengan ID barang yang sesuai

            // return $barang;
            if ($barang) {
                $barang->update([
                    'jumlah_unit' => $jumlah_akhir
                ]);

                $jumlah_akumulasi_keluar = $jumlah_akhir - $jumlah_req;

                $stok = Stok::create([
                    'barang_id' => $minta->barang_id,
                    'nama_stok' => $minta->namabarang,
                    'stok_awal' => $jumlah_akhir,
                    'stok_keluar' => $jumlah_req,
                    'stok_akhir'  => $jumlah_akumulasi_keluar
                ]);
                // return $stok;

            }
        }

        Alert::success('Berhasil', 'Request dikonfirmasi');
        return to_route('request.index')->with('success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MRequest $request)
    {
        $request->delete();

        // Alert::success('Berhasil', 'Request dihapus');

        return to_route('request.index');
    }
}
