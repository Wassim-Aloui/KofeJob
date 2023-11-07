@extends('Layouts.freelancer')

@section('content')




    <div class="col-xl-9 col-md-8">
        <div class="page-title">
            <div class="row">
                <div class="col-md-6">
                    <h3>Manage Gigs</h3>
                </div>
                <div class="col-md-6 text-end">
                    <a href="post-project.html" class="btn btn-primary back-btn mb-4">Post a Gig</a>
                </div>
            </div>
        </div>
        <nav class="user-tabs project-tabs">
            <ul class="nav nav-tabs nav-tabs-bottom nav-justified">
                <li class="nav-item">
                    <a class="nav-link active" href="manage-projects.html">All Gigs</a>
                </li>
            </ul>
        </nav>


        @isset($gigs)

        @foreach ($gigs as $gig)

        <div class="my-projects-list">
            <div class="row">
                <div class="col-lg-10 flex-wrap">
                    <div class="projects-card flex-fill">
                        <div class="card-body">
                            <div class="projects-details align-items-center">
                                <div class="project-info">
                                    <span> {{$gig->orders}} Orders</span>
                                    <h2>{{$gig->title}}</h2>
                                    <div class="customer-info">
                                        <ul class="list-details">
                                         
                                            <li>
                                                <div class="slot">
                                                    <p>Created</p>
                                                    <h5>{{$gig->created_at}}</h5>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="project-hire-info">
                                    <div class="content-divider"></div>
                                    <div class="projects-amount">
                                        <h3>Price</h3>
                                        <h5>  {{$gig->price}}</h5>
                                    </div>
                                    <div class="content-divider"></div>
                                    <div class="projects-action text-center">
                                        <a href="{{route('Front.Gig.Edit',$gig->id)}}" class="projects-btn">Update </a>
                                        <a href="{{route('Front.Gig.delete',$gig->id)}}" class="projects-btn">Delete </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              
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
