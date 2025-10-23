<!--
Jose Manuel Ritiauw
41523010104 
--!>

@extends('layouts.app')

@section('title', 'Hubungi Kami')

@section('content')
<section
    class="relative h-[60vh] flex items-center justify-center text-white text-center hero-overlay"
>
    <img
    src="https://euromanagementindonesia.wordpress.com/wp-content/uploads/2013/01/img_0511.jpg"
    alt="Gedung Institusi"
    class="absolute top-0 left-0 w-full h-full object-cover"
    />
    <div class="hero-content max-w-3xl px-4">
    <h1 class="text-4xl md:text-6xl font-bold">Hubungi Kami</h1>
    </div>
</section>

<section class="py-20">
    <div class="container mx-auto px-6 grid lg:grid-cols-2 gap-12">
    <div class="bg-white p-8 rounded-lg shadow-lg">
        <h2 class="text-2xl font-bold text-gray-800 mb-6">Kirim Pesan</h2>
        <form id="contact-form">
        <div class="mb-4">
            <label for="nama" class="block text-gray-700 mb-2"
            >Nama</label
            >
            <input
            type="text"
            id="nama"
            name="nama"
            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-klug-blue"
            />
        </div>
        <div class="mb-4">
            <label for="email" class="block text-gray-700 mb-2"
            >Email</label
            >
            <input
            type="email"
            id="email"
            name="email"
            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-klug-blue"
            />
        </div>
        <div class="mb-4">
            <label for="organisasi" class="block text-gray-700 mb-2"
            >Perusahaan/Organisasi</label
            >
            <input
            type="text"
            id="organisasi"
            name="organisasi"
            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-klug-blue"
            />
        </div>
        <div class="mb-4">
            <label for="telepon" class="block text-gray-700 mb-2"
            >Telepon</label
            >
            <input
            type="tel"
            id="telepon"
            name="telepon"
            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-klug-blue"
            />
        </div>
        <div class="mb-4">
            <label for="pesan" class="block text-gray-700 mb-2"
            >Isi Pesan</label
            >
            <textarea
            id="pesan"
            name="pesan"
            rows="5"
            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-klug-blue"
            ></textarea>
        </div>

        <div
            class="g-recaptcha mb-6"
            data-sitekey="6Le_PuIrAAAAANLlD60_l0InHTVIcmBZcJkLpWDF"
        ></div>

        <button
            type="submit"
            class="w-full bg-klug-blue text-white px-8 py-3 rounded-lg font-semibold hover:bg-opacity-90 transition-all duration-300 shadow-lg"
        >
            Kirim Pesan
        </button>
        </form>
        <div
        id="form-status"
        class="hidden mt-4 p-4 rounded-lg text-center"
        ></div>
    </div>
    <div>
        <h2 class="text-2xl font-bold text-gray-800 mb-6">
        Informasi Lokasi Kami
        </h2>

        <div class="mb-8">
        <h3 class="font-bold text-lg mb-2">Kantor Pusat</h3>
        <p class="text-gray-600">
            Gedung H. M. Sueseno – Jl. RP Soeroso No.6, Menteng, Jakarta
            Pusat
        </p>
        </div>

        <div class="mb-8">
        <h3 class="font-bold text-lg mb-2">Kantor Cabang</h3>
        <p class="text-gray-600">
            Gedung H. M. Sueseno – Jl. RP Soeroso No.6, Menteng, Jakarta
            Pusat
        </p>
        </div>

        <div class="mb-8">
        <h3 class="font-bold text-lg mb-2">Kontak</h3>
        <p class="text-gray-600">Telepon: (021) 123-4567</p>
        <p class="text-gray-600">Fax: (021) 123-4568</p>
        <p class="text-gray-600">Hotline: 0812-3456-7890</p>
        </div>

        <div class="h-64 rounded-lg overflow-hidden">
        <iframe
            src="https://www.google.com/maps?q=Gedung+H.+M.+Sueseno,+Jl.+RP+Soeroso+No.6,+Menteng,+Jakarta+Pusat&output=embed"
            width="100%"
            height="100%"
            style="border: 0"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
        >
        </iframe>
        </div>
    </div>
    </div>
</section>
@endsection

@push('scripts')
<script>
    document.addEventListener("DOMContentLoaded", function () {
      const contactForm = document.getElementById("contact-form");
      const formStatus = document.getElementById("form-status");

      if (contactForm) {
        contactForm.addEventListener("submit", async function (e) {
          e.preventDefault();

          formStatus.classList.remove(
            "hidden",
            "bg-red-100",
            "text-red-800",
            "bg-green-100",
            "text-green-800"
          );
          formStatus.classList.add("bg-yellow-100", "text-yellow-800");
          formStatus.innerHTML = "Mengirim pesan...";

          const formData = new FormData(contactForm);

          try {
            const response = await fetch("{{ route('kontak.submit') }}", {
              method: "POST",
              headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                'Accept': 'application/json',
              },
              body: formData,
            });

            const result = await response.json();

            if (response.ok) {
              formStatus.classList.remove("bg-yellow-100", "text-yellow-800");
              formStatus.classList.add("bg-green-100", "text-green-800");
              formStatus.innerHTML = result.message;
              contactForm.reset();
              grecaptcha.reset();
            } else {
              formStatus.classList.remove("bg-yellow-100", "text-yellow-800");
              formStatus.classList.add("bg-red-100", "text-red-800");
              formStatus.innerHTML = result.message || 'Terjadi kesalahan.';
              grecaptcha.reset();
            }
          } catch (error) {
            formStatus.innerHTML =
              "Terjadi kesalahan jaringan. Silakan coba lagi nanti.";
            formStatus.classList.remove(
              "bg-yellow-100",
              "text-yellow-800"
            );
            formStatus.classList.add("bg-red-100", "text-red-800");
          }
        });
      }
    });
</script>
@endpush