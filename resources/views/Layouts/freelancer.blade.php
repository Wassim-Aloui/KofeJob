<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from kofejob.dreamguystech.com/template/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 19 Sep 2023 20:20:22 GMT -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
    <title>KofeJob</title>

    <link rel="shortcut icon" href="{{ asset('Assets/img/favicon.png" type="image/x-icon') }}">

    <link rel="stylesheet" href="{{ asset('Assets/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('Assets/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Assets/plugins/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Assets/plugins/datatables/datatables.min.css') }}">

    <link rel="stylesheet" href="{{ asset('Assets/plugins/select2/css/select2.min.css') }}">

    <link rel="stylesheet" href="{{ asset('Assets/css/style.css') }}">



</head>

<body class="dashboard-page">

    <div class="main-wrapper">

        @include('Front.Includes.navbar')

        <div class="bread-crumb-bar">
            <div class="container">
                <div class="row align-items-center inner-banner">
                    <div class="col-md-12 col-12 text-center">
                        <div class="breadcrumb-list">
                            <nav aria-label="breadcrumb" class="page-breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html"><img
                                                src="Assets/img/home-icon.svg" alt="Post Author"> Home</a></li>
                                    <li class="breadcrumb-item" aria-current="page">Employee</li>
                                    <li class="breadcrumb-item" aria-current="page">Dashboard</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="content content-page">
            <div class="container-fluid">
                <div class="row">

                  @include('Front.Includes.sidebar')

                    @yield('content')
                </div>
            </div>
        </div>


    </div>


    <script src="{{ asset('Assets/js/jquery-3.6.1.min.js') }}"></script>

    <script src="{{ asset('Assets/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('Assets/plugins/apexchart/apexcharts.min.js') }}"></script>
    <script src="{{ asset('Assets/plugins/apexchart/chart-data.js') }}"></script>

    <script src="{{ asset('Assets/plugins/theia-sticky-sidebar/ResizeSensor.js') }}"></script>
    <script src="{{ asset('Assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js') }}"></script>
    <script src="{{ asset('Assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('Assets/plugins/datatables/datatables.min.js') }}"></script>


    <script src="{{ asset('Assets/js/script.js') }}"></script>




</body>

<!-- Mirrored from kofejob.dreamguystech.com/template/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 19 Sep 2023 20:20:24 GMT -->

</html>
