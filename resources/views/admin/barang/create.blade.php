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
                        @include('admin.layouts.error')
                        <div class="new-user-info">
                            <form method="POST" action="{{ route('barang.store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="form-group col-sm-12">
                                        <label class="form-label" for="fname">Nama Barang</label>
                                        <input value="{{ old('nama_barang') }}" name="nama_barang" type="text"
                                            class="form-control" id="fname" placeholder="Masukkan Nama">
                                    </div>
                                    <div class="form-group col-sm-12">
                                        <label class="form-label" for="fname">Deskripsi Barang</label>
                                        <input value="{{ old('deskripsi') }}" name="deskripsi" type="text"
                                            class="form-control" id="fname" placeholder="Masukkan Deskripsi">
                                    </div>
                                    <div class="form-group col-sm-12">
                                        <label class="form-label" for="jumlah_unit">Jumlah Unit</label>
                                        <input value="{{ old('jumlah_unit') }}" name="jumlah_unit" type="number"
                                            class="form-control" id="jumlah_unit" placeholder="Masukkan Jumlah">
                                    </div>
                                    <div class="form-group col-sm-12">
                                        <label for="datalist" class="form-label">Satuan</label>
                                        <input value="{{ old('satuan') }}" class="form-control" name="satuan"
                                            list="datalistOptions" id="datalist" placeholder="pcs/rim/meter">
                                        <datalist id="datalistOptions">
                                            <option value="Pcs">
                                            <option value="Rim">
                                            <option value="Meter">
                                        </datalist>
                                    </div>
                                    <div class="form-group col-sm-12">
                                        <label class="form-label" for="hargaMasuk">Harga Masuk</label>
                                        <input value="{{ old('harga_satuan') }}" name="harga_satuan" type="text"
                                            class="form-control" id="hargaMasuk" placeholder="Masukkan Harga Satuan">
                                    </div>

                                    <div class="mb-3 col-sm-12">
                                        <label for="gambarBarang" class="form-label">Gambar Barang</label>
                                        <input class="form-control" type="file" id="gambarBarang" name="gambar_barang">
                                    </div>

                                    <button type="submit" class="btn btn-primary">Add Barang</button>
                            </form>
                        </div>

                        <a class="btn btn-danger mt-5" href="{{ route('barang.index') }}">Kembali</a>
                    </div>
                </div>


            </div>
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">Import Barang</h4>
                    </div>
                </div>

                <div class="card-body">
                    <form action="{{ route('import') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col">
                                <label for="formFileLg" class="form-label">Input File</label>
                                <input name="file" class="form-control form-control-lg mb-3" id="formFileLg" type="file">
                                <label style="display: block" for=""><i>*file harus sesuai dengan format yang sudah ditentukan</i></label>
                                <button type="submit" class="btn btn-primary">Import File</button>
                            </div>
                            <div class="col">
                                <span style="display: block">Download Format Import</span>
                                <a href="{{ asset('assets/excel/file.xlsx') }}" download="format_import.xlsx" class="btn btn-primary mt-3">DOWNLOAD</a>
                            </div>

                        </div>


                    </form>
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
