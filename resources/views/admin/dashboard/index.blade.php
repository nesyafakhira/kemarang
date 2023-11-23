@extends('admin.layouts.main')

@section('title')
    Kemarang | Dashboard
@endsection

@section('content')
    <div class="conatiner-fluid content-inner mt-5 py-0">
        <div class="row">
            <div class="d-flex align-items-center justify-content-between flex-wrap mb-4">
                <div class="d-flex align-items-center">
                    <h4>Overview</h4>
                </div>
            </div>
            <div class="col-md-12 col-lg-12">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Request</h5>
                            </div>
                            <div class="card-body">
                                
                                <small>{{ $req }}</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection