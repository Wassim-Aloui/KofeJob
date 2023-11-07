@extends('Layouts.admin')

@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">

            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title">Gigs</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active">Gigs</li>
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
                        <h5 class="card-title">Projects views</h5>
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
                                            <th>Orders</th>
                                            <th>Price</th>
                                            <th>Creation Date</th>
                                            <th class="text-end">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @isset($gigs)

                                        @foreach ($gigs as $gig)



                                        <tr>

                                            <td>

                                            </td>
                                            <td>{{$gig->title}}</td>
                                            <td>
                                            {{$gig->orders}}
                                            </td>
                                            <td>
                                                {{$gig->price}}
                                            </td>
                                            <td>{{$gig->created_at}}</td>
                                            <td class="text-end">
                                                <form action="{{ route('Admingig', $gig->id) }}" method="get">
                                                    <button type="submit" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#delete_category">
                                                        <i class="far fa-trash-alt"></i>
                                                    </button>
                                                    </form>
                                                    </td>
                                            
                                        </tr>

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
