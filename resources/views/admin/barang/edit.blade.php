@extends('admin.layouts.main')

@section('title')
    Kemarang | Edit Barang
@endsection

@section('content')
<div class="conatiner-fluid content-inner mt-5 py-0">
    <div>
        <div class="row">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Edit Barang</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        @include('admin.layouts.error')
                        <div class="new-user-info">
                            <form action="{{ route('barang.update', $barang->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <input type="hidden" name="barang_id" value="{{ $barang->id }}">
                                <div class="row">
                                    <div class="form-group col-sm-12">
                                        <label class="form-label" for="fname">Nama Barang</label>
                                        <input value="{{ $barang->nama_barang }}" name="nama_barang" type="text" class="form-control" id="fname" placeholder="Masukkan Nama">
                                    </div>
                                    <div class="form-group col-sm-12">
                                        <label class="form-label" for="email">Jumlah Unit</label>
                                        <input value="{{ $barang->jumlah_unit }}" name="jumlah_unit" type="number" class="form-control" id="email" placeholder="Masukkan Jumlah">
                                    </div>
                                    <div class="form-group col-sm-12">
                                        <label class="form-label" for="email">Satuan</label>
                                        <input value="{{ $barang->satuan }}" name="satuan" type="text" class="form-control" id="email" placeholder="Masukkan Satuan">
                                    </div>
                                    <div class="form-group col-sm-12">
                                        <label class="form-label" for="email">Harga Masuk</label>
                                        <input id="hargaMasuk" value="{{ $barang->harga_satuan }}" name="harga_satuan" type="text" class="form-control" id="email" placeholder="Masukkan Harga">
                                    </div>
                                    <div class="mb-3 col-sm-12">
                                        <label for="gambarBarang" class="form-label">Gambar Barang</label>
                                        <input class="form-control" type="file" id="gambarBarang" name="gambar_barang">
                                    </div>
                                    <div class="mb-3">
                                        <img id="gambar_barang" src="{{ asset($barang->gambar_barang) }}" alt="Gambar barang" width="25%">
                                    </div>
                                <button type="submit" class="btn btn-primary">Edit Barang</button>
                            </form>
                        </div>
                        
                        <a class="btn btn-danger mt-5" href="{{ route('barang.index') }}">Kembali</a>
                    </div>
                </div>
            
        </div>
    </div>
</div>
@endsection

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-maskmoney/3.0.2/jquery.maskMoney.min.js"
        integrity="sha512-Rdk63VC+1UYzGSgd3u2iadi0joUrcwX0IWp2rTh6KXFoAmgOjRS99Vynz1lJPT8dLjvo6JZOqpAHJyfCEZ5KoA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(function() {
            $('#hargaMasuk').maskMoney({
                thousands: '.',
                decimal: ',',
                precision: 0,
                allowZero: false,
                allowNegative: false,
            });
        });
    
    </script>
@endpush