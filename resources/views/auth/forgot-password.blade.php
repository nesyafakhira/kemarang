{{-- <x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}


@extends('form-layout')

@section('title')
    Kemarang | Lupa Password
@endsection

@section('content')
    <div class="col-md-6">
        <div class="card-form overflow-hidden position-relative m-auto rounded">
            <h5 class="my-3 text-center text-white">Lupa Password</h5>
        </div>
        <div class="card-input overflow-hidden bg-white m-auto mb-4 position-relative rounded">
            @include('admin.layouts.error')
            @include('sweetalert::alert')

            <form method="POST" action="{{ route('password.email') }}">
                @csrf
                <div class="p-4">
                    <div class="col-form-label-sm mb-3">
                        <label for="email">Email</label>
                        <input name="email" type="email" class="form-control form-control-sm mt-2"" id="email"
                            aria-describedby="emailHelp" placeholder="user@gmail.com" value="{{ old('email') }}" required autofocus>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-form rounded-2">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection