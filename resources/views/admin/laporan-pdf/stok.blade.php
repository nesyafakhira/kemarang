<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report Stok</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
  <h3 >Stok List</h3>
</hr>
<table style="width:100%">        
    <thead>
        <tr>
        
            <td bgcolor="orange" width="5%">No</td> 
            <td bgcolor="orange">Nama Barang</td>
            <td bgcolor="orange">Stok Masuk</td>
            <td bgcolor="orange">Stok Keluar</td>
            <td bgcolor="orange">Stok Akhir</td>
            <td bgcolor="orange">Tanggal</td>
        </tr>
    </thead>
    <tbody>
        @foreach($stoks as $stok)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $stok->nama_barang }}</td>
                <td>{{ $stok->stok_awal }}</td>
                <td>{{ $stok->stok_keluar }}</td>
                <td>{{ $stok->stok_akhir }}</td>
                <td>{{ $stok->created_at->formatLocalized('%d %B %Y') }}</td>
            </tr>
        @endforeach
    </tbody>
</table>


<table class="table mt-3">
    <tr>
        <td>
            <p align="left">
                <span>Kepala SMKN 46 Jakarta</span>
                <br>
                <br>
                <br>
                <br>
                <span>{{ $kepsek->name }}</span><br>
                <span>NIP. {{ $kepsek->nip_nikki }}</span>
            </p>
        </td>

        <td>
            <p align="right">
                <span>{{ $date->formatLocalized('%d %B %Y') }}</span> <br>
                <span>
                    @if (auth()->user()->hasRole('staff'))
                        Staff
                    @else
                        Admin
                    @endif
                </span>
                <br>
                <br>
                <br>
                <br>
                <span>{{ auth()->user()->name }}</span><br>
                <span>NIP. {{ auth()->user()->nip_nikki }}</span>
            </p>
        </td>
    </tr>
</table>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>