<!-- BEGIN: Header-->
<nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-light bg-info navbar-shadow">
    <div class="navbar-wrapper">

        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mobile-menu d-md-none mr-auto">
                    <a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#">
                        <i class="ft-menu font-large-1"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="navbar-brand" href="{{ route('backsite.dashboard.index') }}">
                        <img class="brand-logo" alt="modern admin logo" src="{{ asset('/assets/backsite/app-assets/images/logo/logo.png') }}">
                        <h3 class="brand-text">Backoffice</h3>
                    </a>

                <li class="nav-item d-md-none">
                    <a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile">
                        <i class="la la-ellipsis-v"></i>
                    </a>
                </li>
            </ul>
        </div>

        <div class="navbar-container content">
            <div class="collapse navbar-collapse" id="navbar-mobile">
                <ul class="nav navbar-nav mr-auto float-left">
                    <li class="nav-item d-none d-md-block">
                        <a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#">
                            <i class="ft-menu"></i>
                        </a>
                    </li>
                    <li class="nav-item d-none d-lg-block">
                        <a class="nav-link nav-link-expand" href="#">
                            <i class="ficon ft-maximize"></i>
                        </a>
                    </li>
                </ul>
                <ul class="nav navbar-nav float-right">
                    <li class="dropdown dropdown-notification nav-item">
                        <a class="nav-link nav-link-label" href="#" data-toggle="dropdown">
                            <i class="ficon ft-bell"></i>
                            <span class="badge badge-pill badge-danger badge-up badge-glow">5</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                            <li class="dropdown-menu-header">
                                <h6 class="dropdown-header m-0"><span class="grey darken-2">Notifications</span></h6>
                                <span class="notification-tag badge badge-danger float-right m-0">5 New</span>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown dropdown-notification nav-item">
                        <a class="nav-link nav-link-label" href="#" data-toggle="dropdown">
                            <i class="ficon ft-mail"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                            <li class="dropdown-menu-header">
                                <h6 class="dropdown-header m-0">
                                    <span class="grey darken-2">Messages</span>
                                </h6>
                                <span class="notification-tag badge badge-warning float-right m-0">4 New</span>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown dropdown-user nav-item">
                        <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                            <span class="mr-1 user-name text-bold-700">{{ Auth::user()->name }}</span>
                            <span class="avatar avatar-online">
                                <img src="{{ asset('/assets/backsite/app-assets/images/portrait/small/avatar-s-19.png') }}"
                                    alt="avatar" />
                                    <i></i>
                            </span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="user-profile.html">
                                <i class="ft-user"></i> Edit Profile
                            </a>
                            <div class="dropdown-divider">
                                </div>
                                <a 
                                class="dropdown-item" 
                                href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i class="ft-power"></i> Logout
                                    <form id="logout-form" action="{{ route('logout')}}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<!-- END: Header-->
