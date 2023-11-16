<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Kemarang</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset("/assets/img/logooo.png") }}" rel="icon">
  <link href="{{ asset("/assets/img/apple-touch-icon.png") }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('/assets/css/style.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: FlexStart
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top mt-4">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="{{ url('#') }}" class="logo d-flex align-items-center">
                <img src="{{ asset('/assets/img/logooo.png') }}" alt="">
                <span>Kemarang</span>
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="{{ url('#hero') }}">Beranda</a></li>
                    <li><a class="nav-link scrollto" href="{{ url('#about') }}">Apa Itu Kemarang?</a></li>
                    <li><a class="nav-link scrollto" href="{{ url('#services') }}">Alasan Menggunakan Kemarang</a></li>
                    <li><a class="nav-link scrollto" href="{{ url('#team') }}">Tim Kemarang</a></li>

                    @guest
                    <div class="btn-group align-items-center justify-center-content flex-wrap" style="padding-right: 5px">
                        <div class="dropdown">
                            <button class="getstarted scrollto dropdown-toggle" type="button" id="dropdownMenuButtonLG" data-bs-toggle="dropdown" aria-expanded="false">Opsi Lainnya</button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButtonLG">
                                <li><h6 class="dropdown-header">Masuk</h6></li>
                                <li><a class="dropdown-item" href="{{ route('register') }}">Daftar</a></li>
                                <li><h6 class="dropdown-header">Keluar</h6></li>
                                <form action="{{ route('logout') }}" method="post">
                                    @csrf
                                    <li><button class="dropdown-item" type="submit">Log Out</button></li>
                                </form>
                            </ul> 
                        </div>

                        

                            @else

                            <div class="dropdown">
                                <button class="getstarted scrollto dropdown-toggle" type="button" id="dropdownMenuButtonLG" data-bs-toggle="dropdown" aria-expanded="false">{{ auth()->user()->name }}</button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButtonLG">
                                    <li><h6 class="dropdown-header">Keluar</h6></li>
                                    <form action="{{ route('logout') }}" method="post">
                                        @csrf
                                        <li><button class="dropdown-item" type="submit">Log Out</button></li>
                                    </form>
                                </ul> 
                            </div>
                                
                            @endguest
                    </div>
                    {{-- <li><a class="getstarted scrollto" data-bs-toggle="dropdown" href="{{ url('#') }}">Opsi Lainnya</a>
                        
                            
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButtonLG">
                                <li><h6 class="dropdown-header">Dropdown header</h6></li>
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Separated link</a></li>
                            </ul>
                   
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButtonLG">
                                <li><h6 class="dropdown-header">Masuk</h6></li>
                                <li><a class="dropdown-item" href="{{ route('register') }}">Daftar</a></li>
                                <li><hr class="dropdown-divider">Keluar</li>
                                <form action="{{ route('logout') }}" method="post">
                                    @csrf
                                    <li><button class="dropdown-item" type="submit">Log Out</button></li>
    
                                </form>
                            </ul>
                        </li> --}}
                    </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center">
                    <h1 data-aos="fade-up">Sederhana, Cepat, dan Efisien.</h1>
                    <h2 data-aos="fade-up" data-aos-delay="400">Kemarang Dirancang untuk Mengelola dan Memonitor Setiap
                        Barang yang Keluar dan Masuk secara Cepat, Sederhana, dan Efisien.</h2>
                </div>
                <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                    <img src="{{ asset('/assets/img/hero.png') }}" class="img-fluid" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <main>
        <section id="table">
            <div class="table-responsive container">
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
                            <th>Time</th>
                            @role('staff')
                            <th style="min-width: 100px">Action</th>
                            @endrole
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
                            <td><span class="badge bg-primary">{{ $request->status }}</span></td> 
                            <td>{{ $request->created_at->diffForHumans() }}</td> 
                            @role('staff')
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
                                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M9.8766 11.886C12.3996 11.886 14.4446 9.841 14.4446 7.318C14.4446 4.795 12.3996 2.75 9.8766 2.75C7.3546 2.75 5.3096 4.795 5.3096 7.318C5.3006 9.832 7.3306 11.877 9.8456 11.886H9.8766Z"
                                                    stroke="currentColor" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M19.2036 8.66919V12.6792" stroke="currentColor"
                                                    stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                                <path d="M21.2497 10.6741H17.1597" stroke="currentColor"
                                                    stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                            </svg>
                                        </span>
                                    </a>
                                    <a class="btn btn-sm btn-icon btn-warning" data-toggle="tooltip"
                                        data-placement="top" title="" data-original-title="Edit"
                                        href="{{ route('request.edit', $request->id) }}">
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
                                                <path d="M15.1655 4.60254L19.7315 9.16854"
                                                    stroke="currentColor" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                        </span>
                                    </a>
                                    <form action="{{ route('request.destroy', $request->id) }}" method="post" onsubmit="return confirm('Yakin hapus ?')">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-sm btn-icon btn-danger" data-toggle="tooltip"
                                    data-placement="top" title="" data-original-title="Delete"
                                    type="submit">
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
                                        </form>
                                </div>
                            </td>
                            @endrole
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </section>
    </main>

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-5 col-md-12 footer-info">
                        <a href="{{ url('#') }}" class="logo d-flex align-items-center">
                            <img src="{{ asset('/assets/img/logooo.png') }}" alt="">
                            <span>Kemarang</span>
                        </a>
                        <p>Kemarang adalah solusi inovatif yang dirancang khusus untuk membantu sekolah dalam mengelola
                            sistem keluar masuk barang dengan lebih efisien.
                            Dengan komitmen untuk menyederhanakan proses dan memberikan pengalaman yang lebih baik di
                            lingkungan pendidikan, KEMARANG hadir sebagai mitra terpercaya untuk sekolah.
                        </p>
                        <div class="social-links mt-3">
                            <a href="{{ url('#') }}" class="twitter"><i class="bi bi-twitter"></i></a>
                            <a href="{{ url('#') }}" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="{{ url('#') }}" class="instagram"><i class="bi bi-instagram"></i></a>
                            <a href="{{ url('#') }}" class="linkedin"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-2 col-6 footer-links">
                        <h4>Link yang Tertaut</h4>
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <a href="{{ url('/') }}">Beranda</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="{{ route('request.create') }}">Request</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="{{ url('#services') }}">Alasan
                                    Menggunakan Kemarang</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="{{ route('login') }}">Masuk</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="{{ route('register') }}">Daftar</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-6 footer-links">
                        <h4>Alasan Menggunakan Kemarang</h4>
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <a href="{{ url('#services') }}">Didesain Khusus
                                    untuk Sekolah</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="{{ url('#services') }}">Optimisasi
                                    Stok</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="{{ url('#services') }}">Transparansi dan
                                    Akurasi</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="{{ url('#services') }}">Mudah
                                    digunakan</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="{{ url('#services') }}">Efisiensi
                                    Biaya</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="{{ url('#services') }}">Penghematan
                                    Biaya</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                        <h4>Hubungi Kami</h4>
                        <p>
                            SMKN 46 Jakarta <br>
                            Jl. Cipinang Pulo No.19, RT.7/RW.14, Cipinang Besar Utara, Jatinegara<br>
                            Jakarta TImur, DKI Jakarta, 13410 <br><br>
                            <strong>Telepon:</strong> (021) 8195127<br>
                            <strong>Email:</strong> Ispempatenamjkt@gmail.com<br>
                        </p>

                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>Kemarang-2023</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flexstart-bootstrap-startup-template/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="{{ url('#') }}" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('/assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('/assets/js/main.js') }}"></script>

    <!-- app JavaScript -->
    <script src="{{ asset('assets/admin/js/app.js') }}"></script>

</body>

</html>

