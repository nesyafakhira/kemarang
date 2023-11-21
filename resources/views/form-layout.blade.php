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

    <!-- Template Main CSS File -->
    <link href="{{ asset('/assets/css/style.css') }}" rel="stylesheet">


    <style>
        .card-form {
            margin-top: 15vh !important;
            background-color: #012970;
        }

        .card-input {
            min-width: 80%;
        }

        .form-layout {
            width: 100vw;
            height: 100vh !important;
        }

        .btn-form {
            --bs-btn-padding: 0.1rem;
            --bs-btn-color: var(--bs-white);
            --bs-btn-bg: #012970;
            --bs-btn-border-color: #012970;
            --bs-btn-hover-color: #012970;
            --bs-btn-hover-border-color: #012970;
            --bs-btn-focus-shadow-rgb: #012970;
            --bs-btn-active-color: var(--bs-btn-hover-color);
        }

        .header-form {
            position: relative;
            top: 5vh;
        }

        .background {
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
        }

        .background-image {
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            min-width: 50%;
            min-height: 50%;
        }

        

    </style>

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
    <header id="header" class="header header-form">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-center">

            <a href="{{ url('/') }}" class="logo d-flex align-items-center">
                <img src="{{ asset('/assets/img/logooo.png') }}" alt="">
                <span>Kemarang</span>
            </a>
        </div>
    </header><!-- End Header -->

    <main>
        <div class="background position-fixed">
            <img class="background-image position-absolute m-auto" src="{{ asset('assets/img/form-bg-1.jpg') }}"
                alt="background">
        </div>
        <div class="form-layout row justify-content-center">
            @yield('content')
        </div>
    </main>


    @stack('script')
</body>

</html>
