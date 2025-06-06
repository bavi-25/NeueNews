<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>@yield('title')</title>
        <!-- Favicon icon -->
        <link rel="icon" type="image/png" sizes="16x16" href="/assets/images/favicon.png">
        <link rel="stylesheet" href="/assets/vendor/owl-carousel/css/owl.carousel.min.css">
        <link rel="stylesheet" href="/assets/vendor/owl-carousel/css/owl.theme.default.min.css">
        <link href="/assets/vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet">
        <link href="/assets/css/style.css" rel="stylesheet">

        <link href="/assets/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
        <!-- Add Datatables Js -->



    </head>

    <body>

        <!--*******************
        Preloader start
    ********************-->
        <div id="preloader">
            <div class="sk-three-bounce">
                <div class="sk-child sk-bounce1"></div>
                <div class="sk-child sk-bounce2"></div>
                <div class="sk-child sk-bounce3"></div>
            </div>
        </div>
        <!--*******************
        Preloader end
    ********************-->


        <!--**********************************
        Main wrapper start
    ***********************************-->
        <div id="main-wrapper">

            <!--**********************************
            Nav header start
        ***********************************-->
            <div class="nav-header">
                <a href="index.html" class="brand-logo">
                    <img class="logo-abbr" src="/assets/images/logo.png" alt="">
                    <img class="logo-compact" src="/assets/images/logo-dashboard.png" alt="">
                    <img class="brand-title" src="/assets/images/logo-dashboard.png" alt="">
                </a>

                <div class="nav-control">
                    <div class="hamburger">
                        <span class="line"></span><span class="line"></span><span class="line"></span>
                    </div>
                </div>
            </div>
            <!--**********************************
            Nav header end
        ***********************************-->

            <!--**********************************
            Header start
        ***********************************-->
            <div class="header">
                <div class="header-content">
                    <nav class="navbar navbar-expand">
                        <div class="collapse navbar-collapse justify-content-between">
                            <div class="header-left">

                            </div>

                            <ul class="navbar-nav header-right">
                                <li class="nav-item dropdown header-profile">
                                    <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                        <i class="mdi mdi-account"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="./app-profile.html" class="dropdown-item">
                                            <i class="icon-user"></i>
                                            <span class="ml-2">Profile</span>
                                        </a>
                                        <a href="./email-inbox.html" class="dropdown-item">
                                            <i class="icon-envelope-open"></i>
                                            <span class="ml-2">Inbox</span>
                                        </a>
                                        <a href="{{ route('logout') }}" class="dropdown-item">
                                            <i class="icon-key"></i>
                                            <span class="ml-2">Logout </span>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
            <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

            <!--**********************************
            Sidebar start
        ***********************************-->
            <div class="quixnav">
                <div class="quixnav-scroll">
                    <ul class="metismenu" id="menu">
                        <li class="nav-label first">Main Menu</li>
                        <li>
                            <a href="{{ route('admin.dashboard') }}" aria-expanded="false"><i
                                    class="icon icon-layout-grid"></i><span class="nav-text">Dashboard</span></a>
                        </li>
                        <li>
                            <a href="{{ route('admin.news.index') }}" aria-expanded="false"><i
                                    class="icon icon-single-content-03"></i><span class="nav-text">News</span></a>
                        </li>
                    </ul>
                </div>


            </div>
            <!--**********************************Sidebar end***********************************-->

            <!--**********************************Content body start***********************************-->
            <div class="content-body">
                <!-- row -->
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
            <!--**********************************
            Content body end
        ***********************************-->


            <!--**********************************
            Footer start
        ***********************************-->
            <div class="footer">
                <div class="copyright">
                    <p>Copyright © Developed by <a href="#" target="_blank">Buana Aviora</a> 2025</p>
                </div>
            </div>
            <!--**********************************
            Footer end
        ***********************************-->

            <!--**********************************
           Support ticket button start
        ***********************************-->

            <!--**********************************
           Support ticket button end
        ***********************************-->


        </div>
        <!--**********************************
        Main wrapper end
    ***********************************-->

        <!--**********************************
        Scripts
    ***********************************-->
        <!-- Required vendors -->
        <script src="/assets/vendor/global/global.min.js"></script>
        <script src="/assets/js/quixnav-init.js"></script>
        <script src="/assets/js/custom.min.js"></script>


        <!-- Vectormap -->
        <script src="/assets/vendor/raphael/raphael.min.js"></script>
        <script src="/assets/vendor/morris/morris.min.js"></script>


        <script src="/assets/vendor/circle-progress/circle-progress.min.js"></script>
        <script src="/assets/vendor/chart.js/Chart.bundle.min.js"></script>

        <script src="/assets/vendor/gaugeJS/dist/gauge.min.js"></script>

        <!--  flot-chart js -->
        <script src="/assets/vendor/flot/jquery.flot.js"></script>
        <script src="/assets/vendor/flot/jquery.flot.resize.js"></script>

        <!-- Owl Carousel -->
        <script src="/assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

        <!-- Counter Up -->
        <script src="/assets/vendor/jqvmap/js/jquery.vmap.min.js"></script>
        <script src="/assets/vendor/jqvmap/js/jquery.vmap.usa.js"></script>
        <script src="/assets/vendor/jquery.counterup/jquery.counterup.min.js"></script>

        <script src="/assets/vendor/datatables/js/jquery.dataTables.min.js"></script>
        <script src="/assets/js/plugins-init/datatables.init.js"></script>

        <script src="/assets/js/dashboard/dashboard-1.js"></script>

    </body>

</html>