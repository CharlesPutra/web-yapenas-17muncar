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

        .pagination .page-link {
            border-radius: 8px;
            margin: 0 4px;
            transition: 0.3s;
        }

        .pagination .page-link:hover {
            background-color: #b71c1c !important;
            color: #fff !important;
        }

        .pagination .active .page-link {
            background-color: #d62828 !important;
            border-color: #d62828 !important;
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
                @forelse ($datas as $b)
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="card news-card h-100">
                            <img src="{{ asset('storage/' . $b->thumbnail) }}" class="card-img-top" alt="Kegiatan Sosial">
                            <div class="news-card-body">
                                <h5>{{ $b->judul_berita }}</h5>
                                <p>{{ Str::limit($b->content, 100, '...') }}</p>
                                <a href="{{ route('berita.show', $b->slug) }}" class="btn-news">Baca Selengkapnya</a>
                            </div>
                            <div class="news-card-footer">
                                <i class="bi bi-calendar-event me-2"></i> {{ $b->formatted_date }}
                            </div>
                        </div>
                    </div>
                @empty
                    <p class="text-center text-muted">Belum ada berita yang tersedia.</p>
                @endforelse
            </div>
        </div>
        <!-- Pagination -->
        @if ($datas->hasPages())
            <div class="d-flex justify-content-center mt-5">
                <nav>
                    <ul class="pagination justify-content-center mb-0">
                        {{-- Tombol Sebelumnya --}}
                        @if ($datas->onFirstPage())
                            <li class="page-item disabled">
                                <span class="page-link border-0 bg-light text-secondary">‹</span>
                            </li>
                        @else
                            <li class="page-item">
                                <a class="page-link border-0 text-white bg-danger" href="{{ $datas->previousPageUrl() }}"
                                    rel="prev">‹</a>
                            </li>
                        @endif

                        {{-- Angka Halaman --}}
                        @foreach ($datas->links()->elements as $element)
                            @if (is_string($element))
                                <li class="page-item disabled"><span
                                        class="page-link bg-light text-secondary border-0">{{ $element }}</span>
                                </li>
                            @endif

                            @if (is_array($element))
                                @foreach ($element as $page => $url)
                                    @if ($page == $datas->currentPage())
                                        <li class="page-item active">
                                            <span
                                                class="page-link bg-danger text-white border-0 fw-bold">{{ $page }}</span>
                                        </li>
                                    @else
                                        <li class="page-item">
                                            <a class="page-link text-danger border-0 bg-white"
                                                href="{{ $url }}">{{ $page }}</a>
                                        </li>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach

                        {{-- Tombol Selanjutnya --}}
                        @if ($datas->hasMorePages())
                            <li class="page-item">
                                <a class="page-link border-0 text-white bg-danger" href="{{ $datas->nextPageUrl() }}"
                                    rel="next">›</a>
                            </li>
                        @else
                            <li class="page-item disabled">
                                <span class="page-link border-0 bg-light text-secondary">›</span>
                            </li>
                        @endif
                    </ul>
                </nav>
            </div>
        @endif
        </div>
    </section>
@endsection
