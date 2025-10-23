<!--
Jose Manuel Ritiauw
41523010104 
--!>

@extends('layouts.app')

@section('title', 'Beranda - Klug Indonesia')

@push('styles')
    <style>
        /* ===== Hero Section ===== */
        .hero {
            position: relative;
            width: 100%;
            height: 100vh;
            overflow: hidden;
            margin: 0;
            padding: 0;
        }

        .hero img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        /* Overlay box */
        .hero-overlay {
            position: absolute;
            bottom: 170px;
            left: 80px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 60px;
            width: 708px;
            height: 140px;
            background: linear-gradient(90deg, rgba(70, 7, 78, 0.95) 0%, rgba(25, 123, 208, 0.8) 100%);
            border-radius: 2px;
            padding: 65px 37px;
            box-shadow: 10px 10px 4px rgba(0, 0, 0, 0.2);
            font-family: 'Ubuntu', sans-serif;
            color: #fff;
        }

        .hero-text {
            position: relative;
            display: flex;
            flex-direction: column;
            padding-left: 12px;
        }

        /* Garis dalam Box */
        .hero-text::before {
            content: '';
            position: absolute;
            left: -8px;
            top: 20%;
            width: 1px;
            height: 170%;
            background-color: #fff;
            border-radius: 1px;
            transform-origin: left;
            transform: translateY(-50%) scaleX(0.5);
        }

        .hero-text h1 {
            font-size: 22px;
            font-weight: 300;
            margin: 0;
            text-transform: uppercase;
            letter-spacing: 0.4px;
            line-height: 1.5;
        }

        .btn-outline-light-custom {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 244px;
            height: 45px;
            font-family: 'Ubuntu', sans-serif;
            font-weight: 300;
            font-size: 17px;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            color: #fff;
            background: transparent;
            border: 1px solid #fff;
            border-radius: 22.5px;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
        }

        .btn-outline-light-custom i {
            font-size: 0.85rem;
            margin-left: 8px;
            transition: transform 0.3s ease;
        }

        .btn-outline-light-custom:hover {
            background: transparent;
            color: #fff;
            border-color: #fff;
            transform: scale(1.03);
        }

        .btn-outline-light-custom:hover i {
            transform: translateY(2px);
        }


        main {
            margin-top: 0 !important;
        }

        /* ===== Section Umum ===== */
        section {
            padding: 70px 0 0 0;
            background: white;
        }

        /* Garis pemisah section */
        .section-divider-tentang {
            width: 100%;
            max-width: 2000px;
            height: 1px;
            background-color: #e0e0e0;
            margin-top: 70px;
            margin-bottom: 0px;
        }

        .section-divider-artikel {
            width: 100%;
            max-width: 2000px;
            height: 1px;
            background-color: #e0e0e0;
            margin: 100px auto -100px auto;
        }

        .section-title {
            font-weight: 500;
            font-size: 26px;
            letter-spacing: 1px;
            margin-top: 24px;
            margin-bottom: 40px;
            color: #444;
            font-family: 'Ubuntu', sans-serif;
        }

        .section-paragraph {
            max-width: 750px;
            font-size: 18px;
            font-weight: 300;
            line-height: 1.8;
            color: #555;
            font-family: 'Ubuntu', sans-serif;
        }

        /* ===== Layanan Kami ===== */
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

        .card-layanan {
            width: 406px;
            border: none;
            overflow: hidden;
            position: relative;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            margin: 0px;
        }

        .card-layanan img {
            width: 100%;
            height: 310px;
            object-fit: cover;
            transition: all 0.3s ease;
            display: block;
        }

        .card-layanan:hover img {
            transform: scale(1.05);
        }

        /* Overlay gradasi pada gambar */
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

        /* Garis vertikal panjang di kiri card */
        .card-layanan::after {
            content: '';
            position: absolute;
            left: 10px;
            top: 0px;
            bottom: 60px;
            width: 1px;
            background-color: #fff;
            border-radius: 2px;
            z-index: 2;
            transform-origin: left;
            transform: scaleX(0.5);
        }

        .card-layanan .caption {
            position: absolute;
            bottom: 20px;
            left: 25px;
            background: transparent;
            color: #fff;
            font-weight: 400;
            font-size: 1.4rem;
            padding: 0;
            text-align: left;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            z-index: 3;
            font-family: 'Ubuntu', sans-serif;
        }

        /* ===== Mitra Kami ===== */
        .mitra-section .section-title {
            margin-bottom: 30px;
            margin-top: 38px;
            text-transform: capitalize;
            letter-spacing: 0px;
            font-weight: 400;
        }

        .mitra-container {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            justify-content: center;
            gap: 20px;
            margin: 0 auto;
            max-width: 1000px;
        }

        .mitra-card {
            background: #fff;
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            padding: 30px 40px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 120px;
        }

        .mitra-card:hover {
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.12);
            transform: translateY(-3px);
        }

        .mitra-card img {
            max-width: 100%;
            max-height: 60px;
            width: auto;
            height: auto;
            object-fit: contain;
        }

        @media (max-width: 1200px) {
            .mitra-container {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 768px) {
            .mitra-container {
                grid-template-columns: 1fr;
            }
        }

        /* ===== CTA Section ===== */
        .cta-section {
            margin: 30px auto -50px auto;
        }

        .cta {
            background: linear-gradient(90deg, #46074E 0%, rgb(61, 148, 223) 80%);
            color: #fff;
            border-radius: 6px;
            padding: 30px 50px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .cta-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 30px;
        }

        .cta-text h4 {
            font-weight: 500;
            font-size: 1.3rem;
            margin-bottom: 8px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            font-family: 'Ubuntu', sans-serif;
        }

        .cta-text p {
            margin-bottom: 0;
            opacity: 0.95;
            font-size: 16px;
            font-weight: 300;
            font-family: 'Ubuntu', sans-serif;
            color: #FFFFFF;
        }

        .dropdown-konsultasi {
            position: relative;
        }

        .btn-konsultasi {
            background: transparent;
            border: 2px solid #fff;
            border-radius: 10px;
            color: #fff;
            padding: 4px 20px;
            font-size: 16px;
            font-weight: 400;
            text-transform: uppercase;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 15px;
            white-space: nowrap;
            letter-spacing: 0.5px;
        }

        .btn-konsultasi:hover {
            background: rgba(255, 255, 255, 0.15);
        }

        .btn-konsultasi i {
            font-size: 12px;
            transition: transform 0.3s ease;
            margin-left: 10px;
            transform: rotate(-90deg);
            /* awal: menghadap kanan */
        }

        .btn-konsultasi.active i {
            transform: rotate(0deg);
        }

        .dropdown-menu-konsultasi {
            position: absolute;
            top: calc(100% + 10px);
            right: 0;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
            min-width: 280px;
            display: none;
            z-index: 1000;
            overflow: hidden;
        }

        .dropdown-menu-konsultasi.show {
            display: block;
            animation: dropdownFade 0.3s ease;
        }

        @keyframes dropdownFade {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .dropdown-menu-konsultasi a {
            display: block;
            padding: 15px 20px;
            color: #333;
            text-decoration: none;
            transition: all 0.3s ease;
            font-size: 0.95rem;
            border-bottom: 1px solid #f0f0f0;
        }

        .dropdown-menu-konsultasi a:last-child {
            border-bottom: none;
        }

        .dropdown-menu-konsultasi a:hover {
            background: #f8f8f8;
            padding-left: 25px;
            color: #5A2A83;
        }

        /* ===== Artikel ===== */
        .artikel-section {
            margin: 100px 0;
        }

        .artikel-section .section-title {
            text-transform: capitalize !important;
            letter-spacing: 0px;
            font-weight: 400;
        }


        .artikel-card {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: all 0.3s ease;
            max-width: 100%;
            width: 100%;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        .artikel-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.18);
        }

        .artikel-card img {
            width: 100%;
            height: 200px;
            /* Sesuaikan tinggi gambar */
            object-fit: cover;
            display: block;
            transition: transform 0.3s ease;
        }


        .artikel-card:hover img {
            transform: scale(1.05);
        }

        .artikel-title {
            padding: 15px 15px 20px;
            margin: 0;
            font-size: 16px;
            font-weight: 400;
            color: #222;
            line-height: 1.4;
            text-align: center;
            font-family: 'Ubuntu', sans-serif;
            min-height: 80px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .artikel-section .row {
            --bs-gutter-x: 1.5rem;
            --bs-gutter-y: 2rem;
            justify-content: center;
            max-width: 1000px;
            /* Batasi lebar maksimal container */
            margin: 0 auto;
        }

        .artikel-section .col-md-6 {
            flex: 0 0 48%;
            /* 48% untuk memberi sedikit gap */
            max-width: 48%;
            display: flex;
        }

        .artikel-item {
            width: 100%;
            display: block;
        }

        /* ===== Tombol ARTIKEL LAINNYA ===== */
        .btn-artikel {
            display: inline-block;
            position: relative;
            padding: 10px 50px;
            font-weight: 400;
            text-transform: uppercase;
            font-size: 1rem;
            text-decoration: none;
            border: 2px solid transparent;
            border-radius: 50px;
            background-image: linear-gradient(white, white), linear-gradient(90deg, #46074E, #197BD0);
            background-clip: padding-box, border-box;
            background-origin: border-box;
            transition: all 0.3s ease;
        }

        .btn-artikel span {
            color: transparent;
            background-image: linear-gradient(90deg, #46074E, #197BD0);
            -webkit-background-clip: text;
            background-clip: text;
        }

        .btn-artikel:hover {
            background-image: linear-gradient(90deg, #46074E, #197BD0);
            transform: translateY(-2px);
            color: #fff;
        }

        .btn-artikel:hover span {
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

        /* ===========  RESPONSIVE MEDIA QUERIES  ===========*/

        /* Untuk layar ≤ 1400px (Large Desktop) - Layanan jadi 2x3 */
        @media (max-width: 1400px) {
            .hero-overlay {
                left: 60px;
                width: 650px;
                bottom: 140px;
            }

            /* Layanan Kami - 2 kolom, centered */
            .layanan-section .row {
                justify-content: center;
                max-width: 900px;
                margin: 0 auto;
            }

            .layanan-section .col-md-4 {
                flex: 0 0 50%;
                max-width: 50%;
            }

            .card-layanan {
                max-width: 100%;
                margin-bottom: 30px;
            }

            .mitra-container {
                max-width: 900px;
            }
        }

        /* Untuk layar ≤ 1200px (Desktop) */
        @media (max-width: 1200px) {
            .hero-overlay {
                left: 40px;
                width: 580px;
                height: auto;
                padding: 35px 30px;
                gap: 35px;
                bottom: 120px;
            }

            .hero-text h1 {
                font-size: 20px;
            }

            .btn-outline-light-custom {
                width: 220px;
                font-size: 16px;
            }

            .section-paragraph {
                font-size: 17px;
                max-width: 700px;
            }

            /* Layanan Kami - tetap 2x3 centered */
            .layanan-section .row {
                justify-content: center;
                max-width: 850px;
                margin: 0 auto;
            }

            .layanan-section .col-md-4 {
                flex: 0 0 50%;
                max-width: 50%;
            }

            .card-layanan {
                max-width: 100%;
                margin-bottom: 30px;
            }

            .mitra-container {
                grid-template-columns: repeat(2, 1fr);
                max-width: 600px;
                gap: 25px;
            }

            .cta {
                padding: 28px 40px;
            }
        }

        /* Untuk layar ≤ 997px - Layanan tetap 2x3 */
        @media (max-width: 997px) {

            /* Layanan Kami - 2 kolom, centered */
            .layanan-section .row {
                justify-content: center;
                max-width: 800px;
                margin: 0 auto;
            }

            .layanan-section .col-md-4 {
                flex: 0 0 50%;
                max-width: 50%;
            }

            .card-layanan {
                max-width: 100%;
                margin-bottom: 30px;
            }
        }

        /* Untuk layar ≤ 992px (Tablet Landscape) */
        @media (max-width: 992px) {
            .hero {
                height: 75vh;
            }

            .hero-overlay {
                bottom: 80px;
                left: 30px;
                width: calc(100% - 60px);
                max-width: 550px;
                flex-direction: column;
                align-items: flex-start;
                gap: 25px;
                padding: 30px 25px;
            }

            .hero-text h1 {
                font-size: 18px;
            }

            .btn-outline-light-custom {
                width: 200px;
                height: 42px;
                font-size: 15px;
            }

            section {
                padding: 50px 0 0 0;
            }

            .section-title {
                font-size: 24px;
                margin-bottom: 35px;
            }

            .section-paragraph {
                font-size: 16px;
                line-height: 1.7;
            }

            /* Layanan Kami - tetap 2 kolom */
            .layanan-section .col-md-4 {
                flex: 0 0 50%;
                max-width: 50%;
            }

            .card-layanan {
                max-width: 100%;
                margin-bottom: 30px;
            }

            .card-layanan img {
                height: 280px;
            }

            .layanan-section .section-title {
                margin-bottom: 35px;
            }

            .mitra-card {
                padding: 25px 30px;
                height: 100px;
            }

            .mitra-card img {
                max-height: 50px;
            }

            .cta {
                padding: 25px 30px;
                border-radius: 8px;
            }

            .cta-content {
                flex-direction: column;
                text-align: center;
                gap: 20px;
            }

            .cta-text h4 {
                font-size: 1.2rem;
            }

            .btn-konsultasi {
                margin: 0 auto;
            }

            .dropdown-menu-konsultasi {
                left: 50%;
                right: auto;
                transform: translateX(-50%);
            }

            .artikel-section {
                margin: 70px 0;
            }

            .artikel-section .col-md-6 {
                flex: 0 0 100%;
                max-width: 100%;
            }

            .artikel-card img {
                height: 220px;
            }

            .section-divider-artikel {
                margin: 70px auto -70px auto;
            }
        }

        /* Untuk layar ≤ 768px (Tablet Portrait) */
        @media (max-width: 768px) {
            .hero {
                height: 65vh;
            }

            .hero-overlay {
                bottom: 50px;
                left: 20px;
                width: calc(100% - 40px);
                padding: 25px 20px;
                gap: 20px;
            }

            .hero-text::before {
                height: 150%;
            }

            .hero-text h1 {
                font-size: 16px;
                line-height: 1.4;
            }

            .btn-outline-light-custom {
                width: 180px;
                height: 40px;
                font-size: 14px;
            }

            section {
                padding: 40px 0 0 0;
            }

            .section-title {
                font-size: 22px;
                margin-bottom: 30px;
            }

            .section-paragraph {
                font-size: 15px;
                line-height: 1.6;
                padding: 0 15px;
            }

            .section-divider-tentang {
                margin-top: 50px;
            }

            /* Layanan Kami - 1 kolom (1x6) dengan centering */
            .layanan-section .row {
                justify-content: center;
                margin: 0 auto;
                padding: 0;
            }

            .layanan-section .col-md-4 {
                flex: 0 0 100%;
                max-width: 100%;
                display: flex;
                justify-content: center;
                padding-left: 15px;
                padding-right: 15px;
                margin-bottom: 25px;
            }

            .card-layanan {
                max-width: 500px;
                width: 100%;
                margin: 0 auto;
            }

            .card-layanan img {
                height: 250px;
            }

            .card-layanan .caption {
                font-size: 1.2rem;
                bottom: 15px;
                left: 20px;
            }

            .mitra-container {
                grid-template-columns: repeat(2, 1fr);
                gap: 15px;
                padding: 0 15px;
            }

            .mitra-card {
                padding: 20px;
                height: 90px;
            }

            .mitra-card img {
                max-height: 45px;
            }

            .cta {
                padding: 25px 20px;
                margin: 0 15px;
            }

            .cta-text h4 {
                font-size: 1.1rem;
            }

            .cta-text p {
                font-size: 14px;
            }

            .btn-konsultasi {
                font-size: 14px;
                padding: 8px 18px;
            }

            .dropdown-menu-konsultasi {
                min-width: 250px;
            }

            .artikel-section {
                margin: 60px 0;
            }

            /* Artikel - 1 kolom dengan centering */
            .artikel-section .row {
                justify-content: center;
                margin: 0 auto;
                padding: 0;
            }

            .artikel-section .col-md-6 {
                flex: 0 0 100%;
                max-width: 100%;
                display: flex;
                justify-content: center;
            }

            .artikel-item {
                width: 100%;
                max-width: 500px;
                margin: 0 auto;
            }

            .artikel-card {
                margin: 0 auto;
                max-width: 500px;
            }

            .artikel-card img {
                height: 200px;
            }

            .artikel-title {
                font-size: 15px;
                min-height: auto;
                padding: 15px;
            }

            .btn-artikel {
                padding: 10px 40px;
                font-size: 0.9rem;
            }

            .section-divider-artikel {
                margin: 60px auto -60px auto;
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

            .container {
                padding-left: 15px;
                padding-right: 15px;
            }
        }

        /* Untuk layar ≤ 576px (Mobile) */
        @media (max-width: 576px) {
            .hero {
                height: 55vh;
                min-height: 400px;
            }

            .hero-overlay {
                bottom: 30px;
                left: 15px;
                width: calc(100% - 30px);
                padding: 20px 18px;
                gap: 18px;
            }

            .hero-text::before {
                height: 140%;
                left: -6px;
            }

            .hero-text h1 {
                font-size: 14px;
                letter-spacing: 0.3px;
            }

            .btn-outline-light-custom {
                width: 160px;
                height: 38px;
                font-size: 13px;
                padding: 0 15px;
            }

            .btn-outline-light-custom i {
                font-size: 0.75rem;
                margin-left: 6px;
            }

            section {
                padding: 35px 0 0 0;
            }

            .section-title {
                font-size: 20px;
                margin-bottom: 25px;
                padding: 0 15px;
            }

            .section-paragraph {
                font-size: 14px;
                padding: 0 20px;
            }

            .section-divider-tentang {
                margin-top: 40px;
            }

            /* Layanan Kami - 1 kolom dengan centering */
            .layanan-section .row {
                padding: 0 15px;
                justify-content: center;
            }

            .layanan-section .col-md-4 {
                flex: 0 0 100%;
                max-width: 100%;
                padding-left: 10px;
                padding-right: 10px;
                display: flex;
                justify-content: center;
                margin-bottom: 20px;
            }

            .card-layanan {
                margin: 0 auto;
                max-width: 100%;
                width: 100%;
            }

            .card-layanan img {
                height: 220px;
            }

            .card-layanan .caption {
                font-size: 1.1rem;
                bottom: 12px;
                left: 18px;
            }

            .mitra-container {
                grid-template-columns: 1fr;
                gap: 15px;
                padding: 0 20px;
            }

            .mitra-card {
                padding: 20px;
                height: 85px;
            }

            .cta-section {
                margin: 25px auto -40px auto;
            }

            .cta {
                padding: 20px 18px;
                margin: 0 15px;
                border-radius: 6px;
            }

            .cta-content {
                gap: 18px;
            }

            .cta-text h4 {
                font-size: 1rem;
                line-height: 1.3;
            }

            .cta-text p {
                font-size: 13px;
            }

            .btn-konsultasi {
                width: 100%;
                justify-content: center;
                font-size: 13px;
                padding: 10px 15px;
            }

            .dropdown-menu-konsultasi {
                min-width: 100%;
                left: 0;
                transform: none;
            }

            .artikel-section {
                margin: 50px 0;
            }

            /* Artikel - 1 kolom dengan centering */
            .artikel-section .row {
                padding: 0 15px;
                justify-content: center;
            }

            .artikel-section .col-md-6 {
                display: flex;
                justify-content: center;
            }

            .artikel-item {
                max-width: 100%;
                margin: 0 auto;
            }

            .artikel-card {
                margin: 0 auto;
                max-width: 100%;
            }

            .artikel-card img {
                height: 180px;
            }

            .artikel-title {
                font-size: 14px;
                padding: 12px;
            }

            .btn-artikel {
                padding: 10px 35px;
                font-size: 0.85rem;
            }

            .section-divider-artikel {
                margin: 50px auto -50px auto;
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
                margin-top: -15px;
            }

            .btn-gradient,
            .btn-outline-gradient {
                padding: 12px 35px;
                font-size: 14px;
                width: 100%;
                max-width: 280px;
            }

            .container {
                padding-left: 20px;
                padding-right: 20px;
            }
        }

        /* Untuk layar ≤ 425px (Mobile Small) */
        @media (max-width: 425px) {
            .hero {
                height: 50vh;
                min-height: 380px;
            }

            .hero-overlay {
                bottom: 25px;
                left: 12px;
                width: calc(100% - 24px);
                padding: 18px 16px;
                gap: 15px;
            }

            .hero-text h1 {
                font-size: 13px;
            }

            .btn-outline-light-custom {
                width: 150px;
                height: 36px;
                font-size: 12px;
            }

            .section-title {
                font-size: 18px;
            }

            .section-paragraph {
                font-size: 13px;
            }

            .layanan-section .row,
            .artikel-section .row {
                padding: 0 12px;
            }

            .card-layanan {
                margin-left: auto;
                margin-right: auto;
            }

            .card-layanan img {
                height: 200px;
            }

            .card-layanan .caption {
                font-size: 1rem;
            }

            .cta-text h4 {
                font-size: 0.95rem;
            }

            .artikel-card {
                margin-left: auto;
                margin-right: auto;
            }

            .artikel-card img {
                height: 160px;
            }

            .artikel-title {
                font-size: 13px;
                padding: 10px;
            }
        }

        /* Untuk layar ≤ 375px (Mobile Extra Small) */
        @media (max-width: 375px) {
            .hero {
                height: 45vh;
                min-height: 350px;
            }

            .hero-overlay {
                bottom: 20px;
                left: 10px;
                width: calc(100% - 20px);
                padding: 16px 14px;
                gap: 12px;
            }

            .hero-text h1 {
                font-size: 12px;
            }

            .btn-outline-light-custom {
                width: 140px;
                height: 34px;
                font-size: 11px;
            }

            .section-title {
                font-size: 17px;
            }

            .layanan-section .row,
            .artikel-section .row {
                padding: 0 10px;
            }

            .card-layanan img {
                height: 180px;
            }

            .artikel-card img {
                height: 150px;
            }
        }

        /* Fix untuk container Bootstrap pada mobile */
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

            /* Pastikan card layanan full width pada mobile */
            .card-layanan {
                width: 100%;
                max-width: 100%;
            }
        }

        /* Fix untuk gap dan spacing pada layanan section */
        @media (max-width: 992px) {
            .layanan-section .row {
                margin-left: 0;
                margin-right: 0;
            }

            .layanan-section .col-md-4 {
                padding-left: 15px;
                padding-right: 15px;
                margin-bottom: 20px;
            }
        }
    </style>
@endpush

@section('content')

    <!-- Hero Section -->
    <section class="hero">
        <img src="{{ asset('images/hero.png') }}" alt="Hero Image">
        <div class="hero-overlay">
            <div class="hero-text">
                <h1>INGIN KULIAH DAN BERKARIR</h1>
                <h1>DI LUAR NEGERI ?</h1>
            </div>
            <a href="#" class="btn-outline-light-custom">
                SELENGKAPNYA
                <i class="fa-solid fa-chevron-down"></i>
            </a>
        </div>
    </section>

    <!-- Tentang Kami -->
    <section class="text-center with-border">
        <div class="container">
            <h2 class="section-title">TENTANG KAMI</h2>
            <p class="mx-auto section-paragraph">
                INAKLUG adalah Konsultan Pendidikan Internasional di Indonesia yang sudah memberangkatkan lebih dari 300
                mahasiswa Indonesia yang ingin kuliah, perjalanan wisata dan berkarir di negara maju di dunia.
            </p>
            <div class="section-divider-tentang"></div>
        </div>
    </section>

    <!-- Layanan Kami -->
    <section class="layanan-section text-center">
        <div class="container">
            <h2 class="section-title">Layanan Kami</h2>
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
    </section>

    <!-- Mitra Kami -->
    <section class="text-center mitra-section">
        <div class="container">
            <h2 class="section-title">Mitra Kami</h2>
            <div class="mitra-container">
                <div class="mitra-card">
                    <img src="{{ asset('images/mitra1.jpg') }}" alt="424 Aviation">
                </div>
                <div class="mitra-card">
                    <img src="{{ asset('images/mitra2.png') }}" alt="St. Andrew's College">
                </div>
                <div class="mitra-card">
                    <img src="{{ asset('images/mitra3.png') }}" alt="HTW Berlin">
                </div>
                <div class="mitra-card">
                    <img src="{{ asset('images/mitra4.jpg') }}" alt="StudyGroup">
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">`
        <div class="container">
            <div class="cta">
                <div class="cta-content">
                    <div class="cta-text">
                        <h4>GRATIS KONSELING STUDI DI LUAR NEGERI !!!</h4>
                        <p>Konsultasi seputar kuliah / bekerja di Luar Negeri</p>
                    </div>
                    <div class="dropdown-konsultasi">
                        <button class="btn-konsultasi" id="btnKonsultasi">
                            MULAI KONSULTASI
                            <i class="fa-solid fa-chevron-down"></i>
                        </button>
                        <div class="dropdown-menu-konsultasi" id="dropdownMenu">
                            <a href="#">WhatsApp</a>
                            <a href="#">Email</a>
                            <a href="#">Telepon</a>
                            <a href="#">Formulir Online</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Artikel Terbaru -->
    <section class="text-center artikel-section">
        <div class="container">
            <h2 class="section-title">Artikel Terbaru</h2>
            <div class="artikel-grid-container">
                <div class="row g-4 justify-content-center">
                    @foreach ([['artikel1.png', '5 Fakta yang Harus Kamu Ketahui <br> Sebelum Studi ke Jerman'], ['artikel2.png', 'Uni Eropa Menghadapi Virus Corona'], ['artikel3.png', 'Belajar Bahasa Jerman Bersama <br> Goethe Institut'], ['artikel4.png', 'Apa Itu Gates Cambridge? Yuk Cari <br> Tahu']] as [$img, $title])
                        <div class="col-md-6">
                            <a href="#" class="artikel-item text-decoration-none">
                                <div class="artikel-card">
                                    <img src="{{ asset('images/' . $img) }}" class="w-100" alt="{!! strip_tags($title) !!}">
                                    <p class="artikel-title">{!! $title !!}</p>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>

            <a href="#" class="btn-artikel mt-4">
                <span>LAINNYA</span>
            </a>

            <div class="section-divider-artikel"></div>
        </div>
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

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const btnKonsultasi = document.getElementById('btnKonsultasi');
            const dropdownMenu = document.getElementById('dropdownMenu');

            if (btnKonsultasi && dropdownMenu) {
                // Toggle dropdown saat button diklik
                btnKonsultasi.addEventListener('click', function(e) {
                    e.stopPropagation();
                    dropdownMenu.classList.toggle('show');
                    btnKonsultasi.classList.toggle('active');
                });

                // Tutup dropdown saat klik di luar
                document.addEventListener('click', function(e) {
                    if (!btnKonsultasi.contains(e.target) && !dropdownMenu.contains(e.target)) {
                        dropdownMenu.classList.remove('show');
                        btnKonsultasi.classList.remove('active');
                    }
                });
            }
        });
    </script>
@endpush
