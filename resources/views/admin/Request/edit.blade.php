@extends('admin.layouts.main')

@section('title')
    Kemarang | Edit Request
@endsection

@section('content')
    <div class="conatiner-fluid content-inner mt-5 py-0">
        <div>
            <div class="row">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Edit Request</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="new-user-info">
                            <form action="{{ route('request.update', $request->id) }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <div class="row">
                                    @include('admin.layouts.error')
                                    <div class="form-group col-sm-12">
                                        <label class="form-label" for="fname">Nama Barang</label>
                                        <select disabled data-select-barang="{{ $request->nama_barang }}" name="nama_barang" id="nama_barang" onchange="selectBarang(this)" class="selectpicker form-control" data-style="py-0">
                                            <option selected disabled>Pilih Barang</option>
                                            @foreach ($barangs as $item)
                                                <option {{ $request->nama_barang == $item->nama_barang ? "selected" : null }} data-jumlah="{{ $item->jumlah_unit }}" data-satuan="{{ $item->satuan }}" data-id="{{ $item->id }}" value="{{ $item->nama_barang }}">{{ $item->nama_barang }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-sm-12">
                                        <label class="form-label" for="fname" id="labelJumlah">Jumlah Tersedia</label>
                                        <input disabled name="jumlah_tersedia" id="jumlah_unit" type="text" class="form-control" id="fname" placeholder="Jumlah yang tersedia">
                                    </div>

                                    <input type="hidden" id="barang_id" name="barang_id">
                                    <input type="hidden" id="jumlah_tersedia" name="jumlah_tersedia">
                                    <input type="hidden" id="" value="{{ $request->jumlah_unit }}" name="jumlah_request">
                                    
                                    <div class="form-group col-sm-12">
                                        <label class="form-label" id="labelRequest" for="mobno">Jumlah Request Unit</label>
                                        <input disabled name="jumlah_unit" value="{{ $request->jumlah_unit }}" type="text"
                                            class="form-control" id="mobno" placeholder="Masukkan Jumlah Unit">
                                    </div>
                                    <div class="form-group col-sm-12">
                                        <select name="status" class="form-select form-select-lg mb-3" aria-label="Large select example">
                                            <option disabled selected>Konfirmasi</option>
                                            <option value="terima">Terima</option>
                                            <option value="tolak">Tolak</option>
                                        </select>
                                    </div>

                                    <button type="submit" class="btn btn-primary">Edit Request</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script type="text/javascript">
    
        $(document).ready(function () {
            let valSelectBarang = $("#nama_barang").data('select-barang');

            if(valSelectBarang) {
                $("#nama_barang").trigger('change')
            }
        })

        function selectBarang(el) {
            let valueBarang = $(el).val();
            let jumlahBarang = $(el).find(':selected').data('jumlah');
            let satuanBarang = $(el).find(':selected').data('satuan');
            let idBarang = $(el).find(':selected').data('id');

            $("#jumlah_unit").val(jumlahBarang)
            $("#jumlah_tersedia").val(jumlahBarang)
            $("#barang_id").val(idBarang)
            $("#labelJumlah").html(`Jumlah Tersedia (${satuanBarang})`) 
            $("#labelRequest").html(`Jumlah Unit (${satuanBarang})`) 
        }
    </script>
@endsection
