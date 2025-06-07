<!DOCTYPE html>
<html lang="id">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>NeueNews</title>
        <link rel="icon" type="image/png" sizes="16x16" href="/assets/images/favicon.png">
        <link rel="stylesheet" href="/assets/icons/font-awesome-old/css/font-awesome.min.css">

        <link href="/assets/css/style.css" rel="stylesheet">
        <style>
            body {
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            }

            /* Top Navbar - Info Bar */
            .top-navbar {
                background-color: #343957;
                padding: 8px 0;
                font-size: 13px;
                border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            }

            .top-navbar .navbar-text {
                color: #ffffff !important;
                margin: 0 15px;
                font-size: 12px;
            }

            .top-navbar .nav-link {
                color: #ffffff !important;
                font-size: 12px;
                padding: 4px 8px !important;
                transition: all 0.3s ease;
            }

            .top-navbar .nav-link:hover {
                color: #f8f9fa !important;
                background-color: rgba(255, 255, 255, 0.1);
                border-radius: 3px;
            }

            .breaking-news {
                background-color: #dc3545;
                color: white;
                padding: 2px 8px;
                border-radius: 3px;
                font-size: 11px;
                font-weight: bold;
                margin-right: 10px;
                animation: blink 2s infinite;
            }

            @keyframes blink {

                0%,
                50% {
                    opacity: 1;
                }

                51%,
                100% {
                    opacity: 0.7;
                }
            }

            /* Main Navbar */
            .main-navbar {
                background-color: #ffffff;
                box-shadow: 0 2px 8px rgba(88, 54, 231, 0.1);
                padding: 0;
                border-bottom: 3px solid #343957;
            }

            .main-navbar .navbar-brand {
                font-weight: bold;
                color: #343957 !important;
                font-size: 28px;
                padding: 15px 0;
            }

            .main-navbar .navbar-brand .fa-newspaper {
                margin-right: 8px;
                color: #343957;
            }

            .main-navbar .navbar-nav {
                margin-left: auto;
            }

            .main-navbar .nav-item {
                margin: 0 5px;
            }

            .main-navbar .nav-link {
                color: #333 !important;
                font-weight: 600;
                padding: 20px 15px !important;
                text-transform: uppercase;
                font-size: 14px;
                letter-spacing: 0.5px;
                position: relative;
                transition: all 0.3s ease;
            }

            .main-navbar .nav-link:hover,
            .main-navbar .nav-link.active {
                color: #343957 !important;
            }

            .main-navbar .nav-link::after {
                content: '';
                position: absolute;
                bottom: 0;
                left: 0;
                width: 0;
                height: 3px;
                background-color: #343957;
                transition: width 0.3s ease;
            }

            .main-navbar .nav-link:hover::after,
            .main-navbar .nav-link.active::after {
                width: 100%;
            }

            .search-box {
                position: relative;
            }

            .search-box input {
                border: 2px solid #343957;
                border-radius: 25px;
                padding: 8px 40px 8px 15px;
                width: 250px;
                font-size: 14px;
            }

            .search-box .search-btn {
                position: absolute;
                right: 5px;
                top: 50%;
                transform: translateY(-50%);
                background: #343957;
                color: white;
                border: none;
                border-radius: 50%;
                width: 30px;
                height: 30px;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            /* Content Styles */
            .hero-section {
                background: linear-gradient(135deg, #43496e 0%, #130143 100%);
                color: white;
                padding: 40px 0;
                margin-bottom: 30px;
            }

            .news-card {
                border: none;
                box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
                transition: transform 0.3s ease;
                margin-bottom: 20px;
            }

            .news-card:hover {
                transform: translateY(-5px);
            }

            .news-category {
                background-color: #343957;
                color: white;
                padding: 4px 12px;
                border-radius: 15px;
                font-size: 12px;
                font-weight: bold;
                text-transform: uppercase;
                display: inline-block;
                margin-bottom: 10px;
            }

            .news-date {
                color: #666;
                font-size: 12px;
                margin-bottom: 5px;
            }

            .trending-news {
                background-color: #f8f9fa;
                border-left: 4px solid #343957;
                padding: 15px;
                margin-bottom: 20px;
            }

            .sidebar-title {
                background-color: #343957;
                color: white;
                padding: 12px 15px;
                margin: 0 -15px 15px -15px;
                font-weight: bold;
                text-transform: uppercase;
                font-size: 14px;
            }

            /* Responsive */
            @media (max-width: 768px) {
                .top-navbar {
                    text-align: center;
                }

                .top-navbar .navbar-text {
                    display: block;
                    margin: 5px 0;
                }

                .search-box input {
                    width: 200px;
                }

                .main-navbar .navbar-brand {
                    font-size: 24px;
                }
            }

            @media (max-width: 576px) {
                .search-box input {
                    width: 150px;
                }
            }
        </style>
    </head>

    <body>
        <!-- Top Navbar - Info Bar -->
        <nav class="navbar navbar-expand-lg top-navbar">
            <div class="container">
                <div class="d-flex w-100 justify-content-between align-items-center flex-wrap">
                    <!-- Breaking News & Date -->
                    <div class="d-flex align-items-center flex-wrap">
                        <span class="breaking-news">
                            <i class="fa fa-bolt"></i> BREAKING
                        </span>
                        <span class="navbar-text">
                            <i class="fa fa-calendar mr-1"></i>
                            <span id="current-date">Loading...</span>
                        </span>
                    </div>

                    <!-- Social Media & Language -->
                    <div class="d-flex align-items-center">
                        <ul class="navbar-nav flex-row">
                            <li class="nav-item">
                                <a class="nav-link" href="#" title="Facebook">
                                    <i class="fa fa-facebook-f"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" title="Twitter">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" title="Instagram">
                                    <i class="fa fa-instagram"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" title="YouTube">
                                    <i class="fa fa-youtube"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" title="WhatsApp">
                                    <i class="fa fa-whatsapp"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Main Navbar -->
        <nav class="navbar navbar-expand-lg main-navbar sticky-top">
            <div class="container">
                <!-- Brand/Logo -->
                <a class="navbar-brand" href="/">
                    <i class="fa fa-newspaper-o"></i>NeueNews
                </a>

                <!-- Mobile Toggle Button -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Main Navigation Menu -->
                <div class="collapse navbar-collapse" id="mainNavbar">
                    <ul class="navbar-nav ml-auto">
                        {{-- <li class="nav-item">
                            <a class="nav-link active" href="#home">Beranda</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                Politics
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Nacional</a>
                                <a class="dropdown-item" href="#">Region</a>
                                <a class="dropdown-item" href="#">Internasional</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                Econmics
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Business</a>
                                <a class="dropdown-item" href="#">Moneys</a>
                                <a class="dropdown-item" href="#">Technology</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#sports">Sports</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#entertainment">Entertainment</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#lifestyle">Lifestyle</a>
                        </li> --}}
                        {{-- <li class="nav-item">
                            <a class="nav-link" href="#opinion">Opinion</a>
                        </li> --}}
                        <li class="nav-item">
                            <a class="nav-link" href="/login">Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Hero Section -->
        @if (Request::is('/'))
        <div class="hero-section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <h1 class="display-4 mb-3 text-white">Portal Berita Terpercaya</h1>
                        <p class="lead">Dapatkan informasi terkini, akurat, dan terpercaya dari berbagai kategori berita
                            yang kami sajikan setiap hari.</p>
                    </div>
                    <div class="col-lg-4 text-center">
                        <i class="fa fa-newspaper-o fa-5x mb-3" style="opacity: 0.8;"></i>
                    </div>
                </div>
            </div>
        </div>
        @endif

        <!-- Main Content -->
        <div class="container">
            @yield('content')
        </div>

        <!-- Footer -->
        <footer class="bg-dark text-white mt-5 py-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h5 class="text-white"><i class="fa fa-newspaper-o mr-2 text-white"></i>NeueNews</h5>
                        <p>Portal berita terpercaya untuk informasi terkini dan akurat.</p>
                    </div>
                    <div class="col-md-6 text-md-right">
                        <p>&copy; 2025 Buana Aviora. Semua hak dilindungi.</p>
                    </div>
                </div>
            </div>
        </footer>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="/assets/js/dashboard/dashboard-1.js"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const now = new Date();
                const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
                document.getElementById('current-date').textContent = now.toLocaleDateString('id-ID', options);
            });
        </script>
        <script>
            // Smooth scrolling untuk anchor links
            $('a[href^="#"]').on('click', function (event) {
                var target = $(this.getAttribute('href'));
                if (target.length) {
                    event.preventDefault();
                    $('html, body').stop().animate({
                        scrollTop: target.offset().top - 100
                    }, 1000);
                }
            });

            $(window).scroll(function () {
                var scrollDistance = $(window).scrollTop();

                $('.main-navbar .nav-link').each(function (i) {
                    if ($($(this).attr('href')).position().top <= scrollDistance + 150) {
                        $('.main-navbar .nav-link.active').removeClass('active');
                        $(this).addClass('active');
                    }
                });
            }).scroll();

            setInterval(function () {
                $('.breaking-news').fadeOut(500).fadeIn(500);
            }, 3000);


        </script>
    </body>

</html>