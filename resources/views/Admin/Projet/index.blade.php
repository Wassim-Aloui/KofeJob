@extends('Layouts.admin')
@section('content')
<div class="main-wrapper">

        <div class="header">

            <div class="header-left">
                <a href="index.html" class="logo">
                    <img src="assets/img/logo.png" alt="Logo">
                </a>
                <a href="index.html" class="logo logo-small">
                    <img src="assets/img/logo-small.png" alt="Logo" width="30" height="30">
                </a>

                <a href="javascript:void(0);" id="toggle_btn">
                    <i class="feather-chevrons-left"></i>
                </a>


                <a class="mobile_btn" id="mobile_btn">
                    <i class="feather-chevrons-left"></i>
                </a>

            </div>


            <div class="top-nav-search">
                <form>
                    <input type="text" class="form-control" placeholder="Start typing your Search...">
                    <button class="btn" type="submit"><i class="feather-search"></i></button>
                </form>
            </div>


            <ul class="nav user-menu">

                <li class="nav-item dropdown">
                    <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                        <i class="feather-bell"></i> <span class="badge badge-pill">5</span>
                    </a>
                    <div class="dropdown-menu notifications">
                        <div class="topnav-dropdown-header">
                            <span class="notification-title">Notifications</span>
                            <a href="javascript:void(0)" class="clear-noti"> Clear All</a>
                        </div>
                        <div class="noti-content">
                            <ul class="notification-list">
                                <li class="notification-message">
                                    <a href="#">
                                        <div class="media d-flex">
<span class="avatar avatar-sm flex-shrink-0">
<img class="avatar-img rounded-circle" alt src="assets/img/profiles/avatar-02.jpg">
</span>
                                            <div class="media-body flex-grow-1">
                                                <p class="noti-details"><span class="noti-title">Brian Johnson</span> paid the invoice <span class="noti-title">#DF65485</span></p>
                                                <p class="noti-time"><span class="notification-time">4 mins ago</span></p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="#">
                                        <div class="media d-flex">
<span class="avatar avatar-sm flex-shrink-0">
<img class="avatar-img rounded-circle" alt src="assets/img/profiles/avatar-03.jpg">
</span>
                                            <div class="media-body flex-grow-1">
                                                <p class="noti-details"><span class="noti-title">Marie Canales</span> has accepted your estimate <span class="noti-title">#GTR458789</span></p>
                                                <p class="noti-time"><span class="notification-time">6 mins ago</span></p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="#">
                                        <div class="media d-flex">
                                            <div class="avatar avatar-sm flex-shrink-0">
                                                <span class="avatar-title rounded-circle bg-primary-light"><i class="far fa-user"></i></span>
                                            </div>
                                            <div class="media-body flex-grow-1">
                                                <p class="noti-details"><span class="noti-title">New user registered</span></p>
                                                <p class="noti-time"><span class="notification-time">8 mins ago</span></p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="#">
                                        <div class="media d-flex">
<span class="avatar avatar-sm flex-shrink-0">
<img class="avatar-img rounded-circle" alt src="assets/img/profiles/avatar-04.jpg">
</span>
                                            <div class="media-body flex-grow-1">
                                                <p class="noti-details"><span class="noti-title">Barbara Moore</span> declined the invoice <span class="noti-title">#RDW026896</span></p>
                                                <p class="noti-time"><span class="notification-time">12 mins ago</span></p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="#">
                                        <div class="media d-flex">
                                            <div class="avatar avatar-sm flex-shrink-0">
                                                <span class="avatar-title rounded-circle bg-info-light"><i class="far fa-comment"></i></span>
                                            </div>
                                            <div class="media-body flex-grow-1">
                                                <p class="noti-details"><span class="noti-title">You have received a new message</span></p>
                                                <p class="noti-time"><span class="notification-time">2 days ago</span></p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="topnav-dropdown-footer">
                            <a href="#">View all Notifications</a>
                        </div>
                    </div>
                </li>


                <li class="nav-item dropdown has-arrow main-drop">
                    <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
<span class="user-img">
<img src="assets/img/profiles/avatar-07.jpg" alt>
<span class="status online"></span>
</span>
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="profile.html"><i data-feather="user" class="me-1"></i> Profile</a>
                        <a class="dropdown-item" href="settings.html"><i data-feather="settings" class="me-1"></i> Settings</a>
                        <a class="dropdown-item" href="login.html"><i data-feather="log-out" class="me-1"></i> Logout</a>
                    </div>
                </li>
            </ul>
        </div>
        <div class="page-wrapper">
            <div class="content container-fluid">

                <div class="page-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="page-title">Projects</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active">Projects</li>
                            </ul>
                        </div>
                        <div class="col-auto">
                            <a class="btn filter-btn"  id="filter_search">
                                <i class="fas fa-filter" ></i>
                            </a>
{{--                            <a href="#" class="btn add-button me-2" data-bs-toggle="modal" data-bs-target="#add-proj">--}}
{{--                                <i class="fas fa-plus"></i>--}}
{{--                            </a>--}}
                        </div>
                    </div>
                </div>


                <div class="card filter-card" id="filter_inputs">
                    <div class="card-body pb-0">
                        <form action="#" method="post">
                            <div class="row filter-row">
                                <div class="col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label>Company Name</label>
                                        <input class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label>From Date</label>
                                        <div class="cal-icon">
                                            <input class="form-control datetimepicker" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label>To Date</label>
                                        <div class="cal-icon">
                                            <input class="form-control datetimepicker" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <button class="btn btn-primary btn-block" type="submit">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                @if(session('status'))
                    <div class="alert alert-success">{{session('status')}}</div>
                @endif
                <div class="card bg-white projects-card">
                    <div class="card-body pt-0">
                        <div class="card-header">
                            <h5 class="card-title">Projects views</h5>
                        </div>
                        <div class="reviews-menu-links">
                            <ul role="tablist" class="nav nav-pills card-header-pills nav-justified">
                                <li class="nav-item">
                                    <a href="#tab-4" data-bs-toggle="tab" class="nav-link active">All projects</a>
                                </li>

                            </ul>
                        </div>
                        <div class="tab-content pt-0">
                            <div role="tabpanel" id="tab-4" class="tab-pane fade active show">
                                <div class="table-responsive">
                                    <table class="table table-center table-hover mb-0 datatable">
                                        <thead>
                                        <tr>
                                            <th></th>
                                            <th>Logo</th>
                                            <th>Title</th>
                                            <th>Budget</th>
                                            <th>Progress</th>
                                            <th>Technology</th>
                                            <th>Category</th>
                                            <th>Company</th>
                                            <th>Start date</th>
                                            <th>Due date</th>
                                            <th class="text-end">Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($projets as $projet)
                                        <tr>
                                            <td>
                                                <div class="form-check form-checkbox">
                                                    <input type="checkbox" class="form-check-input" id="customCheck1">
                                                    <label class="form-check-label" for="customCheck1"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile.html"><img class="me-2" src="assets/img/company/img-1.png" alt="User Image"></a>
                                                </h2>
                                            </td>
                                            <td>{{$projet->title}}</td>
                                            <td>
                                                {{$projet->budget}}
                                            </td>
                                            <td>
                                                <div class="progress rounded-pill">
                                                    <div class="progress-bar bg-primary rounded-pill" role="progressbar" style="width: {{$projet->progress}}%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>
                                                {{$projet->technology}}
                                            </td>
                                            <td>
                                                {{$projet->category->name}}
                                            </td>
                                            <td>{{$projet->company}}</td>
                                            <td>{{$projet->start_date}}</td>
                                            <td>{{$projet->due_date}}</td>

                                            <td class="text-end">
{{--                                                <a  class="btn btn-sm btn-secondary edit-projet me-2 " data-id="{{$projet->id}}" data-bs-toggle="modal"  data-bs-target="#edit-proj"><i class="far fa-edit"></i></a>--}}
                                                <a  class="btn btn-sm btn-danger delete-projet"   data-id="{{$projet->id}}" data-bs-toggle="modal"data-bs-target="#delete_category"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        @endforeach



                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div role="tabpanel" id="tab-7" class="tab-pane fade">
                                <div class="table-responsive">
                                    <table class="table table-center table-hover mb-0 datatable">
                                        <thead>
                                        <tr>
                                            <th></th>
                                            <th>Logo</th>
                                            <th>Title</th>
                                            <th>Budget</th>
                                            <th>Progress</th>
                                            <th>Technology</th>
                                            <th>Company</th>
                                            <th>Start date</th>
                                            <th>Due date</th>
                                            <th class="text-end">Actions</th>
                                        </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <div class="modal fade custom-modal" id="edit-proj">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Projects</h4>
                    <button type="button" class="close" data-bs-dismiss="modal"><span>&times;</span></button>
                </div>
                <div class="modal-body">
                    <form action="{{url('updateProjet')}}" method="post">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="proj_id" id="proj_id" >

                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" name="title" id="title" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label>Budget</label>
                            <input type="number" class="form-control" name="budget" id="budget">
                        </div>

                        <div class="form-group">

                            <label for="progressValue">Progress:</label>


                            <div class="form-control"> <!-- Replace "form-group" with the appropriate CSS class for your styling -->

                                <input type="range" name="progress" id="progress" min="0" max="100" step="1" value="50"
                                       style="width: 100%; margin-top: 5px; margin-bottom: 10px;"
                                       oninput="updateProgressValue(this.value)"
                                >
                                {{--                            <span id="progressValueDisplay">50</span>--}}

                            </div>

                        </div>



                        <div class="form-group">
                            <label>Technology</label>
                            <input type="text" name="technology" id="technology" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label for="category_id">Category:</label>
                            <select class="form-control" name="category_id" id="category_id">
                                @foreach ($categories as $category)
{{--                                    <option value="{{ $category->id }}">{{ $category->name }}</option>--}}
                                    <option value="{{ $category->id }}" {{ $projet->category_id === $category->id ? 'selected' : '' }}>{{ $category->name }}</option>

                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Company</label>
                            <input type="text" name="company" id="company" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label>From Date</label>
                            <div class="">
                                <input class="form-control " name="start_date" id="start_date" type="date" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label>To Date</label>
                            <div class="">
                                <input class="form-control "  name="due_date" id="due_date" type="date" >
                            </div>
                        </div>
                        <div class="mt-4">
                            <button type="submit" class="btn btn-primary btn-block">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{--debut modal ajout--}}

    <div class="modal fade custom-modal" id="add-proj">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Projects</h4>
                    <button type="button" class="close" data-bs-dismiss="modal"><span>&times;</span></button>
                </div>

                <div class="modal-body">
                    <form action="{{url('/projet/add')}}" method="post" id="add-proj-form">
                        {{ csrf_field() }}

                        <input type="hidden" name="proj_id" id="proj_id" >

                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" name="title" id="title" class="form-control" placeholder="Enter a title">
                            <span id="title-error" class="text-danger validation-error "></span>

                        </div>
                        <div class="form-group">
                            <label>Budget</label>
                            <input type="number" class="form-control" name="budget" id="budget" placeholder="Budget">
                            <span id="budget-error" class="text-danger validation-error"></span>

                        </div>

                        <div class="form-group">

                            <label for="progressValue">Progress:</label>


                        <div class="form-control"> <!-- Replace "form-group" with the appropriate CSS class for your styling -->

                            <input type="range" id="progress" name="progress" min="0" max="100" step="1" value="50"
                                   style="width: 100%; margin-top: 5px; margin-bottom: 10px;"
                                   oninput="updateProgressValue(this.value)"
                            >
{{--                            <span id="progressValueDisplay">50</span>--}}

                        </div>

                        </div>

                        <div class="form-group">
                            <label>Technology</label>
                            <input type="text" name="technology" id="technology" class="form-control" placeholder="Enter a technology">
                            <span id="technology-error" class="text-danger validation-error"></span>

                        </div>
                        <div class="form-group">
                            <label >Category:</label>
                            <select name="category_id" id="category_id" class="form-control">
                                <option value="" disabled selected>Select a category</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach

                            </select>
                            <span id="category_id-error" class="text-danger validation-error"></span>

                        </div>
                        <div class="form-group">
                            <label>Company</label>
                            <input type="text" name="company" id="company" class="form-control"placeholder="Enter a company">
                            <span id="company-error" class="text-danger"></span>

                        </div>
                        <div class="form-group">
                            <label>From Date</label>
                            <div class="">
                                <input class="form-control " name="start_date" id="start_date" type="date" >
                                <span id="start_date-error" class="text-danger validation-error"></span>

                            </div>
                        </div>
                        <div class="form-group">
                            <label>To Date</label>
                            <div class="">
                                <input class="form-control "  name="due_date" id="due_date" type="date" >
                                <span id="due_date-error" class="text-danger validation-error"></span>

                            </div>
                        </div>
                        <input class="form-control "  name="end_date" id="end_date" type="hidden" value="2023-01-01" >

                        <div class="mt-4">
                            <button type="submit" class="btn btn-primary btn-block">Submit</button>
                        </div>
                    </form>
                    <div id="error-messages" class="text-danger"></div>

                </div>
            </div>
        </div>
    </div>

    <div class="modal custom-modal fade" id="delete_category" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <form action="{{url('deleteProjet')}}" method="post">
                        @csrf
                        @method('DELETE')
                        <div class="form-header">
                            <h3>Delete</h3>
                            <p>Are you sure want to delete?</p>
                        </div>
                        <input type="hidden" id="delete_id" name="delete_id">
                        <div class="modal-btn delete-action">

                            <div class="row">
                                <div class="col-6">
                                    <button type="submit" style="width:200px" class="btn btn-primary continue-btn">Delete</button>
                                </div>
                                <div class="col-6">
                                    <button data-bs-dismiss="modal" style="width:230px" class="btn btn-primary cancel-btn">Cancel</button>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function () {
            $('.delete-projet').on('click', function () {
                var cat_id = $(this).data('id');
                $('#delete_id').val(cat_id);
})
          $('.edit-projet').on('click',function (){
                var proj_id=$(this).data('id');
                 //alert(proj_id)
                console.log(proj_id)
                $.ajax(({
                    type:"GET",
                    url:"edit-projet/"+proj_id,
                    success:function (response){
                       // var category_name= response.projet.category.name;
                        console.log(response.projet);
                        $('#title').val(response.projet.title);
                        $('#technology').val(response.projet.technology);
                        $('#company').val(response.projet.company);
                        $('#budget').val(response.projet.budget);
                        $('#progress').val(response.projet.progress);
                        $('#start_date').val(response.projet.start_date);
                        $('#due_date').val(response.projet.due_date);
                       // $('#category_id').val(response.projet.category.name);
                        var categoryToSelect = response.projet.category.name; // Replace this with the category name you want to select

// Find the option with a value that matches the category name and set it as selected
                        $('#category_id option').filter(function() {
                            return $(this).text() === categoryToSelect;
                        }).prop('selected', true);

                        $('#proj_id').val(response.projet.id);

                    }
                }))
            });
        });

    </script>
    <script>
        // Get the range input element
        var progressInput = document.getElementById("progress");

        // Get the span element to display the percentage
        var progressValue = document.getElementById("progressValue");

        // Add an event listener to update the percentage value when the range input changes
        progressInput.addEventListener("input", function() {
            // Update the span with the current value and add a "%" symbol
            progressValue.textContent = progressInput.value + "%";
        });
    </script>
<script>
    function updateProgressValue(value) {
        document.getElementById('progressValueDisplay').textContent = value;
    }
</script>

<script>
    $(document).ready(function () {
        $('#add-proj-form').on('submit', function (e) {
            e.preventDefault(); // Prevent the default form submission
            clearValidationErrors();

            // Serialize the form data
            var formData = $(this).serialize();

            // Make an Ajax request to the controller for validation
            $.ajax({
                type: 'POST',
                url: '{{ url("/projet/add") }}',
                data: formData,
                success: function (response) {
                    if (response.success) {
                        // If validation is successful, you can close the modal and do any further processing
                        $('#add-proj').modal('hide'); // Assuming the modal ID is 'add-proj'
                        // Perform any additional actions you need
                        window.location.href = '{{ url("/projet") }}';

                    } else {
                        console.log('Validation Errors:');
                        console.log(response.errors);
                        // If there are validation errors, display the errors under their inputs
                        $.each(response.errors, function(field, error) {

                            $('#' + field + '-error').text(error); // Display error under the appropriate field
                        });                    }
                }
            });
        });
    });
    function clearValidationErrors() {
        $('.validation-error').text(''); // Assuming you have a common class for all error message elements
    }
</script>


@endsection
