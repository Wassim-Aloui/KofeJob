<header class="header">
    <nav class="navbar navbar-expand-lg header-nav">
        <div class="navbar-header">
            <a id="mobile_btn" href="javascript:void(0);">
                <span class="bar-icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
            </a>
            <a href="index.html" class="navbar-brand logo">
                <img src="{{ asset('Assets/img/logo.png') }}" class="img-fluid" alt="Logo">
            </a>
        </div>
        <div class="main-menu-wrapper">
            <div class="menu-header">
                <a href="index.html" class="menu-logo">
                    <img src="{{ asset('Assets/img/logo.png') }}" class="img-fluid" alt="Logo">
                </a>
                <a id="menu_close" class="menu-close" href="javascript:void(0);">
                    <i class="fas fa-times"></i>
                </a>
            </div>
            <ul class="main-nav">
                <li class="active has-submenu">
                    <a href="index.html">Home <i class="fas fa-chevron-down"></i></a>
                    <ul class="submenu">
                        <li class="active"><a href="index.html">Home</a></li>
                        <li><a href="index-2.html">Home-2</a></li>
                        <li><a href="index-3.html">Home-3</a></li>
                        <li><a href="index-4.html">Home-4</a></li>
                        <li><a href="index-5.html">Home-5</a></li>
                    </ul>
                </li>
                <li class="has-submenu">
                    <a href>For Employers <i class="fas fa-chevron-down"></i></a>
                    <ul class="submenu">
                        <li class="has-submenu">
                            <a href="#">Offer</a>
                            <ul class="submenu">
                                <li><a href="{{route('offers.create')}}">create</a></li>
                                <li><a href="{{route('offers.index')}}">Show me</a></li>
                            </ul>
                        </li>
                        <li><a href="{{route('Front.Condidat.index')}}">Condidature</a></li>
                        <li><a href="dashboard.html">Dashboard</a></li>
                        <li><a href="company-details.html">Company Details</a></li>
                        <li><a href="manage-projects.html">Projects</a></li>
                        <li><a href="favourites.html">Favourites</a></li>
                        <li><a href="membership-plans.html">Membership</a></li>
                        <li><a href="milestones.html">Milestones</a></li>
                        <li><a href="chats.html">Chats</a></li>
                        <li><a href="review.html">Review</a></li>
                        <li><a href="deposit-funds.html">Payments</a></li>
                        <li><a href="verify-identity.html">Verify Identity</a></li>
                        <li><a href="profile-settings.html">Settings</a></li>
                    </ul>
                </li>
                <li class="has-submenu">
                    <a href>For Freelancer <i class="fas fa-chevron-down"></i></a>
                    <ul class="submenu">
                        <li class="has-submenu">
                            <a href="#">Projects</a>
                            <ul class="submenu">
                                <li><a href="{{ route('projet.indexFront') }}">Projects</a></li>
                                <li><a href="{{ route('projet.indexFront2') }}">Project Details</a></li>
                            </ul>
                        </li>
                        <li><a href="freelancer-dashboard.html">Dashboard</a></li>
                        <li><a href="developer-profile.html">My Profile</a></li>
                        <li><a href="developer-details.html">Freelancer Details</a></li>
                        <li><a href="freelancer-project-proposals.html">Projects</a></li>
                        <li><a href="freelancer-favourites.html">Favourites</a></li>
                        <li><a href="freelancer-membership.html">Membership</a></li>
                        <li><a href="freelancer-change-password.html">Change Password</a></li>
                        <li><a href="freelancer-chats.html">Chats</a></li>
                        <li><a href="freelancer-review.html">Review</a></li>
                        <li><a href="freelancer-withdraw-money.html">Payments</a></li>
                        <li><a href="freelancer-verify-identity.html">Verify Identity</a></li>
                        <li><a href="freelancer-profile-settings.html">Settings</a></li>
                    </ul>
                </li>
                <li class="has-submenu">
                    <a href>Pages <i class="fas fa-chevron-down"></i></a>
                    <ul class="submenu">
                        <li><a href="about.html">About us</a></li>
                        <li><a href="blank-page.html">Starter Page</a></li>
                        <li><a href="404-page.html">404 Page</a></li>
                        <li class="has-submenu">
                            <a href="invoices.html">Invoices</a>
                            <ul class="submenu">
                                <li><a href="freelancer-invoices.html">Invoices</a></li>
                                <li><a href="view-invoice.html">Invoice View</a></li>
                            </ul>
                        </li>
                        <li><a href="login.html">Login</a></li>
                        <li><a href="register.html">Register</a></li>
                        <li><a href="onboard-screen.html">Onboard Screen</a></li>
                        <li><a href="forgot-password.html">Forgot Password</a></li>
                        <li><a href="change-password.html">Change Password</a></li>
                    </ul>
                </li>
                <li class="has-submenu">
                    <a href>Blog <i class="fas fa-chevron-down"></i></a>
                    <ul class="submenu">
                    <li><a href="{{ route('Index')}}">Blog List</a></li>
                        <li><a href="blog-grid.html">Blog Grid</a></li>
                        <li><a href="blog-details.html">Blog Details</a></li>
                    </ul>
                </li>
                </li> 
    <li class="has-submenu">
    <a href>Alert <i class="fas fa-chevron-down"></i></a>
    <ul class="submenu">
    <li><a href="{{route('Front.Alerts.index')}}">My Alert</a></li>
    <li><a href="{{route('Front.Alert.Add')}}">Add Alert</a></li>
  
    </ul>
    <li>
    </li> 
              
            </ul>
        </div>
        <ul class="nav header-navbar-rht reg-head">

            @php
                $userWithRememberToken = App\Models\User::whereNotNull('remember_token')->first();
            @endphp

            @php
                $userWithRememberToken = App\Models\User::whereNotNull('remember_token')->first();
            @endphp

            @if ($userWithRememberToken)

                <li><a href="{{ route('Front.Gig.Add') }}" class="login-btn">Post a Gig</a></li>

                <li><a href="{{ route('logout') }}" class="logout-btn"><i class="material-icons">power_settings_new</i>Logout</a></li>


            @else

                <li><a href="{{ route('register') }}" class="reg-btn"><img src="{{ asset('Assets/img/icon/reg-icon.svg') }}"
                            class="me-1" alt="icon"> Register</a></li>
                <li><a href="{{ route('login') }}" class="log-btn"><img src="{{ asset('Assets/img/icon/lock-icon.svg') }}"
                            class="me-1" alt="icon"> Login</a></li>
            @endif


        </ul>
    </nav>
</header>
