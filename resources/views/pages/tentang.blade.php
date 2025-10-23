<!--
Jose Manuel Ritiauw
41523010104 
--!>

@extends('layouts.app')

@section('title', 'Tentang Kami')

@section('content')

    <style>
        main {
            padding-top: 0;
        }

        .hero-section {
            position: relative;
            height: 67vh;
            min-height: 500px;
            display: flex;
            align-items: flex-end;
            justify-content: flex-start;
            overflow: hidden;
            margin-top: 0px;
            padding-bottom: 1rem;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, rgba(70, 7, 78, 0.85) 0%, transparent 100%);
            z-index: 1;
        }

        .hero-section img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: 0;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            color: #fff;
            padding-left: 0rem;
            padding-bottom: 0rem;
            width: 100%;
        }

        .hero-title {
            font-size: 2.4rem;
            font-weight: 500;
            letter-spacing: 1.1px;
            text-transform: uppercase;
            margin: 0;
            padding-left: 8.5rem;
            padding-bottom: 4rem;
            font-family: 'Ubuntu', sans-serif;
        }

        .profil-section {
            padding-top: 90px;
            padding-right: 150px;
            padding-bottom: 90px;
            padding-left: 150px;
            background-color: #fff;
        }

        .profil-title {
            font-size: 29px;
            font-weight: 500;
            color: #4a5568;
            margin-bottom: 2rem;
            letter-spacing: 0.5px;
            font-family: 'Ubuntu', sans-serif;
            text-transform: capitalize;
        }

        .profil-text {
            color: #4a5568;
            line-height: 1.9;
            font-weight: 400;
            font-size: 21px;
            margin-bottom: 4rem;
            text-align: left;
            font-family: 'Ubuntu', sans-serif;
        }

        .visi-misi-img {
            width: 100%;
            height: 282px;
            object-fit: cover;
            margin-bottom: 2.5rem;
        }

        .section-heading {
            font-size: 29px;
            font-weight: 500;
            color: #4a5568;
            margin-bottom: 1.5rem;
            margin-top: 2.5rem;
            letter-spacing: 0px;
            font-family: 'Ubuntu', sans-serif;
            text-transform: capitalize;
        }

        .section-text {
            color: #4a5568;
            line-height: 1.9;
            font-size: 21px;
            text-align: left;
            font-family: 'Ubuntu', sans-serif;
        }

        .btn-layanan {
            display: inline-block;
            position: relative;
            padding: 12px 48px;
            border-radius: 50px;
            font-weight: 400;
            font-size: 18px;
            text-transform: capitalize;
            letter-spacing: 0px;
            text-decoration: none;
            transition: all 0.3s ease;
            margin: 5rem 0 4rem;
            background-image: linear-gradient(white, white), linear-gradient(90deg, #46074E, #197BD0);
            background-clip: padding-box, border-box;
            background-origin: border-box;
            border: 2px solid transparent;
            font-family: 'Ubuntu', sans-serif;
            color: #46074E;
        }

        .btn-layanan span {
            color: transparent;
            background-image: linear-gradient(90deg, #46074E, #197BD0);
            -webkit-background-clip: text;
            background-clip: text;
        }

        .btn-layanan:hover {
            background-image: linear-gradient(90deg, #46074E, #197BD0);
            transform: translateY(-2px);
            color: #fff;
        }

        .btn-layanan:hover span {
            background-image: none;
            -webkit-background-clip: unset;
            background-clip: unset;
            color: #fff;
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

        .kantor-subtitle {
            font-size: 1.125rem;
            font-weight: bold;
            color: #2d3748;
            text-transform: uppercase;
            margin-bottom: 1rem;
            font-family: 'Ubuntu', sans-serif;
        }

        .contact-info {
            color: #4a5568;
            font-size: 1rem;
            margin-bottom: 0.5rem;
            font-family: 'Ubuntu', sans-serif;
        }

        .btn-group-contact {
            display: flex;
            gap: 1rem;
            justify-content: center;
            margin-top: 2.5rem;
            flex-wrap: wrap;
        }

        .section-divider {
            width: 100%;
            max-width: 2000px;
            height: 1px;
            background-color: #e0e0e0;
            margin: 10px auto 0;
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

        /* ===== RESPONSIVE DESIGN ===== */

        /* Tablet & Medium Devices (max-width: 992px) */
        @media (max-width: 992px) {
            .hero-section {
                height: 50vh;
                min-height: 400px;
            }

            .hero-title {
                font-size: 2rem;
                padding-left: 3rem;
                padding-bottom: 2rem;
            }

            .profil-section {
                padding: 60px 60px;
            }

            .profil-title,
            .section-heading {
                font-size: 24px;
            }

            .profil-text,
            .section-text {
                font-size: 18px;
                line-height: 1.7;
            }

            .btn-layanan {
                padding: 10px 40px;
                font-size: 16px;
                margin: 3rem 0 3rem;
            }

            .hubungi-kami-title {
                font-size: 22px;
            }

            .hubungi-kami-subtitle {
                font-size: 18px;
            }

            .btn-gradient,
            .btn-outline-gradient {
                padding: 12px 50px;
                font-size: 15px;
            }
        }

        /* Mobile Devices (max-width: 768px) */
        @media (max-width: 768px) {
            .hero-section {
                height: 40vh;
                min-height: 300px;
            }

            .hero-section::before {
                background: linear-gradient(90deg, rgba(70, 7, 78, 0.85) 0%, rgba(70, 7, 78, 0.6) 100%);
            }

            .hero-title {
                font-size: 1.5rem;
                padding-left: 2rem;
                padding-bottom: 1.5rem;
                letter-spacing: 0.8px;
            }

            .profil-section {
                padding: 40px 30px;
            }

            .profil-title,
            .section-heading {
                font-size: 20px;
                margin-bottom: 1rem;
            }

            .profil-text,
            .section-text {
                font-size: 16px;
                line-height: 1.6;
                margin-bottom: 2rem;
            }

            .profil-text br {
                display: none;
            }

            .visi-misi-img {
                height: 220px;
                margin-bottom: 1.5rem;
            }

            .section-heading {
                margin-top: 1.5rem;
            }

            .btn-layanan {
                padding: 10px 35px;
                font-size: 15px;
                margin: 2rem 0 2rem;
            }

            .hubungi-kami-title {
                font-size: 20px;
                margin-bottom: 18px;
            }

            .hubungi-kami-subtitle {
                font-size: 16px;
                margin-bottom: 20px;
            }

            .hubungi-kami-info p {
                font-size: 14px;
                line-height: 20px;
                margin-top: -15px;
                padding: 0 15px;
            }

            .hubungi-kami-info p br {
                display: none;
            }

            .btn-group-contact {
                gap: 0.8rem;
                margin-top: 2rem;
            }

            .btn-gradient,
            .btn-outline-gradient {
                padding: 12px 40px;
                font-size: 14px;
            }

            .d-flex.gap-3 {
                gap: 0.8rem !important;
            }
        }

        /* Small Mobile Devices (max-width: 576px) */
        @media (max-width: 576px) {
            .hero-section {
                height: 35vh;
                min-height: 250px;
            }

            .hero-title {
                font-size: 1.3rem;
                padding-left: 1.5rem;
                padding-bottom: 1rem;
                letter-spacing: 0.5px;
            }

            .profil-section {
                padding: 30px 20px;
            }

            .profil-title,
            .section-heading {
                font-size: 18px;
            }

            .profil-text,
            .section-text {
                font-size: 15px;
                line-height: 1.6;
                text-align: justify;
            }

            .visi-misi-img {
                height: 200px;
                margin-bottom: 1rem;
            }

            .btn-layanan {
                padding: 10px 30px;
                font-size: 14px;
                margin: 1.5rem 0 1.5rem;
                border-radius: 40px;
            }

            .hubungi-kami-title {
                font-size: 18px;
            }

            .hubungi-kami-subtitle {
                font-size: 15px;
            }

            .hubungi-kami-info p {
                font-size: 13px;
                line-height: 18px;
            }

            .btn-gradient,
            .btn-outline-gradient {
                padding: 10px 30px;
                font-size: 13px;
                width: 100%;
                max-width: 280px;
                text-align: center;
            }

            .d-flex.justify-content-center {
                flex-direction: column;
                align-items: center;
            }

            .section-divider {
                margin: 5px auto 0;
            }
        }

        /* Extra Small Mobile Devices (max-width: 400px) */
        @media (max-width: 400px) {
            .hero-title {
                font-size: 1.1rem;
                padding-left: 1rem;
            }

            .profil-section {
                padding: 25px 15px;
            }

            .profil-title,
            .section-heading {
                font-size: 16px;
            }

            .profil-text,
            .section-text {
                font-size: 14px;
            }

            .visi-misi-img {
                height: 180px;
            }

            .btn-layanan {
                padding: 9px 25px;
                font-size: 13px;
            }

            .btn-gradient,
            .btn-outline-gradient {
                padding: 10px 25px;
                font-size: 12px;
                max-width: 250px;
            }
        }
    </style>

    <main>
        <!-- Hero Section -->
        <section class="hero-section">
            <img src="/images/layanan5.png" alt="Tentang Kami">
            <div class="hero-content">
                <h1 class="hero-title">TENTANG KAMI</h1>
            </div>
        </section>

        <section class="profil-section">
            <div class="container" style="max-width: 1125px;">
                <div class="row">
                    <div class="col-12">
                        <h2 class="profil-title">Profil</h2>
                        <p class="profil-text">
                            Didirikan pada tahun 2018, ini membuktikan bahwa INAKLUG merupakan konsultan pendidikan
                            internasional yang <br> berpengalaman, terbesar, terpercaya dan juga memiliki jam terbang tinggi
                            untuk melayani para anak-anak muda <br> Indonesia untuk menuntut ilmu di berbagai negara maju
                            dunia.
                        </p>
                    </div>
                </div>

                <div class="row g-4 mb-5">
                    <div class="col-md-6">
                        <img src="/images/tentang2.png" alt="Visi" class="visi-misi-img" />
                        <h3 class="section-heading">Visi</h3>
                        <p class="section-text">
                            Membangun Sumber Daya Indonesia yang mempunyai daya saing tinggi, tangguh secara
                            internasional
                            untuk menghadapi persaingan di era globalisasi serta membangun karakter pemimpin
                            Indonesia masa
                            depan yang tangguh, mandiri, dan profesional
                        </p>
                    </div>
                    <div class="col-md-6">
                        <img src="/images/tentang3.jpg" alt="Misi" class="visi-misi-img" />
                        <h3 class="section-heading">Misi</h3>
                        <p class="section-text">
                            Membangun Sumber Daya Indonesia yang mempunyai daya saing tinggi, tangguh secara
                            internasional
                            untuk menghadapi persaingan di era globalisasi serta membangun karakter pemimpin
                            Indonesia masa
                            depan yang tangguh, mandiri, dan profesional
                        </p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 text-center">
                        <a href="{{ route('layanan') }}" class="btn-layanan">
                            <span>Layanan Kami</span>
                        </a>
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
    </main>

@endsection
