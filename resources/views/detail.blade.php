@extends('form-layout')

@section('content')
@include('sweetalert::alert')
    <div class="col-md-6">
        <div class="card-form overflow-hidden position-relative m-auto rounded">
            <h5 class="my-3 text-center text-white">Detail Request</h5>
        </div>
        <div class="card-body overflow-hidden bg-white m-auto mb-4 position-relative rounded p-3 text-black">
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
                            <span class="badge bg-primary">{{ $request->status }}</span>
                        @elseif ($request->status == 'terima')
                            <span class="badge bg-success mb-2">{{ $request->status }}</span>
                            @if ($request->gambar_request)
                                <div>
                                    <img class="mb-3" src="{{ asset($request->gambar_request) }}" alt="Bukti pengambilan" width="25%">

                                    <form action="{{ route('content.gambar', $request->id) }}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('patch')
                                        <div class="mb-3">
                                            <label for="gambarBarang" class="form-label">Edit Bukti Pengambilan</label>
                                            <input class="form-control" type="file" id="gambarBarang" name="gambar_request">
                                        </div>
    
                                        <button type="submit" class="btn btn-warning">Upload</button>
    
                                    </form>
                                </div>
                            @else
                                <form action="{{ route('content.gambar', $request->id) }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('patch')
                                    <div class="mb-3">
                                        <label for="gambarBarang" class="form-label">Bukti Pengambilan</label>
                                        <input class="form-control" type="file" id="gambarBarang" name="gambar_request">
                                    </div>

                                    <button type="submit" class="btn btn-warning">Upload</button>

                                </form>
                            @endif
                        @else
                            <span class="badge bg-danger mb-3">{{ $request->status }}</span>
                            <div class="mb-3">
                                <h5 class="mb-1">Catatan</h5>
                                <p>{{ $request->catatan }}</p>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <a class="btn btn-primary mt-5" style="background-color: #012970;"
                    href="{{ route('content.index') }}">Kembali</a>
            </div>
        </div>
    @endsection
