@extends('form-layout')

@section('content')
    <div class="col-md-6">
        <div class="card-form overflow-hidden position-relative m-auto rounded">
            <h5 class="my-3 text-center text-white">Form Request Barang</h5>
        </div>
        <div class="card-input overflow-hidden bg-white m-auto mb-4 position-relative rounded">
            @include('admin.layouts.error')

            <form method="POST" action="{{ route('request.store') }}">
                @csrf
                <div class="p-4">
                    <div class="col-form-label-sm mb-3">
                        <label class="form-label">Pilih Barang</label>
                        <select name="nama_barang" id="nama_barang" onchange="selectBarang(this)"
                            class="selectpicker form-control" data-style="py-0">
                            <option selected disabled>Pilih Barang</option>
                            @foreach ($barangs as $item)
                                <option data-jumlah="{{ $item->jumlah_unit }}" data-satuan="{{ $item->satuan }}"
                                    data-id="{{ $item->id }}" value="{{ $item->nama_barang }}">{{ $item->nama_barang }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <input type="hidden" id="barang_id" name="barang_id">
                    <input type="hidden" id="" name="guru_id" value="{{ auth()->user()->id }}">
                    <input type="hidden" name="stok" id="jumlah_unit_hidden">
                    <div class="col-form-label-sm mb-3">
                        <label class="form-label" for="fname" id="labelJumlah">Jumlah Tersedia</label>
                        <input disabled id="jumlah_unit" type="text" class="form-control" id="fname"
                            placeholder="Jumlah yang tersedia">
                    </div>
                    <div class="col-form-label-sm mb-3">
                        <label class="form-label" for="mobno" id="labelJumlahUnit">Jumlah Unit</label>
                        <input name="jumlah_unit" type="text" class="form-control" id="mobno"
                            placeholder="Jumlah yang ingin diminta">
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-form rounded-2">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script type="text/javascript">
        function selectBarang(el) {
            let valueBarang = $(el).val();
            let jumlahBarang = $(el).find(':selected').data('jumlah');
            let satuanBarang = $(el).find(':selected').data('satuan');
            let idBarang = $(el).find(':selected').data('id');

            $("#jumlah_unit").val(jumlahBarang)
            $("#jumlah_unit_hidden").val(jumlahBarang)
            $("#barang_id").val(idBarang)
            // $("#labelJumlah").html("Jumlah Tersedia " + "(" + satuanBarang + ")") // basic
            $("#labelJumlah").html(`Jumlah Tersedia (${satuanBarang})`) // template literal
            $("#labelJumlahUnit").html(`Jumlah Unit (${satuanBarang})`) // template literal
        }
    </script>
@endsection
