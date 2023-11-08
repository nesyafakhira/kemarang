@extends('form-layout')

@section('content')
    <div class="col-md-6">
        <div class="card-form overflow-hidden position-relative m-auto rounded">
            <h5 class="my-3 text-center text-white">Register</h5>
        </div>
        <div class="card-input overflow-hidden bg-white m-auto mb-4 position-relative rounded">
            <form>
                <div class="p-4">
                    <div class="col-form-label-sm mb-3">
                        <label for="nameInput">Nama</label>
                        <input type="text" class="form-control form-control-sm mt-2" id="exampleFormControlInput1" placeholder="Masukkan Nama">
                    </div>
                    <div class="col-form-label-sm mb-3">
                        <label for="nameInput">NPSN</label>
                        <input type="text" class="form-control form-control-sm mt-2" id="exampleFormControlInput1" placeholder="Masukkan NPSN">
                    </div>
                    <div class="col-form-label-sm mb-3">
                        <label for="barangInput">Email</label>
                        <input type="email" class="form-control form-control-sm mt-2"" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="name@example.com">
                    </div>
                    <div class="col-form-label-sm mb-3">
                        <label for="barangInput">Password</label>
                        <input type="password" class="form-control form-control-sm mt-2"" id="floatingPassword" placeholder="Password">
                    </div>
                    <div class="col-form-label-sm mb-3">
                        <label for="barangInput">Pilih Role</label>
                        <select class="form-select form-select-sm mt-2" aria-label="Default select example">
                            <option selected disabled>Pilih Role</option>
                            <option value="1">Kepala Sekolah</option>
                            <option value="2">Guru</option>
                            <option value="3">TU</option>
                        </select>
                    </div>
                    <div cl
                    <div class="text-center">
                        <button type="submit" class="btn btn-form rounded-2">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection