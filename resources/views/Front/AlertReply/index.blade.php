@extends('Layouts.freelancer')

@section('content')




    <div class="col-xl-9 col-md-8">
        <div class="page-title">
            <div class="row">
                <div class="col-md-6">
                    <h3>Manage Alerts</h3>
                </div>
                <div class="col-md-6 text-end">
                    <a href="{{route('Front.Alert.Add')}}" class="btn btn-primary back-btn mb-4">Add Alert</a>
                </div>
            </div>
        </div>
        <nav class="user-tabs project-tabs">
            <a class="nav-link active" href="manage-projects.html">My Alert's Reply</a>
            <ul class="nav nav-tabs nav-tabs-bottom nav-justified">
                <li class="nav-item">
                </li>
            </ul>
        </nav>


       

        <div class="row">
        <div class="my-projects-list">
                <div class="col-lg-12 flex-wrap">
                    <div class="projects-card flex-fill">
                        <div class="card-body">
                            <div class="projects-details align-items-center">
                                <div class="project-info  ">
                                    <span>Description</span>
                                    @if($reply)
                                    <h2>{{$reply->description}}</h2>
                                     @else
                                        <h2>Not Replied Yet</h2>
                                        @endif
                                    
                                </div>
                                <div class="project-hire-info  "> @if($reply)
                                    <div class="content-divider"></div>
                                    <div class="projects-amount">
                                        <h3>Replied at</h3>
                                        <h5>  {{$reply->created_at}}</h5>
                                        
                                      </div>
                                    
                                  @endif
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-lg-2 d-flex flex-wrap">
                    <div class="projects-card flex-fill">
                        <div class="card-body p-2">
                            <div class="prj-proposal-count text-center hired">
                                <h3>Hired</h3>
                                <img src="Assets/img/developer/developer-01.jpg" alt class="img-fluid">
                                <p class="mb-0">Hannah Finn</p>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>


   

        <div class="row">
            <div class="col-md-12">
                <ul class="paginations list-pagination">
                    <li class="page-item"><a href="#">Previous</a></li>
                    <li class="page-item"><a href="#" class="active">1</a></li>
                    <li class="page-item"><a href="#">Next</a></li>
                </ul>
            </div>
        </div>

    </div>
    </div>
    </div>
    </div>
@endsection
