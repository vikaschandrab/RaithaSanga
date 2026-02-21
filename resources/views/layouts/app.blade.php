<!DOCTYPE html>
<html lang="kn">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'ಕೃಷಿ ರಾಜ್ಯ ರೈತ ಸಂಘ | Krushi Rajya Raitha Sangha')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="icon" type="image/png" href="{{ asset('images/logo/KRRS.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('images/logo/KRRS.png') }}">
    @stack('head')
</head>
<body>
    @php
        $topBarKn = trim($__env->yieldContent('top_bar_kn')) ?: 'ಕೃಷಿ ರಾಜ್ಯ ರೈತ ಸಂಘ - ನೆಲ, ನೀರು, ಬೆಲೆ ನ್ಯಾಯಕ್ಕಾಗಿ';
        $topBarEn = trim($__env->yieldContent('top_bar_en')) ?: 'Krushi Rajya Raitha Sangha - For fair land, water, and price rights';
    @endphp

    <div id="preloader">
        <img src="{{ asset('images/logo/KRRS.png') }}" alt="Loading">
    </div>

    <div class="top-bar" data-kn="{{ $topBarKn }}" data-en="{{ $topBarEn }}">
        {{ $topBarKn }}
    </div>

    <header class="container">

        <nav class="nav">
            <a href="{{ route('home') }}" class="brand">
                <img src="{{ asset('images/logo/KRRS.png') }}" alt="KRRS Logo" class="logo">
                <span data-kn="ಕೃಷಿ ರಾಜ್ಯ ರೈತ ಸಂಘ" data-en="Krushi Rajya Raitha Sangha">
                    ಕೃಷಿ ರಾಜ್ಯ ರೈತ ಸಂಘ
                </span>
            </a>

            <div class="nav-right">
                <ul class="menu">
                    <li>
                        <a href="/"
                        data-kn="ಮುಖಪುಟ"
                        data-en="Home">ಮುಖಪುಟ</a>
                    </li>
                    <li>
                        <a href="/registration-details"
                        data-kn="ನೋಂದಣಿ ವಿವರಗಳು"
                        data-en="Registration Details">
                        ನೋಂದಣಿ ವಿವರಗಳು
                        </a>
                    </li>
                </ul>

                <button class="lang-switch" id="lang-toggle" type="button">English</button>
            </div>
        </nav>

        @hasSection('hero')
            <div class="hero">
                @yield('hero')
            </div>
        @endif

    </header>

    <main class="container" id="@yield('main_id', 'info')">
        @yield('content')
    </main>

    <footer class="site-footer">
        <div class="container footer-inner">
             <a href="{{ route('home') }}" class="footer-brand">
                <img src="{{ asset('images/logo/KRRS.png') }}" alt="KRRS Logo" class="footer-logo">
                <div class="footer-text">
                    <strong data-kn="ಕೃಷಿ ರಾಜ್ಯ ರೈತ ಸಂಘ" data-en="Krushi Rajya Raitha Sangha">
                        ಕೃಷಿ ರಾಜ್ಯ ರೈತ ಸಂಘ
                    </strong>
                    <p data-kn="ರೈತ ಕುಟುಂಬಗಳಿಗೆ ಬಲವಾದ ಭವಿಷ್ಯ"
                        data-en="Building a stronger future for farming families">
                        ರೈತ ಕುಟುಂಬಗಳಿಗೆ ಬಲವಾದ ಭವಿಷ್ಯ
                    </p>
                </div>
            </a>

            <div class="footer-credit">
                <p>
                    <span data-kn="© 2026 ಕೃಷಿ ರಾಜ್ಯ ರೈತ ಸಂಘ | ವಿನ್ಯಾಸ, ಅಭಿವೃದ್ದಿ ಮತ್ತು ನಿರ್ವಹಣೆ: "
                        data-en="© 2026 Krushi Rajya Raitha Sangha | Designed, Developed & Maintained by ">
                        © 2026 ಕೃಷಿ ರಾಜ್ಯ ರೈತ ಸಂಘ | ವಿನ್ಯಾಸ, ಅಭಿವೃದ್ದಿ ಮತ್ತು ನಿರ್ವಹಣೆ:
                    </span>
                    <a href="https://meetmytech.com/" target="_blank" rel="noopener">meetmytech</a>
                </p>
            </div>
        </div>
    </footer>
    <script>
        const toggleButton = document.getElementById('lang-toggle');
        const translatableNodes = document.querySelectorAll('[data-kn][data-en]');
        const languageStorageKey = 'site_language';
        let currentLanguage = 'kn';

        const getSavedLanguage = () => {
            try {
                const savedLanguage = localStorage.getItem(languageStorageKey);
                return savedLanguage === 'en' || savedLanguage === 'kn' ? savedLanguage : 'kn';
            } catch (error) {
                return 'kn';
            }
        };

        const saveLanguage = (language) => {
            try {
                localStorage.setItem(languageStorageKey, language);
            } catch (error) {
                // Ignore storage failures.
            }
        };

        const applyLanguage = (language) => {
            translatableNodes.forEach((node) => {
                node.innerHTML = node.dataset[language];
            });

            document.documentElement.lang = language;
            currentLanguage = language;
            toggleButton.textContent = language === 'kn' ? 'English' : 'ಕನ್ನಡ';
            saveLanguage(language);
        };

        toggleButton.addEventListener('click', () => {
            applyLanguage(currentLanguage === 'kn' ? 'en' : 'kn');
        });

        applyLanguage(getSavedLanguage());

        window.addEventListener('load', () => {
            const preloader = document.getElementById('preloader');
            if (preloader) {
                preloader.style.opacity = '0';
                preloader.style.transition = 'opacity 0.4s ease';
                setTimeout(() => preloader.remove(), 400);
            }
        });
    </script>
    @stack('scripts')
</body>
</html>




