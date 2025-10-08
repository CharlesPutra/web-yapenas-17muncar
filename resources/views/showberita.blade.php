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
    </style>

        {{-- Header Gambar --}}
    <div class="berita-header">
        <img src="{{ asset('storage/' . $berita->thumbnail) }}" alt="Thumbnail Berita">
        <div class="judul" data-aos="fade-up" data-aos-duration="1000">
            <h1>{{ $berita->judul_berita }}</h1>
            <p class="tanggal">{{ \Carbon\Carbon::parse($berita->published_at)->translatedFormat('d F Y') }}</p>
        </div>
    </div>

    {{-- Konten Berita --}}
    <div class="container berita-content" data-aos="fade-up" data-aos-duration="1200">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <div class="content-text">
                    {!! nl2br(e($berita->content)) !!}
                </div>
            </div>
        </div>
    </div>

    {{-- Tombol Kembali --}}
    <div class="text-center my-5">
        <a href="{{ route('home') }}" class="btn btn-danger px-4">← Kembali ke Daftar Berita</a>
    </div>

@endsection
