@extends('layouts.app')
@section('title', 'Beranda')
@section('content')
    <!-- Bagian Hero -->
    <section class="relative h-[70vh] bg-gradient-to-br from-[var(--primary)] via-[var(--secondary)] to-[var(--dark)] bg-cover bg-center flex items-center justify-center text-center p-4 overflow-hidden">
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
                <span class="bg-gradient-animation">Jamal Enterprise Solution</span>
            </h1>
            <p class="text-base sm:text-lg md:text-xl lg:text-2xl mb-8 max-w-4xl mx-auto text-white/90 font-light">
                <span class="font-semibold text-[var(--accent)]">Technology Solution Provider</span> &amp;
                <span class="font-semibold text-[var(--accent)]">Enterprise IT Partner</span> — one-stop solution untuk UMKM, retail, F&amp;B, perusahaan menengah, dan instansi.
            </p>
            
            <!-- Call to Action Buttons -->
            <div class="flex flex-col sm:flex-row gap-4 justify-center mt-8">
                <a href="#produk" class="inline-flex items-center px-8 py-4 bg-white text-[var(--primary)] rounded-full font-semibold hover:bg-gray-100 transition shadow-xl transform hover:scale-105 btn-enhanced glow-pulse">
                    <i class="fas fa-rocket mr-2"></i>
                    Lihat Produk Kami
                </a>
                <a href="#kontak" class="inline-flex items-center px-8 py-4 bg-transparent border-2 border-white text-white rounded-full font-semibold hover:bg-white hover:text-[var(--primary)] transition shadow-xl transform hover:scale-105 btn-enhanced">
                    <i class="fas fa-phone mr-2"></i>
                    Hubungi Kami
                </a>
            </div>
        </div>

        <!-- Indikator Gulir Ke Bawah -->
        <div class="absolute bottom-0 left-0 right-0 flex justify-center pb-6">
            <a href="#about" class="text-white animate-bounce hover:text-[var(--accent)] transition">
                <i class="fas fa-chevron-down text-3xl"></i>
            </a>
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

    <!-- Bagian Visi & Misi -->
    <section id="visi" class="py-20 px-4 bg-white relative overflow-hidden">
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
                    Visi &amp; Misi
                </h2>
                <p class="text-gray-600 text-xl max-w-3xl mx-auto">
                    Komitmen kami dalam membangun masa depan teknologi Indonesia
                </p>
            </div>
            
            <div class="grid lg:grid-cols-2 gap-12">
                <!-- Visi Card -->
                <div class="relative">
                    <div class="bg-gradient-to-br from-[var(--primary)] to-[var(--secondary)] p-1 rounded-3xl">
                        <div class="bg-white p-10 rounded-3xl h-full">
                            <div class="flex items-center mb-6">
                                <div class="w-16 h-16 bg-gradient-to-r from-[var(--primary)] to-[var(--secondary)] rounded-2xl flex items-center justify-center mr-6">
                                    <i class="fas fa-eye text-white text-2xl"></i>
                                </div>
                                <h3 class="text-3xl font-bold text-[var(--dark)]">Visi</h3>
                            </div>
                            
                            <div class="relative">
                                <div class="absolute left-0 top-0 w-1 h-full bg-gradient-to-b from-[var(--primary)] to-[var(--secondary)] rounded-full"></div>
                                <p class="text-gray-700 leading-relaxed text-lg pl-6">
                                    Menjadi <span class="font-bold text-[var(--primary)]">penyedia solusi digital terintegrasi</span> bagi
                                    UMKM dan bisnis menengah di Indonesia pada tahun <span class="font-bold text-[var(--secondary)]">2030</span>, 
                                    melalui layanan perangkat lunak berbasis langganan dan dukungan infrastruktur yang terpercaya.
                                </p>
                            </div>

                            <!-- Achievement Indicators -->
                            <div class="grid grid-cols-2 gap-4 mt-8 pt-8 border-t border-gray-200">
                                <div class="text-center">
                                    <div class="text-2xl font-bold text-[var(--primary)]">2030</div>
                                    <div class="text-sm text-gray-600">Target Tahun</div>
                                </div>
                                <div class="text-center">
                                    <div class="text-2xl font-bold text-[var(--secondary)]">UMKM</div>
                                    <div class="text-sm text-gray-600">Focus Market</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Misi Card -->
                <div class="relative">
                    <div class="bg-gradient-to-br from-[var(--secondary)] to-[var(--dark)] p-1 rounded-3xl">
                        <div class="bg-white p-10 rounded-3xl h-full">
                            <div class="flex items-center mb-6">
                                <div class="w-16 h-16 bg-gradient-to-r from-[var(--secondary)] to-[var(--dark)] rounded-2xl flex items-center justify-center mr-6">
                                    <i class="fas fa-bullseye text-white text-2xl"></i>
                                </div>
                                <h3 class="text-3xl font-bold text-[var(--dark)]">Misi</h3>
                            </div>
                            
                            <ul class="space-y-4 text-gray-700">
                                <li class="flex items-start group">
                                    <div class="w-8 h-8 bg-[var(--primary)] rounded-lg flex items-center justify-center mr-4 mt-1 flex-shrink-0 group-hover:bg-[var(--secondary)] transition">
                                        <span class="text-white font-bold text-sm">1</span>
                                    </div>
                                    <span class="leading-relaxed">Mengembangkan layanan perangkat lunak berbasis langganan (SaaS) yang <strong>inovatif, mudah digunakan, dan scalable</strong>.</span>
                                </li>
                                
                                <li class="flex items-start group">
                                    <div class="w-8 h-8 bg-[var(--primary)] rounded-lg flex items-center justify-center mr-4 mt-1 flex-shrink-0 group-hover:bg-[var(--secondary)] transition">
                                        <span class="text-white font-bold text-sm">2</span>
                                    </div>
                                    <span class="leading-relaxed">Menyediakan <strong>solusi digital terintegrasi</strong> dengan dukungan perangkat keras yang fleksibel (sewa atau beli).</span>
                                </li>
                                
                                <li class="flex items-start group">
                                    <div class="w-8 h-8 bg-[var(--primary)] rounded-lg flex items-center justify-center mr-4 mt-1 flex-shrink-0 group-hover:bg-[var(--secondary)] transition">
                                        <span class="text-white font-bold text-sm">3</span>
                                    </div>
                                    <span class="leading-relaxed">Memberikan <strong>layanan purna jual, pelatihan, dan support</strong> berkelanjutan agar klien merasa aman dan terbantu.</span>
                                </li>
                                
                                <li class="flex items-start group">
                                    <div class="w-8 h-8 bg-[var(--primary)] rounded-lg flex items-center justify-center mr-4 mt-1 flex-shrink-0 group-hover:bg-[var(--secondary)] transition">
                                        <span class="text-white font-bold text-sm">4</span>
                                    </div>
                                    <span class="leading-relaxed">Menjadi <strong>mitra transformasi digital</strong> bagi UMKM dan bisnis menengah di Indonesia.</span>
                                </li>
                                
                                <li class="flex items-start group">
                                    <div class="w-8 h-8 bg-[var(--primary)] rounded-lg flex items-center justify-center mr-4 mt-1 flex-shrink-0 group-hover:bg-[var(--secondary)] transition">
                                        <span class="text-white font-bold text-sm">5</span>
                                    </div>
                                    <span class="leading-relaxed">Berkontribusi pada <strong>percepatan digitalisasi nasional</strong> melalui solusi teknologi yang terjangkau dan berkelanjutan.</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bagian Produk & Layanan -->
    <section id="produk" class="py-20 px-4 bg-gradient-to-br from-[var(--dark)] via-gray-900 to-[var(--secondary)] relative overflow-hidden">
        <!-- Background Effects -->
        <div class="absolute inset-0">
            <!-- Animated Background Shapes -->
            <div class="absolute top-20 left-10 w-72 h-72 bg-[var(--primary)] opacity-10 rounded-full animate-pulse"></div>
            <div class="absolute bottom-20 right-10 w-96 h-96 bg-[var(--accent)] opacity-5 rounded-full animate-pulse delay-300"></div>
            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] bg-gradient-to-r from-[var(--primary)] to-[var(--secondary)] opacity-5 rounded-full animate-spin" style="animation-duration: 30s;"></div>
            
            <!-- Tech Grid Pattern -->
            <div class="absolute inset-0 opacity-5">
                <div class="grid grid-cols-20 grid-rows-20 gap-1 h-full">
                    <div class="bg-white rounded animate-pulse"></div>
                    <div class="bg-white rounded animate-pulse delay-75"></div>
                    <div class="bg-white rounded animate-pulse delay-150"></div>
                    <div class="bg-white rounded animate-pulse delay-300"></div>
                </div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto relative z-10">
            <div class="text-center mb-16">
                <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold text-white mb-6">
                    <span class="bg-gradient-to-r from-white via-[var(--accent)] to-white bg-clip-text text-transparent">
                        Produk & Layanan Unggulan
                    </span>
                </h2>
                <p class="text-white/80 text-xl max-w-3xl mx-auto leading-relaxed">
                    Solusi teknologi terdepan yang dirancang khusus untuk mengakselerasi pertumbuhan bisnis Anda
                </p>
                <div class="w-24 h-1 bg-[var(--primary)] mx-auto mt-6 rounded-full"></div>
            </div>

            <div class="grid lg:grid-cols-3 gap-8 mb-12">
                <!-- Produk SaaS Card - Featured -->
                <div class="bg-gradient-to-br from-white to-gray-50 rounded-3xl shadow-2xl overflow-hidden card-hover border border-gray-200 relative group transform transition-all duration-500 hover:scale-105">
                    <!-- Featured Badge -->
                    <div class="absolute top-4 right-4 z-20">
                        <span class="bg-gradient-to-r from-[var(--primary)] to-[var(--secondary)] text-white px-3 py-1 rounded-full text-sm font-bold shadow-lg">
                            <i class="fas fa-star mr-1"></i>POPULER
                        </span>
                    </div>
                    
                    <!-- Card Header with Icon -->
                    <div class="bg-gradient-to-r from-[var(--primary)] to-[var(--secondary)] p-8 relative overflow-hidden">
                        <div class="absolute top-0 right-0 w-32 h-32 bg-white/10 rounded-full -translate-y-16 translate-x-16"></div>
                        <div class="relative z-10">
                            <div class="w-16 h-16 bg-white/20 rounded-2xl flex items-center justify-center mb-4 backdrop-blur-sm">
                                <i class="fas fa-cloud text-white text-2xl"></i>
                            </div>
                            <h3 class="text-2xl font-bold text-white mb-2">Produk SaaS</h3>
                            <p class="text-white/90 text-sm">Solusi berbasis cloud yang siap pakai</p>
                        </div>
                    </div>

                    <div class="p-8">
                        <div class="space-y-4">
                            <div class="flex items-center group-hover:translate-x-2 transition-transform duration-300">
                                <div class="w-10 h-10 bg-[var(--primary)]/10 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                                    <i class="fas fa-cash-register text-[var(--primary)] text-lg"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-[var(--dark)]">POS System</h4>
                                    <p class="text-gray-600 text-sm">Retail & F&B management</p>
                                </div>
                            </div>
                            
                            <div class="flex items-center group-hover:translate-x-2 transition-transform duration-300 delay-75">
                                <div class="w-10 h-10 bg-[var(--primary)]/10 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                                    <i class="fas fa-user-clock text-[var(--primary)] text-lg"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-[var(--dark)]">Absensi & Payroll</h4>
                                    <p class="text-gray-600 text-sm">HR management system</p>
                                </div>
                            </div>
                            
                            <div class="flex items-center group-hover:translate-x-2 transition-transform duration-300 delay-150">
                                <div class="w-10 h-10 bg-[var(--primary)]/10 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                                    <i class="fas fa-chart-pie text-[var(--primary)] text-lg"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-[var(--dark)]">ERP Mini</h4>
                                    <p class="text-gray-600 text-sm">Stok, keuangan, HR integration</p>
                                </div>
                            </div>
                            
                            <div class="flex items-center group-hover:translate-x-2 transition-transform duration-300 delay-300">
                                <div class="w-10 h-10 bg-[var(--primary)]/10 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                                    <i class="fas fa-tv text-[var(--primary)] text-lg"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-[var(--dark)]">Digital Signage</h4>
                                    <p class="text-gray-600 text-sm">Content management system</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="mt-8 pt-6 border-t border-gray-200">
                            <div class="flex items-center justify-between">
                                <span class="text-sm text-gray-500">Mulai dari</span>
                                <span class="text-2xl font-bold text-[var(--primary)]">Rp100K<span class="text-sm font-normal">/bulan</span></span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Layanan Custom Card -->
                <div class="bg-gradient-to-br from-white to-gray-50 rounded-3xl shadow-2xl overflow-hidden card-hover border border-gray-200 relative group transform transition-all duration-500 hover:scale-105">
                    <div class="bg-gradient-to-r from-[var(--secondary)] to-[var(--dark)] p-8 relative overflow-hidden">
                        <div class="absolute top-0 right-0 w-32 h-32 bg-white/10 rounded-full -translate-y-16 translate-x-16"></div>
                        <div class="relative z-10">
                            <div class="w-16 h-16 bg-white/20 rounded-2xl flex items-center justify-center mb-4 backdrop-blur-sm">
                                <i class="fas fa-code text-white text-2xl"></i>
                            </div>
                            <h3 class="text-2xl font-bold text-white mb-2">Layanan Custom</h3>
                            <p class="text-white/90 text-sm">Solusi khusus sesuai kebutuhan bisnis</p>
                        </div>
                    </div>

                    <div class="p-8">
                        <div class="space-y-4">
                            <div class="flex items-center group-hover:translate-x-2 transition-transform duration-300">
                                <div class="w-10 h-10 bg-[var(--secondary)]/10 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                                    <i class="fas fa-building text-[var(--secondary)] text-lg"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-[var(--dark)]">Sistem Informasi</h4>
                                    <p class="text-gray-600 text-sm">Perusahaan & instansi</p>
                                </div>
                            </div>
                            
                            <div class="flex items-center group-hover:translate-x-2 transition-transform duration-300 delay-75">
                                <div class="w-10 h-10 bg-[var(--secondary)]/10 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                                    <i class="fas fa-mobile-alt text-[var(--secondary)] text-lg"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-[var(--dark)]">Aplikasi Mobile</h4>
                                    <p class="text-gray-600 text-sm">iOS & Android development</p>
                                </div>
                            </div>
                            
                            <div class="flex items-center group-hover:translate-x-2 transition-transform duration-300 delay-150">
                                <div class="w-10 h-10 bg-[var(--secondary)]/10 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                                    <i class="fas fa-plug text-[var(--secondary)] text-lg"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-[var(--dark)]">Integrasi API</h4>
                                    <p class="text-gray-600 text-sm">System integration services</p>
                                </div>
                            </div>
                            
                            <div class="flex items-center group-hover:translate-x-2 transition-transform duration-300 delay-300">
                                <div class="w-10 h-10 bg-[var(--secondary)]/10 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                                    <i class="fas fa-chart-line text-[var(--secondary)] text-lg"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-[var(--dark)]">Dashboard Analitik</h4>
                                    <p class="text-gray-600 text-sm">Business intelligence solution</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="mt-8 pt-6 border-t border-gray-200">
                            <div class="flex items-center justify-between">
                                <span class="text-sm text-gray-500">Konsultasi gratis</span>
                                <span class="text-lg font-bold text-[var(--secondary)]">Custom Quote</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Hardware & Bundling Card -->
                <div class="bg-gradient-to-br from-white to-gray-50 rounded-3xl shadow-2xl overflow-hidden card-hover border border-gray-200 relative group transform transition-all duration-500 hover:scale-105">
                    <div class="bg-gradient-to-r from-gray-800 to-[var(--dark)] p-8 relative overflow-hidden">
                        <div class="absolute top-0 right-0 w-32 h-32 bg-white/10 rounded-full -translate-y-16 translate-x-16"></div>
                        <div class="relative z-10">
                            <div class="w-16 h-16 bg-white/20 rounded-2xl flex items-center justify-center mb-4 backdrop-blur-sm">
                                <i class="fas fa-server text-white text-2xl"></i>
                            </div>
                            <h3 class="text-2xl font-bold text-white mb-2">Hardware & Bundling</h3>
                            <p class="text-white/90 text-sm">Paket lengkap software + hardware</p>
                        </div>
                    </div>

                    <div class="p-8">
                        <div class="space-y-4">
                            <div class="flex items-center group-hover:translate-x-2 transition-transform duration-300">
                                <div class="w-10 h-10 bg-gray-800/10 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                                    <i class="fas fa-tablet-alt text-gray-800 text-lg"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-[var(--dark)]">POS Terminal</h4>
                                    <p class="text-gray-600 text-sm">Tablet + printer bundle</p>
                                </div>
                            </div>
                            
                            <div class="flex items-center group-hover:translate-x-2 transition-transform duration-300 delay-75">
                                <div class="w-10 h-10 bg-gray-800/10 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                                    <i class="fas fa-fingerprint text-gray-800 text-lg"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-[var(--dark)]">Absensi Device</h4>
                                    <p class="text-gray-600 text-sm">Fingerprint & face recognition</p>
                                </div>
                            </div>
                            
                            <div class="flex items-center group-hover:translate-x-2 transition-transform duration-300 delay-150">
                                <div class="w-10 h-10 bg-gray-800/10 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                                    <i class="fas fa-desktop text-gray-800 text-lg"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-[var(--dark)]">Digital Signage</h4>
                                    <p class="text-gray-600 text-sm">TV/monitor + content system</p>
                                </div>
                            </div>
                            
                            <div class="flex items-center group-hover:translate-x-2 transition-transform duration-300 delay-300">
                                <div class="w-10 h-10 bg-gray-800/10 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                                    <i class="fas fa-server text-gray-800 text-lg"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-[var(--dark)]">Mini Server</h4>
                                    <p class="text-gray-600 text-sm">On-premise solution</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="mt-8 pt-6 border-t border-gray-200">
                            <div class="flex items-center justify-between">
                                <span class="text-sm text-gray-500">Sewa atau beli</span>
                                <span class="text-lg font-bold text-gray-800">Flexible Plan</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Call to Action Section -->
            <div class="text-center">
                <div class="bg-white/10 backdrop-blur-sm rounded-3xl p-8 border border-white/20">
                    <h3 class="text-2xl font-bold text-white mb-4">Siap Untuk Transformasi Digital?</h3>
                    <p class="text-white/80 mb-6 max-w-2xl mx-auto">
                        Konsultasikan kebutuhan bisnis Anda dengan tim ahli kami. Dapatkan solusi teknologi terbaik yang sesuai dengan budget dan target Anda.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="#kontak" class="inline-flex items-center px-8 py-4 bg-white text-[var(--primary)] rounded-full font-bold hover:bg-gray-100 transition shadow-xl transform hover:scale-105">
                            <i class="fas fa-phone-alt mr-2"></i>
                            Konsultasi Gratis
                        </a>
                        <a href="#pricing" class="inline-flex items-center px-8 py-4 bg-[var(--primary)] text-white rounded-full font-bold hover:bg-[var(--secondary)] transition shadow-xl transform hover:scale-105">
                            <i class="fas fa-tag mr-2"></i>
                            Lihat Harga
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bagian Nilai Tambah (USP) -->
    <section id="usp" class="py-20 px-4 bg-gradient-to-br from-gray-50 via-white to-gray-100 relative overflow-hidden">
        <!-- Background Decorations -->
        <div class="absolute inset-0">
            <div class="absolute top-20 left-20 w-40 h-40 bg-[var(--primary)] opacity-10 rounded-full animate-pulse"></div>
            <div class="absolute bottom-20 right-20 w-60 h-60 bg-[var(--secondary)] opacity-5 rounded-full animate-pulse delay-300"></div>
            <div class="absolute top-1/2 left-10 w-3 h-3 bg-[var(--primary)] rounded-full animate-ping"></div>
            <div class="absolute top-1/3 right-20 w-2 h-2 bg-[var(--secondary)] rounded-full animate-ping delay-500"></div>
        </div>

        <div class="max-w-6xl mx-auto relative z-10">
            <div class="text-center mb-16">
                <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold text-[var(--dark)] mb-6">
                    <span class="bg-gradient-to-r from-[var(--primary)] via-[var(--secondary)] to-[var(--primary)] bg-clip-text text-transparent">
                        Nilai Tambah
                    </span>
                    <br>
                    <span class="text-gray-700 text-2xl sm:text-3xl">Unique Selling Point</span>
                </h2>
                <p class="text-gray-600 text-xl max-w-3xl mx-auto">Keunggulan layanan kami sebagai mitra teknologi terpercaya</p>
                <div class="w-24 h-1 bg-[var(--primary)] mx-auto mt-6 rounded-full"></div>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8">
                <!-- One-stop Solution Card -->
                <div class="group bg-white p-8 rounded-2xl shadow-lg border border-gray-100 hover:shadow-2xl transform transition-all duration-500 hover:-translate-y-2 relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-20 h-20 bg-[var(--primary)] opacity-10 rounded-full -translate-y-10 translate-x-10 group-hover:scale-150 transition-transform duration-500"></div>
                    <div class="relative z-10">
                        <div class="w-16 h-16 bg-gradient-to-r from-[var(--primary)] to-[var(--secondary)] rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-puzzle-piece text-white text-2xl"></i>
                        </div>
                        <h4 class="text-xl font-bold text-[var(--dark)] mb-4 group-hover:text-[var(--primary)] transition-colors">One-stop Solution</h4>
                        <p class="text-gray-700 leading-relaxed">Software + hardware + support dalam satu paket yang terintegrasi untuk kemudahan maksimal.</p>
                        
                        <div class="flex items-center mt-6 text-[var(--primary)] font-semibold group-hover:translate-x-2 transition-transform duration-300">
                            <span class="text-sm">Solusi Lengkap</span>
                            <i class="fas fa-arrow-right ml-2"></i>
                        </div>
                    </div>
                </div>

                <!-- Flexible Model Card -->
                <div class="group bg-white p-8 rounded-2xl shadow-lg border border-gray-100 hover:shadow-2xl transform transition-all duration-500 hover:-translate-y-2 relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-20 h-20 bg-[var(--secondary)] opacity-10 rounded-full -translate-y-10 translate-x-10 group-hover:scale-150 transition-transform duration-500"></div>
                    <div class="relative z-10">
                        <div class="w-16 h-16 bg-gradient-to-r from-[var(--secondary)] to-[var(--primary)] rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-sync-alt text-white text-2xl"></i>
                        </div>
                        <h4 class="text-xl font-bold text-[var(--dark)] mb-4 group-hover:text-[var(--secondary)] transition-colors">Flexible Model</h4>
                        <p class="text-gray-700 leading-relaxed">Model beli putus, sewa, atau langganan (SaaS) sesuai dengan kebutuhan dan budget Anda.</p>
                        
                        <div class="flex items-center mt-6 text-[var(--secondary)] font-semibold group-hover:translate-x-2 transition-transform duration-300">
                            <span class="text-sm">Payment Fleksibel</span>
                            <i class="fas fa-arrow-right ml-2"></i>
                        </div>
                    </div>
                </div>

                <!-- After-sales Card -->
                <div class="group bg-white p-8 rounded-2xl shadow-lg border border-gray-100 hover:shadow-2xl transform transition-all duration-500 hover:-translate-y-2 relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-20 h-20 bg-[var(--accent)] opacity-20 rounded-full -translate-y-10 translate-x-10 group-hover:scale-150 transition-transform duration-500"></div>
                    <div class="relative z-10">
                        <div class="w-16 h-16 bg-gradient-to-r from-[var(--dark)] to-[var(--secondary)] rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-headset text-white text-2xl"></i>
                        </div>
                        <h4 class="text-xl font-bold text-[var(--dark)] mb-4 group-hover:text-[var(--dark)] transition-colors">After-sales Kuat</h4>
                        <p class="text-gray-700 leading-relaxed">Support 24/7, training, dan SLA untuk memastikan keberlangsungan operasional klien.</p>
                        
                        <div class="flex items-center mt-6 text-[var(--dark)] font-semibold group-hover:translate-x-2 transition-transform duration-300">
                            <span class="text-sm">Support Terjamin</span>
                            <i class="fas fa-arrow-right ml-2"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Stats Section -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mt-16 pt-16 border-t border-gray-200">
                <div class="text-center">
                    <div class="text-3xl font-bold text-[var(--primary)] mb-2">24/7</div>
                    <div class="text-gray-600">Support</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl font-bold text-[var(--secondary)] mb-2">3+</div>
                    <div class="text-gray-600">Payment Model</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl font-bold text-[var(--primary)] mb-2">100%</div>
                    <div class="text-gray-600">Integrated</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl font-bold text-[var(--secondary)] mb-2">SLA</div>
                    <div class="text-gray-600">Guaranteed</div>
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

    <!-- Bagian Kontak -->
    <section id="kontak" class="py-20 px-4 bg-gradient-to-br from-[var(--dark)] via-gray-900 to-[var(--secondary)] relative overflow-hidden">
        <!-- Background Effects -->
        <div class="absolute inset-0">
            <div class="absolute top-20 left-20 w-64 h-64 bg-[var(--primary)] opacity-10 rounded-full animate-pulse"></div>
            <div class="absolute bottom-20 right-20 w-80 h-80 bg-[var(--accent)] opacity-5 rounded-full animate-pulse delay-300"></div>
            <div class="absolute top-1/2 left-1/4 w-2 h-2 bg-white rounded-full animate-ping"></div>
            <div class="absolute top-1/3 right-1/3 w-3 h-3 bg-[var(--accent)] rounded-full animate-ping delay-500"></div>
        </div>
        
        <div class="max-w-4xl mx-auto text-center relative z-10">
            <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold mb-6 leading-tight">
                <span class="bg-gradient-to-r from-white via-[var(--accent)] to-white bg-clip-text text-transparent">
                    Hubungi Jamal Enterprise Solution
                </span>
            </h2>
            <p class="text-white/90 text-lg sm:text-xl mb-12 max-w-2xl mx-auto leading-relaxed">
                Tertarik berdiskusi atau meminta demo? Hubungi kami melalui saluran berikut dan mulai transformasi digital bisnis Anda hari ini.
            </p>
            
            <!-- Contact Cards -->
            <div class="grid md:grid-cols-2 gap-6 mb-12">
                <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-8 border border-white/20 hover:bg-white/15 transition-all duration-300 group">
                    <div class="w-16 h-16 bg-[var(--primary)] rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-envelope text-white text-2xl"></i>
                    </div>
                    <h3 class="text-white font-bold text-lg mb-2">Email Kami</h3>
                    <p class="text-white/80 text-sm mb-4">Dapatkan respons cepat untuk inquiry bisnis</p>
                    <a href="mailto:info@kelompok-kwu.id" 
                       class="inline-flex items-center px-6 py-3 bg-[var(--primary)] text-white rounded-full font-semibold hover:bg-white hover:text-[var(--primary)] transition-all duration-300 shadow-lg transform hover:scale-105">
                        <i class="fas fa-paper-plane mr-2"></i>
                        Kirim Email
                    </a>
                </div>
                
                <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-8 border border-white/20 hover:bg-white/15 transition-all duration-300 group">
                    <div class="w-16 h-16 bg-green-500 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform duration-300">
                        <i class="fab fa-whatsapp text-white text-2xl"></i>
                    </div>
                    <h3 class="text-white font-bold text-lg mb-2">WhatsApp Sales</h3>
                    <p class="text-white/80 text-sm mb-4">Chat langsung dengan tim sales kami</p>
                    <a href="#" target="_blank"
                       class="inline-flex items-center px-6 py-3 bg-green-500 text-white rounded-full font-semibold hover:bg-white hover:text-green-500 transition-all duration-300 shadow-lg transform hover:scale-105">
                        <i class="fab fa-whatsapp mr-2"></i>
                        Chat Sekarang
                    </a>
                </div>
            </div>
            
            <!-- Contact Info -->
            <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-8 border border-white/20">
                <div class="grid md:grid-cols-2 gap-6 text-white/90">
                    <div class="flex items-center justify-center md:justify-start">
                        <div class="w-12 h-12 bg-[var(--accent)]/20 rounded-lg flex items-center justify-center mr-4">
                            <i class="fas fa-map-marker-alt text-[var(--accent)] text-xl"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-white">Alamat Kantor</h4>
                            <p class="text-sm">Jl. Dulu Aja Siapa Tau Cocok</p>
                        </div>
                    </div>
                    <div class="flex items-center justify-center md:justify-start">
                        <div class="w-12 h-12 bg-[var(--accent)]/20 rounded-lg flex items-center justify-center mr-4">
                            <i class="fas fa-phone-alt text-[var(--accent)] text-xl"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-white">Telepon</h4>
                            <p class="text-sm">0812-3456-7890</p>
                        </div>
                    </div>
                </div>
                
                <!-- Additional CTA -->
                <div class="mt-8 pt-8 border-t border-white/20">
                    <p class="text-white/80 mb-4">Siap untuk konsultasi gratis?</p>
                    <a href="#pricing" class="inline-flex items-center px-8 py-4 bg-gradient-to-r from-[var(--primary)] to-[var(--secondary)] text-white rounded-full font-bold hover:from-[var(--secondary)] hover:to-[var(--primary)] transition-all duration-300 shadow-xl transform hover:scale-105">
                        <i class="fas fa-calendar-alt mr-2"></i>
                        Jadwalkan Meeting
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
