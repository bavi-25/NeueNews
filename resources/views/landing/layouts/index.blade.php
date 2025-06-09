<!DOCTYPE html>
<html lang="id">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>NeueNews</title>
        <link rel="icon" type="image/png" sizes="16x16" href="/assets/images/favicon.png">
        <link rel="stylesheet" href="/assets/icons/font-awesome-old/css/font-awesome.min.css">
        <link href="/assets/css/style.css" rel="stylesheet">
        <link href="/assets/css/landing.css" rel="stylesheet">
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