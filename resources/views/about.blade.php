@extends('layouts.app')
@section('title', 'Tentang Kami')
@section('content')

<section class="relative h-[90vh] bg-gradient-to-br from-[var(--primary)] via-[var(--secondary)] to-[var(--dark)] bg-cover bg-center flex items-center justify-center text-center p-4 overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-10 left-10 w-32 h-32 bg-white rounded-full animate-pulse"></div>
        <div class="absolute top-40 right-20 w-20 h-20 bg-white rounded-full animate-pulse delay-75"></div>
        <div class="absolute bottom-20 left-1/4 w-16 h-16 bg-white rounded-full animate-pulse delay-150"></div>
        <div class="absolute bottom-40 right-1/3 w-24 h-24 bg-white rounded-full animate-pulse delay-300"></div>
    </div>

    <!-- Tech Grid Background -->
    <div class="absolute inset-0 opacity-5">
        <div class="grid grid-cols-12 grid-rows-12 gap-4 h-full p-8">
            <div class="bg-white rounded"></div>
            <div class="bg-white rounded col-span-2"></div>
            <div class="bg-white rounded"></div>
            <div class="bg-white rounded row-span-2"></div>
            <div class="bg-white rounded col-span-3 row-span-2"></div>
            <div class="bg-white rounded"></div>
            <div class="bg-white rounded col-span-2"></div>
            <div class="bg-white rounded row-span-3"></div>
            <div class="bg-white rounded"></div>
            <div class="bg-white rounded col-span-2 row-span-2"></div>
        </div>
    </div>

    <div class="container mx-auto relative z-10">
        <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-6xl font-bold mb-6 leading-tight text-white hero-text">
            <span class="bg-gradient-animation">Tentang Kami</span>
        </h1>
        <p class="text-base sm:text-lg md:text-xl lg:text-2xl mb-8 max-w-4xl mx-auto text-white/90 font-light">
            <span class="font-normal text-[var(--accent)]">Perusahaan kami merupakan Software House, SaaS Provider, dan IT Solution Partner yang berfokus pada penyediaan solusi teknologi terintegrasi (one-stop solution) mencakup pengembangan software, layanan SaaS, serta penyediaan hardware pendukung. Model bisnis kami meliputi proyek kustom seperti pembuatan aplikasi, website, dan sistem informasi; produk SaaS siap pakai seperti POS, absensi, payroll, dan ERP ringan; serta paket bundling software dan hardware yang mencakup tablet, printer, smart mobile POS, hingga server kecil untuk mendukung transformasi digital bisnis secara menyeluruh.</span> &amp;
        </p>
    </div>

    <!-- Indikator Gulir Ke Bawah -->
    <div class="absolute bottom-0 left-0 right-0 flex justify-center pb-6">
        <a href="#visi" class="text-white animate-bounce hover:text-[var(--accent)] transition">
            <i class="fas fa-chevron-down text-3xl"></i>
        </a>
    </div>
</section>


<!-- Bagian Visi & Misi -->
<section id="visi" class="py-20 px-4 bg-gradient relative overflow-hidden">
    <!-- Background Elements -->
    <div class="absolute inset-0">
        <div class="absolute top-20 left-20 w-64 h-64 bg-[var(--accent)] opacity-20 rounded-full"></div>
        <div class="absolute bottom-20 right-20 w-80 h-80 bg-[var(--primary)] opacity-5 rounded-full"></div>
        <div class="absolute top-1/2 left-1/4 w-2 h-2 bg-[var(--primary)] rounded-full animate-ping"></div>
        <div class="absolute top-1/3 right-1/3 w-3 h-3 bg-[var(--secondary)] rounded-full animate-ping delay-300"></div>
    </div>

    <div class="max-w-6xl mx-auto relative z-10">
        <div class="text-center mb-16">
            <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold text-[var(--dark)] mb-6 section-title">
                Visi
            </h2>
            <p class="text-gray-600 text-xl max-w-3xl mx-auto">
                Menjadi penyedia solusi digital terintegrasi bagi pelaku bisnis dan institusi di Indonesia pada tahun 2030, melalui layanan perangkat lunak berbasis langganan serta dukungan infrastruktur yang andal dan berkelanjutan. </p>
        </div>
    </div>
</section>

<!-- Bagian About / Identitas Perusahaan -->
<section id="about" class="py-16 bg-gradient-to-r from-gray-50 to-white relative overflow-hidden">
    <!-- Background Decoration -->
    <div class="absolute top-0 right-0 w-96 h-96 bg-[var(--primary)] opacity-5 rounded-full -translate-y-48 translate-x-48"></div>
    <div class="absolute bottom-0 left-0 w-64 h-64 bg-[var(--accent)] opacity-20 rounded-full translate-y-32 -translate-x-32"></div>

    <div class="max-w-6xl text-center mx-auto px-4 relative z-10">
        <div class="mb-12">
            <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-[var(--dark)] mb-4 section-title">Identitas Perusahaan</h2>
            <p class="text-gray-600 max-w-3xl mx-auto text-lg">Memahami lebih dalam tentang visi dan model bisnis kami</p>
        </div>

        <div class="grid text-start md:grid-cols-2 gap-8">
            <div class="bg-white p-8 rounded-2xl shadow-lg card-hover border border-gray-100 relative overflow-hidden">
                <div class="absolute top-0 right-0 w-20 h-20 bg-[var(--primary)] opacity-10 rounded-full -translate-y-10 translate-x-10"></div>
                <div class="relative z-10">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-[var(--primary)] rounded-lg flex items-center justify-center mr-4">
                            <i class="fas fa-building text-white text-xl"></i>
                        </div>
                        <h3 class="font-bold text-xl text-[var(--dark)]">Jenis Perusahaan</h3>
                    </div>
                    <p class="text-gray-700 leading-relaxed text-lg">
                        <span class="font-semibold text-[var(--primary)]">Software House</span> +
                        <span class="font-semibold text-[var(--primary)]">SaaS Provider</span> +
                        <span class="font-semibold text-[var(--primary)]">IT Solution Partner</span><br>
                        <span class="text-gray-600">(One-stop-solution: software, SaaS, hardware)</span>
                    </p>
                </div>
            </div>

            <div class="bg-white p-8 rounded-2xl shadow-lg card-hover border border-gray-100 relative overflow-hidden">
                <div class="absolute top-0 right-0 w-20 h-20 bg-[var(--secondary)] opacity-10 rounded-full -translate-y-10 translate-x-10"></div>
                <div class="relative z-10">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-[var(--secondary)] rounded-lg flex items-center justify-center mr-4">
                            <i class="fas fa-chart-line text-white text-xl"></i>
                        </div>
                        <h3 class="font-bold text-xl text-[var(--dark)]">Model Bisnis</h3>
                    </div>
                    <ul class="space-y-3 text-gray-700">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-[var(--primary)] mt-1 mr-3 flex-shrink-0"></i>
                            <span>Proyek kustom (custom software, website, aplikasi, sistem informasi)</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-[var(--primary)] mt-1 mr-3 flex-shrink-0"></i>
                            <span>Produk SaaS (POS, Absensi, Payroll, ERP ringan, dsb)</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-[var(--primary)] mt-1 mr-3 flex-shrink-0"></i>
                            <span>Bundling software + hardware (tablet, printer, smart mobile POS, server kecil)</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-[var(--primary)] mt-1 mr-3 flex-shrink-0"></i>
                            <span>Maintenance &amp; support berlangganan (after-sales &amp; SLA)</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Bagian Struktur Divisi -->
<section id="struktur" class="py-20 px-4 bg-gradient-to-r from-white via-gray-50 to-white relative overflow-hidden">
    <!-- Background Decorations -->
    <div class="absolute top-0 left-0 w-96 h-96 bg-[var(--primary)] opacity-5 rounded-full -translate-y-48 -translate-x-48"></div>
    <div class="absolute bottom-0 right-0 w-80 h-80 bg-[var(--secondary)] opacity-10 rounded-full translate-y-32 translate-x-32"></div>

    <div class="max-w-6xl mx-auto relative z-10">
        <div class="text-center mb-16">
            <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold text-[var(--dark)] mb-6">
                <span class="bg-gradient-to-r from-[var(--dark)] via-[var(--primary)] to-[var(--dark)] bg-clip-text text-transparent">
                    Struktur Divisi
                </span>
                <br>
                <span class="text-gray-700 text-2xl sm:text-3xl">& Departemen</span>
            </h2>
            <p class="text-gray-600 text-xl max-w-3xl mx-auto">Pembagian divisi yang dirancang untuk layanan profesional dan skala perusahaan</p>
            <div class="w-24 h-1 bg-[var(--primary)] mx-auto mt-6 rounded-full"></div>
        </div>

        <div class="grid md:grid-cols-2 gap-8">
            <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 border border-gray-100 group hover:-translate-y-1">
                <div class="flex items-start mb-4">
                    <div class="w-12 h-12 bg-gradient-to-r from-[var(--primary)] to-[var(--secondary)] rounded-lg flex items-center justify-center mr-4 flex-shrink-0 group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-flask text-white text-xl"></i>
                    </div>
                    <h4 class="font-bold text-lg text-[var(--dark)] group-hover:text-[var(--primary)] transition-colors">Divisi Riset & Pengembangan</h4>
                </div>
                <div class="text-sm text-gray-500 mb-2 font-medium">R&D / Product Development</div>
                <p class="text-gray-700 leading-relaxed">Fokus: membangun dan mengembangkan produk SaaS (POS, Absensi, ERP mini). Tim: software engineer, UI/UX designer, QA tester.</p>
            </div>

            <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 border border-gray-100 group hover:-translate-y-1">
                <div class="flex items-start mb-4">
                    <div class="w-12 h-12 bg-gradient-to-r from-[var(--secondary)] to-[var(--dark)] rounded-lg flex items-center justify-center mr-4 flex-shrink-0 group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-project-diagram text-white text-xl"></i>
                    </div>
                    <h4 class="font-bold text-lg text-[var(--dark)] group-hover:text-[var(--secondary)] transition-colors">Divisi Proyek & Implementasi</h4>
                </div>
                <div class="text-sm text-gray-500 mb-2 font-medium">Project & Solutions</div>
                <p class="text-gray-700 leading-relaxed">Fokus: menerima project custom. Tim: project manager, developer, system analyst.</p>
            </div>

            <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 border border-gray-100 group hover:-translate-y-1">
                <div class="flex items-start mb-4">
                    <div class="w-12 h-12 bg-gradient-to-r from-gray-700 to-[var(--dark)] rounded-lg flex items-center justify-center mr-4 flex-shrink-0 group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-server text-white text-xl"></i>
                    </div>
                    <h4 class="font-bold text-lg text-[var(--dark)] group-hover:text-gray-700 transition-colors">Divisi Infrastruktur & Hardware</h4>
                </div>
                <div class="text-sm text-gray-500 mb-2 font-medium">Infrastructure & Hardware</div>
                <p class="text-gray-700 leading-relaxed">Fokus: penyediaan perangkat (tablet, printer, server). Model: sewa, jual, bundling. Tim: teknisi IT, procurement.</p>
            </div>

            <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 border border-gray-100 group hover:-translate-y-1">
                <div class="flex items-start mb-4">
                    <div class="w-12 h-12 bg-gradient-to-r from-[var(--accent)] to-[var(--primary)] rounded-lg flex items-center justify-center mr-4 flex-shrink-0 group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-headset text-white text-xl"></i>
                    </div>
                    <h4 class="font-bold text-lg text-[var(--dark)] group-hover:text-[var(--accent)] transition-colors">Divisi Layanan & Support</h4>
                </div>
                <div class="text-sm text-gray-500 mb-2 font-medium">Customer Success</div>
                <p class="text-gray-700 leading-relaxed">Fokus: support 24/7, maintenance, SLA, training user. Tim: helpdesk, technical support, trainer.</p>
            </div>

            <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 border border-gray-100 group hover:-translate-y-1">
                <div class="flex items-start mb-4">
                    <div class="w-12 h-12 bg-gradient-to-r from-[var(--primary)] to-[var(--accent)] rounded-lg flex items-center justify-center mr-4 flex-shrink-0 group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-handshake text-white text-xl"></i>
                    </div>
                    <h4 class="font-bold text-lg text-[var(--dark)] group-hover:text-[var(--primary)] transition-colors">Divisi Bisnis & Kemitraan</h4>
                </div>
                <div class="text-sm text-gray-500 mb-2 font-medium">Business Development</div>
                <p class="text-gray-700 leading-relaxed">Fokus: mencari klien, membangun kemitraan (distributor hardware, vendor cloud). Tim: sales, marketing, account manager.</p>
            </div>

            <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 border border-gray-100 group hover:-translate-y-1">
                <div class="flex items-start mb-4">
                    <div class="w-12 h-12 bg-gradient-to-r from-[var(--secondary)] to-[var(--primary)] rounded-lg flex items-center justify-center mr-4 flex-shrink-0 group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-calculator text-white text-xl"></i>
                    </div>
                    <h4 class="font-bold text-lg text-[var(--dark)] group-hover:text-[var(--secondary)] transition-colors">Divisi Keuangan & Administrasi</h4>
                </div>
                <div class="text-sm text-gray-500 mb-2 font-medium">Finance & Administration</div>
                <p class="text-gray-700 leading-relaxed">Fokus: keuangan, billing SaaS (subscription), invoice proyek.</p>
            </div>

            <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 border border-gray-100 group hover:-translate-y-1">
                <div class="flex items-start mb-4">
                    <div class="w-12 h-12 bg-gradient-to-r from-[var(--dark)] to-[var(--secondary)] rounded-lg flex items-center justify-center mr-4 flex-shrink-0 group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-users text-white text-xl"></i>
                    </div>
                    <h4 class="font-bold text-lg text-[var(--dark)] group-hover:text-[var(--dark)] transition-colors">Divisi SDM & Manajemen Internal</h4>
                </div>
                <div class="text-sm text-gray-500 mb-2 font-medium">Human Resource & Internal Management</div>
                <p class="text-gray-700 leading-relaxed">Fokus: perekrutan, pelatihan, dan pengembangan tim internal.</p>
            </div>
        </div>
</section>
@endsection