@extends('Layouts.Project')
@section('content')




    <div class="col-xl-9 col-md-8">
        <div class="page-title">
            <h3>Manage Projects</h3>
        </div>
        <nav class="user-tabs project-tabs">
            <ul class="nav nav-tabs nav-tabs-bottom nav-justified">
                <li class="nav-item">
                    <a class="nav-link" href="manage-projects.html">All Projects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pending-projects.html">Pending Projects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ongoing-projects.html">Ongoing Projects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="completed-projects.html">Completed Projects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="cancelled-projects.html">Cancelled Projects</a>
                </li>
            </ul>
        </nav>

        <div class="my-projects-list">
            <div class="row">
                <div class="col-lg-10 flex-wrap">
                    <div class="projects-card flex-fill">
                        <div class="card-body">
                            <div class="projects-details align-items-center">
                                <div class="project-info">
                                    <span>Dreamguystech</span>
                                    <h2>Website Designer Required For Directory Theme</h2>
                                    <div class="customer-info">
                                        <ul class="list-details">
                                            <li>
                                                <div class="slot">
                                                    <p>Price type</p>
                                                    <h5>Fixed</h5>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="slot">
                                                    <p>Location</p>
                                                    <h5><img src="assets/img/en.png" height="13" alt="Lang"> UK</h5>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="slot">
                                                    <p>Expiry</p>
                                                    <h5>4 Days Left</h5>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="project-hire-info">
                                    <div class="content-divider"></div>
                                    <div class="projects-amount">
                                        <h3>$500.00</h3>
                                        <h5>in 12 Days</h5>
                                    </div>
                                    <div class="content-divider"></div>
                                    <div class="projects-action text-center">
                                        <a href="view-project-detail.html" class="projects-btn">View Details </a>
                                        <h4 class="completed-badge"><span><i class="fas fa-medal me-2"></i></span>Completed</h4>
                                        <div class="rating red mt-2">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 d-flex flex-wrap">
                    <div class="projects-card flex-fill">
                        <div class="card-body p-2">
                            <div class="prj-proposal-count text-center hired">
                                <h3>Hired</h3>
                                <img src="assets/img/developer/developer-01.jpg" alt class="img-fluid">
                                <p class="mb-0">Hannah Finn</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>





        <div class="my-projects-list">
            <div class="row">
                <div class="col-lg-10 flex-wrap">
                    <div class="projects-card flex-fill">
                        <div class="card-body">
                            <div class="projects-details align-items-center">
                                <div class="project-info">
                                    <span>Dreamguystech</span>
                                    <h2>Laravel Backend Developer to finish ongoing project</h2>
                                    <div class="customer-info">
                                        <ul class="list-details">
                                            <li>
                                                <div class="slot">
                                                    <p>Price type</p>
                                                    <h5>Fixed</h5>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="slot">
                                                    <p>Location</p>
                                                    <h5><img src="assets/img/en.png" height="13" alt="Lang"> UK</h5>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="slot">
                                                    <p>Expiry</p>
                                                    <h5>4 Days Left</h5>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="project-hire-info">
                                    <div class="content-divider"></div>
                                    <div class="projects-amount">
                                        <h3>$500.00</h3>
                                        <h5>in 12 Days</h5>
                                    </div>
                                    <div class="content-divider"></div>
                                    <div class="projects-action text-center">
                                        <a href="view-project-detail.html" class="projects-btn">View Details </a>
                                        <h4 class="completed-badge"><span><i class="fas fa-medal me-2"></i></span>Completed</h4>
                                        <div class="rating red mt-2">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 d-flex flex-wrap">
                    <div class="projects-card flex-fill">
                        <div class="card-body p-2">
                            <div class="prj-proposal-count text-center hired">
                                <h3>Hired</h3>
                                <img src="assets/img/developer/developer-01.jpg" alt class="img-fluid">
                                <p class="mb-0">Hannah Finn</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="my-projects-list">
            <div class="row">
                <div class="col-lg-10 flex-wrap">
                    <div class="projects-card flex-fill">
                        <div class="card-body">
                            <div class="projects-details align-items-center">
                                <div class="project-info">
                                    <span>Dreamguystech</span>
                                    <h2>Website Designer Required For Directory Theme</h2>
                                    <div class="customer-info">
                                        <ul class="list-details">
                                            <li>
                                                <div class="slot">
                                                    <p>Price type</p>
                                                    <h5>Fixed</h5>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="slot">
                                                    <p>Location</p>
                                                    <h5><img src="assets/img/en.png" height="13" alt="Lang"> UK</h5>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="slot">
                                                    <p>Expiry</p>
                                                    <h5>4 Days Left</h5>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="project-hire-info">
                                    <div class="content-divider"></div>
                                    <div class="projects-amount">
                                        <h3>$500.00</h3>
                                        <h5>in 12 Days</h5>
                                    </div>
                                    <div class="content-divider"></div>
                                    <div class="projects-action text-center">
                                        <a href="view-project-detail.html" class="projects-btn">View Details </a>
                                        <h4 class="completed-badge"><span><i class="fas fa-medal me-2"></i></span>Completed</h4>
                                        <a data-bs-toggle="modal" href="#file" class="rating-btn">Write Review</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 d-flex flex-wrap">
                    <div class="projects-card flex-fill">
                        <div class="card-body p-2">
                            <div class="prj-proposal-count text-center hired">
                                <h3>Hired</h3>
                                <img src="assets/img/developer/developer-01.jpg" alt class="img-fluid">
                                <p class="mb-0">Hannah Finn</p>
                            </div>
                        </div>
                    </div>
                </div>
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
