@extends('layouts.app')

@section('title', 'Layanan Kami - INA KLUG')

@push('styles')
    <style>
        body {
            font-family: 'Ubuntu', sans-serif;
        }

        /* ===== Hero Section ===== */
        .hero {
            position: relative;
            height: 560px;
            background: url('/images/artikel4.png') center center/cover no-repeat;
            color: #fff;
            display: flex;
            align-items: flex-end;
            padding: 0 140px 80px;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, rgba(70, 7, 78, 0.85) 0%, transparent 100%);
            z-index: 1;
        }

        .hero h1 {
            position: relative;
            z-index: 2;
            font-size: 2.5rem;
            font-weight: 500;
            text-transform: uppercase;
            text-shadow: 0 3px 8px rgba(0, 0, 0, 0.25);
        }

        /* ===== Layanan Section ===== */
        .layanan-section {
            margin-top: 45px;
        }

        .layanan-section .section-title {
            text-transform: capitalize;
            font-weight: 400;
            font-size: 26px;
            letter-spacing: 0px;
            margin-top: 24px;
            margin-bottom: 50px;
            color: #444;
            font-family: 'Ubuntu', sans-serif;
        }

        /* ===== Card Layanan ===== */
        .card-layanan {
            position: relative;
            overflow: hidden;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            aspect-ratio: 16 / 10;
        }

        .card-layanan img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        /* 3. Efek hover zoom pada gambar */
        .card-layanan:hover img {
            transform: scale(1.05);
        }

        /* 4. Efek gradasi overlay */
        .card-layanan::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(90deg, rgba(70, 7, 78, 0.9) 0%, rgba(70, 7, 78, 0.7) 20%, rgba(25, 123, 208, 0.4) 40%, rgba(25, 123, 208, 0.2) 60%, transparent 80%);
            pointer-events: none;
            z-index: 1;
        }

        /* 5. Garis vertikal putih di kiri */
        .card-layanan::after {
            content: '';
            position: absolute;
            left: 27px;
            top: 0px;
            bottom: 60px;
            width: 1px;
            background-color: #fff;
            border-radius: 2px;
            z-index: 2;
            transform-origin: left;
            transform: scaleX(0.5);
        }

        /* 6. Teks caption di dalam kartu */
        .card-layanan .caption {
            position: absolute;
            bottom: 20px;
            left: 25px;
            background: transparent;
            color: #fff;
            font-weight: 400;
            font-size: 1.2rem;
            padding: 0;
            text-align: left;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            z-index: 3;
            font-family: "Lato", sans-serif;
        }

        /* Hover efek */
        .card-layanan:hover img {
            transform: scale(1.05);
        }

        .card-layanan:hover {
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.25);
        }

        /* ===== Wadah untuk Grid Layanan ===== */
        .layanan-grid-container {
            max-width: 960px;
            margin: 0 auto;
        }

        /* Garis pemisah section */
        .section-divider {
            width: 100%;
            max-width: 1260px;
            height: 1px;
            background-color: #e0e0e0;
            margin: 85px auto 0;
        }

        /* ===== Hubungi Kami Section ===== */
        .hubungi-kami-title {
            font-weight: 500;
            color: #555;
            font-size: 26px;
            text-transform: capitalize;
            letter-spacing: 0px;
            margin-bottom: 23px;
        }

        .hubungi-kami-subtitle {
            text-transform: capitalize;
            font-weight: 500;
            font-size: 20px;
            letter-spacing: 0px;
            color: #666;
            margin-bottom: 25px;
        }

        .hubungi-kami-info p {
            font-size: 16px;
            font-weight: 400;
            text-transform: capitalize;
            color: #4A4A4A;
            line-height: 22px;
            margin-top: -20px;
            padding: 0;
            font-family: 'Ubuntu', sans-serif;
            margin-bottom: -15px;
            letter-spacing: 0px;
        }

        /* ===== Tombol LOKASI KAMI ===== */
        .btn-gradient {
            color: #fff;
            border: 2px solid transparent;
            border-radius: 30px;
            padding: 15px 65px;
            font-size: 17px;
            font-weight: 400;
            text-transform: uppercase;
            text-decoration: none;
            background: linear-gradient(90deg, rgba(70, 7, 78, 0.95) 0%, rgba(25, 123, 208, 0.8) 100%);
            transition: all 0.3s ease;
            background-clip: padding-box;
        }

        .btn-gradient span {
            color: #fff;
            transition: all 0.3s ease;
        }

        .btn-gradient:hover {
            transform: translateY(-2px);
            background-image: linear-gradient(white, white), linear-gradient(90deg, rgba(70, 7, 78, 0.95) 0%, rgba(25, 123, 208, 0.8) 100%);
            background-clip: padding-box, border-box;
            background-origin: border-box;
        }

        .btn-gradient:hover span {
            color: transparent;
            background-image: linear-gradient(90deg, rgba(70, 7, 78, 0.95) 0%, rgba(25, 123, 208, 0.8) 100%);
            -webkit-background-clip: text;
            background-clip: text;
        }

        /* ===== Tombol KIRIM PESAN ===== */
        .btn-outline-gradient {
            position: relative;
            padding: 15px 65px;
            font-weight: 400;
            text-transform: uppercase;
            font-size: 17px;
            text-decoration: none;
            border: 2px solid transparent;
            border-radius: 50px;
            background-image: linear-gradient(white, white), linear-gradient(90deg, #46074E, #197BD0);
            background-clip: padding-box, border-box;
            background-origin: border-box;
            transition: all 0.3s ease;
        }

        .btn-outline-gradient span {
            color: transparent;
            background-image: linear-gradient(90deg, #46074E, #197BD0);
            -webkit-background-clip: text;
            background-clip: text;
        }

        .btn-outline-gradient:hover {
            background-image: linear-gradient(90deg, #46074E, #197BD0);
            transform: translateY(-2px);
            color: #fff;
        }

        .btn-outline-gradient:hover span {
            background-image: none;
            -webkit-background-clip: unset;
            background-clip: unset;
            color: #fff;
        }

        /* ===== RESPONSIVE LAYANAN KAMI PAGE ===== */

        /* Untuk layar ≤ 1400px (Large Desktop) */
        @media (max-width: 1400px) {
            .hero {
                padding: 0 100px 60px;
            }

            .hero h1 {
                font-size: 2.3rem;
            }

            /* Layanan Grid - 2x3 centered */
            .layanan-grid-container {
                max-width: 900px;
            }

            .layanan-section .row {
                justify-content: center;
            }

            .layanan-section .col-md-4 {
                flex: 0 0 50%;
                max-width: 50%;
            }
        }

        /* Untuk layar ≤ 1200px (Desktop) */
        @media (max-width: 1200px) {
            .hero {
                padding: 0 80px 50px;
            }

            .hero h1 {
                font-size: 2.2rem;
            }

            /* Layanan Grid - tetap 2x3 */
            .layanan-grid-container {
                max-width: 850px;
            }

            .layanan-section .row {
                justify-content: center;
            }

            .layanan-section .col-md-4 {
                flex: 0 0 50%;
                max-width: 50%;
            }

            .card-layanan .caption {
                font-size: 1.15rem;
            }
        }

        /* Untuk layar ≤ 992px (Tablet Landscape) */
        @media (max-width: 992px) {
            .hero {
                height: 400px;
                padding: 0 60px 40px;
            }

            .hero h1 {
                font-size: 2rem;
            }

            /* Layanan Grid - tetap 2x3 */
            .layanan-grid-container {
                max-width: 750px;
            }

            .layanan-section {
                margin-top: 35px;
            }

            .layanan-section .section-title {
                font-size: 24px;
                margin-bottom: 40px;
            }

            .layanan-section .row {
                justify-content: center;
            }

            .layanan-section .col-md-4 {
                flex: 0 0 50%;
                max-width: 50%;
                margin-bottom: 25px;
            }

            .card-layanan .caption {
                font-size: 1.1rem;
                bottom: 15px;
                left: 20px;
            }

            .section-divider {
                margin: 70px auto 0;
            }

            .hubungi-kami-title {
                font-size: 24px;
            }

            .hubungi-kami-subtitle {
                font-size: 19px;
            }

            .btn-gradient,
            .btn-outline-gradient {
                padding: 13px 55px;
                font-size: 16px;
            }
        }

        /* Untuk layar ≤ 768px (Tablet Portrait) - 1 kolom */
        @media (max-width: 768px) {
            .hero {
                height: 320px;
                padding: 0 40px 30px;
            }

            .hero h1 {
                font-size: 1.8rem;
            }

            /* Layanan Grid - 1 kolom penuh */
            .layanan-grid-container {
                max-width: 100%;
                padding: 0 15px;
            }

            .layanan-section {
                margin-top: 30px;
            }

            .layanan-section .section-title {
                font-size: 22px;
                margin-bottom: 35px;
            }

            .layanan-section .row {
                justify-content: center;
            }

            .layanan-section .col-md-4 {
                flex: 0 0 100%;
                max-width: 100%;
                margin-bottom: 25px;
            }

            .card-layanan {
                max-width: 600px;
                margin: 0 auto;
            }

            .card-layanan .caption {
                font-size: 1.1rem;
            }

            .section-divider {
                margin: 60px auto 0;
            }

            .hubungi-kami-title {
                font-size: 22px;
            }

            .hubungi-kami-subtitle {
                font-size: 18px;
            }

            .hubungi-kami-info p {
                font-size: 14px;
                padding: 0 20px;
                line-height: 1.6;
            }

            .btn-gradient,
            .btn-outline-gradient {
                padding: 12px 45px;
                font-size: 15px;
            }
        }

        /* Untuk layar ≤ 576px (Mobile) */
        @media (max-width: 576px) {
            .hero {
                height: 250px;
                padding: 0 25px 20px;
            }

            .hero h1 {
                font-size: 1.5rem;
            }

            /* Layanan Grid - 1 kolom */
            .layanan-grid-container {
                padding: 0 10px;
            }

            .layanan-section {
                margin-top: 25px;
            }

            .layanan-section .section-title {
                font-size: 20px;
                margin-bottom: 30px;
            }

            .layanan-section .col-md-4 {
                flex: 0 0 100%;
                max-width: 100%;
                margin-bottom: 20px;
                padding-left: 10px;
                padding-right: 10px;
            }

            .card-layanan {
                max-width: 100%;
            }

            .card-layanan .caption {
                font-size: 1rem;
                bottom: 12px;
                left: 18px;
            }

            .card-layanan::after {
                left: 20px;
                bottom: 50px;
            }

            .section-divider {
                margin: 50px auto 0;
            }

            .hubungi-kami-title {
                font-size: 20px;
                padding: 0 15px;
            }

            .hubungi-kami-subtitle {
                font-size: 17px;
                padding: 0 15px;
            }

            .hubungi-kami-info p {
                font-size: 13px;
                padding: 0 25px;
                line-height: 1.7;
            }

            .btn-gradient,
            .btn-outline-gradient {
                padding: 12px 35px;
                font-size: 14px;
                width: 100%;
                max-width: 280px;
            }
        }

        /* Untuk layar ≤ 425px (Mobile Small) */
        @media (max-width: 425px) {
            .hero {
                height: 220px;
                padding: 0 20px 18px;
            }

            .hero h1 {
                font-size: 1.3rem;
            }

            .layanan-section .section-title {
                font-size: 18px;
            }

            .card-layanan .caption {
                font-size: 0.95rem;
                bottom: 10px;
                left: 15px;
            }

            .card-layanan::after {
                left: 18px;
                bottom: 45px;
            }

            .hubungi-kami-title {
                font-size: 18px;
            }

            .hubungi-kami-subtitle {
                font-size: 16px;
            }

            .hubungi-kami-info p {
                font-size: 12px;
            }

            .btn-gradient,
            .btn-outline-gradient {
                padding: 11px 30px;
                font-size: 13px;
            }
        }

        /* Untuk layar ≤ 375px (Mobile Extra Small) */
        @media (max-width: 375px) {
            .hero {
                height: 200px;
                padding: 0 15px 15px;
            }

            .hero h1 {
                font-size: 1.2rem;
            }

            .layanan-section .section-title {
                font-size: 17px;
            }

            .card-layanan .caption {
                font-size: 0.9rem;
            }

            .btn-gradient,
            .btn-outline-gradient {
                padding: 10px 25px;
                font-size: 12px;
            }
        }

        /* Fix untuk container pada mobile */
        @media (max-width: 768px) {
            .container {
                padding-left: 15px;
                padding-right: 15px;
            }
        }

        @media (max-width: 576px) {
            .container {
                padding-left: 20px;
                padding-right: 20px;
            }
        }

        /* Pastikan card tidak overflow */
        @media (max-width: 768px) {
            .card-layanan {
                width: 100%;
            }

            .card-layanan img {
                width: 100%;
                height: auto;
            }
        }

        /* Fix untuk button wrapper pada mobile */
        @media (max-width: 576px) {
            .d-flex.gap-3 {
                flex-direction: column;
                align-items: center;
                gap: 15px !important;
            }
        }
    </style>
@endpush

@section('content')

    <!-- Hero Section -->
    <section class="hero">
        <h1>Layanan Kami</h1>
    </section>

    <!-- Layanan Kami Section -->
    <section class="text-center py-5 layanan-section">
        <div class="container">
            <h2 class="section-title">Layanan Kami</h2>
            <div class="layanan-grid-container">
                <div class="row g-4 justify-content-center">
                    @foreach ([['layanan1.png', 'Studi S1 - Bachelor'], ['layanan2.png', 'Studi S2 - Master'], ['layanan3.jpg', 'Studi S3 - Ph.D'], ['layanan4.png', 'Kursus Bahasa Asing'], ['layanan5.png', 'Study Tour'], ['layanan6.jpg', 'Ausbildung']] as [$img, $caption])
                        <div class="col-md-4">
                            <div class="card-layanan">
                                <img src="{{ asset('images/' . $img) }}" alt="{{ $caption }}">
                                <div class="caption">{{ $caption }}</div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="section-divider"></div>
    </section>

    <!-- Hubungi Kami -->
    <section class="text-center bg-white py-5">
        <div class="container">
            <h2 class="section-title hubungi-kami-title">Hubungi Kami</h2>
            <p class="hubungi-kami-subtitle">Kantor Pusat</p>
            <div class="hubungi-kami-info">
                <p>Gedung Ir. H. M. Suseno - Jl. R.P Soeroso No.6, Menteng, Jakarta Pusat <br> Phone: 085286754052</p>
            </div>
            <div class="d-flex justify-content-center gap-3 mt-5 flex-wrap">
                <a href="#" class="btn btn-gradient">
                    <span>LOKASI KAMI</span>
                </a>
                <a href="#" class="btn btn-outline-gradient">
                    <span>KIRIM PESAN</span>
                </a>
            </div>
        </div>
    </section>

@endsection
