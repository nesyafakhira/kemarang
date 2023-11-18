<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
        @yield('title')
    </title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/img/logo.png') }}" />

    <!-- Library / Plugin Css Build -->
    <link rel="stylesheet" href="{{ asset('assets/admin/css/libs.min.css') }}">

    <!-- Custom Css -->
    <link rel="stylesheet" href="{{ asset('assets/admin/css/logik.css?v=1.0.0') }}">

    <link href="https://cdn.datatables.net/v/bs5/jq-3.7.0/jszip-3.10.1/dt-1.13.7/af-2.6.0/b-2.4.2/b-colvis-2.4.2/b-html5-2.4.2/b-print-2.4.2/r-2.5.0/datatables.min.css" rel="stylesheet">


    {{-- Sweetalert 2 --}}
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <link rel="stylesheet" href="{{ asset('/assets/data-table/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/data-table/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/data-table/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
    
</head>

<body class="">
    <!-- loader Start -->
    <div id="loading">
        <div class="loader simple-loader">
            <div class="loader-body"></div>
        </div>
    </div>

    @include('sweetalert::alert')

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



@stack('scripts')

</body>

</html>
