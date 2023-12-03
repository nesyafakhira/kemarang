@extends('admin.layouts.main')

@section('title')
    Kemarang | List Laporan
@endsection

@section('content')
    <div class="conatiner-fluid content-inner mt-5 py-0">
        <div>
            <div class="row">


                <div class="card ">
                    <div class="card-header">
                        <h4 class="card-title">
                            Lihat Berdasarkan Tanggal
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('laporan.index') }}" method="post">
                            @csrf
                            <div class="mb-3 col-md-2">
                                <label for="tglawal" class="form-label">Tanggal Awal</label>
                                <input type="date" value="{{ old('tglawal') }}" name="tglawal" class="form-control" id="tglawal"
                                    placeholder="name@example.com">
                            </div>
                            <div class="mb-3 col-md-2">
                                <label for="tglakhir" class="form-label">Tanggal Akhir</label>
                                <input type="date" value="{{ old('tglakhir') }}" name="tglakhir" class="form-control" id="tglakhir"
                                    placeholder="name@example.com">
                            </div>

                            <button type="submit" class="btn btn-primary mt-3"> Cari</button>
                        </form>
                    </div>

                </div>


                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">
                            Stok List (Log)
                        </h4>
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table" id="datatable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Barang</th>
                                    <th>Stok Awal</th>
                                    <th>Stok Keluar</th>
                                    <th>Stok Akhir</th>
                                    <th>Tanggal</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($stoks as $stok)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $stok->nama_stok }}</td>
                                        <td>{{ $stok->stok_awal }}</td>
                                        <td>{{ $stok->stok_keluar }}</td>
                                        <td>{{ $stok->stok_akhir }}</td>
                                        <td>{{ $stok->created_at->formatLocalized('%d %B %Y') }}</td>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
<script
        src="https://cdn.datatables.net/v/bs5/jq-3.7.0/jszip-3.10.1/dt-1.13.8/af-2.6.0/b-2.4.2/b-colvis-2.4.2/b-html5-2.4.2/b-print-2.4.2/r-2.5.0/datatables.min.js">
    </script>
    <script>
        $(function() {
            $("#datatable").DataTable({
                dom: "Bfltp"
            });
        })
    </script>
@endpush
