<!-- Footer -->
<footer class="bg-[var(--dark)] text-white py-12">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid md:grid-cols-4 gap-8 mb-8">
            <div>
                <div class="flex items-center mb-4">
                    <img src="{{ asset('images/logo-kwu.png') }}" onerror="this.src='{{ asset('images/logo.png') }}'"
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
                        <span>Jl. Dulu Aja Siapa Tau Cocok</span>
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
                    <a href="#"
                        class="w-10 h-10 rounded-full bg-gray-700 hover:bg-[var(--primary)] transition flex items-center justify-center text-white text-xl"
                        title="Facebook">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#"
                        class="w-10 h-10 rounded-full bg-gray-700 hover:bg-[var(--primary)] transition flex items-center justify-center text-white text-xl"
                        title="Twitter">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#"
                        class="w-10 h-10 rounded-full bg-gray-700 hover:bg-[var(--primary)] transition flex items-center justify-center text-white text-xl"
                        title="Instagram">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" target="_blank"
                        class="w-10 h-10 rounded-full bg-gray-700 hover:bg-green-500 transition flex items-center justify-center text-white text-xl"
                        title="WhatsApp">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                    <a href="#"
                        class="w-10 h-10 rounded-full bg-gray-700 hover:bg-[var(--primary)] transition flex items-center justify-center text-white text-xl"
                        title="YouTube">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="border-t border-gray-700 pt-8 text-center text-gray-400 text-sm">
            <p>&copy; 2025 Kelompok 4 KWU FT-07-A .</p>
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
