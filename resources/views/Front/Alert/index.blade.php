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
            <a class="nav-link active" href="manage-projects.html">My Alerts</a>
            <ul class="nav nav-tabs nav-tabs-bottom nav-justified">
                <li class="nav-item">
                </li>
            </ul>
        </nav>


        @isset($alerts)

        @foreach ($alerts as $alert)

        <div class="row">
        <div class="my-projects-list">
                <div class="col-lg-12 flex-wrap">
                    <div class="projects-card flex-fill">
                        <div class="card-body">
                            <div class="projects-details align-items-center">
                                <div class="project-info">
                                    <span> {{$alert->subject}} </span>
                                    <h2>{{$alert->title}}</h2>
                                    <div class="customer-info">
                                        <ul class="list-details">
                                         
                                            <li>
                                                <div class="slot">
                                                    <p>Created</p>
                                                    <h5>{{$alert->created_at}}</h5>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    
                                </div>
                                <div class="project-hire-info">
                                    <div class="content-divider"></div>
                                    <div class="projects-amount">
                                        <h3>Description</h3>
                                        <h5>  {{$alert->description}}</h5>
                                        
                                    </div>
                                    
                                    <div class="content-divider"></div>
                                    <div class="projects-action text-center">
                                        <a href="{{route('Front.Alerts.edit', ['id' => $alert->id])}}" class="projects-btn">Edit Alert </a>
                                        
                                        <a href="{{route('Front.reply.show', ['id' => $alert->id])}}"    class="hired-detail"><span> {{$alert->status}} </span></a>
                                    </div>
                                </div>
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


        @endforeach 
        @endisset

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
