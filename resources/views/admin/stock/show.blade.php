@extends('admin.layouts.main')

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
                        <p>Spidol</p>
                    </div>
                    <div class="mt-2">
                        <h6 class="mb-1">Stock Awal</h6>
                        <p><a href="{{ url('#') }}" class="text-body"> 000 </a></p>
                    </div>
                    <div class="mt-2">
                        <h6 class="mb-1">Stock Akhir</h6>
                        <p><a href="{{ url('#') }}" class="text-body"> 000 </a></p>
                    </div>
                    <div class="mt-2">
                        <h6 class="mb-1">Balancing</h6>
                        <p><a href="{{ url('#') }}" class="text-body"> 000 </a></p>
                    </div>
            </div>
        </div>
    </div>
@endsection
