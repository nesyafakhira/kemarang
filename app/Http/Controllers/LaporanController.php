<?php

namespace App\Http\Controllers;

use App\Models\Stok;
use Carbon\Carbon;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index(Request $request)
    {
        $tglawal    = $request->tglawal;
        $tglakhir   = $request->tglakhir;

        if ($tglawal && $tglakhir) {
            $tanggal_awal  = Carbon::parse($tglawal)->startOfDay();
            $tanggal_akhir = Carbon::parse($tglakhir)->endOfDay();

            $stoks = Stok::whereBetween('created_at', [$tanggal_awal, $tanggal_akhir])->get();
        } else {
            $stoks = Stok::orderBy('id', 'desc')->get();
        }

        return view('admin.laporan.index', compact('stoks'));
    }

    // public function filter(Request $request)
    // {
    //  $tanggal_awal  = Carbon::parse($request->tglawal)->startOfDay();
    //  $tanggal_akhir = Carbon::parse($request->tglakhir)->endOfDay();
    //  $cetaktanggal = Stok::whereBetween('created_at', [$tanggal_awal, $tanggal_akhir])->get();
    //  return view('admin.laporan.index', compact('cetaktanggal'));
    // }
}
