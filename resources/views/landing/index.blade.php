@extends('landing.layouts.index')
@section('content')
<div class="row">
    <!-- Main Content -->
    <div class="col-lg-8">
        <!-- Featured News -->
        <div class="row">
@if ($mainNews)
            <div class="col-md-12">
                <div class="card news-card">
                    <img src="{{ Storage::url('news/'.$mainNews->image) }}" class="card-img-top featured-img" alt="Berita Utama">
                    <div class="card-body">
                        {{-- <span class="news-category">Politik</span> --}}
                        <div class="news-date">
                            <i class="fa fa-clock-o mr-1"></i> {{ $mainNews->created_at->diffForHumans() }}
                        </div>
                        <h2 class="card-title">{{ $mainNews->title }}</h2>
                        <p class="card-text">{{ Str::limit($mainNews->content, 150) }}</p>
                        <a href="{{ route('news.detail', $mainNews->id) }}" class="btn btn-outline-primary">Baca
                            Selengkapnya</a>
                    </div>
                </div>
            </div>
            @else
            <!-- Card Kosong - Belum Ada Berita -->
            <div class="col-md-12">
                <div class="card news-card empty-news-card">
                    <div class="card-body text-center py-5">
                        <div class="empty-news-icon mb-4">
                            <i class="fa fa-newspaper-o" style="font-size: 4rem; color: #dee2e6;"></i>
                        </div>
                        <h3 class="card-title text-muted mb-3">Belum Ada Berita Utama</h3>
                        <p class="card-text text-muted mb-4">
                            Saat ini belum ada berita utama yang dipublikasikan.
                            Silakan kembali lagi nanti untuk mendapatkan informasi terbaru.
                        </p>
                        <div class="empty-news-actions">
                            <a href="" class="btn btn-outline-primary mr-2">
                                <i class="fa fa-list mr-2"></i>Lihat Semua Berita
                            </a>
                            <button type="button" class="btn btn-outline-secondary" onclick="location.reload()">
                                <i class="fa fa-refresh mr-2"></i>Muat Ulang
                            </button>
                        </div>
                        <hr class="my-4">
                        <small class="text-muted">
                            <i class="fa fa-info-circle mr-1"></i>
                            Berita akan segera hadir. Terima kasih atas kesabaran Anda.
                        </small>
                    </div>
                </div>
            </div>  @endif
        </div>

        <!-- News Grid -->
        <div class="row mt-4">
            @foreach ($news as $item)
            <div class="col-md-6">
                <div class="card news-card">
                    <img src="{{ Storage::url('news/'.$item->image) }}" class="card-img-top news-img" alt="Teknologi">
                    <div class="card-body">
                        {{-- <span class="news-category">Teknologi</span> --}}
                        <div class="news-date">
                            <i class="fa fa-clock-o mr-1"></i> {{ $item->created_at->diffForHumans() }}
                        </div>
                        <h5 class="card-title">{{ Str::limit($item->title, 60) }}</h5>
                        <p class="card-text">{{ Str::limit($item->content, 120) }}</p>
                        <a href="{{ route('news.detail', $item->id) }}" class="btn btn-sm btn-outline-primary">Baca
                            Selengkapnya</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <!-- Sidebar -->
    {{-- <div class="col-lg-4">
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
                            <img src="https://via.placeholder.com/80x60/5836E7/ffffff?text=1" class="mr-3 rounded"
                                alt="News">
                            <div class="media-body">
                                <h6 class="mt-0 mb-1">Cuaca Ekstrem Melanda Jakarta</h6>
                                <small class="text-muted">2.5k pembaca</small>
                            </div>
                        </li>
                        <li class="media mb-3">
                            <img src="https://via.placeholder.com/80x60/5836E7/ffffff?text=2" class="mr-3 rounded"
                                alt="News">
                            <div class="media-body">
                                <h6 class="mt-0 mb-1">Rupiah Menguat Terhadap Dolar AS</h6>
                                <small class="text-muted">1.8k pembaca</small>
                            </div>
                        </li>
                        <li class="media mb-3">
                            <img src="https://via.placeholder.com/80x60/5836E7/ffffff?text=3" class="mr-3 rounded"
                                alt="News">
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
    </div> --}}
</div>
@endsection