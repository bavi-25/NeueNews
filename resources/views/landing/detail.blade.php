@extends('landing.layouts.index')
@section('content')


<!-- Main Content -->

<div class="row">
    <!-- Article Content -->
    <div class="col-lg-8">
        <article class="bg-white p-4 rounded shadow-sm">
            <!-- Article Header -->
            <div class="article-header">
                <span class="article-category">
                    {{-- <i class="fas fa-tag mr-1"></i>Politik Nasional --}}
                </span>
                <h1 class="article-title display-4 font-weight-bold text-dark mb-3 leading-tight">
                    {{ $news->title }}
                </h1>
                <div class="article-meta">
                    {{-- <span class="meta-item">
                            <i class="far fa-user mr-1"></i>Oleh: <strong>Ahmad Suryanto</strong>
                        </span> --}}
                    <span class="meta-item">
                        <i class="fa fa-clock-o mr-1"></i>{{ $news->created_at->diffForHumans() }}
                    </span>
                    {{-- <span class="meta-item">
                            <i class="far fa-eye mr-1"></i>2,547 pembaca
                        </span> --}}
                </div>
            </div>

            <!-- Article Image -->
            <figure class="article-image-container mb-5">
                <div class="position-relative overflow-hidden rounded shadow-sm">
                    <img src="{{ Storage::url('news/'.$news->image) }}" alt="{{ $news->title }}" class="img-fluid w-100"
                        style="max-height: 400px; object-fit: cover; transition: transform 0.3s ease;"
                        onmouseover="this.style.transform='scale(1.02)'" onmouseout="this.style.transform='scale(1)'">
                </div>
            </figure>

            <!-- Article Content -->
            <div class="article-content">
                <p class="text-justify text-dark" style="font-size: 1.1rem; line-height: 1.6;">
                    {{-- <i class="fas fa-quote-left mr-2"></i> --}}
                    {{-- <strong>Berita Utama:</strong> --}}
                    {{-- {{ $news->content }} --}}
                    {!! $news->content !!}
                </p>

            </div>

            <!-- Article Tags -->
            {{-- <div class="article-tags">
                    <strong>Tags: </strong>
                    <a href="#" class="tag-item">Kebijakan Ekonomi</a>
                    <a href="#" class="tag-item">Presiden</a>
                    <a href="#" class="tag-item">Infrastruktur Digital</a>
                    <a href="#" class="tag-item">UMKM</a>
                    <a href="#" class="tag-item">Industri Hijau</a>
                    <a href="#" class="tag-item">Pertumbuhan Ekonomi</a>
                </div> --}}

            <!-- Share Section -->
            {{-- <div class="share-section">
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
                </div> --}}
        </article>


    </div>
</div>

@endsection