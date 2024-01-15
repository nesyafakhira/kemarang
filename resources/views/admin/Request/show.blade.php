@extends('admin.layouts.main')

@section('title')
    Kemarang | Detail Request
@endsection

@section('content')
    <div class="conatiner-fluid content-inner mt-5 py-0">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <div class="header-title">
                        <h4 class="card-title">Detail Request</h4>
                    </div>
                </div>
                <div class="card-body">
                    <div class="mt-2">
                        <h6 class="mb-1">Nama Barang</h6>
                        <p>{{ $request->nama_barang }}</p>
                    </div>
                    <div class="mt-2">
                        <h6 class="mb-1">Gambar Barang</h6>
                        <img src="{{ asset($request->barang->gambar_barang) }}" alt="Gambar barang" width="25%">
                    </div>
                    <div class="mt-2">
                        <h6 class="mb-1">Deskripsi Barang</h6>
                        <p>{{ $request->barang->deskripsi }}</p>
                    </div>
                    <div class="mt-2">
                        <h6 class="mb-1">Jumlah Unit</h6>
                        <p>{{ $request->jumlah_unit }} {{ $request->barang->satuan }}</p>
                    </div>
                    <div class="mt-2">
                        <h6 class="mb-1">Satuan</h6>
                        <p>{{ $request->barang->satuan }}</p>
                    </div>
                    <div class="mt-2">
                        <h6 class="mb-1">Status</h6>
                        @if ($request->status == 'menunggu')
                            <span class="badge bg-primary">{{ $request->status }}</span>
                        @elseif ($request->status == 'terima')
                            <span class="badge bg-success mb-2">{{ $request->status }}</span>
                            @if ($request->gambar_request)
                                <div>
                                    <img src="{{ asset($request->gambar_request) }}" alt="Bukti pengambilan" width="25%">

                                </div>
                            @endif
                        @else
                            <span class="badge bg-danger">{{ $request->status }}</span>
                        @endif
                    </div>

                    <button class="btn btn-secondary mt-3" onclick="printPDF()">PRINT</button>
                    <a href="{{ route('request.index') }}" class="btn btn-danger mt-3">Kembali</a>
                </div>
            </div>
        </div>
    @endsection

    @push('scripts')
    <script
        src="https://cdn.datatables.net/v/bs5/jq-3.7.0/jszip-3.10.1/dt-1.13.8/af-2.6.0/b-2.4.2/b-colvis-2.4.2/b-html5-2.4.2/b-print-2.4.2/r-2.5.0/datatables.min.js">
    </script>
    <script>
        $(function() {
            $("#datatable").DataTable({
                dom: "fltp"
            });
        })
    </script>

    <script>
        function printPDF() {
            // Ganti URL dengan URL sesuai dengan rute generatePDF di Laravel
            let pdfUrl = '/dashboard/laporan/request_show-pdf';

            // Buka PDF dalam tab baru
            window.open(pdfUrl, '_blank');
        }
    </script>
@endpush
