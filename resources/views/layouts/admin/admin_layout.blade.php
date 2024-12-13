<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Exonvest</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- site icon -->
    <link rel="icon" href="{{ asset('assets/admin/images/fevicon.png') }}" type="image/png" />
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{ asset('assets/admin/css/bootstrap.min.css') }}" />
    <!-- site css -->
    <link rel="stylesheet" href="{{ asset('assets/admin/style.css') }}" />
    <!-- responsive css -->
    <link rel="stylesheet" href="{{ asset('assets/admin/css/responsive.css') }}" />
    <!-- color css -->
    <link rel="stylesheet" href="{{ asset('assets/admin/css/colors.css') }}" />
    <!-- select bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/admin/css/bootstrap-select.css') }}" />
    <!-- scrollbar css -->
    <link rel="stylesheet" href="{{ asset('assets/css/perfect-scrollbar.css') }}" />
    <!-- custom css -->
    <link rel="stylesheet" href="{{ asset('assets/admin/css/custom.css') }}" />
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
</head>

<body class="dashboard dashboard_1">
    <div class="full_container">
        <div class="inner_container">
            <!-- Sidebar  -->
            <nav id="sidebar">
                <div class="sidebar_blog_1">
                    <div class="sidebar-header">
                        <div class="logo_section">
                            <a href="index.html"><img class="logo_icon img-responsive"
                                    src="{{ asset('assets/admin/images/logo/logo_icon.png') }}" alt="#" /></a>
                        </div>
                    </div>
                    <div class="sidebar_user_info">
                        <div class="icon_setting"></div>
                        <div class="user_profle_side">
                            <div class="user_img"><img class="img-responsive"
                                    src="{{ asset('assets/admin/images/layout_img/user_img.jpg') }}" alt="#" /></div>
                            <div class="user_info">
                                <h6>Exonvest</h6>
                                {{-- <p><span class="online_animation"></span> Online</p> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sidebar_blog_2">
                    <ul class="list-unstyled components">
                      
                        <li>
                            <a href="{{route('admin.dashboard')}}">
                            <i class="fa fa-dashboard yellow_color"></i> <span>Dashboard</span></a>
                        </li>
                        <li>
                            <a href="#element" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-diamond purple_color"></i> <span>Categories</span></a>
                            <ul class="collapse list-unstyled" id="element">
                            <li><a href="{{route('admin.category_add')}}">> <span>Add</span></a></li>
                            <li><a href="{{route('admin.category')}}">> <span>List</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{route('admin.contact')}}">
                            <i class="fa fa-paper-plane red_color"></i> <span>Contact</span></a>
                        </li> 
                       
                        
                       
                        
                    </ul>
                </div>
            </nav>
            <!-- end sidebar -->
            <!-- right content -->
            <div id="content">
                <!-- topbar -->
                <div class="topbar">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="full">
                            <button type="button" id="sidebarCollapse" class="sidebar_toggle"><i
                                    class="fa fa-bars"></i></button>
                            <div class="logo_section">
                            <h3 class="logoname" style="color:white;">exonvest</h3>
                            </div>
                            <div class="right_topbar">
                                <div class="icon_info">
                                    {{-- <ul>
                                 <li><a href="#"><i class="fa fa-bell-o"></i><span class="badge">2</span></a></li>
                                 <li><a href="#"><i class="fa fa-question-circle"></i></a></li>
                                 <li><a href="#"><i class="fa fa-envelope-o"></i><span class="badge">3</span></a></li>
                              </ul> --}}
                                    <ul class="user_profile_dd">
                                        <li>
                                            <a class="dropdown-toggle" data-toggle="dropdown"><img
                                                    class="img-responsive rounded-circle"
                                                    src="{{ asset('assets/admin/images/layout_img/user_img.jpg') }}"
                                                    alt="#" /><span class="name_user">Admin</span></a>
                                            <div class="dropdown-menu">
                                                {{-- <a class="dropdown-item" href="profile.html">My Profile</a>
                                       <a class="dropdown-item" href="settings.html">Settings</a>
                                       <a class="dropdown-item" href="help.html">Help</a> --}}
                                       <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Log Out <i class="fa fa-sign-out"></i>
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
                <!-- end topbar -->
                <!-- dashboard inner -->
                <div class="midde_cont">
                    <div class="container-fluid">


                        @yield('content')


                    </div>
                    <!-- footer -->
                    <div class="container-fluid">
                        <div class="footer">
                            <p>Copyright © 2018 Designed by html.design. All rights reserved.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- end dashboard inner -->
            </div>
        </div>
    </div>
    <!-- jQuery -->
    <script src="{{ asset('assets/admin/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/bootstrap.min.js') }}"></script>
    <!-- wow animation -->
    <script src="{{ asset('assets/admin/js/animate.js') }}"></script>
    <!-- select country -->
    <script src="{{ asset('assets/admin/js/bootstrap-select.js') }}"></script>
    <!-- owl carousel -->
    <script src="{{ asset('assets/admin/js/owl.carousel.js') }}"></script>
    <!-- chart js -->
    <script src="{{ asset('assets/admin/js/Chart.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/utils.js') }}"></script>
    <script src="{{ asset('assets/admin/js/analyser.js') }}"></script>
    <!-- nice scrollbar -->
    <script src="{{ asset('assets/admin/js/perfect-scrollbar.min.js') }}"></script>
    <script>
        var ps = new PerfectScrollbar('#sidebar');
    </script>
    <!-- custom js -->
    <script src="{{ asset('assets/admin/js/custom.js') }}"></script>
    <script src="{{ asset('assets/admin/js/chart_custom_style1.js') }}"></script>
</body>

</html>
