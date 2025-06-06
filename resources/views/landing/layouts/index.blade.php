<!DOCTYPE html>
<html lang="id">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>NeueNews</title>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.2/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
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
                background: linear-gradient(135deg, #343957 0%, #7c4dff 100%);
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
                            <i class="fas fa-bolt"></i> BREAKING
                        </span>
                        <span class="navbar-text">
                            <i class="far fa-calendar-alt mr-1"></i> Jumat, 6 Juni 2025
                        </span>
                        <span class="navbar-text">
                            <i class="fas fa-thermometer-half mr-1"></i> Jakarta 32°C
                        </span>
                    </div>

                    <!-- Social Media & Language -->
                    <div class="d-flex align-items-center">
                        <ul class="navbar-nav flex-row">
                            <li class="nav-item">
                                <a class="nav-link" href="#" title="Facebook">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" title="Twitter">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" title="Instagram">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" title="YouTube">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" title="WhatsApp">
                                    <i class="fab fa-whatsapp"></i>
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
                <a class="navbar-brand" href="#">
                    <i class="fas fa-newspaper"></i>NeueNews
                </a>

                <!-- Mobile Toggle Button -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Main Navigation Menu -->
                <div class="collapse navbar-collapse" id="mainNavbar">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
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
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#opinion">Opinion</a>
                        </li>
                    </ul>

                    <!-- Search Box -->
                    <div class="search-box ml-3">
                        <input type="text" class="form-control" placeholder="Cari berita...">
                        <button class="search-btn" type="button">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Hero Section -->
        <div class="hero-section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <h1 class="display-4 mb-3">Portal Berita Terpercaya</h1>
                        <p class="lead">Dapatkan informasi terkini, akurat, dan terpercaya dari berbagai kategori berita
                            yang kami sajikan setiap hari.</p>
                    </div>
                    <div class="col-lg-4 text-center">
                        <i class="fas fa-newspaper fa-5x mb-3" style="opacity: 0.8;"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="container">
            <div class="row">
                <!-- Main Content -->
                <div class="col-lg-8">
                    <!-- Featured News -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card news-card">
                                <img src="https://via.placeholder.com/800x400/5836E7/ffffff?text=Berita+Utama"
                                    class="card-img-top" alt="Berita Utama">
                                <div class="card-body">
                                    <span class="news-category">Politik</span>
                                    <div class="news-date">
                                        <i class="far fa-clock mr-1"></i> 2 jam yang lalu
                                    </div>
                                    <h2 class="card-title">Presiden Umumkan Kebijakan Baru untuk Meningkatkan Ekonomi
                                        Nasional</h2>
                                    <p class="card-text">Dalam konferensi pers yang digelar hari ini, Presiden
                                        mengumumkan serangkaian kebijakan ekonomi baru yang diharapkan dapat
                                        meningkatkan pertumbuhan ekonomi nasional hingga 6% pada tahun ini...</p>
                                    <a href="#" class="btn btn-outline-primary">Baca Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- News Grid -->
                    <div class="row mt-4">
                        <div class="col-md-6">
                            <div class="card news-card">
                                <img src="https://via.placeholder.com/400x250/5836E7/ffffff?text=Teknologi"
                                    class="card-img-top" alt="Teknologi">
                                <div class="card-body">
                                    <span class="news-category">Teknologi</span>
                                    <div class="news-date">
                                        <i class="far fa-clock mr-1"></i> 4 jam yang lalu
                                    </div>
                                    <h5 class="card-title">Peluncuran Smartphone Terbaru dengan Teknologi AI</h5>
                                    <p class="card-text">Perusahaan teknologi terkemuka mengumumkan peluncuran
                                        smartphone dengan fitur kecerdasan buatan yang revolusioner...</p>
                                    <a href="#" class="btn btn-sm btn-outline-primary">Baca Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card news-card">
                                <img src="https://via.placeholder.com/400x250/5836E7/ffffff?text=Olahraga"
                                    class="card-img-top" alt="Olahraga">
                                <div class="card-body">
                                    <span class="news-category">Olahraga</span>
                                    <div class="news-date">
                                        <i class="far fa-clock mr-1"></i> 6 jam yang lalu
                                    </div>
                                    <h5 class="card-title">Tim Nasional Raih Kemenangan Gemilang</h5>
                                    <p class="card-text">Dalam pertandingan yang berlangsung sengit, tim nasional
                                        berhasil meraih kemenangan dengan skor 3-1...</p>
                                    <a href="#" class="btn btn-sm btn-outline-primary">Baca Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="col-lg-4">
                    <!-- Trending News -->
                    <div class="card">
                        <div class="card-body p-0">
                            <div class="sidebar-title">
                                <i class="fas fa-fire mr-2"></i>Trending Hari Ini
                            </div>
                            <div class="p-3">
                                <div class="trending-news">
                                    <span class="news-category" style="font-size: 10px;">Ekonomi</span>
                                    <h6 class="mt-2 mb-1">Harga BBM Turun Drastis Mulai Besok</h6>
                                    <small class="text-muted">
                                        <i class="far fa-clock mr-1"></i>1 jam yang lalu
                                    </small>
                                </div>
                                <div class="trending-news">
                                    <span class="news-category" style="font-size: 10px;">Kesehatan</span>
                                    <h6 class="mt-2 mb-1">Vaksin COVID-19 Generasi Baru Tiba di Indonesia</h6>
                                    <small class="text-muted">
                                        <i class="far fa-clock mr-1"></i>3 jam yang lalu
                                    </small>
                                </div>
                                <div class="trending-news">
                                    <span class="news-category" style="font-size: 10px;">Hiburan</span>
                                    <h6 class="mt-2 mb-1">Film Indonesia Meraih Penghargaan Internasional</h6>
                                    <small class="text-muted">
                                        <i class="far fa-clock mr-1"></i>5 jam yang lalu
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Most Read -->
                    <div class="card mt-4">
                        <div class="card-body p-0">
                            <div class="sidebar-title">
                                <i class="fas fa-eye mr-2"></i>Paling Banyak Dibaca
                            </div>
                            <div class="p-3">
                                <ol class="list-unstyled">
                                    <li class="media mb-3">
                                        <img src="https://via.placeholder.com/80x60/5836E7/ffffff?text=1"
                                            class="mr-3 rounded" alt="News">
                                        <div class="media-body">
                                            <h6 class="mt-0 mb-1">Cuaca Ekstrem Melanda Jakarta</h6>
                                            <small class="text-muted">2.5k pembaca</small>
                                        </div>
                                    </li>
                                    <li class="media mb-3">
                                        <img src="https://via.placeholder.com/80x60/5836E7/ffffff?text=2"
                                            class="mr-3 rounded" alt="News">
                                        <div class="media-body">
                                            <h6 class="mt-0 mb-1">Rupiah Menguat Terhadap Dolar AS</h6>
                                            <small class="text-muted">1.8k pembaca</small>
                                        </div>
                                    </li>
                                    <li class="media mb-3">
                                        <img src="https://via.placeholder.com/80x60/5836E7/ffffff?text=3"
                                            class="mr-3 rounded" alt="News">
                                        <div class="media-body">
                                            <h6 class="mt-0 mb-1">Terobosan Baru dalam Dunia Pendidikan</h6>
                                            <small class="text-muted">1.2k pembaca</small>
                                        </div>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>

                    <!-- Newsletter -->
                    <div class="card mt-4" style="background: linear-gradient(135deg, #343957 0%, #7c4dff 100%);">
                        <div class="card-body text-white">
                            <h5 class="card-title">
                                <i class="fas fa-envelope mr-2"></i>Newsletter
                            </h5>
                            <p class="card-text">Dapatkan berita terkini langsung di email Anda setiap hari.</p>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Email Anda">
                            </div>
                            <button class="btn btn-light btn-block">
                                <i class="fas fa-paper-plane mr-2"></i>Berlangganan
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer class="bg-dark text-white mt-5 py-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h5><i class="fas fa-newspaper mr-2"></i>NeueNews</h5>
                        <p>Portal berita terpercaya untuk informasi terkini dan akurat.</p>
                    </div>
                    <div class="col-md-6 text-md-right">
                        <p>&copy; 2025 NeueNews. Semua hak dilindungi.</p>
                    </div>
                </div>
            </div>
        </footer>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.2/js/bootstrap.bundle.min.js"></script>
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

            // Active menu highlight
            $(window).scroll(function () {
                var scrollDistance = $(window).scrollTop();

                $('.main-navbar .nav-link').each(function (i) {
                    if ($($(this).attr('href')).position().top <= scrollDistance + 150) {
                        $('.main-navbar .nav-link.active').removeClass('active');
                        $(this).addClass('active');
                    }
                });
            }).scroll();

            // Breaking news ticker effect (optional)
            setInterval(function () {
                $('.breaking-news').fadeOut(500).fadeIn(500);
            }, 3000);

            // Search functionality
            $('.search-btn').click(function () {
                var searchTerm = $('.search-box input').val();
                if (searchTerm) {
                    alert('Mencari: ' + searchTerm);
                    // Implement actual search functionality here
                }
            });

            $('.search-box input').keypress(function (e) {
                if (e.which == 13) {
                    $('.search-btn').click();
                }
            });
        </script>
    </body>

</html>