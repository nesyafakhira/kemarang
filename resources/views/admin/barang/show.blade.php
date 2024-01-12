@extends('admin.layouts.main')

@section('title')
    Kemarang | Detail Barang
@endsection

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
                        <h6 class="mb-1">Deskripsi Barang</h6>
                        <p>{{ $barang->deskripsi }}</p>
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
                        <p>Rp. {{ number_format($barang->harga_satuan, 0, ',', '.') }}</p>
                    </div>
                    <div class="mt-2">
                        <h6 class="mb-1">Jumlah Tanpa PPN</h6>
                        <p>Rp. {{ number_format($barang->total_harga_tanpa_ppn, 0, ',', '.') }}</p>
                    </div>
                    <div class="mt-2">
                        <h6 class="mb-1">PPN</h6>
                        <p>Rp. {{ number_format($barang->ppn, 0, ',', '.') }}</p>
                    </div>
                    <div class="mt-2">
                        <h6 class="mb-1">Jumlah Dengan PPN</h6>
                        <p>Rp. {{ number_format($barang->total_harga_ppn, 0, ',', '.') }}</p>
                    </div>
                    <div class="mt-2">
                        <h6 class="mb-1">Gambar Barang</h6>
                    <img src="{{ asset($barang->gambar_barang) }}" alt="Gambar barang" width="25%">
                    </div>

                    <a class="btn btn-danger mt-5" href="{{ route('barang.index') }}">Kembali</a>
            </div>
        </div>
    </div>
@endsection
