@extends('admin.layouts.main')

@section('title')
    Kemarang | Detail Content
@endsection

@section('content')
    <div class="conatiner-fluid content-inner mt-5 py-0">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <div class="header-title">
                        <h4 class="card-title">Detail Content</h4>
                    </div>
                </div>
                <div class="card-body">
                    <div class="mt-2">
                        <h6 class="mb-1">Nama Barang</h6>
                        <p>{{ $content->nama_barang }}</p>
                    </div>
                    <div class="mt-2">
                        <h6 class="mb-1">Jumlah Unit</h6>
                        <p>{{ $content->jumlah_unit }}</p>
                    </div>
                    <div class="mt-2">
                        <h6 class="mb-1">Satuan</h6>
                        <p>{{ $content->barang->satuan }}</p>
                    </div>
                    <div class="mt-2">
                        <h6 class="mb-1">Status</h6>
                        <span class="badge bg-primary">{{ $content->status }}</span>
                    </div>

                    <a href="{{ route('content.index') }}" class="btn btn-primary mt-5">Kembali</a>
            </div>
        </div>
    </div>
@endsection
