@extends('admin.layouts.main')

@section('title')
    Kemarang | Add Barang
@endsection

@section('content')
<div class="conatiner-fluid content-inner mt-5 py-0">
    <div>
        <div class="row">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Add Barang</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="new-user-info">
                            <form method="POST" action="{{ route('barang.store') }}">
                                @csrf
                                <div class="row">
                                    <div class="form-group col-sm-12">
                                        <label class="form-label" for="fname">Nama Barang</label>
                                        <input name="nama_barang" type="text" class="form-control" id="fname" placeholder="Masukkan Nama">
                                    </div>
                                    <div class="form-group col-sm-12">
                                        <label class="form-label" for="jumlah_unit">Jumlah Unit</label>
                                        <input name="jumlah_unit" type="number" class="form-control" id="jumlah_unit" placeholder="Masukkan Jumlah">
                                    </div>
                                    <div class="form-group col-sm-12">
                                        <label class="form-label" for="mobno">Satuan</label>
                                        <input name="satuan" type="text" class="form-control" id="mobno" placeholder="Masukkan Satuan">
                                    </div>
                                    <div class="form-group col-sm-12">
                                        <label class="form-label" for="mobno">Harga Masuk</label>
                                        <input name="harga_satuan" type="number" class="form-control" id="mobno" placeholder="Masukkan Harga Satuan">
                                    </div>
                                    
                                <button type="submit" class="btn btn-primary">Add Barang</button>
                            </form>
                        </div>

                        <a class="btn btn-primary mt-5" href="{{ route('barang.index') }}">Kembali</a>
                    </div>
                </div>
            
        </div>
    </div>
</div>
@endsection