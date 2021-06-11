<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Urora - Responsive Bootstrap 4 Admin Dashboard</title>
    <meta content="Admin Dashboard" name="description" />
    <meta content="Mannatthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <link rel="shortcut icon" href="{{ asset('backend') }}/assets/images/favicon.ico">

    <!--Morris Chart CSS -->
    @yield('css')

    <link rel="stylesheet" href="{{ asset('backend') }}/assets/plugins/animate/animate.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('backend') }}/assets/css/bootstrap-material-design.min.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('backend') }}/assets/css/icons.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('backend') }}/assets/css/style.css" type="text/css">

</head>


<body class="fixed-left">

    <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner"></div>
        </div>
    </div>

    <!-- Begin page -->
    <div id="wrapper">

        <!-- ========== Left Sidebar Start ========== -->
        @include('admin.layouts.sidebar')
        <!-- Left Sidebar End -->

        <!-- Start right Content here -->

        <div class="content-page">
            <!-- Start content -->
            <div class="content">

                <!-- Top Bar Start -->
                @include('admin.layouts.header')
                <!-- Top Bar End -->

                @yield('content')
                <!-- Page content Wrapper -->
            </div>
            <!-- content -->

            <footer class="footer">
                © 2018 Urora by Mannatthemes.
            </footer>

        </div>
        <!-- End Right content here -->

    </div>
    <!-- END wrapper -->


    <!-- jQuery  -->
    <script src="{{ asset('backend') }}/assets/js/jquery.min.js"></script>
    <script src="{{ asset('backend') }}/assets/js/popper.min.js"></script>
    <script src="{{ asset('backend') }}/assets/js/bootstrap-material-design.js"></script>
    <script src="{{ asset('backend') }}/assets/js/modernizr.min.js"></script>
    <script src="{{ asset('backend') }}/assets/js/detect.js"></script>
    <script src="{{ asset('backend') }}/assets/js/fastclick.js"></script>
    <script src="{{ asset('backend') }}/assets/js/jquery.slimscroll.js"></script>
    <script src="{{ asset('backend') }}/assets/js/jquery.blockUI.js"></script>
    <script src="{{ asset('backend') }}/assets/js/waves.js"></script>
    <script src="{{ asset('backend') }}/assets/js/jquery.nicescroll.js"></script>
    <script src="{{ asset('backend') }}/assets/js/jquery.scrollTo.min.js"></script>

    @yield('script')
    <!-- App js -->
    <script src="{{ asset('backend') }}/assets/js/app.js"></script>

</body>

</html>
