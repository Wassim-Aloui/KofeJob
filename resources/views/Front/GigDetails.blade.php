@extends('Layouts.site')

@section('content')


    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="developer-box project-box-view">
                        <h2>{{ $gig->title }}</h2>
                        <h3><a href="company-profile.html">Amaze Tech</a> <i class="fas fa-check-circle"></i></h3>
                        <ul class="develope-list-rate project-rate align-items-center">
                            <li><i class="fas fa-clock"></i>Poster : {{ $gig->created_at->format('Y-m-d') }}</li>
                            <li class="full-time">Full time</li>
                        </ul>
                        <div class="proposal-box">
                            <div class="proposal-value">
                               
                                <h4>${{ $gig->price }}</h4>
                              
                            </div>
                        </div>
                    </div>
                    <div class="pro-view project-details-view">

                      
                       
                        <div class="pro-post widget-box">
                            <h3 class="pro-title">Gig Description</h3>
                            <div class="pro-content">
                                <p>{{ $gig->description }}</p>

                            </div>
                        </div>


                        <div class="pro-post project-widget widget-box">
                            <h3 class="pro-title">Skills Required</h3>
                            <div class="pro-content">
                                <div class="tags">
                                    <a href="javascript:void(0);"><span class="badge badge-pill badge-design">After
                                            Effects</span></a>
                                    <a href="javascript:void(0);"><span
                                            class="badge badge-pill badge-design">Illustrator</span></a>
                                    <a href="javascript:void(0);"><span
                                            class="badge badge-pill badge-design">HTML</span></a>
                                    <a href="javascript:void(0);"><span
                                            class="badge badge-pill badge-design">Whiteboard</span></a>
                                </div>
                            </div>
                        </div>


                        <div class="pro-post project-widget widget-box">
                            <h3 class="pro-title">Your Raiting</h3>
                            @if (Cache::has('loggedInUserId'))
                            @if ($userRating)
                                <p>You have already rated this gig.</p>
                            @else
                            <div class="pro-content">
                                <form action="{{route('Raiting.store')}}" method="POST">
                                    @csrf
                                    <input type="hidden" name="gig_id" value="{{$gig->id}}">
                                <div class="rating-css">
                                    <div class="star-icon">
                                        <input type="radio" value="1" name="gig_rating" checked id="rating1">
                                        <label for="rating1" class="fa fa-star"></label>
                                        <input type="radio" value="2" name="gig_rating" id="rating2">
                                        <label for="rating2" class="fa fa-star"></label>
                                        <input type="radio" value="3" name="gig_rating" id="rating3">
                                        <label for="rating3" class="fa fa-star"></label>
                                        <input type="radio" value="4" name="gig_rating" id="rating4">
                                        <label for="rating4" class="fa fa-star"></label>
                                        <input type="radio" value="5" name="gig_rating" id="rating5">
                                        <label for="rating5" class="fa fa-star"></label>
                                    </div>



                                <div class="title-content pb-0">
                                    <div class="title-detail">
                                        <h3>Write your opinion about this Gig </h3>
                                        <div class="form-group mb-0">
                                            <textarea id="message" name="message" class="form-control summernote" rows="5" placeholder="Feel free..."></textarea>
                                           
        
                                        </div>
                                    </div>
                                </div>

                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                                </form>    

                            </div>

                            @endif


                            @else
                            <p>Please log in to rate this gig.</p>
                        @endif

                        </div>





                        {{-- <center><div>  <a  href="{{ route('gig.ratings', ['gigId' => $gig->id]) }}" class="btn-cart" tabindex="-1">Show all ratings</a></div></center> --}}


                        <div class="pro-post project-widget widget-box">
                            <h3 class="pro-title">Ratings</h3>
                            <div class="pro-content">
                                @if ($ratings->count() > 0)
                                    <ul style="list-style: none;">
                                        @foreach ($ratings as $rating)
                                            <li>
                                                {{-- <strong>Rating:</strong> {{ $rating->gig_rating }} --}}

                                                <p>
                                                    @if ($rating->user_id == Cache::get('loggedInUserId'))
                                                    <strong>You:</strong>
                                                    @else
                                                    <strong>{{ $rating->user->name }} :</strong>
                                                    @endif
                                                    {{ $rating->message }}</p>
                                            </li>
                                        @endforeach
                                    </ul>
                                @else
                                    <p>No ratings available for this gig.</p>
                                @endif
                            </div>
                        </div>
                        
                    </div>
                    
                </div>

                <div class="col-lg-4 col-md-12 sidebar-right theiaStickySidebar project-client-view">
                    <div class="freelance-widget widget-author mt-2 pro-post">
                        <div class="freelance-content">
                            <div class="author-heading">
                                <div class="profile-img">
                                    <a href="company-profile.html">
                                        <img src="{{ asset('Assets/img/company/img-1.png') }}" alt="author">
                                        <span class="project-verified"><i class="fas fa-check-circle"></i></span>
                                    </a>
                                </div>
                                <div class="profile-name">
                                    <div class="author-location"><a href="company-profile.html">Amaze Tech </a></div>
                                </div>
                                <div class="freelance-info">
                                    <h4>UI/UX Designer</h4>
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star "></i>
                                        <i class="fas fa-star"></i>
                                        <span class="average-rating">4.7 (32)</span>
                                    </div>
                                    <div class="freelance-location"><i class="fas fa-map-marker-alt me-1"></i>Alabama, USA
                                    </div>
                                </div>
                                <button type="button" class="btn btn-lg btn-primary rounded-pill"><i
                                        class="fab fa-whatsapp me-2"></i>Follow</button>
                                <div class="follow-details">
                                    <div class="row">
                                        <div class="col-6 py-4 text-center">

                                            <h6 class="text-uppercase text-muted">
                                                Following
                                            </h6>

                                            <h4 class="mb-0">49</h4>
                                        </div>
                                        <div class="col-6 py-4 text-center border-start">

                                            <h6 class="text-uppercase text-muted">
                                                Followers
                                            </h6>

                                            <h4 class="mb-0">422</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="pro-member">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="text-start mb-0">
                                                Member Since
                                            </h6>
                                        </div>
                                        <div class="col-auto">
                                            <span>January 1, 2021</span>
                                        </div>
                                    </div>
                                    <hr class="my-3">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class=" text-start mb-0">
                                                Total Jobs
                                            </h6>
                                        </div>
                                        <div class="col-auto">
                                            <span>127</span>
                                        </div>
                                    </div>
                                    <hr class="my-3">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class=" text-start mb-0">
                                                <i class="fab fa-instagram me-2"></i>Instagram
                                            </h6>
                                        </div>
                                        <div class="col-auto">
                                            <span>@johnthedon</span>
                                        </div>
                                    </div>
                                    <hr class="my-3">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="text-start mb-0">
                                                <i class="fab fa-linkedin me-2"></i>LinkedIn
                                            </h6>
                                        </div>
                                        <div class="col-auto">
                                            <span>johnsullivan</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="pro-post widget-box post-widget pb-0 client-about">
                        <h3 class="pro-title">About The CLIENT</h3>
                        <div class="pro-content">
                            <div class="row">
                                <div class="col-6 d-flex">
                                    <div class="pro-post client-list">
                                        <p>Jobs Posted</p>
                                        <h6 class="bg-red">48</h6>
                                    </div>
                                </div>
                                <div class="col-6 d-flex">
                                    <div class="pro-post client-list">
                                        <p>Hire rate</p>
                                        <h6 class="bg-blue">22</h6>
                                    </div>
                                </div>
                                <div class="col-6 d-flex">
                                    <div class="pro-post client-list">
                                        <p>open jobs</p>
                                        <h6 class="bg-violet">48</h6>
                                    </div>
                                </div>
                                <div class="col-6 d-flex">
                                    <div class="pro-post client-list">
                                        <p>Total spent</p>
                                        <h6 class="bg-yellow">22</h6>
                                    </div>
                                </div>
                                <div class="col-6 d-flex">
                                    <div class="pro-post client-list">
                                        <p>Hires</p>
                                        <h6 class="bg-pink">48</h6>
                                    </div>
                                </div>
                                <div class="col-6 d-flex">
                                    <div class="pro-post client-list">
                                        <p>Active</p>
                                        <h6 class="bg-green">22</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="pro-post widget-box post-widget link-project">
                        <h3 class="pro-title">Profile Link</h3>
                        <div class="pro-content pt-0">
                            <div class="form-group profile-group mb-0">
                                <div class="input-group">
                                    <input type="text" class="form-control"
                                        value="https://www.kofejob.com/developer/daren/12454687">
                                    <div class="input-group-append">
                                        <button class="btn btn-success sub-btn" type="submit"><i
                                                class="fa fa-clone"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="pro-post widget-box post-widget develop-social-link">
                        <h3 class="pro-title">Share</h3>
                        <ul class="social-link-profile">
                            <li><a href="#"><i class="fas fa-share-alt"></i></a></li>
                            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fab fa-telegram"></i></a></li>
                        </ul>
                    </div>

                </div>

            </div>
        </div>
    </div>


    @push('scripts')
    <script src="{{ asset('Assets/js/modal.js') }}"></script>
@endpush

@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('Assets/css/rating.css') }}">
@endpush
