@extends('admin.layouts.main')

@section('content')
    <div class="conatiner-fluid content-inner mt-5 py-0">
        <div>
            <div class="row">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Add Request</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="new-user-info">
                            <form>
                                <div class="row">
                                    <div class="form-group col-sm-12">
                                        <label class="form-label" for="fname">Nama Barang</label>
                                        <input type="text" class="form-control" id="fname"
                                            placeholder="Masukkan Nama Barang">
                                    </div>
                                    <div class="form-group col-sm-12">
                                        <label class="form-label" for="mobno">Jumlah Unit</label>
                                        <input type="text" class="form-control" id="mobno"
                                            placeholder="Masukkan Jumlah">
                                    </div>
                                    <div class="form-group col-sm-12">
                                        <label class="form-label" for="mobno">Satuan</label>
                                        <input type="text" class="form-control" id="mobno"
                                            placeholder="Masukkan Jumlah">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Add Request</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
