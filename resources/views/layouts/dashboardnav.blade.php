<!DOCTYPE html>
<html lang="en" dir="ltr" data-startbar="light" data-bs-theme="light">


<!-- Mirrored from mannatthemes.com/rizz/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 22 Aug 2024 15:50:52 GMT -->
<head>
    

    <meta charset="utf-8" />
            <title>Admin</title>
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
            <meta content="" name="author" />
            <meta http-equiv="X-UA-Compatible" content="IE=edge" />

            <!-- App favicon -->
            <link rel="shortcut icon" href="{{ asset('Backend/images/favicon.ico') }}">

       

    <link rel="stylesheet" href="{{ asset('Backend/libs/jsvectormap/css/jsvectormap.min.css') }}">

     <!-- App css -->
     <link href="{{ asset('Backend/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
     <link href="{{ asset('Backend/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
     <link href="{{ asset('Backend/css/app.min.css') }}" rel="stylesheet" type="text/css" />

</head>

<body>

    <!-- Top Bar Start -->
    <div class="topbar d-print-none">
        <div class="container-xxl">
            <nav class="topbar-custom d-flex justify-content-between" id="topbar-custom">    
        

                <ul class="topbar-item list-unstyled d-inline-flex align-items-center mb-0">                        
                    <li>
                        <button class="nav-link mobile-menu-btn nav-icon" id="togglemenu">
                            <i class="iconoir-menu-scale"></i>
                        </button>
                    </li> 
                                       
                </ul>
                <ul class="topbar-item list-unstyled d-inline-flex align-items-center mb-0">
                         
                    
        
                    <li class="topbar-item">
                        <a class="nav-link nav-icon" href="javascript:void(0);" id="light-dark-mode">
                            <i class="icofont-moon dark-mode"></i>
                            <i class="icofont-sun light-mode"></i>
                        </a>                    
                    </li>
    
                  
    
                    <li class="dropdown topbar-item">
                        <a class="nav-link dropdown-toggle arrow-none nav-icon" data-bs-toggle="dropdown" href="#" role="button"
                            aria-haspopup="false" aria-expanded="false">
                            <img src="{{ asset('Backend/images/users/avatar-1.jpg') }}" alt="" class="thumb-lg rounded-circle">
                        </a>
                        <div class="dropdown-menu dropdown-menu-end py-0">
                            <div class="d-flex align-items-center dropdown-item py-2 bg-secondary-subtle">
                                <div class="flex-shrink-0">
                                    <img src="{{ asset('Backend/images/users/avatar-1.jpg') }}" alt="" class="thumb-md rounded-circle">
                                </div>
                                <div class="flex-grow-1 ms-2 text-truncate align-self-center">
                                    <h6 class="my-0 fw-medium text-dark fs-13">Admin Restaurant</h6>
                                    {{-- <small class="text-muted mb-0">Front End Developer</small> --}}
                                </div><!--end media-body-->
                            </div>
                           
                            <a href="#" class="dropdown-item text-danger" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                <i class="las la-power-off fs-18 me-1 align-text-bottom"></i>
                                Log Out
                                <form action="{{ route('logout') }}" id="logout-form" method="post" style="display: inline;">
                                    @csrf 
                      
                                  </form>
                            </a>
                            
                        </div>
                    </li>
                </ul><!--end topbar-nav-->
            </nav>
            <!-- end navbar-->
        </div>
    </div>
    <!-- Top Bar End -->
    <!-- leftbar-tab-menu -->
    <div class="startbar d-print-none">
        <!--start brand-->
        <div class="brand">
            <a href="/" class="logo">
                <span>
                    <img src="{{ asset('Backend/images/logo-sm.png') }}" alt="logo-small" class="logo-sm">
                </span>
                {{-- <span class="">
                    <img src="{{ asset('Backend/images/logo-light.png') }}" alt="logo-large" class="logo-lg logo-light">
                    <img src="{{ asset('Backend/images/logo-dark.png') }}" alt="logo-large" class="logo-lg logo-dark">
                </span> --}}
            </a>
        </div>
        <!--end brand-->
        <!--start startbar-menu-->
        <div class="startbar-menu" >
            <div class="startbar-collapse" id="startbarCollapse" data-simplebar>
                <div class="d-flex align-items-start flex-column w-100">
                    <!-- Navigation -->
                    <ul class="navbar-nav mb-auto w-100">
                        <li class="menu-label pt-0 mt-0">
                           
                            <span>Main Menu</span>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#sidebarDashboards" data-bs-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="sidebarDashboards">
                                <i class="iconoir-home-simple menu-icon"></i>
                                <span>Categories</span>
                            </a>
                            <div class="collapse " id="sidebarDashboards">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('Categories.index') }}">Categories</a>
                                    </li><!--end nav-item-->
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('Categories.create') }}">Add Categorie</a>
                                    </li><!--end nav-item-->
                                </ul><!--end nav-->
                            </div><!--end startbarDashboards-->
                        </li><!--end nav-item-->
                        <li class="nav-item">
                            <a class="nav-link" href="#sidebarApplications" data-bs-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="sidebarApplications">
                                <i class="iconoir-view-grid menu-icon"></i>
                                <span>products</span>
                            </a>
                            <div class="collapse " id="sidebarApplications">
                                <ul class="nav flex-column">
                                    
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('products.index') }}">products</a>
                                    </li><!--end nav-item--> 
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('products.create') }}">Add products</a>
                                    </li><!--end nav-item--> 
                                                               
                                </ul><!--end nav-->
                            </div><!--end startbarApplications-->
                        </li><!--end nav-item-->
                       
                    </ul><!--end navbar-nav--->
                   
                </div>
            </div><!--end startbar-collapse-->
        </div><!--end startbar-menu-->    
    </div><!--end startbar-->
    <div class="startbar-overlay d-print-none"></div>
    <!-- end leftbar-tab-menu-->

    <div class="page-wrapper">

        <!-- Page Content-->
        <div class="page-content">
           
            <main>
                @yield('content') 
            </main>
            
           

            <!--end footer-->
        </div>
        <!-- end page content -->
    </div>
    <!-- end page-wrapper -->

    <!-- Javascript  -->
    <!-- vendor js -->
    
    <script src="{{ asset('Backend/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('Backend/libs/simplebar/simplebar.min.js') }}"></script>

    <script src="{{ asset('Backend/libs/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('Backend/data/stock-prices.js') }}"></script>
    <script src="{{ asset('Backend/libs/jsvectormap/js/jsvectormap.min.js') }}"></script>
    <script src="{{ asset('Backend/libs/jsvectormap/maps/world.js') }}"></script>
    <script src="{{ asset('Backend/js/pages/index.init.js') }}"></script>
    <script src="{{ asset('Backend/js/app.js') }}"></script>
</body>
<!--end body-->


<!-- Mirrored from mannatthemes.com/rizz/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 22 Aug 2024 15:50:59 GMT -->
</html>