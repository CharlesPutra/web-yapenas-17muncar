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
            font-family: 'Poppins', sans-serif;
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
  position: absolute;
  top: 10%;
  left: 50%;
  transform: translateX(-50%);
  z-index: 2;
  width: 100%;
  max-width: 1200px; /* tambah lebar agar tidak turun */
  padding: 20px;
}

.hero-content h1 {
  font-size: 3rem;
  font-weight: 700;
  color: #fff;
  text-transform: uppercase;
  line-height: 1.3;
  text-shadow: 2px 2px 6px rgba(0, 0, 0, 0.6);
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
}

.hero-content h1 .merah {
  color: #e60000;
  text-shadow: 2px 2px 8px rgba(255, 255, 255, 0.8);
}

.hero-content p {
  font-size: 1.2rem;
  margin-top: 15px;
  color: #f1f1f1;
}



      @media (max-width: 768px) {
  .hero-content {
    max-width: 100%;
    padding: 10px;
  }

  .hero-content h1 {
    font-size: 2rem;
  }
}


        @media (max-width: 768px) {
            .video-bg iframe {
                width: 300%;
                height: 300%;
            }
        }

        /* versi yt end */


        /* Wave divider style */
        .custom-shape-divider-bottom-hero {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            overflow: hidden;
            line-height: 0;
        }

        .custom-shape-divider-bottom-hero svg {
            position: relative;
            display: block;
            width: calc(136% + 1.3px);
            height: 100px;
        }

        .custom-shape-divider-bottom-hero path {
            fill: #ffffff;
        }


        .card-program {
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .card-program:hover {
            transform: translateY(-8px);
            box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.15);
        }

        .card-program img {
            height: 180px;
            object-fit: cover;
        }

        @media (max-width: 768px) {
            .card-program img {
                height: 150px;
            }
        }

        .about-divider svg {
            display: block;
            width: 100%;
            height: auto;
            line-height: 0;
            margin-bottom: -1px;
        }

        .section-header {
            text-align: center;
            margin-bottom: 60px;
        }

        .section-header h2 {
            color: #d62828;
            font-weight: 700;
        }

        .news-card {
            border: none;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            overflow: hidden;
            transition: transform 0.3s ease;
        }

        .news-card:hover {
            transform: translateY(-5px);
        }

        .btn-news,
        .btn-danger {
            background-color: #800000;
            border: none;
        }

        .btn-news:hover,
        .btn-danger:hover {
            background-color: #a52a2a;
        }

        @media (max-width: 768px) {
            .carousel-caption {
                padding: 20px !important;
            }

            .carousel-caption h2 {
                font-size: 1.25rem;
            }

            .carousel-caption p {
                font-size: 0.9rem;
            }
        }
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

          <!-- Pembatas Wave -->
  <div class="custom-shape-divider-bottom-hero">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
      <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.77-17.35-168.26-13.21-250.45,3.84
      C406.34,36.47,327.41,67.17,246.65,84.69c-89,19.12-175.47,19.9-261.64-1.54V120H1200V95.8
      C1132.19,109.07,1058.76,111.13,985.66,92.83Z"
      fill="#fff"></path>
    </svg>
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
  <h1>
    SELAMAT DATANG<br>
    <span class="merah">YAYASAN PENDIDIKAN NASIONAL <br>(YAPENAS)</span>
    <span class="merah">17 AGUSTUS 1945 KABUPATEN BANYUWANGI</span>
  </h1>
  <p>{{$datas->motto}}</p>
</div>





        <!-- Pembatas Wave -->
        <div class="custom-shape-divider-bottom-hero">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.77-17.35-168.26-13.21-250.45,3.84
                                                                         C406.34,36.47,327.41,67.17,246.65,84.69c-89,19.12-175.47,19.9-261.64-1.54V120H1200V95.8
                                                                        C1132.19,109.07,1058.76,111.13,985.66,92.83Z"
                    fill="#fff">
                </path>
            </svg>
        </div>
    </section>

    {{-- versi yt end --}}


    <!-- ======= Berita Section ======= -->
    <!-- ======= Berita Section ======= -->
    <section id="berita" class="bg-white">
        <div class="container text-center mb-4 pt-5" data-aos="fade-up">
            <div class="section-header">
                <h2 class="fw-bold">Berita & Kegiatan</h2>
                <p class="text-muted">Kumpulan informasi dan kegiatan terbaru dari {{ $datas->nama_yayasan }}</p>
            </div>
        </div>

        <div id="beritaCarousel" class="carousel slide carousel-fade shadow-lg rounded-0 overflow-hidden"
            data-bs-ride="carousel" data-bs-interval="5000">

            <!-- 🔴 Indikator titik -->
            <div class="carousel-indicators mb-4">
                @foreach ($beritas->take(5) as $index => $berita)
                    <button type="button" data-bs-target="#beritaCarousel" data-bs-slide-to="{{ $index }}"
                        class="{{ $index === 0 ? 'active' : '' }}" aria-current="{{ $index === 0 ? 'true' : 'false' }}"
                        aria-label="Slide {{ $index + 1 }}">
                    </button>
                @endforeach
            </div>

            <!-- 🖼️ Gambar carousel -->
            <div class="carousel-inner" style="height: 100vh;">
                @foreach ($beritas->take(5) as $index => $berita)
                    <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                        <div class="position-relative" style="height: 100vh;">
                            <img src="{{ asset('storage/' . $berita->thumbnail) }}" class="d-block w-100 h-100"
                                alt="{{ $berita->judul_berita }}" style="object-fit: cover; filter: brightness(70%);">

                            <!-- Overlay teks -->
                            <div class="carousel-caption d-flex flex-column justify-content-end align-items-end text-end p-5"
                                style="bottom: 80px; right: 50px;">
                                <h2 class="fw-bold text-white mb-3 animate__animated animate__fadeInUp"
                                    style="text-shadow: 2px 2px 6px rgba(0,0,0,0.7); font-size: 2.5rem;">
                                    {{ $berita->judul_berita }}
                                </h2>
                                <a href="{{ route('berita.show', $berita->slug) }}"
                                    class="btn btn-danger px-4 py-2 fw-semibold shadow-sm"
                                    style="border: none; border-radius: 30px; background-color: #e63946;">
                                    Baca Selengkapnya
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- ⬅️➡️ Tombol kontrol -->
            <button class="carousel-control-prev" type="button" data-bs-target="#beritaCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bg-dark rounded-circle p-3 opacity-75" aria-hidden="true"></span>
                <span class="visually-hidden">Sebelumnya</span>
            </button>

            <button class="carousel-control-next" type="button" data-bs-target="#beritaCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon bg-dark rounded-circle p-3 opacity-75" aria-hidden="true"></span>
                <span class="visually-hidden">Selanjutnya</span>
            </button>
        </div>
    </section>

    <!-- 🔧 CSS Kustom -->
    <style>
        /* Warna & bentuk indikator */
        .carousel-indicators [data-bs-target] {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background-color: #727272;
            /* Merah */
            opacity: 0.4;
            transition: all 0.3s ease;
        }

        /* Aktif = titik terang */
        .carousel-indicators .active {
            opacity: 1;
            background-color: #e63946;
            transform: scale(1.3);
        }

        /* Sedikit jarak antar titik */
        .carousel-indicators {
            gap: 8px;
        }
    </style>



    <!-- End Berita Section -->


    {{-- end section berita --}}



    <!-- Pembatas di bawah About Section -->
    <div class="about-divider">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 120" style="background-color: #d62828;">
            <path fill="#fff" fill-opacity="1"
                d="M0,64L48,69.3C96,75,192,85,288,90.7C384,96,480,96,576,101.3C672,107,768,117,864,106.7C960,96,1056,64,1152,53.3C1248,43,1344,53,1392,58.7L1440,64L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z">
            </path>
        </svg>
    </div>


    <!-- ======= Program / Unit Pendidikan Section ======= -->
    <section id="program" class="py-5" style="background-color: #d62828;">
        <div class="container text-center" data-aos="fade-up">
            <h2 class="fw-bold  mb-3" style="color: #f1f1f1">Program & Unit Pendidikan</h2>
            <p class=" mb-5" style="color: #f1f1f1">
                {{ $datas->nama_yayasan }} menaungi berbagai jenjang pendidikan untuk membentuk generasi berkarakter,
                cerdas, dan
                mandiri.
            </p>

            <div class="row g-4 justify-content-center">

                {{-- <!-- Card 1 -->
                <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                    <div class="card border-0 shadow-sm h-100 rounded-4 overflow-hidden card-program">
                        <img src="https://images.unsplash.com/photo-1596496057761-8c99f0f1a4b9?auto=format&fit=crop&w=800&q=80"
                            class="card-img-top" alt="TK">
                        <div class="card-body">
                            <h5 class="fw-bold text-danger">Taman Kanak-Kanak (TK)</h5>
                            <p class="text-secondary small">
                                Mengembangkan potensi anak usia dini dengan pendekatan bermain dan belajar yang
                                menyenangkan.
                            </p>
                        </div>
                    </div>
                </div> --}}

                {{-- <!-- Card 2 -->
                <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                    <div class="card border-0 shadow-sm h-100 rounded-4 overflow-hidden card-program">
                        <img src="https://images.unsplash.com/photo-1588072432836-e10032774350?auto=format&fit=crop&w=800&q=80"
                            class="card-img-top" alt="SD">
                        <div class="card-body">
                            <h5 class="fw-bold text-danger">Sekolah Dasar (SD)</h5>
                            <p class="text-secondary small">
                                Pendidikan dasar untuk membangun karakter, keimanan, dan kemampuan akademik anak.
                            </p>
                        </div>
                    </div>
                </div> --}}

                <!-- Card 3 -->
                <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                    <div class="card border-0 shadow-sm h-100 rounded-4 overflow-hidden card-program">
                        <img src="{{ asset('img/tk siwi peni.png') }}" alt="SMP"
                            class="card-img-top img-fluid object-fit-contain"
                            style="height: 250px; background-color: #f8f9fa;">
                        <div class="card-body">
                            <h5 class="fw-bold text-danger">TK SIWI PENI MUNCAR</h5>
                            <p class="text-secondary small">
                                Membentuk siswa berwawasan luas, mandiri, dan memiliki semangat belajar yang tinggi.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                    <div class="card border-0 shadow-sm h-100 rounded-4 overflow-hidden card-program">
                        <img src="{{ asset('img/smp 17 1.png') }}" class="card-img-top img-fluid object-fit-contain"
                            style="height: 250px; background-color: #f8f9fa;">
                        <div class="card-body">
                            <h5 class="fw-bold text-danger">SMP 17 AGUSTUS 1945-1 MUNCAR</h5>
                            <p class="text-secondary small">
                                Membentuk siswa berwawasan luas, mandiri, dan memiliki semangat belajar yang tinggi.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                    <div class="card border-0 shadow-sm h-100 rounded-4 overflow-hidden card-program">
                        <img src="{{ asset('img/smp 17 2.png') }}" class="card-img-top img-fluid object-fit-contain"
                            style="height: 250px; background-color: #f8f9fa;">
                        <div class="card-body">
                            <h5 class="fw-bold text-danger">SMP 17 AGUSTUS 1945-2 MUNCAR</h5>
                            <p class="text-secondary small">
                                Membentuk siswa berwawasan luas, mandiri, dan memiliki semangat belajar yang tinggi.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="400">
                    <div class="card border-0 shadow-sm h-100 rounded-4 overflow-hidden card-program">
                        <img src="{{ asset('img/smk 17.png') }}" class="card-img-top img-fluid object-fit-contain"
                            style="height: 250px; background-color: #f8f9fa;">
                        <div class="card-body">
                            <h5 class="fw-bold text-danger">SMK 17 AGUSTUS 1945 MUNCAR</h5>
                            <p class="text-secondary small">
                                Menyiapkan generasi muda menuju perguruan tinggi dan dunia kerja dengan kompetensi unggul.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- end section program atau unit --}}



    <!-- ======= About Section ======= -->
    <section id="about" class="py-5" style="background-color: #fff;">
        <div class="container">
            <div class="row align-items-center g-5">

                <!-- Gambar Kegiatan -->
                <div class="col-lg-6" data-aos="fade-right">
                    <img src="{{ asset('storage/' . $datas->image) }}" alt="{{ $datas->nama_yayasan }}"
                        class="img-fluid rounded-4 shadow">
                </div>

                <!-- Isi Tentang Kami -->
                <div class="col-lg-6" data-aos="fade-left">
                    <h2 class="fw-bold text-danger mb-3">Tentang {{ $datas->nama_yayasan }}</h2>
                    <p class="text-secondary">{{ $datas->description }}</p>
                    {{-- <p class="text-secondary">
                        Yayasan Cerdas Mulia didirikan dengan tujuan untuk menciptakan generasi yang berakhlak mulia,
                        cerdas, dan berdaya saing tinggi.
                        Kami berkomitmen dalam menyediakan pendidikan berkualitas dengan pendekatan yang berorientasi pada
                        karakter, ilmu pengetahuan, dan keterampilan abad 21.
                    </p> --}}
                    {{-- <p class="text-secondary">
                        Melalui berbagai program pendidikan dari tingkat dasar hingga menengah, kami berharap dapat menjadi
                        wadah yang membentuk siswa menjadi pribadi yang beriman, berilmu, dan bermanfaat bagi masyarakat.
                    </p> --}}
                    <ul class="list-unstyled mt-3">
                        @foreach ($misilist as $m)
                            <li><i class="bi bi-check-circle-fill text-danger me-2"></i>{{ trim($m) }}</li>
                        @endforeach
                    </ul>

                    {{-- <a href="#program" class="btn btn-danger mt-4 px-4 py-2 rounded-pill">
                        Lihat Program Kami
                    </a> --}}
                </div>

            </div>
        </div>
    </section>
    {{-- end section about --}}


    <!-- AOS Animation CSS -->
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <!-- AOS Animation JS -->
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 900, // durasi animasi dalam milidetik
            once: true, // animasi hanya jalan sekali saat scroll
            offset: 120, // jarak mulai animasi dari bawah layar
        });
    </script>
@endsection
