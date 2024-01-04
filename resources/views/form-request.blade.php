@extends('form-layout')

@section('title')
    Kemarang | Request
@endsection

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
                                <option data-jumlah="{{ $item->jumlah_unit }}" data-satuan="{{ $item->satuan }}" data-deskripsi="{{ $item->deskripsi }}"
                                    data-id="{{ $item->id }}" data-gambar="{{ $item->gambar_barang }}"
                                    value="{{ $item->nama_barang }}">{{ $item->nama_barang }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label id="label_barang" class="d-none d-block mb-1">Gambar Barang</label>
                        <img id="gambar_barang" src="" alt="Gambar barang" width="25%" class="d-none mb-3">
                    </div>
                    <div id="deskripsi_div">
                        <label id="label_deskripsi" class="d-none d-block mb-1">Deskripsi Barang</label>
                        <p id="deskripsi_barang"></p>
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
                    <div class="col-form-label-sm mb-3">
                        <label for="keperluan" class="form-label">Keperluan</label>
                        <textarea name="keperluan" class="form-control" id="keperluan" rows="3" placeholder="Untuk keperluan apa"></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" id="submitBtn" class="btn btn-form rounded-2">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('script')
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script type="text/javascript">
        function selectBarang(el) {
            let valueBarang = $(el).val();
            let jumlahBarang = $(el).find(':selected').data('jumlah');
            let deskripsiBarang = $(el).find(':selected').data('deskripsi');
            let satuanBarang = $(el).find(':selected').data('satuan');
            let idBarang = $(el).find(':selected').data('id');
            let gambarBarang = $(el).find(':selected').data('gambar');
            let gambarUrl = "{{ asset('') }}" + gambarBarang;

            $("#jumlah_unit").val(jumlahBarang)
            $("#jumlah_unit_hidden").val(jumlahBarang)
            $("#barang_id").val(idBarang)
            $("#gambar_barang").attr('src', gambarUrl);
            // $("#labelJumlah").html("Jumlah Tersedia " + "(" + satuanBarang + ")") // basic
            $("#labelJumlah").html(`Jumlah Tersedia (${satuanBarang})`) // template literal
            $("#labelJumlahUnit").html(`Jumlah Unit (${satuanBarang})`) // template literal
            $("#deskripsi_barang").html(deskripsiBarang)

            if (valueBarang) {
                $('#deskripsi_div').removeClass('d-none');
            } else {
                $('#deskripsi_div').addClass('d-none');
            }

            if (gambarBarang) {
                // Jika gambarBarang ada, tampilkan elemen img dan label
                $("#gambar_barang, #label_barang").removeClass('d-none');
            } else {
                // Jika gambarBarang tidak ada, sembunyikan elemen img dan label
                $("#gambar_barang, #label_barang").addClass('d-none');
            }

            let stok = jumlahBarang;
            let submitBtn = document.getElementById('submitBtn');

            if (stok === 0) {
                submitBtn.disabled = true;
            } else {
                submitBtn.disabled = false;
            }
        }
    </script>
@endpush
