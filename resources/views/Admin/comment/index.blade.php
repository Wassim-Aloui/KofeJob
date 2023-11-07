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
                            <h3 class="page-title">Comments</h3>
                            <ul class="breadcrumb">

                            </ul>
                        </div>
                        <div class="col-auto">

                        </div>
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
                                        <th>Comment id</th>
                                            <th>Comment</th>
                                            <th>Author</th>


                                            <th class="text-end">Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
    @foreach($comment as $b)
    <tr>
        <td>
            {{$loop->iteration}}
        </td>
        <td>{{$b->comment}}</td>
        <td>{{$b->user->name}}</td>
        <td class="text-end">
            <a class="btn btn-sm btn-danger delete-category" data-id="{{ $b->id }}" data-bs-toggle="modal" data-bs-target="#delete_category"><i class="far fa-trash-alt"></i></a>
        </td>
    </tr>
    @endforeach
</tbody>
</table>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>





    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>

        $(document).ready(function (){
            $('.delete-blog').on('click',function (){
                var cat_id=$(this).data('id');
                $('#delete_id').val(cat_id);


            })

        })
    </script>

    {{-- start delete modal --}}
    <div class="modal custom-modal fade" id="delete_category" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    @foreach($comment as $b)
                    <form action="{{ route('DestroyCommentAdmin',$b->id) }}" method="post">

                        @endforeach
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
                                <button type="submit" class="btn btn-primary continue-btn">Delete</button>
                            </div>
                            <div class="col-6">
                                <button data-bs-dismiss="modal" class="btn btn-primary cancel-btn">Cancel</button>
                            </div>
                        </div>

                    </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    {{-- end delete modal --}}



@endsection


