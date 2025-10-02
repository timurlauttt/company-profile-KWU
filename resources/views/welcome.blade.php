@extends('layouts.app')
@section('title', 'Beranda')
@section('content')
    <!-- Bagian Hero -->
    <section class="relative h-[70vh] bg-white bg-cover bg-center flex items-center justify-center text-center p-4">
        <div class="container mx-auto">
            <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold mb-4 leading-tight">Kelompok 4 KWU FT-07-A</h1>
            <p class="text-base sm:text-lg md:text-xl mb-6 max-w-3xl mx-auto">Technology Solution Provider &amp;
                Enterprise IT Partner — one-stop solution untuk UMKM, retail, F&amp;B, perusahaan menengah, dan instansi.
            </p>
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
        <div class="max-w-5xl text-center mx-auto px-4">
            <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-[var(--dark)] mb-6">Identitas Perusahaan</h2>
            <div class="grid text-start md:grid-cols-2 gap-6">
                <div class="bg-[var(--light)] p-6 rounded-lg shadow-sm">
                    <h3 class="font-semibold text-base sm:text-lg mb-2">Jenis Perusahaan</h3>
                    <p>Software House + SaaS Provider + IT Solution Partner (One-stop-solution: software, SaaS,
                        hardware).</p>

                </div>

                <div class="bg-[var(--light)] p-6 rounded-lg shadow-sm">
                    <h3 class="font-semibold text-base sm:text-lg mb-2">Model Bisnis</h3>
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
        <div class="text-center mb-8">
            <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold   text-[var(--dark)] mb-8">Visi &amp; Misi</h2>
        </div>
        <div class="grid md:grid-cols-2 gap-8">
            <div class="bg-[var(--light)] p-8 rounded-xl shadow-lg card-hover border border-gray-100">
                <h3 class="text-xl sm:text-2xl font-semibold text-[var(--dark)] mb-4">Visi</h3>
                <p class="text-gray-700 leading-relaxed text-lg">Menjadi penyedia solusi digital terintegrasi bagi
                    UMKM dan bisnis menengah di Indonesia pada tahun 2030, melalui layanan perangkat lunak berbasis
                    langganan dan dukungan infrastruktur yang terpercaya.</p>
            </div>

            <div class="bg-[var(--light)] p-8 rounded-xl shadow-lg card-hover border border-gray-100">
                <h3 class="text-xl sm:text-2xl font-semibold text-[var(--dark)] mb-4">Misi</h3>
                <ul class="list-disc pl-5 space-y-3 text-gray-700">
                    <li>Mengembangkan layanan perangkat lunak berbasis langganan (SaaS) yang inovatif, mudah digunakan,
                        dan scalable.</li>
                    <li>Menyediakan solusi digital terintegrasi dengan dukungan perangkat keras yang fleksibel (sewa
                        atau
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

    <!-- Bagian Produk & Layanan -->
    <section id="produk" class="py-16 px-4 max-w-6xl mx-auto bg-white">
        <div class="text-center mb-12">
            <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-[var(--dark)]  ">Contoh Produk &amp; Layanan</h2>
            <p class="text-gray-600 mt-4 max-w-2xl mx-auto">Solusi yang kami tawarkan untuk bisnis Anda.</p>
        </div>
        <div class="grid md:grid-cols-3 gap-6">
            <div class="bg-white rounded-xl shadow-md overflow-hidden card-hover border border-gray-100 p-6">
                <h3 class="text-lg sm:text-xl font-semibold mb-3 text-[var(--dark)]">Produk SaaS</h3>
                <ul class="list-disc pl-5 text-gray-700 space-y-2">
                    <li>POS (retail &amp; F&amp;B)</li>
                    <li>Absensi + Payroll</li>
                    <li>ERP Mini (stok, keuangan, HR)</li>
                    <li>Digital signage management</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-md overflow-hidden card-hover border border-gray-100 p-6">
                <h3 class="text-lg sm:text-xl font-semibold mb-3 text-[var(--dark)]">Layanan Custom</h3>
                <ul class="list-disc pl-5 text-gray-700 space-y-2">
                    <li>Sistem informasi perusahaan/instansi</li>
                    <li>Aplikasi mobile</li>
                    <li>Integrasi API</li>
                    <li>Dashboard analitik</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-md overflow-hidden card-hover border border-gray-100 p-6">
                <h3 class="text-lg sm:text-xl font-semibold mb-3 text-[var(--dark)]">Bundling & Hardware</h3>
                <ul class="list-disc pl-5 text-gray-700 space-y-2">
                    <li>POS + tablet + printer (sewa / beli)</li>
                    <li>Absensi + fingerprint / face recognition device</li>
                    <li>Digital signage + TV/monitor</li>
                </ul>
            </div>

        </div>
        <div class="text-center mt-10">
            <a href="#kontak"
                class="inline-flex items-center px-6 py-3 bg-[var(--primary)] text-white rounded-full font-semibold hover:bg-[var(--dark)] transition shadow-lg">
                Hubungi Tim Sales
            </a>
        </div>
    </section>

    <!-- Bagian Nilai Tambah (USP) -->
    <section id="usp" class="py-16 px-4 bg-gray-50 max-w-6xl mx-auto">
        <div class="text-center mb-12">
            <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-[var(--dark)]  ">Nilai Tambah (Unique Selling Point)</h2>
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

    <!-- Bagian Struktur Divisi -->
    <section id="struktur" class="py-16 px-4 bg-gray-50 max-w-6xl mx-auto">
        <div class="text-center mb-12">
            <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-[var(--dark)]  ">Struktur Divisi &amp; Departemen</h2>
            <p class="text-gray-600 mt-4 max-w-2xl mx-auto">Pembagian divisi yang dirancang untuk layanan profesional
                dan skala perusahaan.</p>
        </div>
        <div class="grid md:grid-cols-2 gap-6">
            <div class="bg-white p-6 rounded-lg shadow-sm">
                <h4 class="font-semibold text-base sm:text-lg mb-2">Divisi Riset &amp; Pengembangan (R&D / Product Development)</h4>
                <p class="text-gray-700">Fokus: membangun dan mengembangkan produk SaaS (POS, Absensi, ERP
                    mini). Tim: software engineer, UI/UX designer, QA tester.</p>
            </div>

            <div class="bg-white p-6 rounded-lg shadow-sm">
                <h4 class="font-semibold text-base sm:text-lg mb-2">Divisi Proyek &amp; Implementasi (Project &amp; Solutions)</h4>
                <p class="text-gray-700">Fokus: menerima project custom. Tim: project manager, developer, system
                    analyst.</p>
            </div>

            <div class="bg-white p-6 rounded-lg shadow-sm">
                <h4 class="font-semibold text-base sm:text-lg mb-2">Divisi Infrastruktur &amp; Hardware</h4>
                <p class="text-gray-700">Fokus: penyediaan perangkat (tablet, printer, server). Model: sewa, jual,
                    bundling. Tim: teknisi IT, procurement.</p>
            </div>

            <div class="bg-white p-6 rounded-lg shadow-sm">
                <h4 class="font-semibold text-base sm:text-lg mb-2">Divisi Layanan &amp; Support (Customer Success)</h4>
                <p class="text-gray-700">Fokus: support 24/7, maintenance, SLA, training user. Tim: helpdesk,
                    technical support, trainer.</p>
            </div>

            <div class="bg-white p-6 rounded-lg shadow-sm">
                <h4 class="font-semibold text-base sm:text-lg mb-2">Divisi Bisnis &amp; Kemitraan (Business Development)</h4>
                <p class="text-gray-700">Fokus: mencari klien, membangun kemitraan (distributor hardware,
                    vendor cloud). Tim: sales, marketing, account manager.</p>
            </div>

            <div class="bg-white p-6 rounded-lg shadow-sm">
                <h4 class="font-semibold text-base sm:text-lg mb-2">Divisi Keuangan &amp; Administrasi</h4>
                <p class="text-gray-700">Fokus: keuangan, billing SaaS (subscription), invoice proyek.</p>
            </div>

            <div class="bg-white p-6 rounded-lg shadow-sm">
                <h4 class="font-semibold text-base sm:text-lg mb-2">Divisi SDM &amp; Manajemen Internal</h4>
                <p class="text-gray-700">Fokus: perekrutan, pelatihan, dan pengembangan tim internal.</p>
            </div>
        </div>
    </section>

    <!-- Bagian Pricing -->
    <section id="pricing" class="py-16 px-4 bg-white">
        <div class="max-w-6xl text-center mx-auto">
            <div class="mb-8">
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-[var(--dark)]">Pricing & Model Bisnis</h2>
                <p class="text-gray-600 mt-2">Ringkasan harga dan model untuk project custom, SaaS, dan bundling
                    hardware.</p>
            </div>

            <div class="grid sm:grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Project Custom Card -->
                <div
                    class="relative bg-white rounded-xl shadow-sm overflow-hidden border border-gray-100 card-hover transform transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl flex flex-col">
                    <div class="p-6 flex-1">
                        <span
                            class="inline-block px-3 py-1 bg-[var(--accent)] text-[var(--dark)] text-xs font-semibold rounded-full">Jual
                            Putus</span>
                        <h3 class="text-xl sm:text-2xl font-bold text-[var(--dark)] mt-4">Proyek Custom</h3>
                        <p class="text-gray-600 mt-2">Solusi tailor-made, website compro, aplikasi, integrasi sistem
                            sesuai kebutuhan.</p>

                        <div class="mt-6 space-y-3 text-gray-700">
                            <div class="flex items-center justify-between">
                                <div>
                                    <div class="text-sm text-gray-500">Website Compro</div>
                                    <div class="text-sm text-gray-400">(custom theme & content)</div>
                                </div>
                                <div class="text-xl font-semibold text-[var(--dark)]">Rp1.000.000</div>
                            </div>

                            <div class="flex items-center justify-between text-sm text-gray-500">
                                <div>Hosting + domain</div>
                                <div>Rp50.000 / bln</div>
                            </div>
                        </div>
                    </div>
                    <div class="border-t border-gray-100 bg-gray-50 p-4">
                        <div class="text-sm text-gray-600 text-center mb-3">Estimate delivery: 2-6 minggu</div>
                        <div class="flex justify-center">
                            <a href="#kontak"
                                class="inline-flex items-center px-4 py-2 bg-[var(--primary)] text-white rounded-lg text-sm font-medium hover:bg-[var(--dark)] transition">Request
                                Quote</a>
                        </div>
                    </div>
                </div>

                <!-- SaaS Subscription Card -->
                <div
                    class="relative bg-white rounded-xl shadow-sm overflow-hidden border border-gray-100 card-hover transform transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl flex flex-col">
                    <div class="p-6 flex-1">
                        <span
                            class="inline-block px-3 py-1 bg-[var(--accent)] text-[var(--dark)] text-xs font-semibold rounded-full">Langganan</span>
                        <h3 class="text-xl sm:text-2xl font-bold text-[var(--dark)] mt-4">SaaS Subscription</h3>
                        <p class="text-gray-600 mt-2">Produk SaaS siap pakai untuk operasional harian dan manajemen
                            bisnis.</p>

                        <div class="mt-6 grid gap-3 text-gray-700">
                            <div class="flex items-center justify-between py-2 border rounded-md px-3">
                                <div>
                                    <div class="font-medium">POS</div>
                                    <div class="text-sm text-gray-500">Retail & F&B</div>
                                </div>
                                <div class="text-sm font-semibold">Rp100.000 / bln</div>
                            </div>

                            <div class="flex items-center justify-between py-2 border rounded-md px-3">
                                <div>
                                    <div class="font-medium">Website Booking</div>
                                    <div class="text-sm text-gray-500">Reservasi & booking online</div>
                                </div>
                                <div class="text-sm font-semibold">Rp150.000 / bln</div>
                            </div>

                            <div class="flex items-center justify-between py-2 border rounded-md px-3">
                                <div>
                                    <div class="font-medium">Absensi</div>
                                    <div class="text-sm text-gray-500">Hingga 20 pengguna</div>
                                </div>
                                <div class="text-sm font-semibold">Rp100.000 / bln</div>
                            </div>

                            <div class="flex items-center justify-between py-2 border rounded-md px-3">
                                <div>
                                    <div class="font-medium">ERP Mini</div>
                                    <div class="text-sm text-gray-500">Per divisi</div>
                                </div>
                                <div class="text-sm font-semibold">Rp1.000.000 / bln</div>
                            </div>
                        </div>
                    </div>
                    <div class="border-t border-gray-100 bg-gray-50 p-4">
                        <div class="text-sm text-gray-600 text-center mb-3">Mulai tanpa komitmen, cancel kapan saja</div>
                        <div class="flex justify-center">
                            <a href="#kontak"
                                class="inline-flex items-center px-4 py-2 bg-[var(--secondary)] text-white rounded-lg text-sm font-medium hover:bg-red-700 transition">Daftar
                                Trial</a>
                        </div>
                    </div>
                </div>

                <!-- Hardware Bundling Card -->
                <div
                    class="relative bg-white rounded-xl shadow-sm overflow-hidden border border-gray-100 card-hover transform transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl flex flex-col">
                    <div class="p-6 flex-1">
                        <span
                            class="inline-block px-3 py-1 bg-[var(--accent)] text-[var(--dark)] text-xs font-semibold rounded-full">Bundling</span>
                        <h3 class="text-xl sm:text-2xl font-bold text-[var(--dark)] mt-4">Hardware & Bundling</h3>
                        <p class="text-gray-600 mt-2">Perangkat untuk operasional — paket sewa atau beli, custom bundle
                            sesuai kebutuhan.</p>

                        <ul class="mt-6 space-y-3 text-gray-700">
                            <li class="flex items-start justify-between">
                                <div>
                                    <div class="font-medium">Printer</div>
                                    <div class="text-sm text-gray-500">Thermal / Inkjet</div>
                                </div>
                                <div class="text-sm font-semibold">Tergantung model</div>
                            </li>
                            <li class="flex items-start justify-between">
                                <div>
                                    <div class="font-medium">Tablet / POS Terminal</div>
                                    <div class="text-sm text-gray-500">Android / iOS</div>
                                </div>
                                <div class="text-sm font-semibold">Tergantung spesifikasi</div>
                            </li>
                            <li class="flex items-start justify-between">
                                <div>
                                    <div class="font-medium">PC / Server</div>
                                    <div class="text-sm text-gray-500">Desktop / Small Server</div>
                                </div>
                                <div class="text-sm font-semibold">Tergantung spesifikasi</div>
                            </li>
                        </ul>
                    </div>
                    <div class="border-t border-gray-100 bg-gray-50 p-4">
                        <div class="text-sm text-gray-600 text-center mb-3">Penawaran bundling & sewa tersedia</div>
                        <div class="flex justify-center">
                            <a href="#kontak"
                                class="inline-flex items-center px-4 py-2 bg-[var(--primary)] text-white rounded-lg text-sm font-medium hover:bg-[var(--dark)] transition">Minta
                                Penawaran</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bagian Kontak -->
    <section id="kontak" class="py-16 px-4 bg-white">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold mb-6 leading-tight">Hubungi Kelompok 4 KWU FT-07-A</h2>
            <p class="text-base sm:text-lg md:text-xl mb-8 max-w-2xl mx-auto">Tertarik berdiskusi atau meminta demo? Hubungi kami
                melalui saluran berikut.</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="mailto:info@kelompok-kwu.id"
                    class="bg-[var(--primary)] text-white px-6 py-3 rounded-full font-semibold hover:bg-[var(--dark)] transition shadow-lg">Email
                    Kami</a>
                <a href="#" target="_blank"
                    class="bg-transparent border-2 border-[var(--primary)] text-[var(--primary)] px-6 py-3 rounded-full font-semibold hover:bg-[var(--primary)] hover:text-white transition shadow-lg flex items-center justify-center">
                    <i class="fab fa-whatsapp mr-2"></i>
                    Chat Sales
                </a>
            </div>
            <div class="mt-6 text-gray-600">
                <p>Alamat: Jl. Dulu Aja Siapa Tau Cocok</p>
                <p>Telepon: 0812-3456-7890</p>
            </div>
        </div>
    </section>
@endsection
