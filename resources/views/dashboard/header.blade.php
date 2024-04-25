<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

    
<!-- Mirrored from themes.getappui.com/techzaa/velonic/layouts/index-dark.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Apr 2024 09:43:24 GMT -->
<head>
        <meta charset="utf-8" />
        <title>Dex Library for full stack</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully responsive admin theme which can be used to build CRM, CMS,ERP etc." name="description" />
        <meta content="Techzaa" name="author" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('assets/images/logo.png') }}">

        <!-- Daterangepicker css -->
        <link rel="stylesheet" href="{{asset('assets/vendor/daterangepicker/daterangepicker.css') }}">

        <!-- Vector Map css -->
        <link rel="stylesheet" href="{{asset('assets/vendor/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css') }}">

        <!-- Theme Config Js -->
        <script src="{{asset('assets/js/config.js') }}"></script>

        <!-- App css -->
        <link href="{{asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" id="app-style" />

        <!-- Icons css -->
        <link href="{{asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    </head>

    <body>
        <!-- Begin page -->
        <div class="wrapper">

            
            <!-- ========== Topbar Start ========== -->
            <div class="navbar-custom">
                <div class="topbar container-fluid">
                    <div class="d-flex align-items-center gap-1">

                     

                        <!-- Sidebar Menu Toggle Button -->
                        <button class="button-toggle-menu">
                            <i class="ri-menu-line"></i>
                        </button>

                        <!-- Horizontal Menu Toggle Button -->
                        <button class="navbar-toggle" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </button>

                        <!-- Topbar Search Form -->
                        <div class="app-search d-none d-lg-block">
                            <form>
                                <div class="input-group">
                                    <input type="search" class="form-control" placeholder="Search...">
                                    <span class="ri-search-line search-icon text-muted"></span>
                                </div>
                            </form>
                        </div>
                    </div>
                    <h3>{{ auth()->user()->name }}</h3>
                   

                    <ul class="topbar-menu d-flex align-items-center gap-3">
                        <li class="dropdown d-lg-none">
                            <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button"
                                aria-haspopup="false" aria-expanded="false">
                                <i class="ri-search-line fs-22"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-animated dropdown-lg p-0">
                                <form class="p-3">
                                    <input type="search" class="form-control" placeholder="Search ..."
                                        aria-label="Recipient's username">
                                </form>
                            </div>
                        </li>

                       

                        

                      

                        <li class="d-none d-sm-inline-block">
                            <a class="nav-link" data-bs-toggle="offcanvas" href="#theme-settings-offcanvas">
                                <i class="ri-settings-3-line fs-22"></i>
                            </a>
                        </li>

                        <li class="d-none d-sm-inline-block">
                            <div class="nav-link" id="light-dark-mode">
                                <i class="ri-moon-line fs-22"></i>
                            </div>
                        </li>

                        <li class="dropdown">
                            <a class="nav-link dropdown-toggle arrow-none nav-user" data-bs-toggle="dropdown" href="#" role="button"
                                aria-haspopup="false" aria-expanded="false">
                                <span class="account-user-avatar">
                                    <div class="avatar-md">
                                        <span class="avatar-title bg-info-subtle text-info fs-20 rounded">
                                           
                                        </span>
                                    </div>
                                </span>
                                <span class="d-lg-block d-none">
                                    <h5 class="my-0 fw-normal"> @if (auth()->check())
                                        <h5 class="my-0 fw-normal">{{ auth()->user()->name }} <i
                                                class="ri-arrow-down-s-line d-none d-sm-inline-block align-middle"></i></h5>
                                                @endif </h5>
                                   

                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated profile-dropdown">
                                <!-- item-->
                                <div class=" dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">
                                        @if (auth()->check())
                                        <p>Welcome, {{ auth()->user()->name }}</p>
                                        <p>Email: {{ auth()->user()->email }}</p>
                                    @endif</h6>
                                </div>

                                <!-- item-->
                                <a   href="/profile"   class="dropdown-item">
                                    
                                    <i class="ri-account-circle-line fs-18 align-middle me-1"></i>
                                   
                                    <span>My Account       </span>
                                    
                                </a>
                               

                                <!-- item-->
                                <a href="/profile" class="dropdown-item">
                                    <i class="ri-settings-4-line fs-18 align-middle me-1"></i>
                                    <span>Settings</span>
                                </a>

                                <!-- item-->
                                <a href="" class="dropdown-item">
                                    <i class="ri-customer-service-2-line fs-18 align-middle me-1"></i>
                                    <span>Support</span>
                                </a>

                                <!-- item-->
                                <a href="/" class="dropdown-item">
                                    <i class="ri-lock-password-line fs-18 align-middle me-1"></i>
                                    <span>Lock Screen</span>
                                </a>
                                <a href="/" class="dropdown-item">
                                    <i class="ri-lock-password-line fs-18 align-middle me-1"></i>
                                    <span>log out</span>
                                </a>

                                <!-- item-->
                                <a href="{{ route('logout') }}"
   onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            <i class="ri-logout-box-line fs-18 align-middle me-1"></i>
            <span>Logout</span>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
</a>
                                    
                                   
                                
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- ========== Topbar End ========== -->
            

            <!-- ========== Left Sidebar Start ========== -->
            <div class="leftside-menu">

                

                <!-- Sidebar -left -->
                <div class="h-100" id="leftside-menu-container" data-simplebar>
                    <!--- Sidemenu -->
                    <ul class="side-nav">

                        <li class="side-nav-title">Main</li>

                        <li class="side-nav-item">
                            <a href="/dashboard" class="side-nav-link">
                                <i class="ri-dashboard-3-line"></i>
                                <span class="badge bg-success float-end">🏠🏠</span>
                                <span> Dashboard </span>
                            </a>
                        </li>

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarPages" aria-expanded="false" aria-controls="sidebarPages" class="side-nav-link">
                                <i class="ri-pages-line"></i>
                                <span> Projects </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarPages">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="/products">products& projects</a>
                                    </li>
                                    <li>
                                        <a href="">Documents</a>
                                    </li>
                                    <li>
                                        <a href="/yetu/veiw/">Zipfiles</a>
                                    </li>
                                 
                                </ul>
                            </div>
                        </li>

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarPagesAuth" aria-expanded="false" aria-controls="sidebarPagesAuth" class="side-nav-link">
                                <i class="ri-group-2-line"></i>
                                <span> Castom </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarPagesAuth">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="/yetu">Website
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/yetu/veiw/{id}">My Requests</a>
                                    </li>
                                    <li>
                                        <a href="/patao">Request of fix existing projects</a>
                                    </li>
                                    <li>
                                        <a href="/patao/veiw/{id}">logo</a>
                                    </li>
                                    <li>
                                        <a href="auth-lock-screen.html">Others</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarLayouts" aria-expanded="false" aria-controls="sidebarLayouts" class="side-nav-link">
                                <i class="ri-layout-line"></i>
                                <span class="badge bg-warning float-end">New</span>
                                <span> Download </span>
                            </a>
                            <div class="collapse" id="sidebarLayouts">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="layouts-horizontal.html" target="_blank">Books</a>
                                    </li>
                                    <li>
                                        <a href="layouts-light-sidebar.html" target="_blank">Programing Tutorials</a>
                                    </li>
                                    <li>
                                        <a href="layouts-sm-sidebar.html" target="_blank">Sample Projects</a>
                                    </li>
                                    <li>
                                        <a href="layouts-collapsed-sidebar.html" target="_blank">Links</a>
                                    </li>
                                    <li>
                                        
                                </ul>
                            </div>
                        </li>

                        <li class="side-nav-title">Watch</li>

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarBaseUI" aria-expanded="false" aria-controls="sidebarBaseUI" class="side-nav-link">
                                <i class="ri-briefcase-line"></i>
                                <span> Programming Tutorials </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarBaseUI">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="ui-accordions.html">Sample skits</a>
                                    </li>
                                    <li>
                                        <a href="ui-alerts.html">Dex tv</a>
                                    </li>
                                    <li>
                                        
                                </ul>
                            </div>
                        </li>

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarExtendedUI" aria-expanded="false" aria-controls="sidebarExtendedUI" class="side-nav-link">
                                <i class="ri-compasses-2-line"></i>
                                <span> E learning </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarExtendedUI">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="extended-portlets.html">Teachers and couses</a>
                                    </li>
                                    <li>
                                        <a href="extended-scrollbar.html">Library</a>
                                    </li>
                                    <li>
                                        <a href="extended-range-slider.html">Set your time Table</a>
                                    </li>
                                    <li>
                                        <a href="extended-scrollspy.html">Request mobile Trainer</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
             

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarCharts" aria-expanded="false" aria-controls="sidebarCharts" class="side-nav-link">
                                <i class="ri-donut-chart-fill"></i>
                                <span>  Dex Charts </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarCharts">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="/chart">chart with dex</a>
                                    </li>
                                    <li>
                                        <a href="/chatify/{{ auth()->user()->id }}">Request</a>
                                    </li>
                                   
                                </ul>
                            </div>
                        </li>

                      

                        

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarMaps" aria-expanded="false" aria-controls="sidebarMaps" class="side-nav-link">
                                <i class="ri-map-pin-line"></i>
                                <span> Other Assistants</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarMaps">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="maps-google.html">Pysical</a>
                                    </li>
                                    <li>
                                        <a href="maps-vector.html">Online</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                      


                    </ul>
                    <!--- End Sidemenu -->

                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- ========== Left Sidebar End ========== -->