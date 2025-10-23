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

/* === NAVBAR DASAR === */
.navbar {
  background-color: #fff;
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
  font-weight: 500;
  padding: 0.8rem 1rem;
  position: relative;
  overflow: visible !important;
}

/* Ornamen bendera di dalam navbar */
.navbar::before {
  content: "";
  position: absolute;
  inset: 0;
  background: linear-gradient(90deg, #d62828 0%, #ffffff 50%, #d62828 100%);
  opacity: 0.15;
  z-index: 1;
}

/* Hilangkan gelombang (wave) sepenuhnya */
.navbar::after {
  display: none;
}

/* Pastikan isi navbar di atas ornamen */
.navbar * {
  position: relative;
  z-index: 10;
}

/* Dropdown tetap muncul di atas ornamen */
.dropdown-menu {
  z-index: 20 !important;
  box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
  border-radius: 10px;
}




/* Logo & Nama */
.navbar-brand {
    color: var(--main-red);
    font-weight: 700;
    font-size: 1.4rem;
    letter-spacing: 0.5px;
}

.navbar-brand:hover {
    color: var(--main-red);
}

/* Teks di samping logo */
#navha {
    font-size: 1.05rem;
    font-weight: 600;
    line-height: 1.4;
    color: var(--main-red);
    text-shadow: 0 0 6px rgba(255, 255, 255, 0.8);
}

/* Link Navbar */
.navbar-nav .nav-link {
    color: var(--text-dark);
    position: relative;
    transition: all 0.3s ease;
    padding: 8px 15px;
    font-weight: 500;
}

.navbar-nav .nav-link:hover {
    color: var(--main-red);
}

/* Animasi garis bawah */
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

/* Dropdown */
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

/* Submenu */
.dropdown-submenu {
    position: relative;
}

.dropdown-submenu .dropdown-menu {
    top: 0;
    left: 100%;
    margin-top: -5px;
    margin-left: 0;
    border-radius: 10px;
    display: none;
    position: absolute;
}

.dropdown-submenu:hover>.dropdown-menu {
    display: block;
}

.dropdown-submenu>a::after {
    content: "▶";
    float: right;
    margin-top: 4px;
    font-size: 0.7rem;
}

/* Divider */
.divider-vertical {
    width: 2px;
    height: 24px;
    background-color: #ccc;
    opacity: 0.7;
    border-radius: 2px;
}

/* Sosial Media Icon */
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

/* Responsif Divider */
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

.social-link {
    transition: transform 0.3s, color 0.3s;
}

.social-link:hover {
    color: #ffebee;
    transform: scale(1.2);
}

/* Responsif Logo */
@media (max-width: 768px) {
    #navha {
        font-size: 13px;
    }

    .navbar-brand img {
        height: 80px;
    }
}

    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="{{ asset('img/LOGO YAPENAS.png') }}" alt="Logo YAPENAS" class="me-2"
                    style="height: 100px; width: auto; object-fit: contain;">
            </a>
            <h5 class="mb-0 fw-semibold text-danger" id="navha">YAPENAS 17 AGUSTUS 1945 <br> KABUPATEN BANYUWANGI
            </h5>


            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarNav" style="font-size: 17px">
                <ul class="navbar-nav gap-2">
                    <li class="nav-item"><a class="nav-link " href="{{ route('home') }}">Beranda</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="unitDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Unit
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="unitDropdown">
                            <li class="dropdown-submenu">
                                <a class="dropdown-item dropdown-toggle">TK</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">TK SIWI PENI MUNCAR</a></li>
                                </ul>
                            </li>

                            <!-- SMP dropdown -->
                            <li class="dropdown-submenu">
                                <a class="dropdown-item dropdown-toggle">SMP</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">SMP 17 AGUSTUS 1945-1 MUNCAR</a></li>
                                    <li><a class="dropdown-item" href="#">SMP 17 AGUSTUS 1945-2 MUNCAR</a></li>
                                </ul>
                            </li>

                            <!-- SMK dropdown -->
                            <li class="dropdown-submenu">
                                <a class="dropdown-item dropdown-toggle">SMK</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">SMK 17 AGUSTUS 1945 MUNCAR</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>

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
                <p class="mb-0">&copy; {{ date('Y') }} <strong>YAPENAS 17 AGUSTUS 1945</strong>. All rights
                    reserved.</p>
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

        // Agar submenu bisa diklik di mobile
        document.querySelectorAll('.dropdown-submenu > a').forEach(function(element) {
            element.addEventListener('click', function(e) {
                let nextEl = this.nextElementSibling;
                if (nextEl && nextEl.classList.contains('dropdown-menu')) {
                    e.preventDefault();
                    nextEl.classList.toggle('show');
                }
            });
        });
    </script>
</body>

</html>
