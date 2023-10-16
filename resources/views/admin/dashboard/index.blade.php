@extends('admin.layouts.main')

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
                                <h5>Title</h5>
                            </div>
                            <div class="card-body">
                                <div id="chart-1"></div>
                                <p class="fw-lighter fs-3 mb-0 d-flex align-items-center">12,254<span
                                        class="fw-lighter fs-6 text-success ms-2">+0.5%
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" viewBox="0 0 20 20"
                                            fill="currentcolor">
                                            <path fill-rule="evenodd"
                                                d="M5.293 7.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L6.707 7.707a1 1 0 01-1.414 0z"
                                                clip-rule="evenodd"></path>
                                        </svg></span>
                                </p>
                                <small>Some text here</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Title</h5>
                            </div>
                            <div class="card-body">
                                <div id="chart-2"></div>
                                <p class="fw-lighter fs-3 mb-0 d-flex align-items-center">12,254<span
                                        class="fw-lighter fs-6 text-danger ms-2">+0.5%
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" viewBox="0 0 20 20"
                                            fill="currentcolor">
                                            <path fill-rule="evenodd"
                                                d="M5.293 7.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L6.707 7.707a1 1 0 01-1.414 0z"
                                                clip-rule="evenodd"></path>
                                        </svg></span>
                                </p>
                                <small>Some text here</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Title</h5>
                            </div>
                            <div class="card-body">
                                <div id="chart-3"></div>
                                <p class="fw-lighter fs-3 mb-0 d-flex align-items-center">12,254<span
                                        class="fw-lighter fs-6 text-success ms-2">+0.5%
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                            viewBox="0 0 20 20" fill="currentcolor">
                                            <path fill-rule="evenodd"
                                                d="M5.293 7.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L6.707 7.707a1 1 0 01-1.414 0z"
                                                clip-rule="evenodd"></path>
                                        </svg></span>
                                </p>
                                <small>Some text here</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Title</h5>
                            </div>
                            <div class="card-body">
                                <div id="chart-4"></div>
                                <p class="fw-lighter fs-3 mb-0 d-flex align-items-center">12,254<span
                                        class="fw-lighter fs-6 text-danger ms-2">+0.5%
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                            viewBox="0 0 20 20" fill="currentcolor">
                                            <path fill-rule="evenodd"
                                                d="M5.293 7.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L6.707 7.707a1 1 0 01-1.414 0z"
                                                clip-rule="evenodd"></path>
                                        </svg></span>
                                </p>
                                <small>Some text here</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
