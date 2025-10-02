<!-- Navbar -->
<header class="bg-white shadow-lg sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 py-3 flex justify-between items-center">
        <div class="flex items-center gap-4">
            <!-- Logo Company -->
            <img src="{{ asset('images/logo-kwu.png') }}" onerror="this.src='{{ asset('images/logo.png') }}'"
                class="w-12 h-12 rounded-full object-cover" alt="Logo Kelompok KWU">
            <div>
                <span class="font-bold text-xl block">CV Ku Belom Format ATS</span>
                <span class="text-sm block">Technology Solution Provider</span>
            </div>
        </div>

        <!-- Tautan Navigasi Desktop -->
        <nav class="hidden md:flex space-x-6 items-center">
            <a href="#about" class="nav-link text-sm uppercase font-medium">Tentang</a>
            <a href="#visi" class="nav-link text-sm uppercase font-medium">Visi & Misi</a>
            <a href="#produk" class="nav-link text-sm uppercase font-medium">Produk & Layanan</a>
            <a href="#usp" class="nav-link text-sm uppercase font-medium">Nilai Tambah (USP)</a>
            <a href="#struktur" class="nav-link text-sm uppercase font-medium">Struktur</a>
            <a href="#pricing" class="nav-link text-sm uppercase font-medium">Pricing</a>
            <a href="#kontak" class="nav-link text-sm uppercase font-medium">Kontak</a>

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
                class="nav-link text-white text-base uppercase font-medium w-full text-center py-2 hover:bg-[var(--primary)] transition">Visi
                & Misi</a>
            <a href="#struktur"
                class="nav-link text-white text-base uppercase font-medium w-full text-center py-2 hover:bg-[var(--primary)] transition">Struktur</a>
            <a href="#produk"
                class="nav-link text-white text-base uppercase font-medium w-full text-center py-2 hover:bg-[var(--primary)] transition">Produk
                & Layanan</a>
            <a href="#kontak"
                class="nav-link text-white text-base uppercase font-medium w-full text-center py-2 hover:bg-[var(--primary)] transition">Kontak</a>
            <a href="#"
                class="bg-white text-[var(--primary)] px-6 py-2 rounded-full font-semibold hover:bg-gray-100 transition mt-4">Client
                Portal</a>
        </nav>
    </div>
</header>
