<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Stok;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Request as Reqs;
use Barryvdh\DomPDF\Facade\Pdf;

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
        setlocale(LC_TIME, 'id');


        return view('admin.laporan.index', compact('stoks'));
    }

    public function request(Request $request)
    {
        $tglawal    = $request->tglawal;
        $tglakhir   = $request->tglakhir;

        if ($tglawal && $tglakhir) {
            $tanggal_awal  = Carbon::parse($tglawal)->startOfDay();
            $tanggal_akhir = Carbon::parse($tglakhir)->endOfDay();

            $reqs = Reqs::whereBetween('created_at', [$tanggal_awal, $tanggal_akhir])->get();
        } else {
            $reqs = Reqs::orderBy('id', 'desc')->get();
        }
        setlocale(LC_TIME, 'id');


        return view('admin.laporan.request', compact('reqs'));
    }

    public function indexpdf(Request $request)
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
        setlocale(LC_TIME, 'id');

        $date = Carbon::now();
        
        $kepsek = User::role('kepsek')->first();

        $pdf = Pdf::loadView('admin.laporan-pdf.stok', compact('stoks', 'date', 'kepsek'));

        return $pdf->stream('admin.laporan-pdf.stok.pdf');
    }

    public function requestpdf(Request $request)
    {
        $tglawal    = $request->tglawal;
        $tglakhir   = $request->tglakhir;

        if ($tglawal && $tglakhir) {
            $tanggal_awal  = Carbon::parse($tglawal)->startOfDay();
            $tanggal_akhir = Carbon::parse($tglakhir)->endOfDay();

            $reqs = Reqs::whereBetween('created_at', [$tanggal_awal, $tanggal_akhir])->get();
        } else {
            $reqs = Reqs::orderBy('id', 'desc')->get();
        }
        setlocale(LC_TIME, 'id');
        $date = Carbon::now();

        $kepsek = User::role('kepsek')->first();

        $pdf = PDF::loadView('admin.laporan-pdf.request', compact('reqs', 'date', 'kepsek'));

        return $pdf->stream('admin.laporan-pdf.request.pdf');
    }

}
