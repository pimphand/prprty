<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="ThemeStarz">

    <!--CSS -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/font-awesome/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/simplebar.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/style.css">
    @yield('css')
    <title>MyHouse - Advanced Real Estate HTML Template by ThemeStarz</title>

</head>

<body>

    <!-- WRAPPER
=====================================================================================================================-->
    <div class="ts-page-wrapper @yield('bokeh') @yield('home') " id="page-top">

        @include('frontend.layouts.header')

        @yield('slider')

        <!--*********************************************************************************************************-->
        <!-- MAIN ***************************************************************************************************-->
        <!--*********************************************************************************************************-->

        <main id="ts-main">
            @yield('stk')
            @yield('content')

        </main>

        <!--*********************************************************************************************************-->
        <!--************ FOOTER *************************************************************************************-->
        <!--*********************************************************************************************************-->

        @include('frontend.layouts.footer')
        <!--end #ts-footer-->

    </div>
    <!--end page-->

    <script src="{{ asset('frontend') }}/assets/js/jquery-3.3.1.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/popper.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/jquery.magnific-popup.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/owl.carousel.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/custom.js"></script>

    @yield('script')

</body>

</html>
