@extends('admin.layouts.main')

@section('title')
    Kemarang | Add User
@endsection

@section('content')
@include('admin.layouts.error')
<div class="conatiner-fluid content-inner mt-5 py-0">
    <div>
        <div class="row">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Add User</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="new-user-info">
                            <form method="POST" action="{{ route('user.store') }}">
                                @csrf
                                <div class="row">
                                    <div class="form-group col-sm-12">
                                        <label class="form-label" for="fname">Nama</label>
                                        <input name="name" type="text" class="form-control" id="fname" placeholder="Masukkan Nama">
                                    </div>
                                    <div class="form-group col-sm-12">
                                        <label class="form-label" for="email">Email</label>
                                        <input name="email" type="email" class="form-control" id="email" placeholder="Masukkan Email">
                                    </div>
                                    <div class="form-group col-sm-12">
                                        <label class="form-label" for="mobno">NIP/NIKKI</label>
                                        <input name="nip_nikki" type="number" class="form-control" id="mobno" placeholder="Masukkan nip">
                                    </div>
                                    <div class="form-group col-sm-12">
                                        <label class="form-label" for="pass">Password</label>
                                        <input name="password" type="password" class="form-control" id="pass" placeholder="Password">
                                    </div>
                                    <div class="form-group col-sm-12">
                                        <label class="form-label">Role</label>
                                        <select name="role" class="selectpicker form-control" data-style="py-0">
                                            <option selected>Pilih Role</option>
                                            <option value="admin">Admin</option>
                                            <option value="staff">TU</option>
                                            <option value="guru">Guru</option>
                                            <option value="kepsek">Kepala Sekolah</option>
                                        </select>
                                    </div>
                                <button type="submit" class="btn btn-primary">Add User</button>
                            </form>
                        </div>

                        <a class="btn btn-danger mt-5" href="{{ route('user.index') }}">Kembali</a>
                    </div>
                </div>
            
        </div>
    </div>
</div>
@endsection