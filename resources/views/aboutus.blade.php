@extends('layout_user.navbar')

@section('navbar')
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            scroll-behavior: smooth;
            background-color: #fff;
        }

        /* Hero Section */
        .about-hero {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
                url('https://source.unsplash.com/1600x600/?education,school,children');
            background-size: cover;
            background-position: center;
            color: white;
            text-align: center;
            padding: 140px 20px;
        }

        .about-hero h1 {
            font-size: 3rem;
            font-weight: 700;
        }

        /* Wave Divider */
        .wave-divider {
            margin-bottom: -1px;
        }

        /* Section Styling */
        section {
            padding: 80px 0;
        }

        .section-title {
            color: #d62828;
            font-weight: 700;
            text-align: center;
            margin-bottom: 50px;
        }

        .about-image {
            border-radius: 12px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
        }

        .motto-box {
            background-color: #d62828;
            color: white;
            border-radius: 10px;
            padding: 30px 20px;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .motto-box i {
            font-size: 2rem;
            margin-bottom: 10px;
        }
    </style>

    <!-- ===== Hero Section ===== -->
    <section class="about-hero" data-aos="fade-in">
        <div class="container">
            <h1 data-aos="fade-up">Tentang Kami</h1>
            <p data-aos="fade-up" data-aos-delay="200">Yayasan Cerdas Mulia — Membangun Generasi Cerdas & Berakhlak Mulia</p>
        </div>
    </section>

    <!-- Wave Divider -->
    <div class="wave-divider">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 120">
            <path fill="#ffffff" fill-opacity="1"
                d="M0,32L60,48C120,64,240,96,360,117.3C480,139,600,149,720,133.3C840,117,960,75,1080,58.7C1200,43,1320,53,1380,58.7L1440,64L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z">
            </path>
        </svg>
    </div>

    <!-- ===== Nama & Foto Yayasan ===== -->
    <section id="profil">
        <div class="container" data-aos="fade-up">
            <h2 class="section-title">Yayasan Cerdas Mulia</h2>
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <img src="https://source.unsplash.com/600x400/?school,building,education" alt="Foto Yayasan"
                        class="img-fluid about-image">
                </div>
                <div class="col-lg-6">
                    <p class="text-muted">
                        Yayasan Cerdas Mulia merupakan lembaga pendidikan yang berdiri dengan komitmen untuk meningkatkan
                        kualitas sumber daya manusia melalui pendidikan yang berkarakter, berilmu, dan berakhlak mulia.
                        Sejak didirikan, yayasan ini berupaya menjadi pelopor pendidikan yang berpihak pada pengembangan
                        potensi peserta didik agar mampu bersaing di era global.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== Motto Yayasan ===== -->
    <section id="motto" style="background-color: #f8f9fa;">
        <div class="container" data-aos="zoom-in">
            <div class="motto-box mx-auto col-lg-8">
                <i class="bi bi-lightbulb-fill"></i>
                <h4 class="fw-bold">Motto Yayasan:</h4>
                <p class="mb-0 fst-italic">"Mendidik dengan Hati, Membangun Masa Depan dengan Ilmu"</p>
            </div>
        </div>
    </section>


    <!-- ===== Sejarah Yayasan ===== -->
    <section id="history" style="background-color: #f8f9fa;">
        <div class="container" data-aos="fade-up">
            <h2 class="section-title">Sejarah Yayasan</h2>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <p class="text-muted">
                        Yayasan Cerdas Mulia didirikan pada tahun 2010 oleh sekelompok pendidik dan pemerhati pendidikan
                        yang memiliki visi untuk memajukan generasi muda Indonesia.
                        Awalnya, yayasan ini hanya mengelola satu sekolah dasar kecil di Kota Harapan, namun berkat dedikasi
                        dan kepercayaan masyarakat,
                        kini telah berkembang menjadi lembaga pendidikan yang menaungi beberapa unit sekolah.
                    </p>
                    <p class="text-muted">
                        Dalam perjalanannya, Yayasan Cerdas Mulia berhasil menorehkan berbagai prestasi akademik dan
                        non-akademik,
                        serta menjadi mitra aktif pemerintah dan masyarakat dalam mengembangkan kualitas pendidikan
                        nasional.
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
