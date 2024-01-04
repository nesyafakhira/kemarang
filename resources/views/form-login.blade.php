@extends('form-layout')

@section('title')
    Kemarang | Login
@endsection

@section('content')
    <div class="col-md-6">
        <div class="card-form overflow-hidden position-relative m-auto rounded">
            <h5 class="my-3 text-center text-white">Login</h5>
        </div>
        <div class="card-input overflow-hidden bg-white m-auto mb-4 position-relative rounded">
            @include('admin.layouts.error')
            @include('sweetalert::alert')

            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="p-4">
                    <div class="col-form-label-sm mb-3">
                        <label for="email">Email</label>
                        <input name="email" type="email" class="form-control form-control-sm mt-2"" id="email"
                            aria-describedby="emailHelp" placeholder="user@gmail.com" value="{{ old('email') }}">
                    </div>
                    <div class="col-form-label-sm mb-3">
                        <label for="password">Password</label>
                        <input name="password" type="password" class="form-control form-control-sm mt-2" id="password"
                            placeholder="Password">
                    </div>
                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input" type="checkbox" role="switch" id="show-password">
                        <label class="form-check-label" for="show-password">Lihat password</label>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-form rounded-2">Submit</button>
                    </div>
                    <div>
                        <a style="text-decoration: none" href="{{ route('password.request') }}">Lupa Password?</a>
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
            const showPasswordCheckbox = document.getElementById('show-password');

            showPasswordCheckbox.addEventListener('change', function() {
                const type = this.checked ? 'text' : 'password';
                passwordField.setAttribute('type', type);
            });
        });
    </script>
@endpush
