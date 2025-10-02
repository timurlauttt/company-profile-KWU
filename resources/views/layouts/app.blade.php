<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') - CV Ku Belom ATS </title>
    <!-- Favicon - menggunakan gambar placeholder untuk demonstrasi -->
    <link rel="icon" href="{{ asset('images/logo.png') }}">
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <!-- Font Awesome untuk ikon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- tambahan CSS kecil untuk underline aktif navbar -->
    <style>
        /* underline aktif untuk navbar */
        .nav-active {
            border-bottom: 3px solid var(--primary);
            padding-bottom: .25rem;
            color: var(--primary);
        }

        /* sedikit transisi untuk perubahan state */
        .nav-link {
            transition: color .18s ease, border-color .18s ease;
        }
    </style>
</head>

<body class="bg-gray-50">

    <!-- Tombol Scroll-to-top (muncul saat menggulir) -->
    <button id="scrollTopBtn" class="floating-btn hidden" title="Kembali ke atas" aria-label="Scroll to top">
    </button>

    @include('layouts.navbar')

    <main>
        @yield('content')
    </main>

    @include('layouts.footer')

    <!-- Script: aktifkan kelas .nav-active sesuai section yang terlihat -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const sections = Array.from(document.querySelectorAll('section[id]'));
            const navLinks = Array.from(document.querySelectorAll('a.nav-link'));
            // Fix: ensure debounce variable exists
            let _lastToggle = 0;

            // pasang observer untuk highlight sesuai section
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const id = entry.target.id;
                        navLinks.forEach(a => {
                            const href = a.getAttribute('href') || '';
                            const target = href.startsWith('#') ? href.slice(1) : null;
                            if (target === id) {
                                a.classList.add('nav-active');
                            } else {
                                a.classList.remove('nav-active');
                            }
                        });
                    }
                });
            }, {
                root: null,
                // sesuaikan offset supaya navbar sticky tidak menutupi
                rootMargin: '-30% 0px -50% 0px',
                threshold: 0
            });

            sections.forEach(s => observer.observe(s));

            // klik pada nav segera menandai active (dan tutup mobile menu jika ada)
            navLinks.forEach(a => {
                a.addEventListener('click', (e) => {
                    // biarkan default anchor scroll berjalan; tambahkan class segera
                    navLinks.forEach(x => x.classList.remove('nav-active'));
                    a.classList.add('nav-active');

                    // tutup mobile menu bila terbuka dan pastikan aria-expanded tersinkron
                    const mobileMenuEl = document.getElementById('mobile-menu');
                    const mobileBtnEl = document.getElementById('mobile-menu-button');
                    if (mobileMenuEl && !mobileMenuEl.classList.contains('hidden')) {
                        mobileMenuEl.classList.add('hidden');
                    }
                    if (mobileBtnEl) {
                        mobileBtnEl.setAttribute('aria-expanded', 'false');
                    }
                });
            });

            // toggle mobile menu (jika tombol ada) — more robust with debug logs
            const mobileBtn = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');
            const mobileOverlay = document.getElementById('mobile-overlay');
            console.log('[nav] DOM ready. mobileBtn=%o, mobileMenu=%o, mobileOverlay=%o', mobileBtn, mobileMenu, mobileOverlay);
            if (mobileBtn && mobileMenu && mobileOverlay) {
                mobileBtn.addEventListener('click', (e) => {
                    e.preventDefault();
                    const now = Date.now();
                    if (now - _lastToggle < 300) {
                        console.log('[nav] hamburger toggle ignored (debounce)');
                        return;
                    }
                    _lastToggle = now;
                    const expanded = mobileBtn.getAttribute('aria-expanded') === 'true';
                    mobileBtn.setAttribute('aria-expanded', String(!expanded));
                    mobileMenu.classList.toggle('hidden');
                    mobileOverlay.classList.toggle('hidden');
                    console.log('[nav] hamburger toggled. after aria-expanded=%s, menuHidden=%s, overlayHidden=%s', mobileBtn.getAttribute('aria-expanded'), mobileMenu.classList.contains('hidden'), mobileOverlay.classList.contains('hidden'));
                });

                // close when clicking a mobile nav link
                mobileMenu.querySelectorAll('a.nav-link').forEach(a => {
                    a.addEventListener('click', (ev) => {
                        mobileMenu.classList.add('hidden');
                        mobileOverlay.classList.add('hidden');
                        mobileBtn.setAttribute('aria-expanded', 'false');
                        console.log('[nav] mobile link closed menu. aria-expanded now=%s, menuHidden=%s, overlayHidden=%s', mobileBtn.getAttribute('aria-expanded'), mobileMenu.classList.contains('hidden'), mobileOverlay.classList.contains('hidden'));
                    });
                });

                // close when clicking the overlay
                mobileOverlay.addEventListener('click', () => {
                    mobileMenu.classList.add('hidden');
                    mobileOverlay.classList.add('hidden');
                    mobileBtn.setAttribute('aria-expanded', 'false');
                    console.log('[nav] overlay clicked, closing menu');
                });
            }
        });
    </script>
</body>

</html>
