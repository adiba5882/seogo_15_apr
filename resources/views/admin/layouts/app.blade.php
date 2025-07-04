<!doctype html>
<html lang="en">


<!-- Mirrored from codebucks.in/clivax/layout/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Mar 2025 08:14:44 GMT -->

<head>

    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Codebucks" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('admin-assets/images/favicon.ico')}}">

    <!-- dark layout js -->
    <script src="{{asset('admin-assets/js/pages/layout.js')}}"></script>
    <link href="{{asset('admin-assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin-assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin-assets/libs/simplebar/simplebar.min.css')}}" rel="stylesheet">
    <link href="{{asset('admin-assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />

</head>

<body>

    <div id="layout-wrapper">


        <!-- Start topbar -->
        <header id="page-topbar">
            <div class="navbar-header">

                <!-- Logo -->

                <!-- Start Navbar-Brand -->
                <div class="navbar-logo-box">
                    <a href="index.html" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src="{{asset('admin-assets/images/logo-sm.png')}}" alt="logo-sm-dark" height="20">
                        </span>
                        <span class="logo-lg">
                            <img src="{{asset('admin-assets/images/logo-dark.png')}}" alt="logo-dark" height="18">
                        </span>
                    </a>

                    <a href="index.html" class="logo logo-light">
                        <span class="logo-sm">
                            <img src="{{asset('admin-assets/images/logo-sm.png')}}" alt="logo-sm-light" height="20">
                        </span>
                        <span class="logo-lg">
                            <img src="{{asset('admin-assets/images/logo-light.png')}}" alt="logo-light" height="18">
                        </span>
                    </a>

                    <button type="button" class="btn btn-sm top-icon sidebar-btn" id="sidebar-btn">
                        <i class="mdi mdi-menu-open align-middle fs-19"></i>
                    </button>
                </div>
                <!-- End navbar brand -->

                <!-- Start menu -->
                <div class="d-flex justify-content-between menu-sm px-3 ms-auto">
                    <div class="d-flex align-items-center gap-2">
                        <div class="dropdown d-none d-lg-block">
                            <button type="button" class="btn btn-primary btn-sm fs-14 d-inline" data-bs-toggle="dropdown">
                                Apps
                                <i class="mdi mdi-chevron-down align-middle"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-start dropdown-menu-animated">
                                <a href="#" class="dropdown-item">
                                    <div class="dropdown-icon"><i class="fa fa-boxes"></i></div>
                                    <span class="dropdown-content">Inventory Manager</span>
                                    <div class="dropdown-addon"><span class="badge badge-warning rounded-pill">20</span></div>
                                </a>
                                <div class="dropdown-submenu">
                                    <a href="#" class="dropdown-item">
                                        <div class="dropdown-icon"><i class="fa fa-project-diagram"></i></div>
                                        <span class="dropdown-content">Project manager</span>
                                        <div class="dropdown-addon"><i class="mdi mdi-chevron-right align-middle"></i></div>
                                    </a>
                                    <div class="dropdown-submenu-menu dropdown-submenu-end">
                                        <a href="#" class="dropdown-item"><i class="dropdown-bullet"></i> <span class="dropdown-content">Create project</span> </a>
                                        <a href="#" class="dropdown-item"><i class="dropdown-bullet"></i> <span class="dropdown-content">Delete project</span> </a>
                                        <a href="#" class="dropdown-item"><i class="dropdown-bullet"></i> <span class="dropdown-content">Ongoing project</span> </a>
                                        <a href="#" class="dropdown-item"><i class="dropdown-bullet"></i> <span class="dropdown-content">Completed project</span> </a>
                                        <a href="#" class="dropdown-item"><i class="dropdown-bullet"></i> <span class="dropdown-content">Urgent project</span></a>
                                    </div>
                                </div>
                                <div class="dropdown-submenu">
                                    <a href="#" class="dropdown-item">
                                        <div class="dropdown-icon"><i class="fa fa-tasks"></i></div>
                                        <span class="dropdown-content">Task manager</span>
                                        <div class="dropdown-addon"><i class="mdi mdi-chevron-right align-middle"></i></div>
                                    </a>
                                    <div class="dropdown-submenu-menu dropdown-submenu-end">
                                        <a href="#" class="dropdown-item"><i class="dropdown-bullet"></i> <span class="dropdown-content">Show task</span> </a>
                                        <a href="#" class="dropdown-item"><i class="dropdown-bullet"></i> <span class="dropdown-content">Assign task</span> </a>
                                        <a href="#" class="dropdown-item"><i class="dropdown-bullet"></i> <span class="dropdown-content">Assign member</span> </a>
                                        <a href="#" class="dropdown-item"><i class="dropdown-bullet"></i> <span class="dropdown-content">Completed task</span> </a>
                                        <a href="#" class="dropdown-item"><i class="dropdown-bullet"></i> <span class="dropdown-content">Urgent task</span></a>
                                    </div>
                                </div>
                                <a href="#" class="dropdown-item">
                                    <div class="dropdown-icon"><i class="fa fa-dollar-sign"></i></div>
                                    <span class="dropdown-content">Invoice</span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="apps-contact.html" class="dropdown-item">
                                    <div class="dropdown-icon"><i class="fa fa-user-cog"></i></div>
                                    <span class="dropdown-content">My Account</span>
                                </a>
                            </div>
                        </div>

                        <div class="dropdown d-none d-lg-block">
                            <button type="button" class="btn btn-primary btn-sm fs-14" data-bs-toggle="dropdown" aria-haspopup="false" aria-expanded="false">
                                Features
                                <i class="mdi mdi-chevron-down align-middle"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-start dropdown-menu-lg-widest dropdown-menu-widest dropdown-menu-animated bg-primary-subtle overflow-hidden">
                                <div class="dropdown-row justify-content-center">
                                    <div class="p-2 menu-image">
                                        <img src="{{asset('admin-assets/images/mega-menu.png')}}" alt="mega-menu image" class="img-fluid" style="height: 200px;">
                                    </div>
                                    <div class="dropdown-col">
                                        <h2 class="">Welcome back!</h2>
                                        <p class="text-muted mb-0">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium, commodi hic qui aspernatur doloremque quos tempora placeat culpa illum, voluptatibus delectus provident cumque
                                            aliquid enim, laborum aliquam. Quod, perferendis unde.
                                        </p>
                                        <div class="mt-3">
                                            <form action="{{ route('login') }}" method="post">
                                                @csrf
                                                <button class="btn btn-dark btn-wider" type="submit">Sign out</button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="dropdown-col border-start border-primary border-opacity-50">
                                        <h4 class="dropdown-header">Features</h4>
                                        <div class="grid-nav grid-nav-action">
                                            <div class="grid-nav-row">
                                                <a href="index.html" class="grid-nav-item">
                                                    <div class="grid-nav-icon"><i class="far fa-window-restore"></i></div>
                                                    <span class="grid-nav-content">Dashboard</span>
                                                </a>
                                                <a href="apps-kanban.html" class="grid-nav-item">
                                                    <div class="grid-nav-icon"><i class="far fa-clipboard"></i></div>
                                                    <span class="grid-nav-content">TODO List</span>
                                                </a>
                                                <a href="#" class="grid-nav-item">
                                                    <div class="grid-nav-icon"><i class="far fa-question-circle"></i></div>
                                                    <span class="grid-nav-content">Help Center</span>
                                                </a>
                                            </div>
                                            <div class="grid-nav-row">
                                                <a href="#" class="grid-nav-item">
                                                    <div class="grid-nav-icon"><i class="far fa-images"></i></div>
                                                    <span class="grid-nav-content">Gallery</span>
                                                </a>
                                                <a href="#" class="grid-nav-item">
                                                    <div class="grid-nav-icon"><i class="far fa-chart-bar"></i></div>
                                                    <span class="grid-nav-content">Scrumboard</span>
                                                </a>
                                                <a href="#" class="grid-nav-item">
                                                    <div class="grid-nav-icon"><i class="far fa-bookmark"></i></div>
                                                    <span class="grid-nav-content">Docs</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dropdown-col border-start border-primary border-opacity-50">
                                        <h4 class="dropdown-header">Tools</h4>
                                        <a href="#" class="dropdown-item"><i class="mdi mdi-checkbox-blank-circle align-middle dropdown-bullet me-2"></i> <span class="dropdown-content">Components</span> </a>
                                        <a href="#" class="dropdown-item"><i class="mdi mdi-checkbox-blank-circle align-middle dropdown-bullet me-2"></i> <span class="dropdown-content">Form Wizard</span> </a>
                                        <a href="#" class="dropdown-item"><i class="mdi mdi-checkbox-blank-circle align-middle dropdown-bullet me-2"></i> <span class="dropdown-content">Documentation</span> </a>
                                        <a href="#" class="dropdown-item"><i class="mdi mdi-checkbox-blank-circle align-middle dropdown-bullet me-2"></i> <span class="dropdown-content">Knowledge Base</span> </a>
                                        <a href="#" class="dropdown-item"><i class="mdi mdi-checkbox-blank-circle align-middle dropdown-bullet me-2"></i> <span class="dropdown-content">Inventory Manager</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex align-items-center gap-2">
                        <!--Start App Search-->
                        <form class="app-search d-none d-lg-block">
                            <div class="position-relative">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="fab fa-sistrix fs-17 align-middle"></span>
                            </div>
                        </form>
                        <!--End App Search-->

                        <!-- Start Notification -->
                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn btn-sm top-icon" id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-bell align-middle"></i>
                                <span class="btn-marker"><i class="marker marker-dot text-danger"></i><span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-md dropdown-menu-end p-0" aria-labelledby="page-header-notifications-dropdown">
                                <div class="p-3 bg-info">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="text-white m-0"><i class="far fa-bell me-2"></i> Notifications </h6>
                                        </div>
                                        <div class="col-auto">
                                            <a href="#!" class="badge bg-info-subtle text-info"> 8+</a>
                                        </div>
                                    </div>
                                </div>
                                <div data-simplebar style="max-height: 230px;">
                                    <a href="#" class="text-reset notification-item">
                                        <div class="d-flex">
                                            <div class="avatar avatar-xs avatar-label-primary me-3">
                                                <span class="rounded fs-16">
                                                    <i class="mdi mdi-file-document-outline"></i>
                                                </span>
                                            </div>
                                            <div class="flex-1">
                                                <h6 class="mb-1">New report has been recived</h6>
                                                <div class="fs-12 text-muted">
                                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 3 min ago</p>
                                                </div>
                                            </div>
                                            <i class="mdi mdi-chevron-right align-middle ms-2"></i>
                                        </div>
                                    </a>
                                    <a href="#" class="text-reset notification-item">
                                        <div class="d-flex">
                                            <div class="avatar avatar-xs avatar-label-success me-3">
                                                <span class="rounded fs-16">
                                                    <i class="mdi mdi-cart-variant"></i>
                                                </span>
                                            </div>
                                            <div class="flex-1">
                                                <h6 class="mb-1">Last order was completed</h6>
                                                <div class="fs-12 text-muted">
                                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 1 hour ago</p>
                                                </div>
                                            </div>
                                            <i class="mdi mdi-chevron-right align-middle ms-2"></i>
                                        </div>
                                    </a>
                                    <a href="#" class="text-reset notification-item">
                                        <div class="d-flex">
                                            <div class="avatar avatar-xs avatar-label-danger me-3">
                                                <span class="rounded fs-16">
                                                    <i class="mdi mdi-account-group"></i>
                                                </span>
                                            </div>
                                            <div class="flex-1">
                                                <h6 class="mb-1">Completed meeting canceled</h6>
                                                <div class="fs-12 text-muted">
                                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 5 hour ago</p>
                                                </div>
                                            </div>
                                            <i class="mdi mdi-chevron-right align-middle ms-2"></i>
                                        </div>
                                    </a>
                                    <a href="#" class="text-reset notification-item">
                                        <div class="d-flex">
                                            <div class="avatar avatar-xs avatar-label-warning me-3">
                                                <span class="rounded fs-16">
                                                    <i class="mdi mdi-send-outline"></i>
                                                </span>
                                            </div>
                                            <div class="flex-1">
                                                <h6 class="mb-1">New feedback received</h6>
                                                <div class="fs-12 text-muted">
                                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 6 hour ago</p>
                                                </div>
                                            </div>
                                            <i class="mdi mdi-chevron-right align-middle ms-2"></i>
                                        </div>
                                    </a>
                                    <a href="#" class="text-reset notification-item">
                                        <div class="d-flex">
                                            <div class="avatar avatar-xs avatar-label-secondary me-3">
                                                <span class="rounded fs-16">
                                                    <i class="mdi mdi-download-box"></i>
                                                </span>
                                            </div>
                                            <div class="flex-1">
                                                <h6 class="mb-1">New update was available</h6>
                                                <div class="fs-12 text-muted">
                                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 1 day ago</p>
                                                </div>
                                            </div>
                                            <i class="mdi mdi-chevron-right align-middle ms-2"></i>
                                        </div>
                                    </a>
                                    <a href="#" class="text-reset notification-item">
                                        <div class="d-flex">
                                            <div class="avatar avatar-xs avatar-label-info me-3">
                                                <span class="rounded fs-16">
                                                    <i class="mdi mdi-hexagram-outline"></i>
                                                </span>
                                            </div>
                                            <div class="flex-1">
                                                <h6 class="mb-1">Your password was changed</h6>
                                                <div class="fs-12 text-muted">
                                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 2 day ago</p>
                                                </div>
                                            </div>
                                            <i class="mdi mdi-chevron-right align-middle ms-2"></i>
                                        </div>
                                    </a>
                                </div>
                                <div class="p-2 border-top">
                                    <div class="d-grid">
                                        <a class="btn btn-sm btn-link font-size-14 text-center" href="javascript:void(0)">
                                            <i class="mdi mdi-arrow-right-circle me-1"></i> View More..
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Notification -->

                        <!-- Start Activities -->
                        <div class="d-inline-block activities">
                            <button type="button" class="btn btn-sm top-icon" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-rightsidabar">
                                <i class="fas fa-table align-middle"></i>
                            </button>
                        </div>
                        <!-- End Activities -->

                        <!-- Start Profile -->
                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn btn-sm top-icon p-0" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded avatar-2xs p-0" src="{{asset('admin-assets/images/users/avatar-6.png')}}" alt="Header Avatar">
                            </button>
                            <div class="dropdown-menu dropdown-menu-wide dropdown-menu-end dropdown-menu-animated overflow-hidden py-0">
                                <div class="card border-0">
                                    <div class="card-header bg-primary rounded-0">
                                        <div class="rich-list-item w-100 p-0">
                                            <div class="rich-list-prepend">
                                                <div class="avatar avatar-label-light avatar-circle">
                                                    <div class="avatar-display"><i class="fa fa-user-alt"></i></div>
                                                </div>
                                            </div>
                                            <div class="rich-list-content">
                                                <h3 class="rich-list-title text-white">Charlie Stone</h3>
                                                <span class="rich-list-subtitle text-white">admin@codubucks.in</span>
                                            </div>
                                            <div class="rich-list-append"><span class="badge badge-label-light fs-6">6+</span></div>
                                        </div>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="grid-nav grid-nav-flush grid-nav-action grid-nav-no-rounded">
                                            <div class="grid-nav-row">
                                                <a href="apps-contact.html" class="grid-nav-item">
                                                    <div class="grid-nav-icon"><i class="far fa-address-card"></i></div>
                                                    <span class="grid-nav-content">Profile</span>
                                                </a>
                                                <a href="#!" class="grid-nav-item">
                                                    <div class="grid-nav-icon"><i class="far fa-comments"></i></div>
                                                    <span class="grid-nav-content">Messages</span>
                                                </a>
                                                <a href="#!" class="grid-nav-item">
                                                    <div class="grid-nav-icon"><i class="far fa-clone"></i></div>
                                                    <span class="grid-nav-content">Activities</span>
                                                </a>
                                            </div>
                                            <div class="grid-nav-row">
                                                <a href="#!" class="grid-nav-item">
                                                    <div class="grid-nav-icon"><i class="far fa-calendar-check"></i></div>
                                                    <span class="grid-nav-content">Tasks</span>
                                                </a>
                                                <a href="#!" class="grid-nav-item">
                                                    <div class="grid-nav-icon"><i class="far fa-sticky-note"></i></div>
                                                    <span class="grid-nav-content">Notes</span>
                                                </a>
                                                <a href="#!" class="grid-nav-item">
                                                    <div class="grid-nav-icon"><i class="far fa-bell"></i></div>
                                                    <span class="grid-nav-content">Notification</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer card-footer-bordered rounded-0">
                                        <form action="{{ route('logout') }}" method="post">
                                            @csrf
                                            <button class="btn btn-label-danger" type="submit">Sign out</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Profile -->
                    </div>
                </div>
                <!-- End menu -->
            </div>
        </header>
        <!-- End topbar -->

        <!-- ========== Left Sidebar Start ========== -->
        @include('admin.layouts.sidebar')
        <!-- Left Sidebar End -->


        <!-- Start right Content here -->

        @yield('content')
        <!-- end main content-->
    </div>
    <!-- end layout-wrapper -->


    <div class="custom-setting bg-primary pe-0 d-flex flex-column rounded-start">
        <button type="button" class="btn btn-wide border-0 text-white fs-20 avatar-sm rounded-end-0" id="light-dark-mode">
            <i class="mdi mdi-brightness-7 align-middle"></i>
            <i class="mdi mdi-white-balance-sunny align-middle"></i>
        </button>
        <button type="button" class="btn btn-wide border-0 text-white fs-20 avatar-sm" data-toggle="fullscreen">
            <i class="mdi mdi-arrow-expand-all align-middle"></i>
        </button>
        <button type="button" class="btn btn-wide border-0 text-white fs-16 avatar-sm" id="layout-dir-btn">
            <span>RTL</span>
        </button>
    </div>


    <!-- Rightbar Sidebar -->
    <div class="offcanvas offcanvas-end" id="offcanvas-rightsidabar">
        <div class="card h-100 rounded-0" data-simplebar="init">
            <div class="card-header bg-light">
                <h6 class="card-title text-uppercase">Activities</h6>
                <div class="card-addon">
                    <button class="btn btn-label-danger" data-bs-dismiss="offcanvas">
                        <i class="fa fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <div class="">
                    <h3 class="card-title">Company summary</h3>
                    <div class="border rounded p-2">
                        <p class="text-muted mb-2">Server Load</p>
                        <h4 class="fs-16 mb-2">489</h4>
                        <div class="progress progress-sm" style="height:4px;">
                            <div class="progress-bar bg-success" style="width: 49.4%"></div>
                        </div>
                        <p class="text-muted mb-0 mt-1">49.4% <span>Avg</span></p>
                    </div>
                    <div class="border rounded p-2">
                        <p class="text-muted mb-2">Members online</p>
                        <h4 class="fs-16 mb-2">3,450</h4>
                        <div class="progress progress-sm" style="height:4px;">
                            <div class="progress-bar bg-danger" style="width: 34.6%"></div>
                        </div>
                        <p class="text-muted mb-0 mt-1">34.6% <span>Avg</span></p>
                    </div>
                    <div class="border rounded p-2">
                        <p class="text-muted mb-2">Today's revenue</p>
                        <h4 class="fs-16 mb-2">$18,390</h4>
                        <div class="progress progress-sm" style="height:4px;">
                            <div class="progress-bar bg-warning" style="width: 20%"></div>
                        </div>
                        <p class="text-muted mb-0 mt-1">$37,578 <span>Avg</span></p>
                    </div>
                    <div class="border rounded p-2">
                        <p class="text-muted mb-2">Expected profit</p>
                        <h4 class="fs-16 mb-2">$23,461</h4>
                        <div class="progress progress-sm" style="height:4px;">
                            <div class="progress-bar bg-info" style="width: 60%"></div>
                        </div>
                        <p class="text-muted mb-0 mt-1">$23,461 <span>Avg</span></p>
                    </div>
                </div>

                <div class="mt-4">
                    <h3 class="card-title">Latest log</h3>
                    <div class="timeline">
                        <div class="timeline-item">
                            <div class="timeline-pin"><i class="marker marker-dot text-primary"></i></div>
                            <div class="timeline-content">
                                <div class="d-flex justify-content-between">
                                    <p class="mb-0">12 new users registered</p>
                                    <span class="text-muted">Just now</span>
                                </div>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-pin"><i class="marker marker-dot text-success"></i></div>
                            <div class="timeline-content">
                                <div class="d-flex justify-content-between">
                                    <p class="mb-0">System shutdown <span class="badge badge-label-success">pending</span></p>
                                    <span class="text-muted">2 mins</span>
                                </div>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-pin"><i class="marker marker-dot text-primary"></i></div>
                            <div class="timeline-content">
                                <div class="d-flex justify-content-between">
                                    <p class="mb-0">New invoice received</p>
                                    <span class="text-muted">3 mins</span>
                                </div>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-pin"><i class="marker marker-dot text-danger"></i></div>
                            <div class="timeline-content">
                                <div class="d-flex justify-content-between">
                                    <p class="mb-0">New order received <span class="badge badge-label-danger">urgent</span></p>
                                    <span class="text-muted">10 mins</span>
                                </div>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-pin"><i class="marker marker-dot text-warning"></i></div>
                            <div class="timeline-content">
                                <div class="d-flex justify-content-between">
                                    <p class="mb-0">Production server down</p>
                                    <span class="text-muted">1 hrs</span>
                                </div>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-pin"><i class="marker marker-dot text-info"></i></div>
                            <div class="timeline-content">
                                <div class="d-flex justify-content-between">
                                    <p class="mb-0">System error <a href="#">check</a></p>
                                    <span class="text-muted">2 hrs</span>
                                </div>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-pin"><i class="marker marker-dot text-secondary"></i></div>
                            <div class="timeline-content">
                                <div class="d-flex justify-content-between">
                                    <p class="mb-0">DB overloaded 80%</p>
                                    <span class="text-muted">5 hrs</span>
                                </div>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-pin"><i class="marker marker-dot text-success"></i></div>
                            <div class="timeline-content">
                                <div class="d-flex justify-content-between">
                                    <p class="mb-0">Production server up</p>
                                    <span class="text-muted">6 hrs</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-4">
                    <h3 class="card-title">Upcoming activities</h3>
                    <div class="timeline timeline-timed">
                        <div class="timeline-item">
                            <span class="timeline-time">10:00</span>
                            <div class="timeline-pin"><i class="marker marker-circle text-primary"></i></div>
                            <div class="timeline-content">
                                <div>
                                    <span>Meeting with</span>
                                    <div class="avatar-group ms-2">
                                        <div class="avatar avatar-circle">
                                            <img src="{{asset('admin-assets/images/users/avatar-1.png')}}" alt="Avatar image" class="avatar-2xs" />
                                        </div>
                                        <div class="avatar avatar-circle">
                                            <img src="{{asset('admin-assets/images/users/avatar-2.png')}}" alt="Avatar image" class="avatar-2xs" />
                                        </div>
                                        <div class="avatar avatar-circle">
                                            <img src="{{asset('admin-assets/images/users/avatar-3.png')}}" alt="Avatar image" class="avatar-2xs" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <span class="timeline-time">12:45</span>
                            <div class="timeline-pin"><i class="marker marker-circle text-warning"></i></div>
                            <div class="timeline-content">
                                <p class="mb-0">Lorem ipsum dolor sit amit,consectetur eiusmdd tempor incididunt ut labore et dolore magna elit enim at minim veniam quis nostrud</p>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <span class="timeline-time">14:00</span>
                            <div class="timeline-pin"><i class="marker marker-circle text-danger"></i></div>
                            <div class="timeline-content">
                                <p class="mb-0">Received a new feedback on <a href="#">GoFinance</a> App product.</p>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <span class="timeline-time">15:20</span>
                            <div class="timeline-pin"><i class="marker marker-circle text-success"></i></div>
                            <div class="timeline-content">
                                <p class="mb-0">Lorem ipsum dolor sit amit,consectetur eiusmdd tempor incididunt ut labore et dolore magna.</p>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <span class="timeline-time">17:00</span>
                            <div class="timeline-pin"><i class="marker marker-circle text-info"></i></div>
                            <div class="timeline-content">
                                <p class="mb-0">Make Deposit <a href="#">USD 700</a> o ESL.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end card-->
    </div>

    <!-- JAVASCRIPT -->
    <script src="{{asset('admin-assets/libs/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('admin-assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('admin-assets/libs/metismenu/metisMenu.min.js')}}"></script>
    <script src="{{asset('admin-assets/libs/simplebar/simplebar.min.js')}}"></script>
    <script src="{{asset('admin-assets/libs/node-waves/waves.min.js')}}"></script>
    <script src="{{asset('admin-assets/libs/apexcharts/apexcharts.min.js')}}"></script>
    <script src="{{asset('admin-assets/js/pages/dashboard.init.js')}}"></script>
    <script src="{{asset('admin-assets/js/app.js')}}"></script>
</body>


<!-- Mirrored from codebucks.in/clivax/layout/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Mar 2025 08:15:19 GMT -->

</html>