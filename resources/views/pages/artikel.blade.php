@extends('layouts.app')

@section('title', 'Artikel')

@section('content')

<section
    class="relative h-[60vh] flex items-center justify-center text-white text-center hero-overlay"
>
    <img
    src="https://images.unsplash.com/photo-1516321497487-e288fb19713f?q=80&w=2070&auto=format&fit=crop"
    alt="Dosen Mengajar"
    class="absolute top-0 left-0 w-full h-full object-cover"
    />
    <div class="hero-content max-w-3xl px-4">
    <h1 class="text-4xl md:text-6xl font-bold">
        Tips & Artikel Pendidikan
    </h1>
    </div>
</section>

<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-6">
    <div class="grid md:grid-cols-2 gap-8">
        <div class="bg-white rounded-lg shadow-lg overflow-hidden group">
        <img
            src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?q=80&w=2070&auto=format&fit=crop"
            class="w-full h-64 object-cover"
            alt="Artikel"
        />
        <div class="p-6">
            <p class="text-sm text-gray-500 mb-2">15 Oktober 2023</p>
            <h3
            class="text-xl font-bold mb-4 group-hover:text-klug-blue transition-colors duration-300"
            >
            Panduan Lengkap Mendaftar Beasiswa LPDP 2024
            </h3>
            <p class="text-gray-600 mb-4">
            Simak langkah-langkah detail dan tips jitu untuk lolos
            seleksi beasiswa paling bergengsi di Indonesia.
            </p>
            <a
            href="#"
            class="font-semibold text-klug-blue hover:underline"
            >Baca Selengkapnya →</a
            >
        </div>
        </div>
        <div class="bg-white rounded-lg shadow-lg overflow-hidden group">
        <img
            src="https://images.unsplash.com/photo-1552664730-d307ca884978?q=80&w=2070&auto=format&fit=crop"
            class="w-full h-64 object-cover"
            alt="Artikel"
        />
        <div class="p-6">
            <p class="text-sm text-gray-500 mb-2">12 Oktober 2023</p>
            <h3
            class="text-xl font-bold mb-4 group-hover:text-klug-blue transition-colors duration-300"
            >
            Perbedaan Sistem Pendidikan di Amerika dan Inggris
            </h3>
            <p class="text-gray-600 mb-4">
            Pilih negara tujuan studimu dengan memahami perbedaan
            mendasar antara sistem pendidikan di AS dan UK.
            </p>
            <a
            href="#"
            class="font-semibold text-klug-blue hover:underline"
            >Baca Selengkapnya →</a
            >
        </div>
        </div>
        <div class="bg-white rounded-lg shadow-lg overflow-hidden group">
        <img
            src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?q=80&w=2071&auto=format&fit=crop"
            class="w-full h-64 object-cover"
            alt="Artikel"
        />
        <div class="p-6">
            <p class="text-sm text-gray-500 mb-2">08 Oktober 2023</p>
            <h3
            class="text-xl font-bold mb-4 group-hover:text-klug-blue transition-colors duration-300"
            >
            Cara Menulis Motivation Letter yang Mengesankan
            </h3>
            <p class="text-gray-600 mb-4">
            Dapatkan perhatian tim admisi universitas dengan motivation
            letter yang kuat dan personal. Ini caranya!
            </p>
            <a
            href="#"
            class="font-semibold text-klug-blue hover:underline"
            >Baca Selengkapnya →</a
            >
        </div>
        </div>
        <div class="bg-white rounded-lg shadow-lg overflow-hidden group">
        <img
            src="https://images.unsplash.com/photo-1517048676732-d65bc937f952?q=80&w=2070&auto=format&fit=crop"
            class="w-full h-64 object-cover"
            alt="Artikel"
        />
        <div class="p-6">
            <p class="text-sm text-gray-500 mb-2">05 Oktober 2023</p>
            <h3
            class="text-xl font-bold mb-4 group-hover:text-klug-blue transition-colors duration-300"
            >
            5 Tips Jitu Menghadapi Wawancara Visa Pelajar
            </h3>
            <p class="text-gray-600 mb-4">
            Persiapkan dirimu dengan baik untuk wawancara visa pelajar
            agar proses aplikasi berjalan lancar.
            </p>
            <a
            href="#"
            class="font-semibold text-klug-blue hover:underline"
            >Baca Selengkapnya →</a
            >
        </div>
        </div>
    </div>

    <div class="flex justify-center mt-12">
        <nav class="flex items-center space-x-2">
        <a href="#" class="px-4 py-2 bg-klug-blue text-white rounded-lg"
            >1</a
        >
        <a
            href="#"
            class="px-4 py-2 bg-white text-gray-700 rounded-lg hover:bg-gray-200"
            >2</a
        >
        <a
            href="#"
            class="px-4 py-2 bg-white text-gray-700 rounded-lg hover:bg-gray-200"
            >3</a
        >
        <span>...</span>
        <a
            href="#"
            class="px-4 py-2 bg-white text-gray-700 rounded-lg hover:bg-gray-200"
            >Selanjutnya</a
        >
        </nav>
    </div>
    </div>
</section>
@endsection