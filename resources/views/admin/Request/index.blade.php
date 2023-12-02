@extends('admin.layouts.main')

@section('title')
    Kemarang | Request List
@endsection

@section('content')
    <div class="conatiner-fluid content-inner mt-5 py-0">
        <div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <div class="header-title">
                                <h4 class="card-title">Request List</h4>
                            </div>
                        </div>
                        <div class="card-body px-0">
                            <div class="table-responsive">
                                <table id="user-list-table" class="table table-striped" role="grid"
                                    data-toggle="data-table">
                                    <thead>
                                        <tr class="ligth">
                                            <th>No</th>
                                            <th>Id Guru</th>
                                            <th>Nama Guru</th>
                                            <th>Id Barang</th>
                                            <th>Nama Barang</th>
                                            <th>Jumlah Unit</th>
                                            <th>Status</th>
                                            <th>Tanggal</th>
                                            <th style="min-width: 100px">Action</th>


                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($requests as $request)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $request->guru_id }}</td>
                                                <td>{{ $request->guru->name }}</td>
                                                <td>{{ $request->barang_id }}</td>
                                                <td>{{ $request->nama_barang }}</td>
                                                <td>{{ $request->jumlah_unit }}</td>
                                                @if ($request->status == 'menunggu')
                                                <td><span class="badge bg-primary">{{ $request->status }}</span></td>

                                                @elseif ($request->status == 'terima')
                                                <td><span class="badge bg-success">{{ $request->status }}</span></td>

                                                @else
                                                <td><span class="badge bg-danger">{{ $request->status }}</span></td>
                                                @endif
                                                <td>{{ $request->created_at->formatLocalized('%d %B %Y') }}</td>

                                                <td>
                                                    <div class="flex align-items-center list-user-action">
                                                        <a class="btn btn-sm btn-icon btn-success" data-toggle="tooltip"
                                                            data-placement="top" title="" data-original-title="Add"
                                                            href="{{ route('request.show', $request->id) }}">
                                                            <span class="btn-inner">
                                                                <svg width="32" viewBox="0 0 24 24" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                                        d="M9.87651 15.2063C6.03251 15.2063 2.74951 15.7873 2.74951 18.1153C2.74951 20.4433 6.01251 21.0453 9.87651 21.0453C13.7215 21.0453 17.0035 20.4633 17.0035 18.1363C17.0035 15.8093 13.7415 15.2063 9.87651 15.2063Z"
                                                                        stroke="currentColor" stroke-width="1.5"
                                                                        stroke-linecap="round" stroke-linejoin="round">
                                                                    </path>
                                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                                        d="M9.8766 11.886C12.3996 11.886 14.4446 9.841 14.4446 7.318C14.4446 4.795 12.3996 2.75 9.8766 2.75C7.3546 2.75 5.3096 4.795 5.3096 7.318C5.3006 9.832 7.3306 11.877 9.8456 11.886H9.8766Z"
                                                                        stroke="currentColor" stroke-width="1.5"
                                                                        stroke-linecap="round" stroke-linejoin="round">
                                                                    </path>
                                                                    <path d="M19.2036 8.66919V12.6792" stroke="currentColor"
                                                                        stroke-width="1.5" stroke-linecap="round"
                                                                        stroke-linejoin="round"></path>
                                                                    <path d="M21.2497 10.6741H17.1597" stroke="currentColor"
                                                                        stroke-width="1.5" stroke-linecap="round"
                                                                        stroke-linejoin="round"></path>
                                                                </svg>
                                                            </span>
                                                        </a>

                                                        @if (auth()->user()->hasRole('staff||admin') && $request->status == 'menunggu' )
                                                            
                                                            <a class="btn btn-sm btn-icon btn-warning" data-toggle="tooltip"
                                                                data-placement="top" title="" data-original-title="Edit"
                                                                href="{{ route('request.edit', $request->id) }}">
                                                                <span class="btn-inner">
                                                                    <svg width="20" viewBox="0 0 24 24" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M11.4925 2.78906H7.75349C4.67849 2.78906 2.75049 4.96606 2.75049 8.04806V16.3621C2.75049 19.4441 4.66949 21.6211 7.75349 21.6211H16.5775C19.6625 21.6211 21.5815 19.4441 21.5815 16.3621V12.3341"
                                                                            stroke="currentColor" stroke-width="1.5"
                                                                            stroke-linecap="round" stroke-linejoin="round">
                                                                        </path>
                                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                                            d="M8.82812 10.921L16.3011 3.44799C17.2321 2.51799 18.7411 2.51799 19.6721 3.44799L20.8891 4.66499C21.8201 5.59599 21.8201 7.10599 20.8891 8.03599L13.3801 15.545C12.9731 15.952 12.4211 16.181 11.8451 16.181H8.09912L8.19312 12.401C8.20712 11.845 8.43412 11.315 8.82812 10.921Z"
                                                                            stroke="currentColor" stroke-width="1.5"
                                                                            stroke-linecap="round" stroke-linejoin="round">
                                                                        </path>
                                                                        <path d="M15.1655 4.60254L19.7315 9.16854"
                                                                            stroke="currentColor" stroke-width="1.5"
                                                                            stroke-linecap="round" stroke-linejoin="round">
                                                                        </path>
                                                                    </svg>
                                                                </span>
                                                            </a>
                                                        @endif

                                                        
                                                    </div>
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
        </div>
    </div>
@endsection
