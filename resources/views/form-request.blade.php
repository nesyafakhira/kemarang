@extends('form-layout')

@section('content')
    <div class="col-md-6">
        <div class="card-form overflow-hidden position-relative m-auto rounded">
            <h5 class="my-3 text-center text-white">Form Request Barang</h5>
        </div>
        <div class="card-input overflow-hidden bg-white m-auto mb-4 position-relative rounded">
            <form>
                <div class="p-4">
                    <div class="col-form-label-sm mb-3">
                        <label for="barangInput">Nama Barang</label>
                        <select class="form-select form-select-sm mt-2" aria-label="Default select example">
                            <option selected disabled>Pilih Barang</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="col-form-label-sm mb-3">
                        <label for="barangInput">Jumlah Barang</label>
                        <input type="number" class="form-control form-control-sm mt-2" id="exampleFormControlInput1" placeholder="0">
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-form rounded-2">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
