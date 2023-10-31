@extends('admin.layouts.main')

@section('content')
    <div class="conatiner-fluid content-inner mt-5 py-0">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <div class="header-title">
                        <h4 class="card-title">Detail Barang</h4>
                    </div>
                </div>
                <div class="card-body">
                    <div class="mt-2">
                        <h6 class="mb-1">Nama Barang</h6>
                        <p>{{ $barang->nama_barang }}</p>
                    </div>
                    <div class="mt-2">
                        <h6 class="mb-1">Jumlah Unit</h6>
                        <p>{{ $barang->jumlah_unit }}</p>
                    </div>
                    <div class="mt-2">
                        <h6 class="mb-1">Satuan</h6>
                        <p>{{ $barang->satuan }}</p>
                    </div>
                    <div class="mt-2">
                        <h6 class="mb-1">Harga Masuk</h6>
                        <p>{{ $barang->harga_satuan }}</p>
                    </div>
                    <div class="mt-2">
                        <h6 class="mb-1">Jumlah Tanpa PPN</h6>
                        <p>{{ $barang->total_harga_tanpa_ppn }}</p>
                    </div>
                    <div class="mt-2">
                        <h6 class="mb-1">PPN</h6>
                        <p>{{ $barang->ppn }}</p>
                    </div>
                    <div class="mt-2">
                        <h6 class="mb-1">Jumlah Dengan PPN</h6>
                        <p>{{ $barang->total_harga_ppn }}</p>
                    </div>
            </div>
        </div>
    </div>
@endsection
