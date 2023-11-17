@extends('admin.layouts.main')

@section('title')
    Kemarang | cetak Barang
@endsection

@section('content')
    <div class="conatiner-fluid content-inner mt-5 py-0">
        <div>
            <div class="row">


                <div class="card-body table-responsive">
                    <form action="{{ route('filter.tanggal') }}" method="post">
                        @csrf 
                        <div class="input-group input-group-outline mb-3">
                            <label for="label">Tanggal awal</label> <br>
                            <div>
                                <input type="date" name="tglawal" id="tglawal" class="form-control">

                            </div>
                        </div>
                        <div class="input-group input-group-outline mb-3">
                            <label for="label">Tanggal akhir</label>
                            <div>
                                <input type="date" name="tglakhir" id="tglakhir" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-warning"> Cari</button>
                    </form>
                    {{-- <a href="" onclick="this.href='cetaktanggal/'+ document.getElementById('tglawal').value + '/' + document.getElementById('tglakhir').value"  class="btn bg-gradient-success">Cari</a> --}}

                </div><br>


                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">
                            Barang List
                        </h4>
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table" id="datatable">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nama Barang</th>
                                    <th>Jumlah Unit</th>
                                    <th>Satuan</th>
                                    <th>Harga Masuk</th>
                                    <th>Jumlah Tanpa PPN</th>
                                    <th>PPN</th>
                                    <th>Jumlah dengan PPN</th>
                                    <th>Time</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($cetaktanggal  as $barang)
                                    <tr>
                                        <td>{{ $barang->id }}</td>
                                        <td>{{ $barang->nama_barang }}</td>
                                        <td>{{ $barang->jumlah_unit }}</td>
                                        <td>{{ $barang->satuan }}</td>
                                        <td>Rp. {{ $barang->harga_satuan }}</td>
                                        <td>Rp. {{ $barang->total_harga_tanpa_ppn }}</td>
                                        <td>Rp. {{ $barang->ppn }}</td>
                                        <td>Rp. {{ $barang->total_harga_ppn }}</td>
                                        <td>{{ $barang->created_at }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@push('scripts')
    <script>
        $(function() {
            $("#datatable").DataTable({
                dom: "Bfltp"
            });
        })
    </script>
@endpush
