<!-- Navbar -->
<header class="bg-white shadow-lg sticky top-0 px-4 md:px-20 z-50">
    <div class="max-w-7xl mx-auto flex justify-between items-center">
        <div class="flex items-center gap-2">
            <!-- Logo Company -->
            <a href="{{ route('welcome') }}"><img src="{{ asset('images/logo-kwu.png') }}"
                    onerror="this.src='{{ asset('images/logo.png') }}'" class="w-16  h-16 rounded-full object-cover"
                    alt="Logo Kelompok KWU FT-07-A"></a>

            <div>
                <span class="font-bold text-base md:text-xl block">Kelompok 4 <br>KWU FT-07-A</span>
            </div>
        </div>

        <!-- Tautan Navigasi Desktop -->
        <nav class="hidden md:flex space-x-6 items-center" aria-label="Primary navigation">
            <a href="#about" class="nav-link text-sm uppercase font-medium">Tentang</a>
            <a href="#visi" class="nav-link text-sm uppercase font-medium">Visi & Misi</a>
            <a href="#produk" class="nav-link text-sm uppercase font-medium">Produk & Layanan</a>
            <a href="#usp" class="nav-link text-sm uppercase font-medium">Nilai Tambah</a>
            <a href="#struktur" class="nav-link text-sm uppercase font-medium">Struktur</a>
            <a href="#pricing" class="nav-link text-sm uppercase font-medium">Pricing</a>
            <a href="#kontak" class="nav-link text-sm uppercase font-medium">Kontak</a>
        </nav>

        <!-- Tombol Menu Seluler (Ikon Hamburger) -->
        <button id="mobile-menu-button" aria-controls="mobile-menu" aria-expanded="false" aria-label="Toggle navigation" class="md:hidden text-[var(--primary)] text-2xl focus:outline-none p-2 rounded focus:ring-2 focus:ring-[var(--primary)]">
            <i class="fas fa-bars"></i>
        </button>
    </div>
</header>

<!-- Overlay used to close the mobile menu when clicking outside -->
<div id="mobile-overlay" class="hidden fixed inset-0 bg-black bg-opacity-40 z-40"></div>

<!-- Mobile menu (hidden by default) placed after header for accessibility -->
<div id="mobile-menu" class="hidden fixed inset-x-0 top-0 bg-[var(--dark)] text-white w-full z-50">
    <div class="max-w-7xl mx-auto px-4 pt-20 pb-6">
        <nav class="flex flex-col items-stretch space-y-2" aria-label="Mobile navigation">
            <a href="#about" class="nav-link text-white text-base uppercase font-medium w-full text-left py-3 px-3 rounded hover:bg-[var(--primary)] transition">Tentang</a>
            <a href="#visi" class="nav-link text-white text-base uppercase font-medium w-full text-left py-3 px-3 rounded hover:bg-[var(--primary)] transition">Visi & Misi</a>
            <a href="#produk" class="nav-link text-white text-base uppercase font-medium w-full text-left py-3 px-3 rounded hover:bg-[var(--primary)] transition">Produk & Layanan</a>
            <a href="#usp" class="nav-link text-white text-base uppercase font-medium w-full text-left py-3 px-3 rounded hover:bg-[var(--primary)] transition">Nilai Tambah</a>
            <a href="#struktur" class="nav-link text-white text-base uppercase font-medium w-full text-left py-3 px-3 rounded hover:bg-[var(--primary)] transition">Struktur</a>
            <a href="#pricing" class="nav-link text-white text-base uppercase font-medium w-full text-left py-3 px-3 rounded hover:bg-[var(--primary)] transition">Pricing</a>
            <a href="#kontak" class="nav-link text-white text-base uppercase font-medium w-full text-left py-3 px-3 rounded hover:bg-[var(--primary)] transition">Kontak</a>
        </nav>
    </div>
</div>

<!-- Mobile menu toggle handled globally in layouts/app.blade.php -->
