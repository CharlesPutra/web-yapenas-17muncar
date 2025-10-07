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

        .news-card {
            border: none;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            background-color: #fff;
        }

        .news-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 6px 25px rgba(0, 0, 0, 0.15);
        }

        .news-card img {
            height: 200px;
            object-fit: cover;
        }

        .news-card-body {
            padding: 20px;
        }

        .news-card-body h5 {
            color: #d62828;
            font-weight: 600;
            margin-bottom: 10px;
        }

        .news-card-body p {
            font-size: 0.95rem;
            color: #555;
        }

        .news-card-footer {
            background-color: transparent;
            border-top: 1px solid #eee;
            padding: 10px 20px;
            font-size: 0.9rem;
            color: #777;
        }

        .btn-news {
            background-color: #d62828;
            color: white;
            font-weight: 500;
            border-radius: 50px;
            padding: 8px 18px;
            text-decoration: none;
            transition: 0.3s;
        }

        .btn-news:hover {
            background-color: #b71c1c;
            color: white;
        }

        footer {
            background-color: #d62828;
            color: white;
            text-align: center;
            padding: 20px 0;
            margin-top: 80px;
        }
    </style>


  <!-- ======= Berita Section ======= -->
  <section class="py-5">
    <div class="container" data-aos="fade-up">
      <div class="section-header">
        <h2>Berita & Kegiatan</h2>
        <p>Kumpulan informasi dan kegiatan terbaru dari Yayasan Cerdas Mulia.</p>
      </div>

      <div class="row g-4">
        <!-- Berita 1 -->
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="card news-card h-100">
            <img src="https://images.unsplash.com/photo-1596495577886-d920f1fb7238?auto=format&fit=crop&w=900&q=60" class="card-img-top" alt="Kegiatan Sosial">
            <div class="news-card-body">
              <h5>Kegiatan Bakti Sosial di Desa Harapan</h5>
              <p>Yayasan Cerdas Mulia melaksanakan kegiatan bakti sosial bersama siswa dan guru untuk membantu masyarakat sekitar.</p>
              <a href="#" class="btn-news">Baca Selengkapnya</a>
            </div>
            <div class="news-card-footer">
              <i class="bi bi-calendar-event me-2"></i> 20 September 2025
            </div>
          </div>
        </div>

        <!-- Berita 2 -->
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="card news-card h-100">
            <img src="https://images.unsplash.com/photo-1523580846011-d3a5bc25702b?auto=format&fit=crop&w=900&q=60" class="card-img-top" alt="Seminar Pendidikan">
            <div class="news-card-body">
              <h5>Seminar Pendidikan Nasional 2025</h5>
              <p>Guru dan siswa berpartisipasi dalam seminar pendidikan nasional yang membahas inovasi pembelajaran abad 21.</p>
              <a href="#" class="btn-news">Baca Selengkapnya</a>
            </div>
            <div class="news-card-footer">
              <i class="bi bi-calendar-event me-2"></i> 12 Agustus 2025
            </div>
          </div>
        </div>

        <!-- Berita 3 -->
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
          <div class="card news-card h-100">
            <img src="https://images.unsplash.com/photo-1559027615-ce3a25d2729f?auto=format&fit=crop&w=900&q=60" class="card-img-top" alt="Lomba Sains">
            <div class="news-card-body">
              <h5>Siswa Raih Juara Lomba Sains Tingkat Provinsi</h5>
              <p>Prestasi membanggakan diraih siswa Yayasan Cerdas Mulia dalam lomba sains tingkat provinsi 2025.</p>
              <a href="#" class="btn-news">Baca Selengkapnya</a>
            </div>
            <div class="news-card-footer">
              <i class="bi bi-calendar-event me-2"></i> 3 Juli 2025
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
