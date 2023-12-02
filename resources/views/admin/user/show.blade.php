@extends('admin.layouts.main')

@section('title')
    Kemarang | Detail User
@endsection

@section('content')
    <div class="conatiner-fluid content-inner mt-5 py-0">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <div class="header-title">
                        <h4 class="card-title">Detail User</h4>
                    </div>
                </div>
                <div class="card-body">
                    <div class="mt-2">
                        <h6 class="mb-1">Nama</h6>
                        <p>{{ $user->name }}</p>
                    </div>
                    <div class="mt-2">
                        <h6 class="mb-1">Email</h6>
                        <p>{{ $user->email }}</p>
                    </div>
                    <div class="mt-2">
                        <h6 class="mb-1">nip</h6>
                        <p>{{ $user->nip }}</p>
                    </div>
                    <div class="mt-2">
                        <h6 class="mb-1">Role</h6>
                        @if ($user->hasRole('admin'))
                        <span class="badge bg-primary">Admin</span>
                        @elseif ($user->hasRole('staff'))
                        <span class="badge bg-primary">Staff TU</span>
                        @elseif ($user->hasRole('guru'))
                        <span class="badge bg-primary">Guru</span>
                        @elseif ($user->hasRole('kepsek'))
                        <span class="badge bg-primary">Kepala Sekolah</span>
                        @endif
                    </div>

                    <a class="btn btn-primary mt-5" href="{{ route('user.index') }}">Kembali</a>
                </div>
            </div>
        </div>
    @endsection
