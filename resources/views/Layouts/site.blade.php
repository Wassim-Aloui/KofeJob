<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from kofejob.dreamguystech.com/template/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 19 Sep 2023 20:18:54 GMT -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
    <title>KofeJob</title>

    <link rel="shortcut icon" href="{{ asset('Assets/img/favicon.png') }}" type="image/x-icon">

    <link rel="stylesheet" href="{{ asset('Assets/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('Assets/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Assets/plugins/fontawesome/css/all.min.css') }}">

    <link rel="stylesheet" href="{{ asset('Assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Assets/css/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('Assets/plugins/aos/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('Assets/plugins/select2/css/select2.min.css') }}">

    <link rel="stylesheet" href="{{ asset('Assets/css/style.css') }}">
    @stack('styles')
    

</head>

<body class="home-page bg-one">

    {{-- <div id="global-loader">
<div class="whirly-loader"> </div>
<div class="loader-img">
    <img src="Assets/img/load-icon.svg" class="img-fluid" alt>
</div>
</div> --}}


    <div class="main-wrapper">


        @include('Front.Includes.navbar')


        @yield('content')

        @include('Front.Includes.Footer')

    </div>

    <button class="scroll-top scroll-to-target" data-target="html">
        <span class="ti-angle-up"><img src="Assets/img/icon/top-icon.svg" class="img-fluid" alt></span>
    </button>

    
    <script src="Assets/js/jquery-3.6.1.min.js"></script>

    <script src="Assets/js/bootstrap.bundle.min.js"></script>

    <script src="Assets/js/owl.carousel.min.js"></script>

    <script src="Assets/js/jquery.waypoints.js"></script>
    <script src="Assets/js/jquery.counterup.min.js"></script>

    <script src="Assets/plugins/aos/aos.js"></script>

    <script src="Assets/plugins/select2/js/select2.min.js"></script>

    <script src="Assets/js/slick.js"></script>

    <script src="Assets/js/script.js"></script>
</body>

<!-- Mirrored from kofejob.dreamguystech.com/template/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 19 Sep 2023 20:19:20 GMT -->

</html>
