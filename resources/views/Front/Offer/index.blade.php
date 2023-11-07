@extends('Layouts.Project')

@section('content')




    <div class="col-xl-12 col-md-12">
        <div class="page-title">
            <div class="row">
                <div class="col-md-6">
                    <h3>Manage Gigs</h3>
                </div>
                <div class="col-md-6 text-end">
                    <a href="{{route('offers.create')}}" class="btn btn-primary back-btn mb-4">Post an Offer</a>
                </div>
            </div>
        </div>
        <nav class="user-tabs project-tabs">
            <ul class="nav nav-tabs nav-tabs-bottom nav-justified">
                <li class="nav-item">
                    <a class="nav-link active" href="manage-projects.html">All Offers</a>
                </li>
            </ul>
        </nav>


        @isset($offers)
            <div class="row">
                @foreach ($offers as $offer)
                <div class="col-md-6 col-sm-12">

                    <div class="blog grid-blog">
                        <div class="blog-content">
                            <ul class="entry-meta meta-item">
                                <li>
                                    <div class="post-author">
                                        <a href="developer-details.html"><img src="assets/img/img-02.jpg" alt="Post Author"> <span> {{$offer->user->name}}</span></a>
                                    </div>
                                </li>
                                <li><i class="far fa-clock"></i> {{$offer->created_at}}</li>
                            </ul>
                            <h2 class="blog-title"><a href="blog-details.html">{{$offer->title}}</a></h2>
                            <p class="mb-0">{{$offer->description}}</p>
                            <br>
                            @if(count($offer->skills)>0)
                            <div class="proposal-card" style="padding-left: 30px">
                                <h5>Required Skills: </h5>
                                <ul>
                                    @foreach ($offer->skills as $skill)
                                        <li><strong>{{$skill->name}}</strong></li>

                                    @endforeach

                                </ul>
                            </div>
                                @else
                                    <strong class="warning-card">no skills required</strong>
                            @endif



                        </div>
                    </div>

                </div>

                    {{--        <div class="my-projects-list">--}}
                    {{--            <div class="row">--}}
                    {{--                <div class="col-lg-10 flex-wrap">--}}
                    {{--                    <div class="projects-card flex-fill">--}}
                    {{--                        <div class="card-body">--}}
                    {{--                            <div class="projects-details align-items-center">--}}
                    {{--                                <div class="project-info">--}}
                    {{--                                    <span> {{$offer->orders}} Orders</span>--}}
                    {{--                                    <h2>{{$offer->title}}</h2>--}}
                    {{--                                    <div class="customer-info">--}}
                    {{--                                        <ul class="list-details">--}}

                    {{--                                            <li>--}}
                    {{--                                                <div class="slot">--}}
                    {{--                                                    <p>Created</p>--}}
                    {{--                                                    <h5>{{$offer->created_at}}</h5>--}}
                    {{--                                                </div>--}}
                    {{--                                            </li>--}}
                    {{--                                        </ul>--}}
                    {{--                                    </div>--}}
                    {{--                                </div>--}}
                    {{--                                <div class="project-hire-info">--}}
                    {{--                                    <div class="content-divider"></div>--}}
                    {{--                                    <div class="projects-amount">--}}
                    {{--                                        <h3>Price</h3>--}}
                    {{--                                        <h5>  {{$gig->price}}</h5>--}}
                    {{--                                    </div>--}}
                    {{--                                    <div class="content-divider"></div>--}}
                    {{--                                    <div class="projects-action text-center">--}}
                    {{--                                        <a href="{{route('Front.Gig.Edit',$gig->id)}}" class="projects-btn">Update </a>--}}
                    {{--                                        <a href="{{route('Front.Gig.delete',$gig->id)}}" class="projects-btn">Delete </a>--}}
                    {{--                                    </div>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                    {{--                </div>--}}

                    {{--            </div>--}}
                    {{--        </div>--}}


                @endforeach
                @endisset
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
{{--    </div>--}}
    </div>
    </div>
@endsection
