@extends('admin.layouts.main')

@section('title')
    Kemarang | Show Logging
@endsection

@section('content')
    <div class="conatiner-fluid content-inner mt-5 py-0">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="header-title">
                            <h4 class="card-title">Detail Activity</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <p>Lorem ipsum dolor sit amet, contur adipiscing elit.</p>
                        <div class="mb-1">Email: <a href="{{ url('#') }}" class="ms-3">nikjone@demoo.com</a>
                        </div>
                        <div class="mb-1">Phone: <a href="{{ url('#') }}" class="ms-3">001 2351 256 12</a>
                        </div>
                        <div>Location: <span class="ms-3">USA</span></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="offcanvas offcanvas-bottom share-offcanvas" tabindex="-1" id="share-btn"
            aria-labelledby="shareBottomLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="shareBottomLabel">Share</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            <div class="offcanvas-body small">
                <div class="d-flex flex-wrap align-items-center">
                    <div class="text-center me-3 mb-3">
                        <img src="{{ asset('assets/admin/images/brands/08.png') }}"
                            class="img-fluid rounded mb-2" alt="">
                        <h6>Facebook</h6>
                    </div>
                    <div class="text-center me-3 mb-3">
                        <img src="{{ asset('assets/admin/images/brands/09.png') }}"
                            class="img-fluid rounded mb-2" alt="">
                        <h6>Twitter</h6>
                    </div>
                    <div class="text-center me-3 mb-3">
                        <img src="{{ asset('assets/admin/images/brands/10.png') }}"
                            class="img-fluid rounded mb-2" alt="">
                        <h6>Instagram</h6>
                    </div>
                    <div class="text-center me-3 mb-3">
                        <img src="{{ asset('assets/admin/images/brands/11.png') }}"
                            class="img-fluid rounded mb-2" alt="">
                        <h6>Google Plus</h6>
                    </div>
                    <div class="text-center me-3 mb-3">
                        <img src="{{ asset('assets/admin/images/brands/13.png') }}"
                            class="img-fluid rounded mb-2" alt="">
                        <h6>In</h6>
                    </div>
                    <div class="text-center me-3 mb-3">
                        <img src="{{ asset('assets/admin/images/brands/12.png') }}"
                            class="img-fluid rounded mb-2" alt="">
                        <h6>YouTube</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
