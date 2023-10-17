@extends('admin.layouts.main')

@section('content')
    <div class="conatiner-fluid content-inner mt-5 py-0">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <div class="header-title">
                        <h4 class="card-title">About User</h4>
                    </div>
                </div>
                <div class="card-body">
                    <div class="mt-2">
                        <h6 class="mb-1">Nama</h6>
                        <p>Admin</p>
                    </div>
                    <div class="mt-2">
                        <h6 class="mb-1">Email</h6>
                        <p><a href="{{ url('#') }}" class="text-body"> admin@gmail.com</a></p>
                    </div>
                    <div class="mt-2">
                        <h6 class="mb-1">NPSN</h6>
                        <p><a href="{{ url('#') }}" class="text-body"> 0011234567 </a></p>
                    </div>
                    <div class="mt-2">
                        <h6 class="mb-1">Role</h6>
                        <p><a href="{{ url('#') }}" class="text-body" target="_blank"> Admin </a></p>
                    </div>
            </div>
        </div>
    </div>
@endsection
