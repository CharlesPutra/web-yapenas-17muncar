<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar Yayasan Pendidikan</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        :root {
            --main-red: #d62828;
            --text-dark: #333;
        }

        body {
            background-color: #f8f9fa;
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
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3E%3Cpath stroke='rgb(214,40,40)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">Yayasan Yapenas</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link active" href="#">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Tentang Kami</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="programDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Program
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="programDropdown">
                            <li><a class="dropdown-item" href="#">TK / PAUD</a></li>
                            <li><a class="dropdown-item" href="#">SD</a></li>
                            <li><a class="dropdown-item" href="#">SMP</a></li>
                            <li><a class="dropdown-item" href="#">SMA</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#">Berita</a></li>
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
    <!-- ======= Footer Section ======= -->
    <footer class="footer-section text-light pt-5 pb-4" style="background-color: #d62828;">
        <div class="container">
            <div class="row align-items-start">

                <!-- Kolom kiri: Info Yayasan -->
                <div class="col-lg-6 col-md-12 mb-4">
                    <h4 class="fw-bold text-white mb-3">Yayasan Cerdas Mulia</h4>
                    <p class="mb-2">Jl. Pendidikan No. 45, Kota Harapan, Indonesia</p>
                    <p class="mb-2">📞 0812-3456-7890</p>
                    <p class="mb-2">✉️ info@cerdasmulia.or.id</p>

                    <div class="social-icons mt-3">
                        <a href="#" target="_blank" class="me-3 text-white fs-5"><i class="bi bi-youtube"></i></a>
                        <a href="#" target="_blank" class="me-3 text-white fs-5"><i
                                class="bi bi-instagram"></i></a>
                        <a href="#" target="_blank" class="me-3 text-white fs-5"><i class="bi bi-tiktok"></i></a>
                        <a href="#" target="_blank" class="text-white fs-5"><i class="bi bi-facebook"></i></a>
                    </div>
                </div>

                <!-- Kolom kanan: Google Maps -->
                <div class="col-lg-6 col-md-12">
                    <div class="map-container rounded shadow" style="overflow:hidden; border-radius: 10px;">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.646066013079!2d110.36388247495741!3d-7.824509177909491!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5790c5f36c03%3A0xa3dff1a7b8c73c7e!2sUniversitas%20Negeri%20Yogyakarta!5e0!3m2!1sid!2sid!4v1695652123057!5m2!1sid!2sid"
                            width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
            </div>

            <hr class="mt-4 mb-3 text-white opacity-50">

            <div class="text-center">
                <p class="mb-0">&copy; 2025 <strong>Yayasan Cerdas Mulia</strong>. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
