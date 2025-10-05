@extends('layout_user.navbar')

@section('navbar')
    <style>
        /* versi vidio */
        /* :root {
                        --main-red: #d62828;
                        --text-light: #fff;
                    }

                    body {
                        margin: 0;
                        padding: 0;
                        background-color: #f8f9fa;
                        overflow-x: hidden;
                    }

                    Hero Section
                    .hero-section {
                        position: relative;
                        width: 100%;
                        height: 100vh;
                        overflow: hidden;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        color: var(--text-light);
                    }

                    .hero-section video {
                        position: absolute;
                        top: 0;
                        left: 0;
                        width: 100%;
                        height: 100%;
                        object-fit: cover;
                        z-index: -1;
                        filter: brightness(65%);
                    }

                    .hero-content {
                        text-align: center;
                        z-index: 2;
                        max-width: 700px;
                        padding: 20px;
                    }

                    .hero-content h1 {
                        font-size: 3rem;
                        font-weight: 700;
                        color: #fff;
                        text-shadow: 2px 2px 6px rgba(0, 0, 0, 0.4);
                    }

                    .hero-content p {
                        font-size: 1.2rem;
                        margin-top: 15px;
                        color: #f1f1f1;
                        text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.3);
                    }

                    .hero-content .btn {
                        margin-top: 25px;
                        background-color: var(--main-red);
                        color: #fff;
                        border-radius: 30px;
                        padding: 10px 25px;
                        font-weight: 600;
                        transition: all 0.3s ease;
                    }

                    .hero-content .btn:hover {
                        background-color: #b71c1c;
                        transform: translateY(-3px);
                    }

                    Responsif
                    @media (max-width: 768px) {
                        .hero-content h1 {
                            font-size: 2.2rem;
                        }

                        .hero-content p {
                            font-size: 1rem;
                        }
                    } */
        /* versi vidio end */

        /* versi yt */
        :root {
            --main-red: #d62828;
            --text-light: #fff;
        }

        body {
            margin: 0;
            padding: 0;
            overflow-x: hidden;
            background-color: #f8f9fa;
        }

        .hero-section {
            position: relative;
            width: 100%;
            height: 100vh;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--text-light);
        }

        /* YouTube video embed as background */
        .video-bg iframe {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 120%;
            height: 120%;
            transform: translate(-50%, -50%);
            pointer-events: none;
            z-index: -1;
        }

        /* Overlay agar teks terlihat jelas */
        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 0;
        }

        .hero-content {
            text-align: center;
            z-index: 2;
            max-width: 700px;
            padding: 20px;
        }

        .hero-content h1 {
            font-size: 3rem;
            font-weight: 700;
            color: #fff;
            text-shadow: 2px 2px 6px rgba(0, 0, 0, 0.4);
        }

        .hero-content p {
            font-size: 1.2rem;
            margin-top: 15px;
            color: #f1f1f1;
        }

        .hero-content .btn {
            margin-top: 25px;
            background-color: var(--main-red);
            color: #fff;
            border-radius: 30px;
            padding: 10px 25px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .hero-content .btn:hover {
            background-color: #b71c1c;
            transform: translateY(-3px);
        }

        @media (max-width: 768px) {
            .hero-content h1 {
                font-size: 2.2rem;
            }
        }

        @media (max-width: 768px) {
            .video-bg iframe {
                width: 300%;
                height: 300%;
            }
        }

        /* versi yt end */
    </style>

    <!-- HERO SECTION versi vidio -->
    {{-- <section class="hero-section">
        <video autoplay muted loop playsinline>
            <!-- Ganti URL ini dengan video kamu -->
            <source src="https://cdn.coverr.co/videos/coverr-students-in-library-6898/1080p.mp4" type="video/mp4">
            Browser kamu tidak mendukung video tag.
        </video>

        <div class="hero-content">
            <h1>Selamat Datang di Yayasan Cerdas Mulia</h1>
            <p>Membentuk generasi berkarakter, cerdas, dan berakhlak mulia melalui pendidikan yang bermakna.</p>
            <a href="#program" class="btn btn-lg">Jelajahi Program Kami</a>
        </div>
    </section> --}}
    {{-- versi vidio end --}}

    {{-- versi yt --}}
    <section class="hero-section">
        <!-- Video Background -->
        <div class="video-bg">
            <iframe
               src="https://www.youtube.com/embed/6m2SnHJdPZQ?autoplay=1&mute=1&loop=1&playlist=6m2SnHJdPZQ&controls=0&showinfo=0&modestbranding=1"
                frameborder="0" allow="autoplay; fullscreen" allowfullscreen>
            </iframe>
        </div>

        <div class="overlay"></div>

        <div class="hero-content">
            <h1>Selamat Datang di Yayasan Pendidikan Yapenas</h1>
            <p>Membangun generasi unggul melalui pendidikan berkualitas dan karakter mulia.</p>
            {{-- <a href="#program" class="btn btn-lg">Lihat Program Kami</a> --}}
        </div>
    </section>

    {{-- versi yt end --}}
@endsection
