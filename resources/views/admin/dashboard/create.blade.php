@extends('admin.layouts.main')

@section('title')
    Kemarang | Tambah Barang
@endsection

@section('content')
@include('admin.layouts.error')
    <div class="conatiner-fluid content-inner mt-5 py-0">
        <div class="row">
            <div class="d-flex align-items-center justify-content-between flex-wrap mb-4">
                <div class="d-flex align-items-center">
                    <h4>Barang</h4>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h5>Form</h5>
                </div>
                <div class="card-body">

                    <form action="{{ route('barang.store') }}" method="post">
                        @csrf
                    
                        <div class="form-floating mb-3">
                            <input type="text" name="nama_barang" value="{{ old('nama_barang') }}" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Nama Barang</label>
                        </div>
    
                        <div class="form-floating mb-3">
                            <input type="number" name="jumlah_unit" value="{{ old('jumlah_unit') }}" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Jumlah Barang</label>
                        </div>
    
                        <div class="form-floating mb-3">
                            <input type="text" name="satuan" value="{{ old('satuan') }}" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Satuan Barang</label>
                        </div>
    
                        <div class="form-floating mb-3">
                            <input type="number" name="harga_satuan" value="{{ old('harga_satuan') }}" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Harga Satuan</label>
                        </div>

                        <button type="submit" class="btn btn-primary"><i class="fa"> Submit</i></button>
                    </form>


                </div>
            </div>
        </div>
    </div>
@endsection
