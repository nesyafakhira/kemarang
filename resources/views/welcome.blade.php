<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Kemarang</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('/assets/img/favicon.png') }}" rel="icon">
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
    <header id="header" class="header fixed-top">
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
                        <li><a class="getstarted scrollto" href="{{ route('login') }}">Masuk</a></li>
                        <li><a class="getstarted scrollto" href="{{ route('register') }}">Daftar</a></li>
                    @else
                        @if (auth()->user()->hasRole('guru'))
                            <div class="btn-group">
                                <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    {{ auth()->user()->name }}
                                </button>
                                <div class="dropdown-menu">
                                    <form action="{{ route('logout') }}" method="post">
                                        @csrf
                                        <button class="btn btn-primary" type="submit">Logout</button>
                                    </form>
                                </div>
                            </div>
                        @else
                            <li><a class="getstarted scrollto" href="{{ route('dashboard') }}">Dashboard</a></li>
                        @endif
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
                        @role('guru')
                            <div class="text-center text-lg-start">
                                <a href="{{ url('form-request') }}"
                                    class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                                    <span>Request Sekarang!</span>
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        @endrole
                    </div>
                </div>
                <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                    <img src="{{ asset('/assets/img/hero.png') }}" class="img-fluid" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">
        <!-- ======= About Section ======= -->
        <section id="about" class="about">

            <div class="container" data-aos="fade-up">
                <div class="row gx-0">

                    <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up"
                        data-aos-delay="200">
                        <div class="content">
                            <h3>Tentang Kemarang</h3>
                            <h2>Selamat Datang di Kemarang.</h2>
                            <p>
                                Kemarang adalah solusi inovatif yang dirancang khusus untuk membantu sekolah dalam
                                mengelola sistem keluar masuk barang dengan lebih efisien.
                                Dengan komitmen untuk menyederhanakan proses dan memberikan pengalaman yang lebih baik
                                di lingkungan pendidikan, KEMARANG hadir sebagai mitra terpercaya untuk sekolah.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="100">
                        <img src="{{ asset('/assets/img/about.png') }}" class="img-fluid" alt="">
                    </div>

                </div>
            </div>

        </section><!-- End About Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Alasan</h2>
                    <p>Alasan Memilih Kemarang</p>
                </header>

                <div class="row gy-4">

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-box orange">
                            <i class="ri-discuss-line icon"></i>
                            <h3>Didesain Khusus untuk Sekolah</h3>
                            <p>Kemarang dikembangkan dengan memahami kebutuhan khusus lingkungan sekolah, menjadikannya
                                alat yang sangat cocok dan sesuai dengan kebutuhan pendidikan.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-box blue">
                            <i class="ri-discuss-line icon"></i>
                            <h3>Optimisasi Stok</h3>
                            <p>Dengan Kemarang, sekolah dapat mengelola stok barang dengan lebih baik, mengidentifikasi
                                barang yang sering digunakan, dan mengatur pengadaan lebih efisien.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="service-box green">
                            <i class="ri-discuss-line icon"></i>
                            <h3>Transparansi dan Akurasi</h3>
                            <p>Website ini memungkinkan sekolah untuk mencatat data barang yang keluar atau masuk dengan
                                akurat, menciptakan catatan transparan yang dapat membantu dalam pengambilan keputusan
                                dan pencegahan kehilangan barang.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                        <div class="service-box red">
                            <i class="ri-discuss-line icon"></i>
                            <h3>Mudah Digunakan</h3>
                            <p>Website yang sederhana dan intuitif membuat staf sekolah dapat mulai menggunakan Kemarang
                                tanpa pelatihan yang rumit.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                        <div class="service-box purple">
                            <i class="ri-discuss-line icon"></i>
                            <h3>Efisiensi Biaya</h3>
                            <p>Menggunakan Kemarang dapat membantu sekolah mengurangi pemborosan sumber daya dan
                                menghemat uang dalam manajemen stok.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="700">
                        <div class="service-box pink">
                            <i class="ri-discuss-line icon"></i>
                            <h3>Penghematan Biaya</h3>
                            <p>Dengan manajemen stok yang lebih efisien, sekolah dapat mengurangi biaya pemborosan,
                                seperti pengadaan berlebihan atau kehilangan barang.</p>
                        </div>
                    </div>

                </div>

            </div>

        </section><!-- End Services Section -->

        <!-- ======= Team Section ======= -->
        <section id="team" class="team">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Team</h2>
                    <p>Tim kami yang bekerja sama</p>
                </header>

                <div class="row gy-4">

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up"
                        data-aos-delay="200">
                        <div class="member">
                            <div class="member-img">
                                <img src="{{ asset('/assets/img/team/aziz.jpg') }}" class="img-fluid"
                                    alt="">
                                <div class="social">
                                    <a href="{{ url('https://instagram.com/azizsptyan?igshid=YTQwZjQ0NmI0OA==') }}"><i
                                            class="bi bi-instagram"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Aziz Septyanizar</h4>
                                <p>"Lebih baik gagal dalam orisinalitas daripada berhasil karena meniru."</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up"
                        data-aos-delay="100">
                        <div class="member">
                            <div class="member-img">
                                <img src="{{ asset('/assets/img/team/athar.jpg') }}" class="img-fluid"
                                    alt="">
                                <div class="social">
                                    <a href="{{ url('https://instagram.com/athar_fazli?igshid=YTQwZjQ0NmI0OA==') }}"><i
                                            class="bi bi-instagram"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Athar Fazli Setiaji</h4>
                                <p>"Bermimpilah setinggi-tingginya, jika tidak tercapai setidaknya kau sedang berada
                                    diantara bintang-bintang."</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up"
                        data-aos-delay="400">
                        <div class="member">
                            <div class="member-img">
                                <img src="{{ asset('/assets/img/team/nesya.jpg') }}" class="img-fluid"
                                    alt="">
                                <div class="social">
                                    <a href="{{ url('https://instagram.com/nesvenn?igshid=YTQwZjQ0NmI0OA==') }}"><i
                                            class="bi bi-instagram"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Nesya Fakhira Arianti</h4>
                                <p>"Selalu lakukan yang terbaik, bersiap dengan kemungkinan terburuk."</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up"
                        data-aos-delay="300">
                        <div class="member">
                            <div class="member-img">
                                <img src="{{ asset('/assets/img/team/nazwa.jpg') }}" class="img-fluid"
                                    alt="">
                                <div class="social">
                                    <a href="{{ url('https://instagram.com/zwah1510?igshid=YTQwZjQ0NmI0OA==') }}"><i
                                            class="bi bi-instagram"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Nazwa Nursyakilla Achmad</h4>
                                <p>"Kamu mungkin bisa mengandalkan semua orang, tapi orang yang paling bisa kamu
                                    andalkan adalah dirimu sendiri."</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </section><!-- End Team Section -->

    </main><!-- End #main -->

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
                            <li><i class="bi bi-chevron-right"></i> <a href="{{ url('#hero') }}">Beranda</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="{{ url('#about') }}">Apa itu
                                    Kemarang?</a></li>
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

</body>

</html>
