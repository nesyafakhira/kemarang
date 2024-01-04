<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Request as MRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use RealRashid\SweetAlert\Facades\Alert;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $requests = MRequest::where('guru_id', auth()->user()->id)->oldest('id')->with('guru')->get();
        setlocale(LC_TIME, 'id');

        return view('landing-page.content', compact('requests'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $barangs = Barang::orderBy('id', 'asc')->get();
        return view('form-request', compact('barangs'));
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
    public function show(MRequest $request)
    {
        $request->load('barang');
        // return $request; 
        return view('detail', compact('request'));
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
        $minta->validate(
            [
                'nama_barang'   => 'required',
                'jumlah_unit'   => 'required|max:2',
                'keperluan'     => 'required|max:100'
            ],
            [
                'nama_barang.required'  => 'Pilih nama barang',
                'jumlah_unit.required'  => 'Masukkan jumlah barang',
                'jumlah_unit.max'       => 'Maksimal request 2 digit',
                'keperluan.required'    => 'Masukkan keperluan',
                'keperluan.max'         => 'Maksimal 100 karakter'
            ]
        );

        if ($minta->jumlah_unit > $minta->stok) {
            return to_route('content.edit', $minta->id)->with('error', 'Jumlah request melebihi stok');
        } elseif ($minta->jumlah_unit < 1) {
            return to_route('content.create')->with('error', 'Jumlah request tidak boleh kurang dari 1');
        }

        $request->update([
            'nama_barang'   => $minta->nama_barang,
            'jumlah_unit'   => $minta->jumlah_unit,
            'keperluan'     => $minta->keperluan,
            'catatan'       => null,
            'status'        => 'menunggu'
        ]);


        Alert::success('Berhasil', 'Request berhasil di-update');
        return redirect()->to('/content#table')->with('success');
    }

    public function gambar(Request $minta, MRequest $request)
    {
        $minta->validate([
            'gambar_request' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $namaFile = $minta->file('gambar_request')->getClientOriginalName();
        if ($request->gambar_request) {
            File::delete(public_path($request->gambar_request));
        }
        $minta->file('gambar_request')->move(public_path('gambar/gambar_request'), $namaFile);

        $request->update([
            'gambar_request' => 'gambar/gambar_request/' . $namaFile
        ]);


        toast('Berhasil', 'success');
        return to_route('content.show', $request->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MRequest $request)
    {
        $request->delete();


        Alert::success('Berhasil', 'Request berhasil dihapus');
        return redirect()->to('/content#table')->with('success');
    }
}
