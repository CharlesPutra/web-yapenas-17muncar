@extends('layout_user.navbar')

@section('navbar')
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #fff;
            color: #333;
        }

        .section-header {
            text-align: center;
            margin-bottom: 60px;
        }

        .section-header h2 {
            font-weight: 700;
            color: #d62828;
        }

        .section-header p {
            color: #555;
            max-width: 600px;
            margin: 0 auto;
        }

        .card-custom {
            border: none;
            border-top: 5px solid #d62828;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border-radius: 15px;
        }

        .card-custom:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
        }

        .card-header {
            background-color: #d62828;
            color: white;
            font-weight: 600;
            text-align: center;
            font-size: 1.2rem;
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
            padding: 15px 0;
        }

        .card-body {
            padding: 30px;
            line-height: 1.7;
        }

        .card-body i {
            font-size: 1.8rem;
            color: #d62828;
            margin-bottom: 10px;
        }

       
    </style>

    <section class="py-5">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h2>Visi & Misi Yayasan</h2>
                <p>Menjadi lembaga pendidikan yang unggul, berkarakter, dan berdaya saing global.</p>
            </div>

            <div class="row g-4 justify-content-center">
                <!-- Card Visi -->
                <div class="col-lg-5 col-md-6" data-aos="fade-right">
                    <div class="card card-custom h-100">
                        <div class="card-header">
                            <i class="bi bi-eye me-2"></i> Visi
                        </div>
                        <div class="card-body">
                            <p>
                               {{$datas->visi}}
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Card Misi -->
                <div class="col-lg-5 col-md-6" data-aos="fade-left">
                    <div class="card card-custom h-100">
                        <div class="card-header">
                            <i class="bi bi-bullseye me-2"></i> Misi
                        </div>
                        <div class="card-body">
                            <ul class="mb-0">
                                @foreach ($misilist as $m)
                                <li>{{trim($m)}}</li>
                                @endforeach

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
