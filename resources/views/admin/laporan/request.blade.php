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
                        <form action="{{ route('laporan.request') }}" method="post">
                            @csrf
                            <div class="mb-3 col-md-2">
                                <label for="tglawal" class="form-label">Tanggal Awal</label>
                                <input type="date" value="{{ old('tglawal') }}" name="tglawal" class="form-control"
                                    id="tglawal" placeholder="name@example.com">
                            </div>
                            <div class="mb-3 col-md-2">
                                <label for="tglakhir" class="form-label">Tanggal Akhir</label>
                                <input type="date" value="{{ old('tglakhir') }}" name="tglakhir" class="form-control"
                                    id="tglakhir" placeholder="name@example.com">
                            </div>

                            <button type="submit" class="btn btn-primary mt-3"> Cari</button>
                        </form>
                    </div>

                </div>


                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">
                            Request List (Log)
                        </h4>
                    </div>
                    <div class="card-body table-responsive">
                        <button class="btn btn-secondary" onclick="printPDF()">PRINT</button>
                        <table id="datatable" class="table table-striped" role="grid">
                            <thead>
                                <tr class="ligth">
                                    <th>No</th>
                                    <th>Nama Guru</th>
                                    <th>Nama Barang</th>
                                    <th>Jumlah Unit</th>
                                    <th>Status</th>
                                    <th>Tanggal</th>


                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($reqs as $req)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $req->guru->name }}</td>
                                        <td>{{ $req->nama_barang }}</td>
                                        <td>{{ $req->jumlah_unit }}</td>
                                        @if ($req->status == 'menunggu')
                                            <td><span class="badge bg-primary">{{ $req->status }}</span></td>
                                        @elseif ($req->status == 'terima')
                                            <td><span class="badge bg-success">{{ $req->status }}</span></td>
                                        @else
                                            <td><span class="badge bg-danger">{{ $req->status }}</span></td>
                                        @endif
                                        <td>{{ $req->created_at->formatLocalized('%d %B %Y') }}</td>


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
    <script
        src="https://cdn.datatables.net/v/bs5/jq-3.7.0/jszip-3.10.1/dt-1.13.8/af-2.6.0/b-2.4.2/b-colvis-2.4.2/b-html5-2.4.2/b-print-2.4.2/r-2.5.0/datatables.min.js">
    </script>
    <script>
        $(function() {
            $("#datatable").DataTable({
                dom: "fltp"
            });
        })
    </script>

    <script>
        function printPDF() {
            // Ganti URL dengan URL sesuai dengan rute generatePDF di Laravel
            let pdfUrl = '/dashboard/laporan/request-pdf';

            // Buka PDF dalam tab baru
            window.open(pdfUrl, '_blank');
        }
    </script>
@endpush
