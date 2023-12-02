@extends('admin.layouts.main')

@section('title')
    Kemarang | Edit User
@endsection

@section('content')
@include('admin.layouts.error')
<div class="conatiner-fluid content-inner mt-5 py-0">
    <div>
        <div class="row">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Edit User</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="new-user-info">
                            <form method="POST" action="{{ route('user.update', $user->id) }}">
                                @csrf
                                @method('patch')
                                <div class="row">
                                    <div class="form-group col-sm-12">
                                        <label class="form-label" for="fname">Nama</label>
                                        <input value="{{ $user->name }}" name="name" type="text" class="form-control" id="fname" placeholder="Masukkan Nama">
                                    </div>
                                    <div class="form-group col-sm-12">
                                        <label class="form-label" for="mobno">nip</label>
                                        <input value="{{ $user->nip }}" name="nip" type="number" class="form-control" id="mobno" placeholder="Masukkan nip">
                                    </div>
                                    <div class="form-group col-sm-12">
                                        <label class="form-label">Role</label>
                                        <select name="role" class="selectpicker form-control" data-style="py-0">
                                            <option {{ $user->hasRole('admin') ? 'selected' : '' }} value="admin">Admin</option>
                                            <option {{ $user->hasRole('staff') ? 'selected' : '' }} value="staff">TU</option>
                                            <option {{ $user->hasRole('guru') ? 'selected' : '' }} value="guru">Guru</option>
                                            <option {{ $user->hasRole('kepsek') ? 'selected' : '' }} value="kepsek">Kepala Sekolah</option>
                                        </select>
                                    </div>
                                <button type="submit" class="btn btn-primary">Edit User</button>
                            </form>
                        </div>

                        <a class="btn btn-primary mt-5" href="{{ route('user.index') }}">Kembali</a>
                    </div>
                </div>
            
        </div>
    </div>
</div>
@endsection