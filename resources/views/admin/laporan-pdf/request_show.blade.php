<div class="conatiner-fluid content-inner mt-5 py-0">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <div class="header-title">
                    <h2 class="card-title" style="text-align: center">Detail Request</h2>
                </div>
            </div>
            <div class="card-body">
                <div class="mt-2">
                    <h4 class="mb-1">Nama Barang</h4>
                    <p>{{ $request->nama_barang }}</p>
                </div>
                <div class="mt-2">
                    <h4 class="mb-1">Gambar Barang</h4>
                    <img src="{{ asset($request->barang->gambar_barang) }}" alt="Gambar barang" width="25%">
                </div>
                <div class="mt-2">
                    <h4 class="mb-1">Deskripsi Barang</h4>
                    <p>{{ $request->barang->deskripsi }}</p>
                </div>
                <div class="mt-2">
                    <h4 class="mb-1">Jumlah Unit</h4>
                    <p>{{ $request->jumlah_unit }} {{ $request->barang->satuan }}</p>
                </div>
                <div class="mt-2">
                    <h4 class="mb-1">Satuan</h4>
                    <p>{{ $request->barang->satuan }}</p>
                </div>
                <div class="mt-2">
                    <h4 class="mb-1">Status</h4>
                    @if ($request->status == 'menunggu')
                        <span class="badge bg-primary">{{ $request->status }}</span>
                    @elseif ($request->status == 'terima')
                        <span class="badge bg-success mb-2">{{ $request->status }}</span>
                        @if ($request->gambar_request)
                            <div>
                                <img src="{{ asset($request->gambar_request) }}" alt="Bukti pengambilan" width="25%">

                            </div>
                        @endif
                    @else
                        <span class="badge bg-danger">{{ $request->status }}</span>
                    @endif
                </div>

            </div>
        </div>
    </div>
