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
            color: #d62828;
            font-weight: 700;
        }

        .org-card {
            background: #fff;
            border-radius: 15px;
            border-top: 5px solid #d62828;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            text-align: center;
            padding: 30px 20px;
        }

        .org-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 25px rgba(0, 0, 0, 0.15);
        }

        .org-card img {
            width: 110px;
            height: 110px;
            object-fit: cover;
            border-radius: 50%;
            border: 4px solid #d62828;
            margin-bottom: 15px;
        }

        .org-card h5 {
            color: #d62828;
            font-weight: 600;
            margin-bottom: 5px;
        }

        .org-card p {
            margin-bottom: 0;
            color: #555;
        }

        .divider {
            height: 2px;
            width: 80%;
            margin: 50px auto;
            background-color: #d62828;
            border-radius: 2px;
        }

        footer {
            background-color: #d62828;
            color: white;
            text-align: center;
            padding: 20px 0;
            margin-top: 60px;
        }
    </style>

    <section class="py-5">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h2>Struktur Organisasi Yayasan Cerdas Mulia</h2>
                <p>Susunan pengurus dan staf yang berperan dalam mengelola dan mengembangkan yayasan.</p>
            </div>

            <!-- Ketua Yayasan -->
            <div class="row justify-content-center mb-4" data-aos="zoom-in">
                <div class="col-md-4">
                    <div class="org-card">
                        <img src="https://via.placeholder.com/110" alt="Ketua Yayasan">
                        <h5>Drs. Ahmad Rahman</h5>
                        <p>Ketua Yayasan</p>
                    </div>
                </div>
            </div>

            <div class="divider"></div>

            <!-- Kepala Sekolah -->
            <div class="row justify-content-center mb-4" data-aos="fade-up">
                <div class="col-md-4">
                    <div class="org-card">
                        <img src="https://via.placeholder.com/110" alt="Kepala Sekolah">
                        <h5>Nurhayati, S.Pd</h5>
                        <p>Kepala Sekolah</p>
                    </div>
                </div>
            </div>

            <div class="divider"></div>

            <!-- Guru dan Staff -->
            <div class="row justify-content-center g-4" data-aos="fade-up">
                <div class="col-md-3 col-6">
                    <div class="org-card">
                        <img src="https://via.placeholder.com/110" alt="Guru">
                        <h5>Budi Santoso</h5>
                        <p>Guru Matematika</p>
                    </div>
                </div>

                <div class="col-md-3 col-6">
                    <div class="org-card">
                        <img src="https://via.placeholder.com/110" alt="Guru">
                        <h5>Siti Aminah</h5>
                        <p>Guru Bahasa Indonesia</p>
                    </div>
                </div>

                <div class="col-md-3 col-6">
                    <div class="org-card">
                        <img src="https://via.placeholder.com/110" alt="Staff">
                        <h5>Rizki Hidayat</h5>
                        <p>Staff Administrasi</p>
                    </div>
                </div>

                <div class="col-md-3 col-6">
                    <div class="org-card">
                        <img src="https://via.placeholder.com/110" alt="Staff">
                        <h5>Lina Hartati</h5>
                        <p>Keuangan</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
