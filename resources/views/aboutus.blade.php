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
            <p data-aos="fade-up" data-aos-delay="200">{{$datas->nama_yayasan}} — Membangun Generasi Cerdas & Berakhlak Mulia</p>
        </div>
    </section>



    <!-- ===== Nama & Foto Yayasan ===== -->
    <section id="profil">
        <div class="container" data-aos="fade-up">
            <h2 class="section-title">{{$datas->nama_yayasan}}</h2>
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <img src="{{asset('storage/'.$datas->image)}}" alt="Foto Yayasan"
                        class="img-fluid about-image">
                </div>
                <div class="col-lg-6">
                    <p class="text-muted">
                       {{$datas->description}}
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
                <p class="mb-0 fst-italic">"{{$datas->motto}}"</p>
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
                       {{$datas->history}}
                    </p>
                   
                </div>
            </div>
        </div>
    </section>
@endsection
