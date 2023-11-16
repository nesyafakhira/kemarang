@extends('admin.layouts.main')

@section('title')
    Kemarang | Add Content
@endsection

@section('content')
    <div class="conatiner-fluid content-inner mt-5 py-0">
        <div>
            <div class="row">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Add Content</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="new-user-info">
                            <form action="{{ route('content.store') }}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="form-group col-sm-12">
                                        <label class="form-label">Pilih Barang</label>
                                        <select name="nama_barang" id="nama_barang" onchange="selectBarang(this)" class="selectpicker form-control" data-style="py-0">
                                            <option selected disabled>Pilih Barang</option>
                                            @foreach ($barangs as $item)
                                                <option data-jumlah="{{ $item->jumlah_unit }}" data-satuan="{{ $item->satuan }}" data-id="{{ $item->id }}" value="{{ $item->nama_barang }}">{{ $item->nama_barang }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <input type="hidden" id="barang_id" name="barang_id">
                                    <input type="hidden" id="" name="guru_id" value="{{ auth()->user()->id }}">

                                    <div class="form-group col-sm-12">
                                        <label class="form-label" for="fname" id="labelJumlah">Jumlah Tersedia</label>
                                        <input disabled id="jumlah_unit" type="text" class="form-control" id="fname" placeholder="Jumlah yang tersedia">
                                    </div>
                                    <div class="form-group col-sm-12">
                                        <label class="form-label" for="mobno" id="labelJumlahUnit">Jumlah Unit</label>
                                        <input name="jumlah_unit" type="text" class="form-control" id="mobno"
                                            placeholder="Jumlah yang ingin diminta">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Add Content</button>
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
        function selectBarang(el) {
            let valueBarang = $(el).val();
            let jumlahBarang = $(el).find(':selected').data('jumlah');
            let satuanBarang = $(el).find(':selected').data('satuan');
            let idBarang = $(el).find(':selected').data('id');

            $("#jumlah_unit").val(jumlahBarang)
            $("#barang_id").val(idBarang)
            // $("#labelJumlah").html("Jumlah Tersedia " + "(" + satuanBarang + ")") // basic
            $("#labelJumlah").html(`Jumlah Tersedia (${satuanBarang})`) // template literal
            $("#labelJumlahUnit").html(`Jumlah Unit (${satuanBarang})`) // template literal
        }
    </script>
@endsection
