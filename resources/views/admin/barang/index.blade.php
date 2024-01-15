@extends('admin.layouts.main')

@section('title')
    Kemarang | List Barang
@endsection

@section('content')
    <div class="conatiner-fluid content-inner mt-5 py-0">
        <div>
            <div class="row">
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
                                    <th>Jumlah Unit</th>
                                    <th>Satuan</th>
                                    <th>Harga Masuk</th>
                                    <th>Jumlah Tanpa PPN</th>
                                    <th>PPN</th>
                                    <th>Jumlah dengan PPN</th>
                                    <th>Tanggal</th>
                                    <th style="min-width: 100px">Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($barangs as $barang)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $barang->nama_barang }}</td>
                                        <td>{{ $barang->jumlah_unit }}</td>
                                        <td>{{ $barang->satuan }}</td>
                                        <td>Rp. {{ number_format($barang->harga_satuan, 0, ',', '.') }}</td>
                                        <td>Rp. {{ number_format($barang->total_harga_tanpa_ppn, 0, ',', '.') }}</td>
                                        <td>Rp. {{ number_format($barang->ppn, 0, ',', '.') }}</td>
                                        <td>Rp. {{ number_format($barang->total_harga_ppn, 0, ',', '.') }}</td>
                                        <td>{{ $barang->created_at->formatLocalized('%d %B %Y') }}</td>
                                        <td>
                                            <form action="{{ route('barang.destroy', $barang->id) }}" method="post">
                                                @csrf
                                                @method('delete')
    
                                                <div class="flex align-items-center list-user-action">
                                                    <a class="btn btn-sm btn-icon btn-info" data-toggle="tooltip"
                                                        data-placement="top" title="" data-original-title="Add"
                                                        href="{{ route('barang.show', [$barang->id]) }}">
                                                        <span class="btn-inner">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24">
                                                                <g fill="none" fill-rule="evenodd">
                                                                    <path
                                                                        d="M24 0v24H0V0h24ZM12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035c-.01-.004-.019-.001-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427c-.002-.01-.009-.017-.017-.018Zm.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093c.012.004.023 0 .029-.008l.004-.014l-.034-.614c-.003-.012-.01-.02-.02-.022Zm-.715.002a.023.023 0 0 0-.027.006l-.006.014l-.034.614c0 .012.007.02.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01l-.184-.092Z" />
                                                                    <path fill="currentColor"
                                                                        d="M12 4C9.213 4 6.737 5.257 4.974 6.813C4.09 7.594 3.36 8.47 2.846 9.344C2.34 10.201 2 11.13 2 12c0 .87.34 1.799.846 2.656c.514.873 1.243 1.75 2.128 2.531C6.737 18.743 9.214 20 12 20c2.787 0 5.263-1.257 7.026-2.813c.885-.781 1.614-1.658 2.128-2.531C21.66 13.799 22 12.87 22 12c0-.87-.34-1.799-.846-2.656c-.514-.873-1.243-1.75-2.128-2.531C17.263 5.257 14.786 4 12 4Zm2 8c.36 0 .697-.095.989-.261A3 3 0 1 1 12.26 9.01A2 2 0 0 0 14 12Z" />
                                                                </g>
                                                            </svg>
                                                        </span>
                                                    </a>
                                                    <a class="btn btn-sm btn-icon btn-warning" data-toggle="tooltip"
                                                        data-placement="top" title="" data-original-title="Edit"
                                                        href="{{ route('barang.edit', [$barang->id]) }}">
                                                        <span class="btn-inner">
                                                            <svg width="20" viewBox="0 0 24 24" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M11.4925 2.78906H7.75349C4.67849 2.78906 2.75049 4.96606 2.75049 8.04806V16.3621C2.75049 19.4441 4.66949 21.6211 7.75349 21.6211H16.5775C19.6625 21.6211 21.5815 19.4441 21.5815 16.3621V12.3341"
                                                                    stroke="currentColor" stroke-width="1.5"
                                                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M8.82812 10.921L16.3011 3.44799C17.2321 2.51799 18.7411 2.51799 19.6721 3.44799L20.8891 4.66499C21.8201 5.59599 21.8201 7.10599 20.8891 8.03599L13.3801 15.545C12.9731 15.952 12.4211 16.181 11.8451 16.181H8.09912L8.19312 12.401C8.20712 11.845 8.43412 11.315 8.82812 10.921Z"
                                                                    stroke="currentColor" stroke-width="1.5"
                                                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                                                <path d="M15.1655 4.60254L19.7315 9.16854" stroke="currentColor"
                                                                    stroke-width="1.5" stroke-linecap="round"
                                                                    stroke-linejoin="round"></path>
                                                            </svg>
                                                        </span>
                                                    </a>
    
                                                    {{-- <a href="{{ route('barang.destroy', $barang->id) }}" class="btn btn-sm btn-danger"
                                                        data-confirm-delete="true">
                                                        Delete
                                                    </a> --}}
    
    
                                                    <button class="btn btn-sm btn-icon btn-danger confirm-delete"
                                                        data-toggle="tooltip" data-placement="top" title=""
                                                        data-original-title="Delete">
                                                        <span class="btn-inner">
                                                            <svg width="20" viewBox="0 0 24 24" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg" stroke="currentColor">
                                                                <path
                                                                    d="M19.3248 9.46826C19.3248 9.46826 18.7818 16.2033 18.4668 19.0403C18.3168 20.3953 17.4798 21.1893 16.1088 21.2143C13.4998 21.2613 10.8878 21.2643 8.27979 21.2093C6.96079 21.1823 6.13779 20.3783 5.99079 19.0473C5.67379 16.1853 5.13379 9.46826 5.13379 9.46826"
                                                                    stroke="currentColor" stroke-width="1.5"
                                                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                                                <path d="M20.708 6.23975H3.75" stroke="currentColor"
                                                                    stroke-width="1.5" stroke-linecap="round"
                                                                    stroke-linejoin="round"></path>
                                                                <path
                                                                    d="M17.4406 6.23973C16.6556 6.23973 15.9796 5.68473 15.8256 4.91573L15.5826 3.69973C15.4326 3.13873 14.9246 2.75073 14.3456 2.75073H10.1126C9.53358 2.75073 9.02558 3.13873 8.87558 3.69973L8.63258 4.91573C8.47858 5.68473 7.80258 6.23973 7.01758 6.23973"
                                                                    stroke="currentColor" stroke-width="1.5"
                                                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                                            </svg>
                                                        </span>
                                                    </button>
                                                </div>
                                            </form>

                                        </td>
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
