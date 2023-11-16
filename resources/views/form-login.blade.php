@extends('form-layout')

@section('content')
    <div class="col-md-6">
        <div class="card-form overflow-hidden position-relative m-auto rounded">
            <h5 class="my-3 text-center text-white">Login</h5>
        </div>
        <div class="card-input overflow-hidden bg-white m-auto mb-4 position-relative rounded">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="p-4">
                    <div class="col-form-label-sm mb-3">
                        <label for="barangInput">Email</label>
                        <input name="email" type="email" class="form-control form-control-sm mt-2"" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="user@gmail.com">
                    </div>
                    <div class="col-form-label-sm mb-3">
                        <label for="barangInput">Password</label>
                        <input name="password" type="password" class="form-control form-control-sm mt-2"" id="floatingPassword" placeholder="Password">
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-form rounded-2">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
