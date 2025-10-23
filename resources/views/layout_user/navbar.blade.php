<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YAPENAS</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

    {{-- web icon yapenas --}}
    <link rel="web icon" href="{{ asset('img/LOGO YAPENAS.png') }}">


    <style>
        :root {
            --main-red: #d62828;
            --text-dark: #333;
        }

        body {
            background-color: #f8f9fa;
            font-family: 'Poppins', sans-serif;
        }

        /* Navbar dasar */
        .navbar {
            background-color: #fff;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
            font-weight: 500;
            padding: 0.8rem 1rem;
        }

        .navbar-brand {
            color: var(--main-red);
            font-weight: 700;
            font-size: 1.4rem;
            letter-spacing: 0.5px;
        }

        .navbar-brand:hover {
            color: var(--main-red);
        }

        .navbar-nav .nav-link {
            color: var(--text-dark);
            position: relative;
            transition: all 0.3s ease;
            padding: 8px 15px;
        }

        .navbar-nav .nav-link:hover {
            color: var(--main-red);
        }

        /* Garis bawah hanya untuk link biasa (bukan dropdown) */
        .navbar-nav .nav-link:not(.dropdown-toggle)::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0%;
            height: 2px;
            background-color: var(--main-red);
            transition: width 0.3s ease;
        }

        .navbar-nav .nav-link:not(.dropdown-toggle):hover::after {
            width: 100%;
        }

        /* Dropdown styling */
        .dropdown-menu {
            border-radius: 10px;
            border: none;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            padding: 0.5rem;
        }

        .dropdown-item {
            border-radius: 6px;
            transition: all 0.2s ease;
        }

        .dropdown-item:hover {
            background-color: var(--main-red);
            color: #fff;
        }

        /* Sosial media icon */
        .social-icons a {
            color: var(--text-dark);
            font-size: 1.25rem;
            margin-left: 15px;
            transition: color 0.3s ease, transform 0.3s ease;
        }

        .social-icons a:hover {
            color: var(--main-red);
            transform: translateY(-3px);
        }

        /* Garis pembatas vertikal */
        .divider-vertical {
            width: 2px;
            height: 24px;
            background-color: #ccc;
            opacity: 0.7;
            border-radius: 2px;
        }

        /* RESPONSIF: ubah jadi horizontal di layar kecil */
        @media (max-width: 991.98px) {
            .divider-vertical {
                width: 80%;
                height: 2px;
                margin: 10px auto;
            }
        }

        /* Toggler */
        .navbar-toggler {
            border-color: var(--main-red);
        }

        .navbar-toggler-icon {
            background-image: url({{ asset('img/LOGO YAPENAS.png') }});
        }

        .social-link {
            transition: transform 0.3s, color 0.3s;
        }

        .social-link:hover {
            color: #ffebee;
            transform: scale(1.2);
        }

        @media (max-width: 768px) {
            footer .card iframe {
                height: 150px;
            }
        }

        section {
            min-height: 70vh;
            /* jaga jarak supaya footer tetap di bawah */
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        @media (max-width: 768px) {
            #navha {
                font-size: 14px
            }
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="{{ asset('img/LOGO YAPENAS.png') }}" alt="Logo YAPENAS" class="me-2"
                    style="height: 80px; width: auto; object-fit: contain;">
                <h5 class="mb-0 fw-semibold text-danger" id="navha">YAPENAS 17 AGUSTUS 1945</h5>
            </a>


            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav gap-2">
                    <li class="nav-item"><a class="nav-link " href="{{ route('home') }}">Beranda</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="programDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Profile
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="programDropdown">
                            <li><a class="dropdown-item" href="{{ route('aboutus') }}">Tentang Kami</a></li>
                            <li><a class="dropdown-item" href="{{ route('visimisi') }}">Visi Misi</a></li>
                            <li><a class="dropdown-item" href="{{ route('strukturorganisasi') }}">Struktur
                                    Organisasi</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="programDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Unit
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="programDropdown">
                            <li><a class="dropdown-item" href="#">TK</a></li>
                            <li><a class="dropdown-item" href="#">SMP</a></li>
                            <li><a class="dropdown-item" href="#">SMK</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('berita') }}">Berita</a></li>
                </ul>

                <!-- Garis pembatas -->
                <div class="divider-vertical mx-3"></div>

                <!-- Ikon Sosial Media -->
                <div class="social-icons d-flex align-items-center justify-content-center">
                    <a href="#" target="_blank" aria-label="YouTube"><i class="bi bi-youtube"></i></a>
                    <a href="#" target="_blank" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
                    <a href="#" target="_blank" aria-label="TikTok"><i class="bi bi-tiktok"></i></a>
                    <a href="#" target="_blank" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
                </div>
            </div>
        </div>
    </nav>

    <main>
        @yield('navbar')
    </main>

    {{-- footer --}}
    <footer class="footer-section text-light pt-5 pb-3" style="background-color: #d62828;">
        <div class="container">
            <div class="row g-4 align-items-start">

                <!-- Kolom kiri: Info Yayasan -->
                <div class="col-lg-7 col-md-12">
                    <h4 class="fw-bold text-white mb-3">YAPENAS 17 AGUSTUS 1945</h4>
                    <p class="mb-2">Jl. Pendidikan No. 45, Kota Harapan, Indonesia</p>
                    <p class="mb-2"><i class="bi bi-telephone-fill me-2"></i>0812-3456-7890</p>
                    <p class="mb-3"><i class="bi bi-envelope-fill me-2"></i>info@yapenas.or.id</p>

                    <div class="d-flex align-items-center mt-3">
                        <a href="#" target="_blank" class="me-3 text-white fs-4 social-link"><i
                                class="bi bi-youtube"></i></a>
                        <a href="#" target="_blank" class="me-3 text-white fs-4 social-link"><i
                                class="bi bi-instagram"></i></a>
                        <a href="#" target="_blank" class="me-3 text-white fs-4 social-link"><i
                                class="bi bi-tiktok"></i></a>
                        <a href="#" target="_blank" class="text-white fs-4 social-link"><i
                                class="bi bi-facebook"></i></a>
                    </div>
                </div>

                <!-- Kolom kanan: Google Maps -->
                <div class="col-lg-5 col-md-12">
                    <div class="card border-0 shadow-sm rounded-4 overflow-hidden">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3946.715355765956!2d114.30428177537213!3d-8.42958899160976!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd3fce1b12f870f%3A0x534d1a151bd9cf90!2sSMK%2017%20AGUSTUS%201945%20MUNCAR!5e0!3m2!1sid!2sid!4v1759722586350!5m2!1sid!2sid"
                            width="100%" height="180" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
            </div>

            <hr class="mt-4 mb-3 text-white opacity-50">

            <div class="text-center small">
                <p class="mb-0">&copy; {{ date('Y') }} <strong>YAPENAS 17 AGUSTUS 1945</strong>. All rights reserved.</p>
            </div>
        </div>
    </footer>



    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            once: true
        });
    </script>
</body>

</html>
