{{-- <x-guest-layout>
    <form method="POST" action="{{ route('password.store') }}">
        @csrf

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Reset Password') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}

@extends('form-layout')

@section('title')
    Kemarang | Reset Password
@endsection

@section('content')
    <div class="col-md-6">
        <div class="card-form overflow-hidden position-relative m-auto rounded">
            <h5 class="my-3 text-center text-white">Reset Password</h5>
        </div>
        <div class="card-input overflow-hidden bg-white m-auto mb-4 position-relative rounded">
            @include('admin.layouts.error')

            <form method="POST" action="{{ route('password.store') }}">
                @csrf

                <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">
                <div class="p-4">
                    <div class="col-form-label-sm mb-3">
                        <label for="email">Email</label>
                        <input name="email" type="email" class="form-control form-control-sm mt-2"" id="email"
                            aria-describedby="emailHelp" placeholder="user@gmail.com" value="{{ old('email', $request->email) }}" required autofocus>
                    </div>
                    <div class="col-form-label-sm mb-3">
                        <label for="password">Password Baru</label>
                        <input name="password" type="password" class="form-control form-control-sm mt-2"" id="password"
                            aria-describedby="emailHelp" placeholder="Password" required>
                    </div>
                    <div class="col-form-label-sm mb-3">
                        <label for="pass_con">Konfirmasi Password</label>
                        <input name="password_confirmation" type="password" class="form-control form-control-sm mt-2"" id="pass_con"
                            aria-describedby="emailHelp" placeholder="Password" required>
                    </div>
                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input" type="checkbox" role="switch" id="show-password">
                        <label class="form-check-label" for="show-password">Lihat password</label>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-form rounded-2">Reset Password</button>
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
            const passwordConField = document.getElementById('pass_con');
            const showPasswordCheckbox = document.getElementById('show-password');

            showPasswordCheckbox.addEventListener('change', function() {
                const type = this.checked ? 'text' : 'password';
                passwordField.setAttribute('type', type);
                passwordConField.setAttribute('type', type);
            });
        });
    </script>
@endpush