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

        .empty-message {
            text-align: center;
            color: #888;
            font-size: 1.1rem;
            margin-top: 40px;
        }
    </style>

    <section class="py-2">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h2>Struktur Organisasi Yayasan Cerdas Mulia</h2>
                <p>Susunan pengurus dan staf yang berperan dalam mengelola dan mengembangkan yayasan.</p>
            </div>

            @if ($structureOrganizations->isEmpty())
                <div class="empty-message">
                    <p><strong>Struktur tidak ada.</strong></p>
                </div>
            @else
                @php
                    $lastPosition = null;
                @endphp

                <div class="row justify-content-center g-4">
                    @foreach ($structureOrganizations as $org)
                        {{-- Divider otomatis jika posisi berubah --}}
                        @if ($lastPosition && $lastPosition !== $org->posisi)
                            <div class="divider"></div>
                        @endif

                        <div class="col-md-3 col-6">
                            <div class="org-card">
                                <img src="{{ asset('storage/' . $org->image) }}" alt="{{ $org->nama_petugas }}">
                                <h5>{{ $org->nama_petugas }}</h5>
                                <p>{{ $org->posisi }}</p>
                                <small>{{ $org->contact }}</small>
                            </div>
                        </div>

                        @php
                            $lastPosition = $org->posisi;
                        @endphp
                    @endforeach
                </div>
            @endif
        </div>
    </section>
@endsection
