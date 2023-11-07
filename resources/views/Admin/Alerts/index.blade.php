@extends('Layouts.admin')

@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">

            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title">Alerts</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active">Alerts</li>
                        </ul>
                    </div>
                    <div class="col-auto">
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

            <div class="card bg-white projects-card">
                <div class="card-body pt-0">
                    <div class="card-header">
                        <h5 class="card-title">Total Alerts</h5>
                    </div>
                    <div class="reviews-menu-links">
                        <ul role="tablist" class="nav nav-pills card-header-pills nav-justified">
                            <li class="nav-item">
                                <a href="#tab-4" data-bs-toggle="tab" class="nav-link active">All (272)</a>
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
                                            <th>Title</th>
                                            <th>Subject</th>
                                            <th>User Name</th>
                                            <th>User Email</th>
                                            <th>Description</th>
                                            <th>Creation Date</th>
                                            <th>Status</th>
                                            <th class="text-end">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @isset($alerts)

                                        @foreach($alerts as $alert)
                                            
                                        
                                       
                                        <tr>
                                           
                                            <td>
                                               
                                            </td>
                                            <td>{{$alert->title}}   </td>
                                            <td>
                                            {{$alert->subject}}
                                            </td>
                                            <td>{{$alert->user->name}}</td>
                                            <td>{{$alert->user->email}}</td>
                                            <td>
                                                {{$alert->description}}
                                            </td>
                                            <td>{{$alert->created_at}}   </td>
                                            <td>{{$alert->status}}

                                            </td>
                                            <td class="text-end">
                                                
                                                <a   class="btn btn-sm btn-danger" href="{{route('admin.alerts.delete', ['id' => $alert->id])}}"
                                               
                                                    > <i
                                                        class="far fa-trash-alt"></i></a>
                                                        <a  href="{{route('admin.alerts.reply', ['id' => $alert->id])}}" class="btn btn-sm btn-warning"
                                                    ><i
                                                        class="far fa-envelope"></i></a>
                                                         </td>
                                        </tr>
    <div class="modal custom-modal fade" id="delete_category" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="form-header">
                        <h3>Delete</h3>
                        <p>Are you sure want to delete?</p>
                    </div>
                    <div class="modal-btn delete-action">
                        <div class="row">
                            <div class="col-6">
                             
                                <a href="{{route('admin.alerts.delete', ['id' => $alert->id])}}" class="btn btn-primary continue-btn">Delete</a>
                               
                            </div>
                            <div class="col-6">
                                <a href="javascript:void(0);" data-bs-dismiss="modal"
                                    class="btn btn-primary cancel-btn"> {{$alert->id}}Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
                                        @endforeach 
                                        @endisset
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


    
@endsection
