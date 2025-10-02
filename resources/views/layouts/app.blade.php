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

</head>

<body class="bg-gray-50">

    <!-- Tombol Scroll-to-top (muncul saat menggulir) -->
    <button id="scrollTopBtn" class="floating-btn hidden" title="Kembali ke atas" aria-label="Scroll to top">
        <i class="fas fa-chevron-up text-xl"></i>
    </button>

    @include('layouts.navbar')

    <main>
        @yield('content')
    </main>

    @include('layouts.footer')

    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>

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

            // Scroll-to-top button behavior
            const scrollTopBtn = document.getElementById('scrollTopBtn');
            const scrollThreshold = 200; // px scrolled before showing button

            function toggleScrollTopBtn() {
                if (!scrollTopBtn) return;
                if (window.scrollY > scrollThreshold) {
                    scrollTopBtn.classList.remove('hidden');
                    scrollTopBtn.classList.add('animate__fadeIn');
                } else {
                    scrollTopBtn.classList.add('hidden');
                }
            }

            // Smooth scroll behavior for modern browsers
            function scrollToTopSmooth() {
                if ('scrollBehavior' in document.documentElement.style) {
                    window.scrollTo({
                        top: 0,
                        behavior: 'smooth'
                    });
                } else {
                    // Fallback for older browsers
                    let pos = window.scrollY;
                    const step = () => {
                        pos = Math.floor(pos * 0.8);
                        window.scrollTo(0, pos);
                        if (pos > 0) requestAnimationFrame(step);
                    };
                    requestAnimationFrame(step);
                }
            }

            // Wire up events
            window.addEventListener('scroll', toggleScrollTopBtn, {
                passive: true
            });
            if (scrollTopBtn) {
                scrollTopBtn.addEventListener('click', scrollToTopSmooth);
            }

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

            // Optional: check CMS connectivity if your project provides the endpoint
            /*
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
            */

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
