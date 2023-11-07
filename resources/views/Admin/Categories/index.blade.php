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
                            <h3 class="page-title">Categories</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item active">Categories</li>
                            </ul>
                        </div>
                        <div class="col-auto">
                            <a href="#" class="btn add-button me-2" data-bs-toggle="modal" data-bs-target="#add-category">
                                <i class="fas fa-plus"></i>
                            </a>
                            <a class="btn filter-btn" href="javascript:void(0);" id="filter_search">
                                <i class="fas fa-filter"></i>
                            </a>
                        </div>
                    </div>
                </div>


                <div class="card filter-card" id="filter_inputs">
                    <div class="card-body pb-0">
                        <form action="#" method="post">
                            <div class="row filter-row">
                                <div class="col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label>Add Categories</label>
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
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-center table-hover mb-0 datatable">
                                        <thead>
                                        <tr>
                                            <th>S.No</th>
                                            <th>Category Name</th>
                                            <th>Slug</th>
                                            <th>Description</th>

                                            <th class="text-end">Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                       @foreach($categories as $item)
                                        <tr>
                                            <td>
                                                {{$loop->iteration}}
                                            </td>
                                            <td>{{$item->name}}</td>
                                            <td>{{$item->slug}}</td>
                                            <td>{{$item->description}}</td>


                                            <td class="text-end">
                                                <a  class="btn btn-sm btn-secondary edit-category me-2" data-id="{{ $item->id }}" data-bs-toggle="modal" data-bs-target="#edit-category"><i class="far fa-edit"></i></a>
                                                <a  class="btn btn-sm  btn-danger delete-category" data-id="{{ $item->id }}" data-bs-toggle="modal" data-bs-target="#delete_category"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                       @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <div class="modal fade custom-modal" id="add-category">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-header">
                    <h4 class="modal-title">Add Category</h4>
                    <button type="button" class="close" data-bs-dismiss="modal"><span>&times;</span></button>
                </div>

                <div class="modal-body">

                    <form action="{{url('/category/add')}}" method="post" id="add-category-form" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label>Category Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter Category Name">
                            <span id="name-error" class="text-danger validation-error"></span>

                        </div>
                        <div class="form-group">
                            <label>Slug</label>
                            <input type="text" name="slug" class="form-control" placeholder="Enter Category Name">
                            <span id="slug-error" class="text-danger validation-error"></span>

                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea name="description" class="form-control" rows="3" placeholder="Enter the description"></textarea>
                            <span id="description-error" class="text-danger validation-error"></span>

                        </div>


                        <div class="mt-4">
                            <button type="submit" class="btn btn-primary btn-block">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

{{-- Start edit modal --}}
    <div class="modal fade custom-modal" id="edit-category">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-header">
                    <h4 class="modal-title">Edit Category</h4>
                    <button type="button" class="close" data-bs-dismiss="modal"><span>&times;</span></button>
                </div>

                <div class="modal-body">
                    <form action="{{url('updateCategory')}}" method="post">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="cat_id" id="cat_id" >
                        <div class="form-group">
                            <label>Category Name</label>
                            <input type="text" id="name" name="name" class="form-control" value="Graphic & Design">
                        </div>
                        <div class="form-group">
                            <label>Slug</label>
                            <input type="text" name="slug" id="slug" class="form-control" placeholder="Enter Category Name">
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea name="description" id="description" class="form-control" rows="3"></textarea>
                        </div>


                        <div class="mt-4">
                            <button type="submit" class="btn btn-primary btn-block">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- end edit modal --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>

        $(document).ready(function (){
            $('.delete-category').on('click',function (){
                var cat_id=$(this).data('id');
                $('#delete_id').val(cat_id);


            })
            $('.edit-category').on('click',function (){
                var cat_id=$(this).data('id');
              //  alert(cat_id)
                console.log(cat_id)
                $.ajax(({
                    type:"GET",
                    url:"edit-category/"+cat_id,
                    success:function (response){
                       // console.log(response.category.name)
                        $('#name').val(response.category.name);
                        $('#slug').val(response.category.slug);
                        $('#description').val(response.category.description);
                        $('#cat_id').val(response.category.id);


                    }
                }))



                           });
        })
    </script>

    {{-- start delete modal --}}
    <div class="modal custom-modal fade" id="delete_category" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <form action="{{url('deleteCategory')}}" method="post">
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
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- end delete modal --}}

    <script>
        $(document).ready(function () {
            $('#add-category-form').on('submit', function (e) {
                e.preventDefault(); // Prevent the default form submission
                clearValidationErrors();

                // Serialize the form data
                var formData = $(this).serialize();

                // Make an Ajax request to the controller for validation
                $.ajax({
                    type: 'POST',
                    url: '{{ url("/category/add") }}',
                    data: formData,
                    success: function (response) {
                        if (response.success) {
                            // If validation is successful, you can close the modal and do any further processing
                            $('#add-category').modal('hide'); // Assuming the modal ID is 'add-proj'
                            // Perform any additional actions you need
                            window.location.href = '{{ url("/category") }}';

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


