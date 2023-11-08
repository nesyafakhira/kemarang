<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Request as MRequest;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class RequestController extends Controller
{
    public function __construct()
    {
        $this->middleware(['role:guru|admin'])->only(['store', 'create']);
        $this->middleware(['role:staff|admin'])->only(['edit', 'update']);
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->user()->hasRole('guru')) {
            $requests = MRequest::where('guru_id', auth()->user()->id)->oldest('id')->with('guru')->get();
        } else {
            $requests = MRequest::orderBy('id', 'desc')->with('guru', 'barang')->get();
        }
        $title = 'Hapus Request!';
        $text = "Apakah kau yakin ingin hapus request?";
        confirmDelete($title, $text);

        return view('admin.request.index', compact('requests'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $barangs = Barang::orderBy('id', 'asc')->get();

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

        MRequest::create([
            'guru_id'       => $request->guru_id,
            'barang_id'     => $request->barang_id,
            'nama_barang'   => $request->nama_barang,
            'jumlah_unit'   => $request->jumlah_unit
        ]);

        Alert::success('Berhasil', 'Request berhasil dibuat, mohon tunggu untuk dikonfirmasi staff kami');

        return to_route('request.index')->with('success');
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
        $this->middleware(['auth', 'verified', 'role:staff']);
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
                'jumlah_request'           => 'required',
                'jumlah_tersedia'       => 'required',
            ],
            [
                'status.required' => 'Pilih status'
            ]
        );

        $jumlah_unit = $minta->jumlah_tersedia;
        $jumlah_req = $minta->jumlah_request;

        $jumlah_akhir = $jumlah_unit - $jumlah_req;


        $request->update([
            'tu_id' => $minta->user()->id,
            'status' => $minta->status
        ]);

        if ($minta->status == 'terima') {
            $barang = Barang::find($minta->barang_id); // Gantilah $barangId dengan ID barang yang sesuai
            if ($barang) {
                $barang->update([
                    'jumlah_unit' => $jumlah_akhir
                ]);
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
