@extends('admin.layouts.main')

@section('content')
    <div class="conatiner-fluid content-inner mt-5 py-0">
        <div>
            <div class="row">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Add Stock</h4>
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
                                        <label class="form-label" for="mobno">Stock Awal</label>
                                        <input type="text" class="form-control" id="mobno"
                                            placeholder="Masukkan Stock Awal">
                                    </div>
                                    <div class="form-group col-sm-12">
                                        <label class="form-label" for="mobno">Stock Akhir</label>
                                        <input type="text" class="form-control" id="mobno"
                                            placeholder="Masukkan Stock Akhir">
                                    </div>
                                    <div class="form-group col-sm-12">
                                        <label class="form-label" for="mobno">Balancing</label>
                                        <input type="text" class="form-control" id="mobno"
                                            placeholder="Masukkan Balancing">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Add Stock</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
