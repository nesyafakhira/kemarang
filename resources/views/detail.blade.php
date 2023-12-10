@extends('form-layout')

@section('content')
    <div class="col-md-6">
        <div class="card-form overflow-hidden position-relative m-auto rounded">
            <h5 class="my-3 text-center text-white">Detail Request</h5>
        </div>
        <div class="card-body overflow-hidden bg-white m-auto mb-4 position-relative rounded p-3 text-black">
            @include('admin.layouts.error')
            <div class="card-input">
                <div class="mt-4">
                    <h5 class="mb-1">Nama Barang</h5>
                    <p>{{ $request->nama_barang }}</p>
                </div>
                <div class="mt-2">
                    <h5 class="mb-1">Jumlah Unit</h5>
                    <p>{{ $request->jumlah_unit }}</p>
                </div>
                <div class="mt-2">
                    <h5 class="mb-1">Keperluan</h5>
                    <p>{{ $request->keperluan }}</p>
                    <div class="mt-2">
                        <h5 class="mb-1">Status</h5>
                        @if ($request->status == 'menunggu')
                            <td><span class="badge bg-primary">{{ $request->status }}</span></td>
                        @elseif ($request->status == 'terima')
                            <td><span class="badge bg-success">{{ $request->status }}</span></td>
                        @else
                            <td><span class="badge bg-danger">{{ $request->status }}</span></td>
                        @endif
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <a class="btn btn-primary mt-5" style="background-color: #012970;" href="{{ route('content.index') }}">Kembali</a>
            </div>        </div>
    @endsection
