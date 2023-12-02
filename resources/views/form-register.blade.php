@extends('form-layout')

@section('content')
    <div class="col-md-6">
        <div class="card-form overflow-hidden position-relative m-auto rounded">
            <h5 class="my-3 text-center text-white">Register</h5>
        </div>
        <div class="card-input overflow-hidden bg-white m-auto mb-4 position-relative rounded">
            @include('admin.layouts.error')
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="p-4">
                    <div class="col-form-label-sm mb-3">
                        <label for="nameInput">Nama</label>
                        <input type="text" name="name" class="form-control form-control-sm mt-2" id="nameInput"
                            placeholder="Masukkan Nama">
                    </div>
                    <div class="col-form-label-sm mb-3">
                        <label for="nip">NIP</label>
                        <input type="number" name="nip" class="form-control form-control-sm mt-2" id="nip"
                            placeholder="Masukkan NIP">
                    </div>
                    <div class="col-form-label-sm mb-3">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control form-control-sm mt-2"" id="email"
                            aria-describedby="emailHelp" placeholder="name@example.com">
                    </div>
                    <div class="col-form-label-sm mb-3">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control form-control-sm mt-2"" id="password"
                            placeholder="Password">
                    </div>
                    <div class="col-form-label-sm mb-3">
                        <label for="password_con">Konfirmasi Password</label>
                        <input type="password" name="password_confirmation" class="form-control form-control-sm mt-2""
                            id="password_con" placeholder="Password">
                    </div>
                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input" type="checkbox" role="switch" id="show-password">
                        <label class="form-check-label" for="show-password">Lihat password</label>
                    </div>
                    <div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-form rounded-2">Submit</button>
                        </div>
                    </div>
            </form>
        </div>
    </div>
@endsection

@push('script')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const passwordField = document.getElementById('password');
            const passwordConField = document.getElementById('password_con');
            const showPasswordCheckbox = document.getElementById('show-password');

            showPasswordCheckbox.addEventListener('change', function() {
                const type = this.checked ? 'text' : 'password';
                passwordField.setAttribute('type', type);
                passwordConField.setAttribute('type', type);
            });
        });
    </script>
@endpush
