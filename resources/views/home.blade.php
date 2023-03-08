<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicon.png') }}">
    <title>{{ config('app.name') }}</title>

    <!-- Custom CSS -->
    <link href="{{ asset('assets/extra-libs/c3/c3.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/libs/chartist/dist/chartist.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/extra-libs/jvector/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet" />

    <!-- Custom CSS -->
    <link href="{{ asset('dist/css/style.min.css') }}" rel="stylesheet">

    {{-- Toastr --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">

    @yield('css')
   
</head>

<body>
   
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
  
    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
       
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-lg">
                <div class="navbar-header" data-logobg="skin6">
                    
                    <a class="nav-toggler waves-effect waves-light d-block d-lg-none" href="javascript:void(0)"><i
                            class="ti-menu ti-close"></i></a>
                  
                    <div class="navbar-brand">
                        <!-- Logo icon -->
                        <a href="home">
                            <img src="{{ asset('logo.png') }}" width="90px" alt="" class="img-fluid">
                        </a>
                    </div>
                   
                    <a class="topbartoggler d-block d-lg-none waves-effect waves-light" href="javascript:void(0)"
                        data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i
                            class="ti-more"></i></a>
                </div>
              
                <div class="navbar-collapse collapse" id="navbarSupportedContent">
                   
                    <ul class="navbar-nav float-left me-auto ms-3 ps-1">
                       
                    </ul>
                  
                    <ul class="navbar-nav float-end">
                       
                     
                      
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <img src="png-transparent-profile-logo-computer-icons-user-user-blue-heroes-logo-thumbnail.png" alt="user" class="rounded-circle"
                                    width="40">
                                <span class="ms-2 d-none d-lg-inline-block">
                                    <!-- <span>Hello,</span>  -->
                                    <span class="text-dark">{{ Auth::user()->name }}</span> 
                                    <i data-feather="chevron-down" class="svg-icon"></i>
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-right user-dd animated flipInY">
                              
                                <a class="dropdown-item" href="logout"><i data-feather="power"
                                        class="svg-icon me-2 ms-1"></i>
                                    Logout</a>
                              
                            </div>
                        </li>
                       
                    </ul>
                </div>
            </nav>
        </header>
      
        <aside class="left-sidebar" data-sidebarbg="skin6">
            
            <div class="scroll-sidebar" data-sidebarbg="skin6">
            
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="home"
                                aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span
                                    class="hide-menu">Dashboard</span></a></li>
                        <li class="list-divider"></li>
                        <li class="nav-small-cap"><span class="hide-menu">Operasional</span></li>
                        @if(Auth::user()->role == 1)
                        <li class="sidebar-item"> <a class="sidebar-link" href="data_tamu"
                                aria-expanded="false"><i data-feather="file-text" class="feather-icon"></i><span
                                    class="hide-menu">Data Tamu
                                </span></a>
                        </li>
                        
                        @endif
                        @if(Auth::user()->role == 2)
                        <li class="sidebar-item"> <a class="sidebar-link" href="pengurusan_surat"
                                aria-expanded="false"><i data-feather="file-text" class="feather-icon"></i><span
                                    class="hide-menu">Pengurusan Surat
                                </span></a>
                        </li>
                        
                        @endif
                        @if(Auth::user()->role == 3)
                        <li class="sidebar-item"> <a class="sidebar-link" href="pengarsipan_surat"
                                aria-expanded="false"><i data-feather="file-text" class="feather-icon"></i><span
                                    class="hide-menu">Pengarsipan Surat
                                </span></a>
                        </li>
                        
                        @endif
                       
                    </ul>
                </nav>
            
            </div>
    
        </aside>
     
        <div class="page-wrapper">
            @yield('content')
           
            <footer class="footer text-center text-muted">
                All Rights Reserved by Freedash. Designed and Developed by <a
                    href="">Adminmart</a>.
            </footer>
           
        </div>
       
    </div>
    <script src="{{ asset('assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <!-- apps -->
    <!-- apps -->
    <script src="{{ asset('dist/js/app-style-switcher.js') }}"></script>
    <script src="{{ asset('dist/js/feather.min.js') }}"></script>
    <script src="{{ asset('assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js') }}"></script>
    <script src="{{ asset('dist/js/sidebarmenu.js') }}"></script>
    <!--Custom JavaScript -->
    <script src="{{ asset('dist/js/custom.min.js') }}"></script>
    <!--This page JavaScript -->
    <script src="{{ asset('assets/extra-libs/c3/d3.min.js') }}"></script>
    <script src="{{ asset('assets/extra-libs/c3/c3.min.js') }}"></script>
    <script src="{{ asset('assets/libs/chartist/dist/chartist.min.js') }}"></script>
    <script src="{{ asset('assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js') }}"></script>
    <script src="{{ asset('assets/extra-libs/jvector/jquery-jvectormap-2.0.2.min.js') }}"></script>
    <script src="{{ asset('assets/extra-libs/jvector/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ asset('dist/js/pages/dashboards/dashboard1.min.js') }}"></script>

    {{-- Toastr --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        @if (Session::has('message')){
            var type = "{{ Session::get('alert-type','info') }}"
            switch(type){
                case 'info':
                    toastr.info("{{ Session::get('message') }}")
                break;
                case 'success':
                    toastr.success("{{ Session::get('message') }}")
                break;
                case 'warning':
                    toastr.warning("{{ Session::get('message') }}")
                break;
                case 'error':
                    toastr.error("{{ Session::get('message') }}")
                break;
            }
        }
        @endif
    </script>

    @yield('js')
</body>

</html>