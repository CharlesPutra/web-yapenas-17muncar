@extends('layout_user.navbar')

@section('navbar')
    <style>
        body {
            background-color: #f9f9f9;
            font-family: 'Poppins', sans-serif;
        }

        .berita-header {
            position: relative;
            text-align: center;
            color: white;
        }

        .berita-header img {
            width: 100%;
            height: 400px;
            object-fit: cover;
            filter: brightness(60%);
        }

        .berita-header .judul {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .judul h1 {
            font-size: 2.8rem;
            font-weight: 700;
        }

        .berita-content {
            margin-top: 3rem;
        }

        .content-text {
            font-size: 1.1rem;
            line-height: 1.8;
            color: #333;
        }

        .tanggal {
            color: #dc3545;
            font-weight: 600;
            margin-top: 10px;
        }

        .news-banner iframe {
            width: 100%;
            height: 400px;
            border-radius: 12px;
        }
    </style>

    <section class="py-5" style="background-color: #f8f9fa;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9">

                    <!-- Thumbnail / Banner -->
                    <div class="news-banner mb-4 position-relative">
                        <iframe width="100%" height="400" src="{{ $berita->link_yt }}" allowfullscreen></iframe>
                        <!-- Tanggal publikasi -->
                        <span class="badge bg-danger position-absolute top-0 start-0 m-3 px-3 py-2 shadow">
                            {{ $berita->formatted_date }}
                        </span>
                    </div>

                    <!-- Judul Berita -->
                    <h1 class="fw-bold mb-3 text-center">{{ $berita->judul_berita }}</h1>
                    <hr class="mb-4"
                        style="width: 120px; height: 3px; background-color: #d62828; border: none; margin: auto;">

                    <!-- Konten Berita -->
                    <div class="news-content mt-5" style="line-height: 1.8; font-size: 1.1rem; color: #333;">
                        {!! nl2br(e($berita->content)) !!}
                    </div>

                    <!-- Garis pemisah -->
                    <hr class="my-5">

                    <!-- Tombol Kembali -->
                    <div class="text-center">
                        <a href="{{ route('berita') }}" class="btn btn-outline-danger px-4 py-2 rounded-pill">
                            <i class="bi bi-arrow-left me-2"></i>Kembali ke Daftar Berita
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
