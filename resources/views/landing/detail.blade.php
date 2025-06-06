<html lang="id">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Presiden Umumkan Kebijakan Baru - BeritaKini</title>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.2/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
        <style>
            body {
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                background-color: #f8f9fa;
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
                box-shadow: 0 2px 8px rgba(52, 57, 87, 0.1);
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

            /* Breadcrumb */
            .breadcrumb-section {
                background-color: #343957;
                padding: 15px 0;
                margin-bottom: 30px;
            }

            .breadcrumb {
                background: transparent;
                margin: 0;
                padding: 0;
            }

            .breadcrumb-item a {
                color: #ffffff;
                text-decoration: none;
            }

            .breadcrumb-item a:hover {
                color: #f8f9fa;
            }

            .breadcrumb-item.active {
                color: #f8f9fa;
            }

            .breadcrumb-item+.breadcrumb-item::before {
                color: #ffffff;
            }

            /* Article Content */
            .article-header {
                margin-bottom: 30px;
            }

            .article-category {
                background-color: #343957;
                color: white;
                padding: 6px 15px;
                border-radius: 20px;
                font-size: 12px;
                font-weight: bold;
                text-transform: uppercase;
                display: inline-block;
                margin-bottom: 15px;
            }

            .article-title {
                font-size: 2.5rem;
                font-weight: bold;
                color: #333;
                line-height: 1.2;
                margin-bottom: 20px;
            }

            .article-meta {
                color: #666;
                margin-bottom: 20px;
                font-size: 14px;
            }

            .article-meta .meta-item {
                margin-right: 20px;
            }

            .article-image {
                width: 100%;
                border-radius: 10px;
                margin-bottom: 30px;
                box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            }

            .article-content {
                font-size: 16px;
                line-height: 1.8;
                color: #333;
            }

            .article-content p {
                margin-bottom: 20px;
            }

            .article-content h3 {
                color: #343957;
                margin: 30px 0 15px 0;
                font-weight: bold;
            }

            /* Tags */
            .article-tags {
                margin: 30px 0;
                padding: 20px 0;
                border-top: 1px solid #dee2e6;
                border-bottom: 1px solid #dee2e6;
            }

            .tag-item {
                background-color: #f8f9fa;
                color: #343957;
                padding: 5px 12px;
                border-radius: 15px;
                font-size: 12px;
                text-decoration: none;
                margin-right: 8px;
                margin-bottom: 8px;
                display: inline-block;
                border: 1px solid #343957;
                transition: all 0.3s ease;
            }

            .tag-item:hover {
                background-color: #343957;
                color: white;
                text-decoration: none;
            }

            /* Share Buttons */
            .share-section {
                background-color: #f8f9fa;
                padding: 20px;
                border-radius: 10px;
                margin: 30px 0;
                text-align: center;
            }

            .share-btn {
                display: inline-block;
                padding: 10px 15px;
                margin: 5px;
                border-radius: 25px;
                color: white;
                text-decoration: none;
                font-size: 14px;
                transition: transform 0.3s ease;
            }

            .share-btn:hover {
                transform: translateY(-2px);
                text-decoration: none;
                color: white;
            }

            .share-facebook {
                background-color: #3b5998;
            }

            .share-twitter {
                background-color: #1da1f2;
            }

            .share-whatsapp {
                background-color: #25d366;
            }

            .share-telegram {
                background-color: #0088cc;
            }

            /* Pagination */
            .news-pagination {
                background-color: white;
                padding: 30px;
                border-radius: 10px;
                box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
                margin: 40px 0;
            }

            .pagination-item {
                display: flex;
                align-items: center;
                padding: 15px 0;
                border-bottom: 1px solid #eee;
                text-decoration: none;
                color: #333;
                transition: all 0.3s ease;
            }

            .pagination-item:last-child {
                border-bottom: none;
            }

            .pagination-item:hover {
                background-color: #f8f9fa;
                text-decoration: none;
                color: #333;
                transform: translateX(5px);
            }

            .pagination-thumb {
                width: 80px;
                height: 60px;
                object-fit: cover;
                border-radius: 5px;
                margin-right: 15px;
            }

            .pagination-content h5 {
                font-size: 14px;
                font-weight: 600;
                margin-bottom: 5px;
                color: #343957;
            }

            .pagination-meta {
                font-size: 12px;
                color: #666;
            }

            .pagination-nav {
                display: flex;
                justify-content: space-between;
                margin-top: 20px;
            }

            .pagination-nav a {
                background-color: #343957;
                color: white;
                padding: 10px 20px;
                border-radius: 25px;
                text-decoration: none;
                font-size: 14px;
                transition: all 0.3s ease;
            }

            .pagination-nav a:hover {
                background-color: #2c304a;
                text-decoration: none;
                color: white;
                transform: translateY(-2px);
            }

            .pagination-nav a.disabled {
                background-color: #dee2e6;
                color: #6c757d;
                cursor: not-allowed;
            }

            /* Related News */
            .related-news {
                background-color: white;
                padding: 30px;
                border-radius: 10px;
                box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
                margin-bottom: 30px;
            }

            .related-title {
                background-color: #343957;
                color: white;
                padding: 12px 20px;
                margin: -30px -30px 20px -30px;
                border-radius: 10px 10px 0 0;
                font-weight: bold;
                text-transform: uppercase;
                font-size: 14px;
            }

            .related-item {
                display: flex;
                align-items: center;
                padding: 15px 0;
                border-bottom: 1px solid #eee;
                text-decoration: none;
                color: #333;
            }

            .related-item:last-child {
                border-bottom: none;
            }

            .related-item:hover {
                text-decoration: none;
                color: #343957;
            }

            .related-thumb {
                width: 100px;
                height: 70px;
                object-fit: cover;
                border-radius: 5px;
                margin-right: 15px;
            }

            .related-content h6 {
                font-size: 14px;
                font-weight: 600;
                margin-bottom: 5px;
            }

            .related-meta {
                font-size: 12px;
                color: #666;
            }

            /* Sidebar Styles */
            .sidebar-card {
                background-color: white;
                border-radius: 10px;
                box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
                margin-bottom: 30px;
                overflow: hidden;
            }

            .sidebar-title {
                background-color: #343957;
                color: white;
                padding: 15px 20px;
                font-weight: bold;
                text-transform: uppercase;
                font-size: 14px;
                margin: 0;
            }

            .sidebar-content {
                padding: 20px;
            }

            /* Responsive */
            @media (max-width: 768px) {
                .article-title {
                    font-size: 1.8rem;
                }

                .search-box input {
                    width: 200px;
                }

                .pagination-nav {
                    flex-direction: column;
                    gap: 10px;
                }
            }
        </style>
    </head>

    <body id="artifacts-component-root-html">
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

                    <!-- Social Media -->
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
                    <i class="fas fa-newspaper"></i>BeritaKini
                </a>

                <!-- Mobile Toggle Button -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Main Navigation Menu -->
                <div class="collapse navbar-collapse" id="mainNavbar">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#home">Beranda</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle active" href="#" role="button" data-toggle="dropdown">
                                Politik
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Nasional</a>
                                <a class="dropdown-item" href="#">Daerah</a>
                                <a class="dropdown-item" href="#">Internasional</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                Ekonomi
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Bisnis</a>
                                <a class="dropdown-item" href="#">Keuangan</a>
                                <a class="dropdown-item" href="#">Teknologi</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#sports">Olahraga</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#entertainment">Hiburan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#lifestyle">Gaya Hidup</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#opinion">Opini</a>
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

        <!-- Breadcrumb -->
        <div class="breadcrumb-section">
            <div class="container">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                        <li class="breadcrumb-item"><a href="#">Politik</a></li>
                        <li class="breadcrumb-item"><a href="#">Nasional</a></li>
                        <li class="breadcrumb-item active">Presiden Umumkan Kebijakan Baru</li>
                    </ol>
                </nav>
            </div>
        </div>

        <!-- Main Content -->
        <div class="container">
            <div class="row">
                <!-- Article Content -->
                <div class="col-lg-8">
                    <article class="bg-white p-4 rounded shadow-sm">
                        <!-- Article Header -->
                        <div class="article-header">
                            <span class="article-category">
                                <i class="fas fa-tag mr-1"></i>Politik Nasional
                            </span>
                            <h1 class="article-title">Presiden Umumkan Kebijakan Baru untuk Meningkatkan Ekonomi
                                Nasional</h1>
                            <div class="article-meta">
                                <span class="meta-item">
                                    <i class="far fa-user mr-1"></i>Oleh: <strong>Ahmad Suryanto</strong>
                                </span>
                                <span class="meta-item">
                                    <i class="far fa-clock mr-1"></i>6 Juni 2025, 14:30 WIB
                                </span>
                                <span class="meta-item">
                                    <i class="far fa-eye mr-1"></i>2,547 pembaca
                                </span>
                            </div>
                        </div>

                        <!-- Article Image -->
                        <img src="https://via.placeholder.com/800x450/343957/ffffff?text=Presiden+Umumkan+Kebijakan+Ekonomi"
                            alt="Presiden Umumkan Kebijakan Ekonomi" class="article-image">

                        <!-- Article Content -->
                        <div class="article-content">
                            <p><strong>JAKARTA</strong> - Dalam konferensi pers yang digelar di Istana Merdeka hari ini,
                                Presiden Republik Indonesia mengumumkan serangkaian kebijakan ekonomi baru yang
                                diharapkan dapat meningkatkan pertumbuhan ekonomi nasional hingga 6% pada tahun ini.</p>

                            <p>Kebijakan tersebut mencakup berbagai sektor strategis, mulai dari infrastruktur,
                                teknologi, hingga pemberdayaan UMKM. "Ini adalah langkah strategis untuk memastikan
                                Indonesia dapat berkompetisi di tingkat global," ujar Presiden dalam pidatonya.</p>

                            <h3>Fokus Utama Kebijakan Baru</h3>

                            <p>Menurut penjelasan Presiden, ada tiga fokus utama dalam kebijakan ekonomi yang baru
                                diumumkan:</p>

                            <p>Pertama, percepatan pembangunan infrastruktur digital di seluruh nusantara. Program ini
                                akan mencakup pembangunan jaringan fiber optik hingga ke daerah terpencil, serta
                                pengembangan smart city di 100 kota besar di Indonesia.</p>

                            <p>Kedua, penguatan sektor UMKM melalui kemudahan akses permodalan dan pelatihan digital
                                marketing. Pemerintah akan menyediakan dana bergulir sebesar Rp 50 triliun khusus untuk
                                mendukung UMKM go digital.</p>

                            <p>Ketiga, pengembangan industri hijau dan berkelanjutan. Indonesia berkomitmen untuk
                                mencapai net zero emission pada tahun 2060, dan industri hijau akan menjadi salah satu
                                pilar utama pertumbuhan ekonomi.</p>

                            <h3>Respons Positif dari Berbagai Pihak</h3>

                            <p>Kebijakan ini mendapat respons positif dari berbagai kalangan, terutama pelaku usaha dan
                                ekonom. Direktur Eksekutif Institute for Development of Economics and Finance (INDEF),
                                Tauhid Ahmad, menilai bahwa kebijakan ini cukup komprehensif dan dapat mendorong
                                pertumbuhan ekonomi yang berkelanjutan.</p>

                            <p>"Fokus pada infrastruktur digital dan UMKM adalah langkah yang tepat, mengingat kedua
                                sektor ini memiliki potensi besar untuk menciptakan lapangan kerja," kata Tauhid dalam
                                keterangan terpisah.</p>

                            <p>Sementara itu, Ketua Kamar Dagang dan Industri Indonesia (Kadin) juga menyambut baik
                                kebijakan tersebut. Menurutnya, dukungan pemerintah terhadap transformasi digital akan
                                sangat membantu pelaku usaha dalam menghadapi persaingan global.</p>

                            <h3>Timeline Implementasi</h3>

                            <p>Presiden menegaskan bahwa implementasi kebijakan ini akan dimulai secara bertahap mulai
                                Juli 2025. Untuk fase pertama, pemerintah akan fokus pada pembangunan infrastruktur
                                digital di 50 kabupaten/kota prioritas.</p>

                            <p>Program pemberdayaan UMKM akan dimulai bersamaan, dengan target dapat menjangkau 1 juta
                                UMKM pada tahun pertama implementasi. Sedangkan untuk industri hijau, pemerintah akan
                                mulai dengan memberikan insentif kepada perusahaan yang berinvestasi di sektor energi
                                terbarukan.</p>

                            <p>Dengan berbagai program ambisius ini, pemerintah optimis dapat mencapai target
                                pertumbuhan ekonomi 6% pada tahun ini, sekaligus memperkuat fondasi ekonomi Indonesia
                                untuk jangka panjang.</p>
                        </div>

                        <!-- Article Tags -->
                        <div class="article-tags">
                            <strong>Tags: </strong>
                            <a href="#" class="tag-item">Kebijakan Ekonomi</a>
                            <a href="#" class="tag-item">Presiden</a>
                            <a href="#" class="tag-item">Infrastruktur Digital</a>
                            <a href="#" class="tag-item">UMKM</a>
                            <a href="#" class="tag-item">Industri Hijau</a>
                            <a href="#" class="tag-item">Pertumbuhan Ekonomi</a>
                        </div>

                        <!-- Share Section -->
                        <div class="share-section">
                            <h5><i class="fas fa-share-alt mr-2"></i>Bagikan Artikel Ini</h5>
                            <a href="#" class="share-btn share-facebook">
                                <i class="fab fa-facebook-f mr-2"></i>Facebook
                            </a>
                            <a href="#" class="share-btn share-twitter">
                                <i class="fab fa-twitter mr-2"></i>Twitter
                            </a>
                            <a href="#" class="share-btn share-whatsapp">
                                <i class="fab fa-whatsapp mr-2"></i>WhatsApp
                            </a>
                            <a href="#" class="share-btn share-telegram">
                                <i class="fab fa-telegram mr-2"></i>Telegram
                            </a>
                        </div>
                    </article>

                    <!-- Pagination Section -->
                    <div class="news-pagination">
                        <h4 class="mb-4"><i class="fas fa-list mr-2"></i>Berita Lainnya</h4>

                        <!-- Previous Articles -->
                        <a href="#" class="pagination-item">
                            <img src="https://via.placeholder.com/80x60/343957/ffffff?text=Prev" alt="Previous"
                                class="pagination-thumb">
                            <div class="pagination-content">
                                <h5>DPR Setujui RUU Omnibus Law Cipta Kerja Versi Baru</h5>
                                <div class="pagination-meta">
                                    <i class="far fa-clock mr-1"></i>5 Juni 2025 • Politik
                                </div>
                            </div>
                        </a>

                        <a href="#" class="pagination-item">
                            <img src="https://via.placeholder.com/80x60/343957/ffffff?text=News" alt="News"
                                class="pagination-thumb">
                            <div class="pagination-content">
                                <h5>Menteri Keuangan: Inflasi Terkendali di Level 2,8%</h5>
                                <div class="pagination-meta">
                                    <i class="far fa-clock mr-1"></i>5 Juni 2025 • Ekonomi
                                </div>
                            </div>
                        </a>

                        <a href="#" class="pagination-item">
                            <img src="https://via.placeholder.com/80x60/343957/ffffff?text=Next" alt="Next"
                                class="pagination-thumb">
                            <div class="pagination-content">
                                <h5>Breakthrough Teknologi AI Buatan Anak Bangsa Raih Penghargaan Internasional</h5>
                                <div class="pagination-meta">
                                    <i class="far fa-clock mr-1"></i>6 Juni 2025 • Teknologi
                                </div>
                            </div>
                        </a>
                    </div><a href="#" class="pagination-item">

                        <!-- Navigation Buttons -->
                    </a>
                    <div class="pagination-nav"><a href="#" class="pagination-item">
                        </a><a href="#" class="prev-btn">
                            <i class="fas fa-chevron-left mr-2"></i>Artikel Sebelumnya
                        </a>
                        <a href="#" class="next-btn">
                            Artikel Selanjutnya<i class="fas fa-chevron-right ml-2"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <!-- Related News -->
                <div class="related-news">
                    <div class="related-title">
                        <i class="fas fa-newspaper mr-2"></i>Berita Terkait
                    </div>

                    <a href="#" class="related-item">
                        <img src="https://via.placeholder.com/100x70/343957/ffffff?text=1" alt="Related 1"
                            class="related-thumb">
                        <div class="related-content">
                            <h6>Bank Indonesia Pertahankan Suku Bunga Acuan di 6%</h6>
                            <div class="related-meta">
                                <i class="far fa-clock mr-1"></i>4 jam yang lalu
                            </div>
                        </div>
                    </a>

                    <a href="#" class="related-item">
                        <img src="https://via.placeholder.com/100x70/343957/ffffff?text=2" alt="Related 2"
                            class="related-thumb">
                        <div class="related-content">
                            <h6>Rupiah Menguat Tajam Terhadap Dolar Amerika</h6>
                            <div class="related-meta">
                                <i class="far fa-clock mr-1"></i>6 jam yang lalu
                            </div>
                        </div>
                    </a>

                    <a href="#" class="related-item">
                        <img src="https://via.placeholder.com/100x70/343957/ffffff?text=3" alt="Related 3"
                            class="related-thumb">
                        <div class="related-content">
                            <h6>Indeks Harga Saham Gabungan Ditutup Menguat 1,2%</h6>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </body>

</html>