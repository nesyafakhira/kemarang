@extends('admin.layouts.main')

@section('content')
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
                            <form>
                                <div class="row">
                                    <div class="form-group col-sm-12">
                                        <label class="form-label" for="fname">Nama</label>
                                        <input type="text" class="form-control" id="fname" placeholder="Masukkan Nama">
                                    </div>
                                    <div class="form-group col-sm-12">
                                        <label class="form-label" for="email">Email</label>
                                        <input type="email" class="form-control" id="email" placeholder="Masukkan Email">
                                    </div>
                                    <div class="form-group col-sm-12">
                                        <label class="form-label" for="mobno">NPSN</label>
                                        <input type="text" class="form-control" id="mobno" placeholder="Masukkan NPSN">
                                    </div>
                                    <div class="form-group col-sm-12">
                                        <label class="form-label" for="pass">Password</label>
                                        <input type="password" class="form-control" id="pass" placeholder="Password">
                                    </div>
                                    <div class="form-group col-sm-12">
                                        <label class="form-label" for="rpass">Konfirmasi Password</label>
                                        <input type="password" class="form-control" id="rpass" placeholder="Konfirmasi Password ">
                                    </div>
                                    <div class="form-group col-sm-12">
                                        <label class="form-label">Role</label>
                                        <select name="type" class="selectpicker form-control" data-style="py-0">
                                            <option>Pilih Role</option>
                                            <option>Guru</option>
                                            <option>TU</option>
                                            <option>Kepala Sekolah</option>
                                            <option>Admin</option>
                                        </select>
                                    </div>
                                <div class="checkbox">
                                    <label class="form-label"><input class="form-check-input me-2" type="checkbox" value="" id="flexCheckChecked">Enable Two-Factor-Authentication</label>
                                </div>
                                <button type="submit" class="btn btn-primary">Add User</button>
                            </form>
                        </div>
                    </div>
                </div>
            
        </div>
    </div>
</div>
@endsection