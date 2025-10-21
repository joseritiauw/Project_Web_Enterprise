<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'INA KLUG - Konsultan Pendidikan Luar Negeri')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="{{ asset('images/inaklug.png') }}">

    <style>
        body {
            font-family: 'Ubuntu', sans-serif;
            scroll-behavior: smooth;
            background-color: #fff;
        }
        /* ======== Navbar ======== */
        .navbar {
            padding: 2rem 0rem;
            background: linear-gradient(90deg, rgba(70, 7, 78, 0.95) 0%, rgba(25, 123, 208, 0.8) 90%);
        }

        .navbar-nav {
            margin-left: 100px !important;
        }

        .navbar-nav .nav-item {
            margin: 0 8px;
        }

        .navbar-brand {
            font-weight: 500;
            font-size: 2.2rem;
            letter-spacing: 0.5px;
            margin-left: -75px;
        }

        .navbar-brand img {
            height: 60px;
            margin-right: 10px;
        }

        .navbar-nav .nav-link {
            color: rgb(255, 255, 255);
            font-weight: 400;
            font-size: 15px;
            transition: all 0.3s ease;
            position: relative;
            padding: 0.5rem 1rem;
            display: inline-block;
        }

        .navbar-nav .nav-link:hover,
        .navbar-nav .nav-link.active {
            color: #fff;
        }

        .navbar-nav .nav-link::after {
            content: '';
            position: absolute;
            bottom: 7px;
            left: 50%;
            transform: translateX(-50%);
            height: 1.5px;
            width: 0;
            background-color: rgba(255, 255, 255, 0.34);
            transition: width 0.3s ease;
        }

        .navbar-nav .nav-link.active::after,
        .navbar-nav .nav-link:hover::after {
            width: 85%;
        }

        .navbar-toggler {
            border-color: rgba(255, 255, 255, 0.5);
            padding: 0.5rem 0.75rem;
        }

        .navbar-toggler:focus {
            box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.25);
        }

        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28255, 255, 255, 0.8%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
        }

        /* ======== Search ======== */
        .search-tools .search-container {
            position: relative;
            left: auto !important;
            margin-right: 80px !important;
        }

        .search-container {
            display: flex;
            align-items: center;
            background: transparent;
            border: none;
            border-bottom: 1px solid rgb(255, 255, 255);
            border-radius: 0;
            padding: 5px 0;
            transition: all 0.3s ease;
            width: 260px;
        }

        .search-container:hover {
            border-bottom-color: rgba(255, 255, 255, 0.34);
        }

        .search-container i {
            color: rgb(255, 255, 255);
            margin-right: 20px;
            font-size: 18px;
        }

        .search-container input {
            background: transparent;
            border: none;
            outline: none;
            color: rgb(255, 255, 255);
            width: 150px;
            font-size: 15px;
            font-family: 'Ubuntu', sans-serif;
            font-weight: 700;
        }

        .search-container input::placeholder {
            color: rgba(255, 255, 255, 0.8);
        }

        /* ======== Button ======== */
        .search-tools .btn-klug {
            position: relative;
            left: 55px;
        }

        .btn-klug {
            background-color: #195395;
            color: #fff;
            border: none;
            border-radius: 50px;
            padding: 0;
            height: 45px;
            width: 160px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 16px;
            font-weight: 400;
            text-transform: uppercase;
            transition: all 0.3s ease;
        }

        .btn-klug:hover {
            background-color: #25519a;
            color: #fff;
        }

        /* ======== Footer ======== */
        footer {
            background: linear-gradient(90deg, rgba(70, 7, 78, 0.8) 0%, #197BD0 100%);
            color: #fff;
            text-align: center;
            padding: 35px 15px;
        }

        footer p {
            margin: 0;
            font-size: 14px;
            color: rgba(255, 255, 255, 0.85);
        }

        /* ======== Shadow & Section ======== */
        section {
            padding: 60px 0;
        }

        .section-title {
            font-weight: 500;
            text-transform: uppercase;
            margin-bottom: 30px;
            font-size: 1.3rem;
            letter-spacing: 0.5px;
        }

        .divider {
            width: 80px;
            height: 3px;
            background: #5A2A83;
            margin: 0 auto 30px;
            border-radius: 2px;
        }

        /* ======== Mobile Search in Menu ======== */
        .search-container-mobile {
            display: flex;
            align-items: center;
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.3);
            border-radius: 50px;
            padding: 12px 20px;
            width: 100%;
            max-width: 300px;
            margin: 0 auto;
            transition: all 0.3s ease;
        }

        .search-container-mobile:hover {
            background: rgba(255, 255, 255, 0.15);
            border-color: rgba(255, 255, 255, 0.5);
        }

        .search-container-mobile i {
            color: rgb(255, 255, 255);
            margin-right: 12px;
            font-size: 18px;
        }

        .search-container-mobile input {
            background: transparent;
            border: none;
            outline: none;
            color: rgb(255, 255, 255);
            width: 100%;
            font-size: 15px;
            font-family: 'Ubuntu', sans-serif;
            font-weight: 400;
        }

        .search-container-mobile input::placeholder {
            color: rgba(255, 255, 255, 0.7);
        }

        /* ======== Mobile Register Button ======== */
        .mobile-register-btn {
            display: none;
        }

        /* ======== Responsive Styles ======== */
        /* ======== Tablet & Small Desktop (1600px ke bawah) ======== */
        @media (max-width: 1600px) {
            .navbar {
                padding: 0.75rem 3rem;
            }

            .navbar-nav {
                margin-left: 50px !important;
            }

            .search-tools .search-container {
                left: -30px;
            }

            .search-tools .btn-klug {
                left: 30px;
            }
        }

        @media (max-width: 1400px) {
            .navbar {
                padding: 0.75rem 2rem;
            }

            .navbar-nav {
                margin-left: 30px !important;
            }

            .navbar-nav .nav-link {
                font-size: 16px;
                padding: 0.5rem 0.8rem;
            }

            .search-tools .search-container {
                left: -20px;
                width: 220px;
            }

            .search-container input {
                width: 130px;
            }

            .search-tools .btn-klug {
                left: 20px;
                width: 150px;
                font-size: 15px;
            }
        }

        @media (max-width: 1200px) {
            .navbar {
                padding: 0.75rem 1.5rem;
            }

            .navbar-brand {
                font-size: 1.8rem;
            }

            .navbar-brand img {
                height: 45px;
            }

            .navbar-nav {
                margin-left: 20px !important;
            }

            .navbar-nav .nav-link {
                font-size: 15px;
                padding: 0.5rem 0.7rem;
            }

            .search-tools .search-container {
                left: -10px;
                width: 200px;
            }

            .search-container input {
                width: 120px;
                font-size: 14px;
            }

            .search-tools .btn-klug {
                left: 10px;
                width: 140px;
                height: 42px;
                font-size: 14px;
            }
        }

        @media (max-width: 1199px) {
            .navbar {
                padding: 0.75rem 1rem;
            }

            .navbar-brand {
                margin-left: 0 !important;
                /* kembalikan posisi ke normal */
                display: flex !important;
                align-items: center;
            }

            .navbar-brand img {
                height: 40px;
                margin-right: 8px;
                display: inline-block;
            }


            /* Hide desktop search */
            .search-tools {
                display: none !important;
            }

            /* Show mobile button */
            .mobile-register-btn {
                display: block;
            }

            /* Collapse menu styling */
            .navbar-collapse {
                background: linear-gradient(90deg, rgba(70, 7, 78, 0.98) 0%, rgba(25, 123, 208, 0.95) 90%);
                padding: 1.5rem;
                margin-top: 1rem;
                border-radius: 8px;
            }

            .navbar-nav {
                margin-left: 0 !important;
                margin-bottom: 1.5rem !important;
                text-align: center;
            }

            .navbar-nav .nav-item {
                margin: 0.5rem 0;
            }

            .navbar-nav .nav-link {
                padding: 0.75rem 1rem;
                font-size: 16px;
            }

            .navbar-nav .nav-link::after {
                bottom: 10px;
            }

            .mobile-register-btn .btn-klug {
                width: 100%;
                max-width: 300px;
                margin: 0 auto;
                left: 0;
            }
        }

        @media (max-width: 768px) {
            .navbar {
                padding: 0.5rem 1rem;
            }

            .navbar-brand {
                font-size: 1.3rem;
            }

            .navbar-brand img {
                height: 35px;
            }

            footer {
                padding: 25px 15px;
            }

            footer p {
                font-size: 12px;
                line-height: 1.6;
            }

            section {
                padding: 40px 0;
            }

            .section-title {
                font-size: 1.1rem;
            }
        }

        @media (max-width: 576px) {
            .navbar-brand {
                font-size: 1.1rem;
            }

            .navbar-brand img {
                height: 30px;
                margin-right: 6px;
            }

            .navbar-toggler {
                padding: 0.4rem 0.6rem;
            }

            .navbar-collapse {
                padding: 0.75rem;
            }

            .navbar-nav .nav-link {
                font-size: 14px;
                padding: 0.6rem 0.8rem;
            }

            .btn-klug {
                height: 40px;
                font-size: 14px;
            }

            footer p {
                font-size: 11px;
            }

            .section-title {
                font-size: 1rem;
                margin-bottom: 20px;
            }

            .divider {
                width: 60px;
                height: 2px;
                margin-bottom: 20px;
            }
        }

        /* Desktop specific */
        @media (min-width: 1200px) {
            .navbar {
                padding: 0.75rem 7rem;
            }

            .search-container input {
                width: 200px;
            }
        }
    </style>

    @stack('styles')
</head>

<body>
    {{-- ======== Navbar ======== --}}
    <nav class="navbar navbar-expand-xl navbar-dark fixed-top shadow-sm">
        <div class="container-fluid">
            <a class="navbar-brand d-flex align-items-center" href="{{ route('home') }}">
                <img src="{{ asset('images/inaklug.png') }}" alt="Logo Inaklug">
                <span>Inaklug</span>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto mb-2 mb-xl-0">
                    <li class="nav-item"><a class="nav-link {{ request()->is('/') ? 'active' : '' }}"
                            href="{{ route('home') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link {{ request()->is('tentang') ? 'active' : '' }}"
                            href="{{ route('tentang') }}">Tentang Kami</a></li>
                    <li class="nav-item"><a class="nav-link {{ request()->is('layanan') ? 'active' : '' }}"
                            href="{{ route('layanan') }}">Layanan</a></li>
                    <li class="nav-item"><a class="nav-link {{ request()->is('artikel') ? 'active' : '' }}"
                            href="{{ route('artikel') }}">Artikel</a></li>
                    <li class="nav-item"><a class="nav-link {{ request()->is('kontak') ? 'active' : '' }}"
                            href="{{ route('kontak') }}">Hubungi Kami</a></li>
                </ul>

                {{-- Desktop Search & Button --}}
                <div class="d-none d-xl-flex align-items-center search-tools">
                    <div class="search-container me-3">
                        <i class="bi bi-search"></i>
                        <input type="text" placeholder="Ketik pencarian">
                    </div>
                    <a href="#" class="btn btn-klug">Daftar On-line</a>
                </div>

                {{-- Mobile Search & Button (in collapse menu) --}}
                <div class="mobile-register-btn d-xl-none text-center">
                    <div class="search-container-mobile mb-3">
                        <i class="bi bi-search"></i>
                        <input type="text" placeholder="Ketik pencarian">
                    </div>
                    <a href="#" class="btn btn-klug">Daftar On-line</a>
                </div>
            </div>
        </div>
    </nav>

    {{-- ======== Main Content ======== --}}
    <main>
        @yield('content')
    </main>

    {{-- ======== Footer ======== --}}
    <footer class="mt-5">
        <div class="container">
            <p>Copyright © 2020 - Inaklug Indonesia | Hak cipta dilindungi undang-undang.</p>
        </div>
    </footer>

    {{-- ======== Script ======== --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function openMobileSearch() {
            document.getElementById('mobileSearchModal').classList.add('active');
            document.getElementById('mobileSearchInput').focus();
            document.body.style.overflow = 'hidden';
        }

        function closeMobileSearch() {
            document.getElementById('mobileSearchModal').classList.remove('active');
            document.body.style.overflow = 'auto';
        }

        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closeMobileSearch();
            }
        });

        document.getElementById('mobileSearchModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeMobileSearch();
            }
        });
    </script>
    @stack('scripts')
</body>

</html>
