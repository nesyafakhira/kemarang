<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Kemarang</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('/assets/img/logooo.png') }}" rel="icon">
    <link href="{{ asset('/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />


    <!-- Template Main CSS File -->
    <link href="{{ asset('/assets/css/style.css') }}" rel="stylesheet">

    <link
        href="https://cdn.datatables.net/v/bs5/jq-3.7.0/jszip-3.10.1/dt-1.13.8/af-2.6.0/b-2.4.2/b-colvis-2.4.2/b-html5-2.4.2/b-print-2.4.2/r-2.5.0/datatables.min.css"
        rel="stylesheet">

    {{-- Sweetalert 2 --}}
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>



    <!-- =======================================================
  * Template Name: FlexStart
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- loader Start -->
    <div id="loading">
        <div class="loader simple-loader">
            <div class="loader-body"></div>
        </div>
    </div>
    <!-- loader END -->
    @include('sweetalert::alert')

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between mt-2">

            <a href="{{ url('#') }}" class="logo d-flex align-items-center">
                <img src="{{ asset('/assets/img/logooo.png') }}" alt="">
                <span>Kemarang</span>
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto" href="{{ url('/') }}">Beranda</a></li>

                    @guest
                        <li class="nav-item dropdown">
                            <a class="getstarted scrollto nav-link dropdown-toggle" href="#" id="navbarDropdown"
                                role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Opsi Lainnya
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li>
                                    <h6 class="dropdown-header">Masuk</h6>
                                </li>
                                <li><a class="dropdown-item" href="{{ route('register') }}">Daftar</a></li>
                                <li>
                                    <h6 class="dropdown-header">Keluar</h6>
                                </li>
                                <form action="{{ route('logout') }}" method="post">
                                    @csrf
                                    <li><button class="dropdown-item" type="submit">Log Out</button></li>
                                </form>
                            </ul>
                        </li>
                    @else
                        <li class="nav-item dropdown">
                            <a class="getstarted scrollto nav-link dropdown-toggle" href="#" id="navbarDropdown"
                                role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{ auth()->user()->name }}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li>
                                    <h6 class="dropdown-header">Keluar</h6>
                                </li>
                                <form action="{{ route('logout') }}" method="post">
                                    @csrf
                                    <li><button class="dropdown-item" type="submit">Log Out</button></li>
                                </form>
                            </ul>
                        </li>
                    @endguest
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
                    <div data-aos="fade-up" data-aos-delay="600">
                        <div class="text-center text-lg-start">
                            <a href="{{ route('content.create') }}"
                                class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                                <span>Request Sekarang!</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                    <img src="{{ asset('/assets/img/hero.png') }}" class="img-fluid" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <main>
        <section id="table">
            <div class="card container">
                <div class="card-body table-responsive">
                    <table id="datatable" class="table table-striped" role="grid">
                        <thead>
                            <tr class="ligth">
                                <th>No</th>
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
                                        <a href="{{ route('content.edit', $request->id) }}"
                                            class="btn btn-warning">Edit</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

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
                            <li><i class="bi bi-chevron-right"></i> <a href="{{ url('#services') }}">Keunggulan Kemarang</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="{{ route('login') }}">Masuk</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="{{ route('register') }}">Daftar</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-6 footer-links">
                        <h4>Keunggulan Kemarang</h4>
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
        <!-- Backend Bundle JavaScript -->
        <script src="{{ asset('assets/admin/js/libs.min.js') }}"></script>

        <!-- Dashboard Charts JavaScript -->
        <script src="{{ asset('assets/admin/js/charts/dashboard.js') }}"></script>
        <script src="{{ asset('assets/admin/js/charts/apexcharts.js') }}"></script>
    
        <!-- fslightbox JavaScript -->
        <script src="{{ asset('assets/admin/js/fslightbox.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
    <script type="text/javascript">
        $('.confirm-delete').click(function(event) {
            let form = $(this).closest("form");
            event.preventDefault();
            swal({
                    title: `Hapus Data?`,
                    text: "Data yang terhapus tidak dapat dikembalikan lagi",
                    icon: "warning",

                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        form.submit();
                    }
                });
        });
    </script>
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
</body>

</html>
