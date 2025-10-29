<!-- Footer -->
<footer class="bg-[var(--dark)] text-white py-12">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid md:grid-cols-4 gap-8 mb-8">
            <div>
                <div class="flex items-center mb-4">
                    <img src="{{ asset('images/logo-kwu.png') }}" onerror="this.src='{{ asset('images/logo.png') }}'"
                        class="w-16 h-16 rounded-full mr-3 object-cover" alt="Logo Kelompok KWU">
                    <span class="font-bold text-xl">JENISO</span>
                </div>
                <p class="text-gray-300 text-sm leading-relaxed">Penyedia solusi teknologi terintegrasi untuk berbagai sektor bisnis melalui layanan software.</p>
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
                        <i class="fas fa-phone-alt mt-1 mr-3 text-[var(--accent)] flex-shrink-0"></i>
                        <a href="tel:87761198115" class="hover:text-white transition">
                            0877-6119-8115
                        </a>
                    </li>
                    <li class="flex items-start">
                        <i class="fab fa-whatsapp mt-1 mr-3 text-[var(--accent)] flex-shrink-0"></i>
                        <a href="https://wa.link/rfr0yw" target="_blank" class="hover:text-white transition">
                            WA Admin
                        </a>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-envelope mt-1 mr-3 text-[var(--accent)] flex-shrink-0"></i>
                        <a href="mailto:admin@jeniso.com" class="hover:text-white transition">
                            admin@jeniso.com
                        </a>
                    </li>
                </ul>
            </div>
            <div>
                <h3 class="text-lg font-semibold mb-4">Media Sosial</h3>
                <div class="flex space-x-4">
                    <a href="https://www.instagram.com/jeniso_group?igsh=MWd0OGlwcHNkbHdzcg=="
                        class="w-10 h-10 rounded-full bg-gray-700 hover:bg-[var(--primary)] transition flex items-center justify-center text-white text-xl"
                        title="Instagram">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#"
                        class="w-10 h-10 rounded-full bg-gray-700 hover:bg-[var(--primary)] transition flex items-center justify-center text-white text-xl"
                        title="Facebook">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>