<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from kofejob.dreamguystech.com/template/admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 19 Sep 2023 20:20:49 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Kofejob - Bootstrap Admin HTML Template</title>


    <link rel="shortcut icon" href="{{ asset('Assets/Admin/img/favicon.png') }}">

    <link rel="stylesheet" href="{{ asset('Assets/Admin/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('Assets/Admin/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Assets/Admin/plugins/fontawesome/css/all.min.css') }}">

    <link rel="stylesheet" href="{{ asset('Assets/Admin/css/feather.css') }}">

    <link rel="stylesheet" href="{{ asset('Assets/Admin/plugins/select2/css/select2.min.css') }}">

    <link rel="stylesheet" href="{{ asset('Assets/Admin/css/bootstrap-datetimepicker.min.css') }}">

    <link rel="stylesheet" href="{{ asset('Assets/Admin/plugins/datatables/datatables.min.css') }}">

    <link rel="stylesheet" href="{{ asset('Assets/Admin/css/style.css') }}">
</head>

<body>

    <div class="main-wrapper">



        @include('Admin.Includes.navbar')



        @include('Admin.Includes.sidebar')


        @yield('content')



        <script src="{{ asset('Assets/Admin/js/jquery-3.6.0.min.js') }}"></script>

        <script src="{{ asset('Assets/Admin/js/bootstrap.bundle.min.js') }}"></script>

        <script src="{{ asset('Assets/Admin/js/feather.min.js') }}"></script>

        <script src="{{ asset('Assets/Admin/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>

        <script src="{{ asset('Assets/Admin/plugins/select2/js/select2.min.js') }}"></script>

        <script src="{{ asset('Assets/Admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('Assets/Admin/plugins/datatables/datatables.min.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

        <script src="{{ asset('Assets/Admin/js/script.js') }}"></script>
        <script src="{{ asset('Assets/Admin/js/moment.min.js') }}"></script>
        <script src="{{ asset('Assets/Admin/js/bootstrap-datetimepicker.min.js') }}"></script>

    </div>
</body>

<!-- Mirrored from kofejob.dreamguystech.com/template/admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 19 Sep 2023 20:21:01 GMT -->

</html>
