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
                                <input type="date" name="tglawal" class="form-control" id="tglawal"
                                    placeholder="name@example.com">
                            </div>
                            <div class="mb-3 col-md-2">
                                <label for="tglakhir" class="form-label">Tanggal Akhir</label>
                                <input type="date" name="tglakhir" class="form-control" id="tglakhir"
                                    placeholder="name@example.com">
                            </div>

                            <button type="submit" class="btn btn-primary mt-3"> Cari</button>
                        </form>
                    </div>

                </div>


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
    <script>
        $(function() {
            $("#datatable").DataTable({
                dom: "Bfltp"
            });
        })
    </script>
@endpush
