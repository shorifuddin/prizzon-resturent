<!DOCTYPE html>
    <html lang="en">

<head>
        <meta charset="utf-8" />
        <title>Dashboard | Shorif Uddin</title>

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('backend')}}/assets/images/favicon.ico">

        <!-- third party css -->
        <link href="{{asset('backend')}}/assets/css/vendor/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
        <!-- third party css end -->
        @yield('coustom_css')
        <!-- App css -->
        <link href="{{asset('backend')}}/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="{{asset('backend')}}/assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-style"/>
        <link href="{{asset('backend')}}/assets/css/style.css" rel="stylesheet" type="text/css" id="app-style"/>

    </head>

    <body  data-layout-color="light" data-leftbar-theme="dark" data-layout-mode="fluid" data-rightbar-onstart="true">
        <!-- Begin page -->
        <div class="wrapper">
            <!-- ========== Left Sidebar Start ========== -->
            <div class="leftside-menu">

                <!-- LOGO -->
                <a href="{{ route('dashboard') }}" class="logo text-center logo-light">
                    {{-- <span class="logo-lg">
                        <img src="{{asset('backend')}}/assets/images/logo.png" alt="" height="16">
                    </span>
                    <span class="logo-sm">
                        <img src="{{asset('backend')}}/assets/images/logo_sm.png" alt="" height="16">
                    </span> --}}
                    <span class="account-user-avatar">
                        {{-- <img class="img-fluid rounded-circle" src="{{ asset('upload/avater.jpg') }}"> --}}
                        <img src="{{asset('frontend')}}/images/header-logo.png" alt="user-image" >
                    </span>
                </a>

                <div class="h-100" id="leftside-menu-container" data-simplebar>

                    <!--- Sidemenu -->
                    <ul class="side-nav">

                        <li class="side-nav-title side-nav-item">Navigation</li>

                        <li class="side-nav-item">
                            <a href="{{ route('dashboard') }}" class="side-nav-link">
                                <i class="uil-home-alt"></i>
                               <span> Dashboards </span>
                            </a>

                        </li>
                        @if(Auth::user()->role=='1' || Auth::user()->role=='2')
                        <li class="side-nav-title side-nav-item">User</li>
                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarTasks" aria-expanded="false" aria-controls="sidebarTasks" class="side-nav-link">
                                <i class="uil-users-alt"></i>
                                <span> User </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarTasks">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="{{ route('alluser') }}">All User</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('adduser') }}">Add User</a>
                                    </li>

                                </ul>
                            </div>
                        </li>
                        @endif
                        @if(Auth::user()->role=='1' || Auth::user()->role=='2')
                        <li class="side-nav-title side-nav-item">Reservation</li>
                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebar_reserv" aria-expanded="false" aria-controls="sidebar_reserv" class="side-nav-link">
                                <i class="uil-crockery"></i>
                                <span> Reservation </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebar_reserv">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="{{ route('rtable_approved') }}">Aproved Reservation</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('rtable_request') }}">Request Reservation</a>
                                    </li>

                                </ul>
                            </div>
                        </li>
                        @endif
                        @if(Auth::user()->role=='1' || Auth::user()->role=='2')
                        <li class="side-nav-title side-nav-item">WEBSITE HOME-PAGE ITEMS</li>
                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarfeature" aria-expanded="false" aria-controls="sidebarTasks" class="side-nav-link">
                                <i class=" uil-sitemap"></i>
                                <span> Feature </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarfeature">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="{{ route('feature_all') }}">All Feature</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('feature_add') }}">Add Feature</a>
                                    </li>

                                </ul>
                            </div>
                        </li>
                        @endif
                        @if(Auth::user()->role=='1' || Auth::user()->role=='2')
                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarSpecility" aria-expanded="false" aria-controls="sidebarTasks" class="side-nav-link">
                                <i class="uil-award"></i>
                                <span> Our Specility </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarSpecility">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="{{ route('special_all') }}">All Specility</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('special_add') }}">Add Specility</a>
                                    </li>

                                </ul>
                            </div>
                        </li>
                        @endif
                        @if(Auth::user()->role=='1' || Auth::user()->role=='2')
                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarmenu" aria-expanded="false" aria-controls="sidebarTasks" class="side-nav-link">
                                <i class="uil-invoice"></i>
                                <span> Menus </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarmenu">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="{{ route('menus_all') }}">All Menus</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('menus_add') }}">Add Menus</a>
                                    </li>

                                </ul>
                            </div>
                        </li>
                        @endif
                        @if(Auth::user()->role=='1' || Auth::user()->role=='2')
                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarchef" aria-expanded="false" aria-controls="sidebarTasks" class="side-nav-link">
                                <i class=" uil-user-square"></i>
                                <span> CHEF </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarchef">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="{{ route('chef_all') }}">All CHEF</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('chef_add') }}">Add CHEF</a>
                                    </li>

                                </ul>
                            </div>
                        </li>
                        @endif
                        @if(Auth::user()->role=='1' || Auth::user()->role=='2')
                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarevent" aria-expanded="false" aria-controls="sidebarTasks" class="side-nav-link">
                                <i class="uil-clock-seven"></i>
                                <span> Event </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarevent">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="{{ route('event_all') }}">All Event</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('event_add') }}">Add Event</a>
                                    </li>

                                </ul>
                            </div>
                        </li>
                        @endif
                        @if(Auth::user()->role=='1' || Auth::user()->role=='2')
                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarCategory" aria-expanded="false" aria-controls="sidebarTasks" class="side-nav-link">
                                <i class="uil-invoice"></i>
                                <span> Category </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarCategory">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="{{ route('category_all') }}">All Category</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('category_add') }}">Add Category</a>
                                    </li>

                                </ul>
                            </div>
                        </li>
                        @endif
                        @if(Auth::user()->role=='1' || Auth::user()->role=='2')
                        <li class="side-nav-title side-nav-item">WEBSITE INFORMATION</li>
                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarmanage" aria-expanded="false" aria-controls="sidebarmagae" class="side-nav-link">
                                <i class="uil-bright"></i>
                                <span>Website Information </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarmanage">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="{{ route('contact_show') }}">Contact Info</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('social_show') }}">SocialMedia Info</a>
                                    </li>

                                </ul>
                            </div>
                        </li>
                        @endif

                        <li class="side-nav-title side-nav-item">Custom</li>
                        @if(Auth::user()->role=='1' || Auth::user()->role=='2')
                        <li class="side-nav-item">
                            <a href="{{ route('recycle') }}" class="side-nav-link">
                                <i class="uil-trash-alt"></i>
                               <span> Recycle </span>
                            </a>
                        </li>
                        @endif
                        <li class="side-nav-item">
                            <a href="{{ route('/') }}" target="_blank" class="side-nav-link">
                                <i class="uil-globe"></i>
                               <span> Live Site </span>
                            </a>
                        </li>

                        <li class="side-nav-item">
                            <a href="{{ route('logout') }}" class="side-nav-link">
                                <i class="uil-exit"></i>
                               <span> Log Out </span>
                            </a>
                        </li>

                    </ul>

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">
                    <!-- Topbar Start -->
                    <div class="navbar-custom">
                        <ul class="list-unstyled topbar-menu float-end mb-0">
                            <li class="dropdown notification-list d-lg-none">
                                <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <i class="dripicons-search noti-icon"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-animated dropdown-lg p-0">
                                    <form class="p-3">
                                        <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                    </form>
                                </div>
                            </li>
                            <li class="dropdown notification-list topbar-dropdown">
                                <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <img src="{{asset('backend')}}/assets/images/flags/us.jpg" alt="user-image" class="me-0 me-sm-1" height="12">
                                    <span class="align-middle d-none d-sm-inline-block">English</span> <i class="mdi mdi-chevron-down d-none d-sm-inline-block align-middle"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu">

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <img src="{{asset('backend')}}/assets/images/flags/germany.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">German</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <img src="{{asset('backend')}}/assets/images/flags/italy.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Italian</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <img src="{{asset('backend')}}/assets/images/flags/spain.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Spanish</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <img src="{{asset('backend')}}/assets/images/flags/russia.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Russian</span>
                                    </a>

                                </div>
                            </li>

                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <i class="dripicons-bell noti-icon"></i>
                                    <span class="noti-icon-badge"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated dropdown-lg">

                                    <!-- item-->
                                    <div class="dropdown-item noti-title px-3">
                                        <h5 class="m-0">
                                            <span class="float-end">
                                                <a href="javascript: void(0);" class="text-dark">
                                                    <small>Clear All</small>
                                                </a>
                                            </span>Notification
                                        </h5>
                                    </div>

                                    <div class="px-3" style="max-height: 300px;" data-simplebar>

                                        <h5 class="text-muted font-13 fw-normal mt-0">Today</h5>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item p-0 notify-item card read-noti shadow-none mb-2">
                                            <div class="card-body">
                                                <span class="float-end noti-close-btn text-muted"><i class="mdi mdi-close"></i></span>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0">
                                                        <div class="notify-icon bg-info">
                                                            <i class="mdi mdi-account-plus"></i>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1 text-truncate ms-2">
                                                        <h5 class="noti-item-title fw-semibold font-14">Admin <small class="fw-normal text-muted ms-1">1 hours ago</small></h5>
                                                        <small class="noti-item-subtitle text-muted">New user registered</small>
                                                    </div>
                                                  </div>
                                            </div>
                                        </a>

                                        <h5 class="text-muted font-13 fw-normal mt-0">Yesterday</h5>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item p-0 notify-item card read-noti shadow-none mb-2">
                                            <div class="card-body">
                                                <span class="float-end noti-close-btn text-muted"><i class="mdi mdi-close"></i></span>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0">
                                                        <div class="notify-icon">
                                                            <img src="{{asset('backend')}}/assets/images/users/avatar-2.jpg" class="img-fluid rounded-circle" alt="" />
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1 text-truncate ms-2">
                                                        <h5 class="noti-item-title fw-semibold font-14">Cristina Pride <small class="fw-normal text-muted ms-1">1 day ago</small></h5>
                                                        <small class="noti-item-subtitle text-muted">Hi, How are you? What about our next meeting</small>
                                                    </div>
                                                  </div>
                                            </div>
                                        </a>

                                    </div>

                                    <!-- All-->
                                    <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item border-top border-light py-2">
                                        View All
                                    </a>

                                </div>
                            </li>

                            <li class="dropdown notification-list d-none d-sm-inline-block">
                                <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <i class="dripicons-view-apps noti-icon"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated dropdown-lg p-0">

                                    <div class="p-2">
                                        <div class="row g-0">
                                            <div class="col">
                                                <a class="dropdown-icon-item" href="#">
                                                    <img src="{{asset('backend')}}/assets/images/brands/slack.png" alt="slack">
                                                    <span>Slack</span>
                                                </a>
                                            </div>
                                            <div class="col">
                                                <a class="dropdown-icon-item" href="#">
                                                    <img src="{{asset('backend')}}/assets/images/brands/github.png" alt="Github">
                                                    <span>GitHub</span>
                                                </a>
                                            </div>
                                            <div class="col">
                                                <a class="dropdown-icon-item" href="#">
                                                    <img src="{{asset('backend')}}/assets/images/brands/dribbble.png" alt="dribbble">
                                                    <span>Dribbble</span>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="row g-0">
                                            <div class="col">
                                                <a class="dropdown-icon-item" href="#">
                                                    <img src="{{asset('backend')}}/assets/images/brands/bitbucket.png" alt="bitbucket">
                                                    <span>Bitbucket</span>
                                                </a>
                                            </div>
                                            <div class="col">
                                                <a class="dropdown-icon-item" href="#">
                                                    <img src="{{asset('backend')}}/assets/images/brands/dropbox.png" alt="dropbox">
                                                    <span>Dropbox</span>
                                                </a>
                                            </div>
                                            <div class="col">
                                                <a class="dropdown-icon-item" href="#">
                                                    <img src="{{asset('backend')}}/assets/images/brands/g-suite.png" alt="G Suite">
                                                    <span>G Suite</span>
                                                </a>
                                            </div>
                                        </div> <!-- end row-->
                                    </div>

                                </div>
                            </li>

                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle nav-user arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                                    aria-expanded="false">
                                    <span class="account-user-avatar">
                                        @if (!empty(Auth::user()->image))
                                        <img class="img-fluid rounded-circle" src="{{ asset('upload/user/'.Auth::user()->image) }}">
                                        @else
                                        {{-- <img class="img-fluid rounded-circle" src="{{ asset('upload/avater.jpg') }}"> --}}
                                        <img src="{{asset('backend')}}/assets/images/users/avatar-1.jpg" alt="user-image" class="rounded-circle">
                                        @endif
                                    </span>
                                    <span>
                                        <span class="account-user-name">{{ Auth::user()->name }}</span>
                                        <span class="account-position">{{ Auth::user()->roleinfo->role_name }}</span>
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu profile-dropdown">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="mdi mdi-account-edit me-1"></i>
                                        <span>Settings</span>
                                    </a>

                                    <!-- item-->
                                    <a href="{{ route('logout') }}" class="dropdown-item notify-item">
                                        <i class="mdi mdi-logout me-1"></i>
                                        <span>Logout</span>
                                    </a>
                                </div>
                            </li>

                        </ul>
                        <button class="button-menu-mobile open-left">
                            <i class="mdi mdi-menu"></i>
                        </button>
                        <div class="app-search dropdown d-none d-lg-block">
                            <form>
                                <div class="input-group">
                                    <input type="text" class="form-control dropdown-toggle"  placeholder="Search..." id="top-search">
                                    <span class="mdi mdi-magnify search-icon"></span>
                                    <button class="input-group-text btn-primary" type="submit">Search</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- end Topbar -->

                    <!-- Start Content-->
                    @yield('content')
                    <!-- container -->

                </div>
                <!-- content -->

                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <script>document.write(new Date().getFullYear())</script> © Shorif Uddin
                            </div>

                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>

        </div>
        <!-- END wrapper -->

        <!-- bundle -->
        <script src="{{asset('backend')}}/assets/js/vendor.min.js"></script>
        <script src="{{asset('backend')}}/assets/js/app.min.js"></script>

        @yield('coustom_js')

        <!-- third party js -->
        <script src="{{asset('backend')}}/assets/js/vendor/apexcharts.min.js"></script>
        <script src="{{asset('backend')}}/assets/js/vendor/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="{{asset('backend')}}/assets/js/vendor/jquery-jvectormap-world-mill-en.js"></script>
        <!-- third party js ends -->

        <!-- demo app -->
        <script src="{{asset('backend')}}/assets/js/pages/demo.dashboard.js"></script>
        <!-- end demo js-->

    </body>

</html>
