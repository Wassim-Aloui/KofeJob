@extends('Layouts.site')


@section('content')
   
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-4 col-xl-3 theiaStickySidebar">

                    <div class="card search-filter">
                        <div class="card-header d-flex justify-content-between">
                            <h4 class="card-title mb-0">FILTERS</h4>
                            <a href="javascript:void(0);">Clear All</a>
                        </div>
                        <div class="card-body">
                            <div class="filter-widget">
                                <h4>Category</h4>
                                <div class="form-group">
                                    <select class="form-control select">
                                        <option>Select Category</option>
                                        <option>Developer</option>
                                        <option>UI Developer</option>
                                        <option>React Developer</option>
                                        <option>.Net Developer</option>
                                    </select>
                                </div>
                            </div>
                            <div class="filter-widget">
                                <h4>Location</h4>
                                <div class="form-group">
                                    <select class="form-control select">
                                        <option>Country, City, Zipcode</option>
                                        <option>UK</option>
                                        <option>London</option>
                                    </select>
                                </div>
                            </div>
                            <div class="filter-widget">
                                <h4>Completed Projects</h4>
                                <div class="form-group">
                                    <select class="form-control select">
                                        <option>Select Projects</option>
                                        <option>Node Projects</option>
                                        <option>UI Projects</option>
                                    </select>
                                </div>
                            </div>
                            <div class="filter-widget">
                                <h4>Pricing Type</h4>
                                <div class="form-group">
                                    <select class="form-control select">
                                        <option>Hourly Rate</option>
                                        <option>Full Day Rate</option>
                                        <option>Half Day Rate</option>
                                    </select>
                                </div>
                            </div>
                            <div class="filter-widget">
                                <h4>Add Skills</h4>
                                <div class="form-group">
                                    <span class="badge badge-pill badge-skill">+ Web Design</span>
                                    <span class="badge badge-pill badge-skill">+ UI Design</span>
                                    <span class="badge badge-pill badge-skill">+ Node Js</span>
                                    <span class="badge badge-pill badge-skill">+ Angular</span>
                                    <span class="badge badge-pill badge-skill">+ Wordpress</span>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="filter-widget">
                                <h4>Avalability</h4>
                                <div>
                                    <label class="custom_check">
                                        <input type="checkbox" name="select_time" checked>
                                        <span class="checkmark"></span> Hourly
                                    </label>
                                </div>
                                <div>
                                    <label class="custom_check">
                                        <input type="checkbox" name="select_time">
                                        <span class="checkmark"></span> Part Time
                                    </label>
                                </div>
                                <div>
                                    <label class="custom_check">
                                        <input type="checkbox" name="select_time">
                                        <span class="checkmark"></span> Full Time
                                    </label>
                                </div>
                            </div>
                            <div class="filter-widget">
                                <h4>Experience</h4>
                                <div>
                                    <label class="custom_check">
                                        <input type="checkbox" name="select_specialist">
                                        <span class="checkmark"></span> 0-1 years
                                    </label>
                                </div>
                                <div>
                                    <label class="custom_check">
                                        <input type="checkbox" name="select_exp" checked>
                                        <span class="checkmark"></span> 2-5 years
                                    </label>
                                </div>
                                <div>
                                    <label class="custom_check">
                                        <input type="checkbox" name="select_exp">
                                        <span class="checkmark"></span> 5-8 years
                                    </label>
                                </div>
                                <div>
                                    <label class="custom_check">
                                        <input type="checkbox" name="select_exp">
                                        <span class="checkmark"></span> 9-12 years
                                    </label>
                                </div>
                                <div>
                                    <label class="custom_check">
                                        <input type="checkbox" name="select_exp">
                                        <span class="checkmark"></span> Mastered
                                    </label>
                                </div>
                                <div>
                                    <label class="custom_check">
                                        <input type="checkbox" name="select_exp">
                                        <span class="checkmark"></span> Professional
                                    </label>
                                </div>
                            </div>
                            <div class="filter-widget">
                                <h4>Hourly Rate</h4>
                                <div id="slider-range"></div>
                                <div class="row slider-labels">
                                    <div class="col-xs-12 caption">
                                        <span id="slider-range-value1"></span> - <span id="slider-range-value2"></span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <form>
                                            <input type="hidden" name="min-value" value>
                                            <input type="hidden" name="max-value" value>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="filter-widget">
                                <h4>Keywords</h4>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Enter Keywords">
                                </div>
                            </div>
                            <div class="filter-widget">
                                <h4>Currency</h4>
                                <div class="form-group">
                                    <select class="form-control select">
                                        <option>USD</option>
                                        <option>Euro</option>
                                    </select>
                                </div>
                            </div>
                            <div class="btn-search">
                                <button type="button" class="btn btn-block">Search</button>
                            </div>
                        </div>
                    </div>

                </div>

                

                <div class="col-md-12 col-lg-8 col-xl-9">
                    <div class="row">


                        @isset($gigs)

                        @foreach ($gigs as $gig)

                        <div class="col-md-6 col-lg-12 col-xl-6">
                            <div class="freelance-widget widget-author">
                                <div class="freelance-content">
                                    <a data-bs-toggle="modal" href="#rating" class="favourite"><i
                                            class="fas fa-star"></i></a>
                                    <div class="author-heading">
                                        <div class="profile-img">
                                            <a href="#">
                                                <img src="Assets/img/company/img-1.png" alt="author">
                                            </a>
                                        </div>
                                        <div class="profile-name">
                                            <div class="author-location">{{ $gig->name }} <i
                                                    class="fas fa-check-circle text-success verified"></i></div>
                                        </div>
                                        <div class="freelance-info">
                                            <h3><a href="#">{{ $gig->title }}</a></h3>
                                            <div class="freelance-location mb-1"><i class="fas fa-clock"></i> Posted Just
                                                Now</div>
                                            <div class="freelance-location"><i
                                                    class="fas fa-map-marker-alt me-1"></i>Georgia, USA</div>
                                        </div>
                                       
                                        <div class="freelancers-price">${{ $gig->price }}</div>
                                    </div>
                                    <div class="counter-stats">
                                        {{-- <div class="rating-css">
                                            <div class="star-icon">
                                                <input type="radio" value="1" name="gig_rating" checked id="rating1">
                                                <label for="rating1" class="fa fa-star"></label>
                                                <input type="radio" value="2" name="gig_rating" checked id="rating2">
                                                <label for="rating2" class="fa fa-star"></label>
                                                <input type="radio" value="3" name="gig_rating" checked id="rating3">
                                                <label for="rating3" class="fa fa-star"></label>
                                                <input type="radio" value="4" name="gig_rating" checked id="rating4">
                                                <label for="rating4" class="fa fa-star"></label>
                                                <input type="radio" value="5" name="gig_rating" checked id="rating5">
                                                <label for="rating5" class="fa fa-star"></label>
                                            </div>

                                        </div> --}}



                                        <ul>
                                            <li>
                                                <h3 class="counter-value">{{ date('F j, Y', strtotime($gig->created_at)) }}</h3>
                                                <h5>Creation</h5>
                                            </li>
                                            <li>
                                                <h3 class="counter-value">{{ $gig->orders }}</h3>
                                                <h5>Orders</h5>
                                            </li>
                                            <li>
                                                <h3 class="counter-value"><span class="jobtype">Full Time</span></h3>
                                                <h5>Job Type</h5>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="cart-hover">
                                    <a  href="{{ route('gig.show', ['id' => $gig->id]) }}" class="btn-cart" tabindex="-1">Order Now</a>
                                </div>
                            </div>
                        </div>


                        @endforeach
                        @endisset
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
