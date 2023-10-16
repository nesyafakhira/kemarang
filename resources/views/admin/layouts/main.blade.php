<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Logik | Responsive Bootstrap 5 Admin Dashboard Template</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/admin/images/favicon.ico') }}" />

    <!-- Library / Plugin Css Build -->
    <link rel="stylesheet" href="{{ asset('assets/admin/css/libs.min.css') }}">

    <!-- Custom Css -->
    <link rel="stylesheet" href="{{ asset('assets/admin/css/logik.css?v=1.0.0') }}">
</head>

<body class="  ">
    <!-- loader Start -->
    <div id="loading">
        <div class="loader simple-loader">
            <div class="loader-body"></div>
        </div>
    </div>
    <!-- loader END -->
    @include('admin.layouts.sidebar')
    <main class="main-content">
        @include('admin.layouts.header')

        @yield('content')

        @include('admin.layouts.footer')
        

    </main>
    <!-- Wrapper End-->
    <!-- offcanvas start -->

    <!-- Backend Bundle JavaScript -->
    <script src="{{ asset('assets/admin/js/libs.min.js') }}"></script>

    <!-- Dashboard Charts JavaScript -->
    <script src="{{ asset('assets/admin/js/charts/dashboard.js') }}"></script>
    <script src="{{ asset('assets/admin/js/charts/apexcharts.js') }}"></script>

    <!-- fslightbox JavaScript -->
    <script src="{{ asset('assets/admin/js/fslightbox.js') }}"></script>

    <!-- app JavaScript -->
    <script src="{{ asset('assets/admin/js/app.js') }}"></script>


</body>

</html>
