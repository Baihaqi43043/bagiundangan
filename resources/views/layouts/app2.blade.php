<<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <title>DASHMIN - Bootstrap Admin Template</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">

        <!-- Icon Font Stylesheet -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>

        <!-- Libraries Stylesheet -->
        <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
        <link href="{{ asset('lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet">
        <!-- Customized Bootstrap Stylesheet -->
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    </head>
    @stack('link')

    @stack('custom-style')
    <body>
        <div id="app">
            <main class="py-4">
                <!-- Sidebar Start -->
                <div class="sidebar pe-4 pb-3">
                    <nav class="navbar bg-light navbar-light">
                        <a href="index.html" class="navbar-brand mx-4 mb-3">
                            <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>Bagiundangan</h3>
                        </a>
                        <div class="d-flex align-items-center ms-4 mb-4">
                            <div class="position-relative">
                                <img class="rounded-circle" src="{{ asset('img/user.jpg') }}" alt=""
                                    style="width: 40px; height: 40px;">
                                <div
                                    class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1">
                                </div>
                            </div>
                            <div class="ms-3">
                                <h6 class="mb-0">Jhon Doe</h6>
                                <span>Admin</span>
                            </div>
                        </div>
                        <div class="navbar-nav w-100">
                            <a href="{{url('/admin')}}" class="nav-item nav-link @yield('dass')"><i
                                    class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                            <a href="{{url('admin/produk')}}" class="nav-item nav-link @yield('produk')"><i class="fa fa-th me-2"></i>Produk</a>
                            <a href="form.html" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Forms</a>
                            <a href="table.html" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Tables</a>
                            <a href="chart.html" class="nav-item nav-link"><i
                                    class="fa fa-chart-bar me-2"></i>Charts</a>
                        </div>
                    </nav>
                </div>
                <!-- Sidebar End -->
                @yield('content')
            </main>
        </div>
        @stack('custom-script')

        @stack('link-script')
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('lib/chart/chart.min.js') }}"></script>
        <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
        <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
        <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('lib/tempusdominus/js/moment.min.js') }}"></script>
        <script src="{{ asset('lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
        <script src="{{ asset('tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>

    </html>
