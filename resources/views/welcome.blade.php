<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Kelompok KWU - Technology Solution Provider</title>
    <!-- Favicon - menggunakan gambar placeholder untuk demonstrasi -->
    <link rel="icon" href="{{ asset('images/logoup45.png') }}">
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome untuk ikon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Import font Poppins dari Google Fonts */
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap');

        /* Variabel CSS kustom untuk palet warna yang konsisten */
        :root {
            --primary: #017abf;
            /* Oranye Cerah (warna utama baru) */
            --secondary: #d7241d;
            /* Biru Terang (pelengkap) */
            --accent: #E0EBF5;
            /* Biru Sangat Muda (aksen lembut) */
            --dark: #2C3E50;
            /* Biru Slate Gelap (kontras) */
            --light: #F8F9FA;
            /* Putih Pudar (latar belakang terang) */
        }

        /* Terapkan font Poppins ke body */
        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--light);
            /* Menggunakan variabel light */
        }

        /* Latar belakang gradien kustom untuk bagian-bagian tertentu */
        .gradient-bg {
            background: linear-gradient(135deg, var(--primary) 0%, var(--dark) 100%);
        }

        /* Efek hover kartu untuk interaksi halus */
        .card-hover {
            transition: all 0.3s ease;
        }

        .card-hover:hover {
            transform: translateY(-5px);
            /* Angkat kartu saat di-hover */
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
            /* Bayangan yang ditingkatkan */
        }

        /* Animasi garis bawah tautan navigasi */
        .nav-link {
            position: relative;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -2px;
            left: 0;
            background-color: white;
            transition: width 0.3s ease;
        }

        .nav-link:hover::after {
            width: 100%;
        }

        /* Bayangan teks untuk judul bagian hero */
        .hero-text {
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        /* Efek garis bawah untuk judul bagian */
        .section-title {
            position: relative;
            display: inline-block;
        }

        .section-title::after {
            content: '';
            position: absolute;
            width: 50%;
            height: 4px;
            bottom: -8px;
            left: 25%;
            background: var(--primary);
            /* Menggunakan warna utama baru */
            border-radius: 2px;
        }

        /* Efek zoom gambar item galeri */
        .gallery-item {
            transition: all 0.3s ease;
            overflow: hidden;
        }

        .gallery-item img {
            transition: transform 0.5s ease;
        }

        .gallery-item:hover img {
            transform: scale(1.05);
            /* Zoom gambar saat di-hover */
        }

        /* Penempatan dan gaya badge tanggal berita */
        .news-date {
            position: absolute;
            top: 10px;
            left: 10px;
            background: var(--primary);
            /* Menggunakan warna utama baru */
            color: white;
            padding: 5px 10px;
            border-radius: 4px;
            font-size: 0.8rem;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        /* Gaya tombol aksi mengambang */
        .floating-btn {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: var(--primary);
            /* Menggunakan warna utama baru */
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease;
            z-index: 100;
        }

        .floating-btn:hover {
            transform: scale(1.1);
            /* Perbesar tombol saat di-hover */
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.3);
        }
    </style>
</head>

<body class="bg-gray-50">

    <!-- Tombol Aksi Mengambang (Login) -->
    <a href="#" class="floating-btn" title="Login" style="bottom: 100px;">
        <i class="fas fa-user-lock text-xl"></i>
    </a>

    <!-- Tombol Refresh CMS Cache (untuk development) -->
    @if (config('app.debug'))
        <button onclick="window.refreshCMSData()" class="floating-btn" title="Refresh CMS Data"
            style="bottom: 30px; background: #e74c3c;">
            <i class="fas fa-sync-alt text-xl"></i>
        </button>
    @endif

    <!-- Navbar -->
    <header class="gradient-bg shadow-lg sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 py-3 flex justify-between items-center">
                <div class="flex items-center gap-4">
                    <!-- Logo Company -->
                    <img src="{{ asset('images/logo-kwu.png') }}" onerror="this.src='{{ asset('images/logoup45.png') }}'"
                        class="w-12 h-12 rounded-full object-cover" alt="Logo Kelompok KWU">
                    <div>
                        <span class="font-bold text-white text-xl block">Kelompok KWU</span>
                        <span class="text-sm text-white block">Technology Solution Provider</span>
                    </div>
                </div>

            <!-- Tautan Navigasi Desktop -->
                <nav class="hidden md:flex space-x-6 items-center">
                    <a href="#about" class="nav-link text-white text-sm uppercase font-medium">About</a>
                    <a href="#visi" class="nav-link text-white text-sm uppercase font-medium">Visi & Misi</a>
                    <a href="#struktur" class="nav-link text-white text-sm uppercase font-medium">Struktur</a>
                    <a href="#produk" class="nav-link text-white text-sm uppercase font-medium">Produk & Layanan</a>
                    <a href="#kontak" class="nav-link text-white text-sm uppercase font-medium">Kontak</a>
                    <a href="#"
                        class="bg-white text-[var(--primary)] px-4 py-2 rounded-full font-semibold hover:bg-gray-100 transition">Client
                        Portal</a>
                </nav>

            <!-- Tombol Menu Seluler (Ikon Hamburger) -->
            <button id="mobile-menu-button" class="md:hidden text-white text-2xl focus:outline-none">
                <i class="fas fa-bars"></i>
            </button>
        </div>

        <!-- Menu Navigasi Seluler (Tersembunyi secara default) -->
        <div id="mobile-menu" class="hidden md:hidden bg-[var(--dark)] py-4">
            <nav class="flex flex-col items-center space-y-4">
                <a href="#about"
                    class="nav-link text-white text-base uppercase font-medium w-full text-center py-2 hover:bg-[var(--primary)] transition">About</a>
                <a href="#visi"
                    class="nav-link text-white text-base uppercase font-medium w-full text-center py-2 hover:bg-[var(--primary)] transition">Visi & Misi</a>
                <a href="#struktur"
                    class="nav-link text-white text-base uppercase font-medium w-full text-center py-2 hover:bg-[var(--primary)] transition">Struktur</a>
                <a href="#produk"
                    class="nav-link text-white text-base uppercase font-medium w-full text-center py-2 hover:bg-[var(--primary)] transition">Produk & Layanan</a>
                <a href="#kontak"
                    class="nav-link text-white text-base uppercase font-medium w-full text-center py-2 hover:bg-[var(--primary)] transition">Kontak</a>
                <a href="#"
                    class="bg-white text-[var(--primary)] px-6 py-2 rounded-full font-semibold hover:bg-gray-100 transition mt-4">Client Portal</a>
            </nav>
        </div>
    </header>

    <!-- Bagian Hero -->
    <section class="relative h-[70vh] bg-cover bg-center flex items-center justify-center text-center p-4"
        style="background-image: linear-gradient(135deg, rgba(1,122,191,0.9), rgba(44,62,80,0.9));">
        <div class="container mx-auto">
            <h1 class="hero-text text-4xl md:text-5xl font-bold mb-4 text-white leading-tight">Kelompok KWU</h1>
            <p class="text-lg md:text-xl text-gray-100 mb-6 max-w-3xl mx-auto">Technology Solution Provider &amp;
                Enterprise IT Partner — one-stop solution untuk UMKM, retail, F&B, perusahaan menengah, dan
                instansi.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="#produk"
                    class="bg-white text-[var(--primary)] px-6 py-3 rounded-full font-semibold hover:bg-gray-100 transition shadow-lg">Produk
                    & Layanan</a>
                <a href="#kontak"
                    class="bg-transparent border-2 border-white text-white px-6 py-3 rounded-full font-semibold hover:bg-white hover:text-[var(--primary)] transition shadow-lg">Hubungi
                    Kami</a>
            </div>
        </div>

        <!-- Indikator Gulir Ke Bawah -->
        <div class="absolute bottom-0 left-0 right-0 flex justify-center pb-4">
            <a href="#about" class="text-white animate-bounce">
                <i class="fas fa-chevron-down text-2xl"></i>
            </a>
        </div>
    </section>

    <!-- Bagian About / Identitas Perusahaan -->
    <section id="about" class="py-12 bg-white">
        <div class="max-w-5xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-[var(--dark)] mb-6">Identitas Perusahaan</h2>
            <div class="grid md:grid-cols-2 gap-6">
                <div class="bg-[var(--light)] p-6 rounded-lg shadow-sm">
                    <h3 class="font-semibold text-lg mb-2">Jenis Perusahaan</h3>
                    <p>Software House + SaaS Provider + IT Solution Partner (One-stop-solution: software, SaaS,
                        hardware).</p>

                    <h3 class="font-semibold text-lg mt-4 mb-2">Segmen Pasar</h3>
                    <p>UMKM, retail, restoran &amp; kafe (F&amp;B), perusahaan menengah, instansi, hingga proyek
                        enterprise.</p>
                </div>

                <div class="bg-[var(--light)] p-6 rounded-lg shadow-sm">
                    <h3 class="font-semibold text-lg mb-2">Model Bisnis</h3>
                    <ul class="list-disc pl-5 space-y-2 text-gray-700">
                        <li>Proyek kustom (custom software, website, aplikasi, sistem informasi).</li>
                        <li>Produk SaaS (POS, Absensi, Payroll, ERP ringan, dsb).</li>
                        <li>Bundling software + hardware (tablet, printer, smart mobile POS, server kecil) — sewa
                            atau beli.</li>
                        <li>Maintenance &amp; support berlangganan (after-sales &amp; SLA).</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Bagian Visi & Misi -->
    <section id="visi" class="py-16 px-4 max-w-5xl mx-auto bg-white">
        <h2 class="text-3xl font-bold text-center text-[var(--dark)] mb-8">Visi &amp; Misi</h2>

        <div class="grid md:grid-cols-2 gap-8">
            <div class="bg-[var(--light)] p-8 rounded-xl shadow-lg card-hover border border-gray-100">
                <h3 class="text-2xl font-semibold text-[var(--dark)] mb-4">Visi</h3>
                <p class="text-gray-700 leading-relaxed text-lg">Menjadi penyedia solusi digital terintegrasi bagi
                    UMKM dan bisnis menengah di Indonesia pada tahun 2030, melalui layanan perangkat lunak berbasis
                    langganan dan dukungan infrastruktur yang terpercaya.</p>
            </div>

            <div class="bg-[var(--light)] p-8 rounded-xl shadow-lg card-hover border border-gray-100">
                <h3 class="text-2xl font-semibold text-[var(--dark)] mb-4">Misi</h3>
                <ul class="list-disc pl-5 space-y-3 text-gray-700">
                    <li>Mengembangkan layanan perangkat lunak berbasis langganan (SaaS) yang inovatif, mudah digunakan,
                        dan scalable.</li>
                    <li>Menyediakan solusi digital terintegrasi dengan dukungan perangkat keras yang fleksibel (sewa atau
                        beli).</li>
                    <li>Memberikan layanan purna jual, pelatihan, dan support berkelanjutan agar klien merasa aman dan
                        terbantu.</li>
                    <li>Menjadi mitra transformasi digital bagi UMKM dan bisnis menengah di Indonesia.</li>
                    <li>Berkontribusi pada percepatan digitalisasi nasional melalui solusi teknologi yang terjangkau dan
                        berkelanjutan.</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Bagian Struktur Divisi -->
    <section id="struktur" class="py-16 px-4 bg-gray-50 max-w-6xl mx-auto">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-[var(--dark)] section-title">Struktur Divisi &amp; Departemen</h2>
            <p class="text-gray-600 mt-4 max-w-2xl mx-auto">Pembagian divisi yang dirancang untuk layanan profesional
                dan skala perusahaan.</p>
        </div>
        <div class="grid md:grid-cols-2 gap-6">
            <div class="bg-white p-6 rounded-lg shadow-sm">
                <h4 class="font-semibold mb-2">Divisi Riset &amp; Pengembangan (R&D / Product Development)</h4>
                <p class="text-gray-700">Fokus: membangun dan mengembangkan produk SaaS (POS, Absensi, ERP
                    mini). Tim: software engineer, UI/UX designer, QA tester.</p>
            </div>

            <div class="bg-white p-6 rounded-lg shadow-sm">
                <h4 class="font-semibold mb-2">Divisi Proyek &amp; Implementasi (Project &amp; Solutions)</h4>
                <p class="text-gray-700">Fokus: menerima project custom. Tim: project manager, developer, system
                    analyst.</p>
            </div>

            <div class="bg-white p-6 rounded-lg shadow-sm">
                <h4 class="font-semibold mb-2">Divisi Infrastruktur &amp; Hardware</h4>
                <p class="text-gray-700">Fokus: penyediaan perangkat (tablet, printer, server). Model: sewa, jual,
                    bundling. Tim: teknisi IT, procurement.</p>
            </div>

            <div class="bg-white p-6 rounded-lg shadow-sm">
                <h4 class="font-semibold mb-2">Divisi Layanan &amp; Support (Customer Success)</h4>
                <p class="text-gray-700">Fokus: support 24/7, maintenance, SLA, training user. Tim: helpdesk,
                    technical support, trainer.</p>
            </div>

            <div class="bg-white p-6 rounded-lg shadow-sm">
                <h4 class="font-semibold mb-2">Divisi Bisnis &amp; Kemitraan (Business Development)</h4>
                <p class="text-gray-700">Fokus: mencari klien, membangun kemitraan (distributor hardware,
                    vendor cloud). Tim: sales, marketing, account manager.</p>
            </div>

            <div class="bg-white p-6 rounded-lg shadow-sm">
                <h4 class="font-semibold mb-2">Divisi Keuangan &amp; Administrasi</h4>
                <p class="text-gray-700">Fokus: keuangan, billing SaaS (subscription), invoice proyek.</p>
            </div>

            <div class="bg-white p-6 rounded-lg shadow-sm">
                <h4 class="font-semibold mb-2">Divisi SDM &amp; Manajemen Internal</h4>
                <p class="text-gray-700">Fokus: perekrutan, pelatihan, dan pengembangan tim internal.</p>
            </div>
        </div>
    </section>

    <!-- Bagian Produk & Layanan -->
    <section id="produk" class="py-16 px-4 max-w-6xl mx-auto bg-white">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-[var(--dark)] section-title">Contoh Produk &amp; Layanan</h2>
            <p class="text-gray-600 mt-4 max-w-2xl mx-auto">Solusi yang kami tawarkan untuk bisnis Anda.</p>
        </div>
        <div class="grid md:grid-cols-3 gap-6">
            <div class="bg-white rounded-xl shadow-md overflow-hidden card-hover border border-gray-100 p-6">
                <h3 class="text-xl font-semibold mb-3 text-[var(--dark)]">Produk SaaS</h3>
                <ul class="list-disc pl-5 text-gray-700 space-y-2">
                    <li>POS (retail &amp; F&amp;B)</li>
                    <li>Absensi + Payroll</li>
                    <li>ERP Mini (stok, keuangan, HR)</li>
                    <li>Digital signage management</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-md overflow-hidden card-hover border border-gray-100 p-6">
                <h3 class="text-xl font-semibold mb-3 text-[var(--dark)]">Layanan Custom</h3>
                <ul class="list-disc pl-5 text-gray-700 space-y-2">
                    <li>Sistem informasi perusahaan/instansi</li>
                    <li>Aplikasi mobile</li>
                    <li>Integrasi API</li>
                    <li>Dashboard analitik</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-md overflow-hidden card-hover border border-gray-100 p-6">
                <h3 class="text-xl font-semibold mb-3 text-[var(--dark)]">Bundling & Hardware</h3>
                <ul class="list-disc pl-5 text-gray-700 space-y-2">
                    <li>POS + tablet + printer (sewa / beli)</li>
                    <li>Absensi + fingerprint / face recognition device</li>
                    <li>Digital signage + TV/monitor</li>
                </ul>
            </div>

        </div>
        <div class="text-center mt-10">
            <a href="#kontak" class="inline-flex items-center px-6 py-3 bg-[var(--primary)] text-white rounded-full font-semibold hover:bg-[var(--dark)] transition shadow-lg">
                Hubungi Tim Sales
            </a>
        </div>
    </section>

    <!-- Bagian Nilai Tambah (USP) -->
    <section id="usp" class="py-16 px-4 bg-gray-50 max-w-6xl mx-auto">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-[var(--dark)] section-title">Nilai Tambah (Unique Selling Point)</h2>
            <p class="text-gray-600 mt-4 max-w-2xl mx-auto">Keunggulan layanan kami sebagai mitra teknologi.</p>
        </div>
        <div class="grid md:grid-cols-3 gap-6">
            <div class="bg-white p-6 rounded-lg shadow-sm">
                <h4 class="font-semibold mb-2">One-stop solution</h4>
                <p class="text-gray-700">Software + hardware + support dalam satu paket yang terintegrasi.</p>
            </div>

            <div class="bg-white p-6 rounded-lg shadow-sm">
                <h4 class="font-semibold mb-2">Flexible model</h4>
                <p class="text-gray-700">Model beli putus, sewa, atau langganan (SaaS).</p>
            </div>

            <div class="bg-white p-6 rounded-lg shadow-sm">
                <h4 class="font-semibold mb-2">After-sales kuat</h4>
                <p class="text-gray-700">Support, training, dan SLA untuk memastikan keberlangsungan operasional
                    klien.</p>
            </div>
        </div>
    </section>

    <!-- Bagian Kontak -->
    <section id="kontak" class="py-16 px-4 bg-white">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-6 leading-tight">Hubungi Kelompok KWU</h2>
            <p class="text-lg md:text-xl mb-8 max-w-2xl mx-auto">Tertarik berdiskusi atau meminta demo? Hubungi kami
                melalui saluran berikut.</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="mailto:info@kelompok-kwu.id" class="bg-[var(--primary)] text-white px-6 py-3 rounded-full font-semibold hover:bg-[var(--dark)] transition shadow-lg">Email
                    Kami</a>
                <a href="#" target="_blank" class="bg-transparent border-2 border-[var(--primary)] text-[var(--primary)] px-6 py-3 rounded-full font-semibold hover:bg-[var(--primary)] hover:text-white transition shadow-lg flex items-center justify-center">
                    <i class="fab fa-whatsapp mr-2"></i>
                    Chat Sales
                </a>
            </div>
            <div class="mt-6 text-gray-600">
                <p>Alamat: Jl. Contoh No.123, Yogyakarta</p>
                <p>Telepon: 0812-3456-7890</p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-[var(--dark)] text-white py-12">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid md:grid-cols-4 gap-8 mb-8">
                <div>
                    <div class="flex items-center mb-4">
                        <img src="{{ asset('images/logo-kwu.png') }}" onerror="this.src='{{ asset('images/logoup45.png') }}'"
                            class="w-12 h-12 rounded-full mr-3 object-cover" alt="Logo Kelompok KWU">
                        <span class="font-bold text-xl">Kelompok KWU</span>
                    </div>
                    <p class="text-gray-300 text-sm leading-relaxed">Penyedia solusi teknologi terintegrasi untuk
                        UMKM dan bisnis menengah: software, SaaS, hardware, dan layanan implementasi serta support.</p>
                </div>

                <div>
                    <h3 class="text-lg font-semibold mb-4">Tautan Cepat</h3>
                    <ul class="space-y-2">
                        <li><a href="#produk" class="text-gray-300 hover:text-white transition">Produk & Layanan</a>
                        </li>
                        <li><a href="#usp" class="text-gray-300 hover:text-white transition">Nilai Tambah (USP)</a>
                        </li>
                        <li><a href="#kontak" class="text-gray-300 hover:text-white transition">Hubungi Kami</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white transition">Demo & Pricing</a>
                        </li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-lg font-semibold mb-4">Kontak</h3>
                    <ul class="space-y-2 text-gray-300">
                        <li class="flex items-start">
                            <i class="fas fa-map-marker-alt mt-1 mr-3 text-[var(--accent)] flex-shrink-0"></i>
                            <span>Jl. Contoh No.123, Yogyakarta</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-phone-alt mt-1 mr-3 text-[var(--accent)] flex-shrink-0"></i>
                            <a href="tel:081234567890" class="hover:text-white transition">
                                0812-3456-7890
                            </a>
                        </li>
                        <li class="flex items-start">
                            <i class="fab fa-whatsapp mt-1 mr-3 text-[var(--accent)] flex-shrink-0"></i>
                            <a href="#" target="_blank" class="hover:text-white transition">
                                Chat Sales
                            </a>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-envelope mt-1 mr-3 text-[var(--accent)] flex-shrink-0"></i>
                            <a href="mailto:info@kelompok-kwu.id" class="hover:text-white transition">
                                info@kelompok-kwu.id
                            </a>
                        </li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-lg font-semibold mb-4">Media Sosial</h3>
                    <div class="flex space-x-4">
                        <a href="#" class="w-10 h-10 rounded-full bg-gray-700 hover:bg-[var(--primary)] transition flex items-center justify-center text-white text-xl" title="Facebook">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-gray-700 hover:bg-[var(--primary)] transition flex items-center justify-center text-white text-xl" title="Twitter">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-gray-700 hover:bg-[var(--primary)] transition flex items-center justify-center text-white text-xl" title="Instagram">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" target="_blank" class="w-10 h-10 rounded-full bg-gray-700 hover:bg-green-500 transition flex items-center justify-center text-white text-xl" title="WhatsApp">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-gray-700 hover:bg-[var(--primary)] transition flex items-center justify-center text-white text-xl" title="YouTube">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="border-t border-gray-700 pt-8 text-center text-gray-400 text-sm">
                <p>&copy; 2023 Universitas Proklamasi 45. All rights reserved.</p>
                @if (config('app.debug'))
                    <div class="mt-2 text-xs">
                        <span class="mr-4">CMS: </span>
                        <span class="mr-4">Last Refresh: </span>
                        <span>Auto-refresh: </span>
                    </div>
                @endif
            </div>
        </div>
    </footer>

    <script>
        // JavaScript untuk toggle menu seluler
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');

            if (mobileMenuButton && mobileMenu) {
                mobileMenuButton.addEventListener('click', function() {
                    mobileMenu.classList.toggle('hidden');
                    // Toggle ikon hamburger menjadi 'x' dan kembali
                    const icon = mobileMenuButton.querySelector('i');
                    if (mobileMenu.classList.contains('hidden')) {
                        icon.classList.remove('fa-times');
                        icon.classList.add('fa-bars');
                    } else {
                        icon.classList.remove('fa-bars');
                        icon.classList.add('fa-times');
                    }
                });

                // Tutup menu seluler saat tautan diklik
                mobileMenu.querySelectorAll('a').forEach(link => {
                    link.addEventListener('click', () => {
                        mobileMenu.classList.add('hidden');
                        mobileMenuButton.querySelector('i').classList.remove('fa-times');
                        mobileMenuButton.querySelector('i').classList.add('fa-bars');
                    });
                });
            }

            // Auto refresh CMS data setiap 5 menit (300000 ms)
            // Uncomment jika diperlukan auto-refresh
            /*
            setInterval(function() {
                refreshCMSDataAjax();
            }, 300000);
            */

            // AJAX refresh function
            window.refreshCMSDataAjax = function() {
                fetch('/api/cms/refresh', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.getAttribute(
                                'content') || ''
                        }
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            console.log('CMS data refreshed successfully');
                            // Tampilkan notifikasi sukses
                            showNotification('Data CMS berhasil direfresh!', 'success');
                            // Reload halaman setelah 1 detik
                            setTimeout(() => {
                                window.location.reload();
                            }, 1000);
                        } else {
                            console.error('Failed to refresh CMS data:', data.message);
                            showNotification('Gagal refresh data CMS: ' + data.message, 'error');
                        }
                    })
                    .catch(error => {
                        console.error('Error refreshing CMS data:', error);
                        showNotification('Error saat refresh data CMS', 'error');
                    });
            };

            // Manual refresh button (dapat ditambahkan ke navbar)
            window.refreshCMSData = function() {
                // Show loading indicator
                showNotification('Refreshing CMS data...', 'info');

                // Use AJAX first, fallback to URL refresh
                if (typeof refreshCMSDataAjax === 'function') {
                    refreshCMSDataAjax();
                } else {
                    window.location.href = window.location.href +
                        (window.location.href.includes('?') ? '&' : '?') +
                        'force_refresh=1';
                }
            };

            // Simple notification system
            window.showNotification = function(message, type = 'info') {
                // Remove existing notifications
                const existing = document.querySelector('.cms-notification');
                if (existing) {
                    existing.remove();
                }

                // Create notification element
                const notification = document.createElement('div');
                notification.className =
                    `cms-notification fixed top-4 right-4 z-50 px-4 py-2 rounded-lg shadow-lg text-white`;

                // Set background color based on type
                switch (type) {
                    case 'success':
                        notification.style.backgroundColor = '#10b981';
                        break;
                    case 'error':
                        notification.style.backgroundColor = '#ef4444';
                        break;
                    default:
                        notification.style.backgroundColor = '#3b82f6';
                }

                notification.textContent = message;
                document.body.appendChild(notification);

                // Remove after 3 seconds
                setTimeout(() => {
                    if (notification) {
                        notification.remove();
                    }
                }, 3000);
            };

            // Check CMS connectivity on page load (optional)
            fetch('/api/cms/status')
                .then(response => response.json())
                .then(data => {
                    if (!data.connected) {
                        showNotification('CMS tidak terhubung', 'error');
                    }
                })
                .catch(error => {
                    console.warn('Could not check CMS status:', error);
                });

            // Keyboard shortcut untuk refresh (Ctrl+Shift+R)
            document.addEventListener('keydown', function(e) {
                if (e.ctrlKey && e.shiftKey && e.key === 'R') {
                    e.preventDefault();
                    window.refreshCMSData();
                }
            });
        });
    </script>
</body>

</html>
