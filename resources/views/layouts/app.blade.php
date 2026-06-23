<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description"
        content="@yield('meta_description', 'At TheLifeCents, we help businesses and entrepreneurs grow online, attract the right audience, and boost conversions. Every strategy is practical, data-driven, and designed for real results.')">
    <title>TheLifeCents | @yield('title', 'Expert SEO, Content, and Digital Marketing Solutions')</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Outfit:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <!-- For modern browsers -->
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">


</head>

<body class="dark-theme">
    <!-- Header/Navigation -->
    <header id="main-header" class="header-glass">
        <div class="nav-container">
            <a href="{{ route('home') }}" class="logo" id="site-logo">
                <img src="{{ asset('images/logo2.png') }}" alt="TheLifeCents" class="logo-icon"
                    style="height:50px; width: auto;">
                <span class="logo-text">THE<span>LIFECENTS</span></span>
            </a>

            <nav id="nav-menu">
                <ul>
                    <li><a href="{{ route('home') }}" class="nav-link {{ Route::is('home') ? 'active' : '' }}">Home</a>
                    </li>
                    <li><a href="{{ route('about') }}"
                            class="nav-link {{ Route::is('about') ? 'active' : '' }}">About</a></li>
                    <li><a href="{{ route('services') }}"
                            class="nav-link {{ Route::is('services') ? 'active' : '' }}">Services</a></li>
                    <li><a href="{{ route('blog') }}" class="nav-link {{ Route::is('blog') ? 'active' : '' }}">Blog</a>
                    </li>
                    <li><a href="{{ route('contact') }}"
                            class="nav-link {{ Route::is('contact') ? 'active' : '' }}">Contact</a></li>
                </ul>
            </nav>

            <div class="header-actions">
                <!-- Theme Toggle -->
                <button id="theme-toggle" class="icon-btn" aria-label="Toggle Theme">
                    <svg class="sun-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="5"></circle>
                        <line x1="12" y1="1" x2="12" y2="3"></line>
                        <line x1="12" y1="21" x2="12" y2="23"></line>
                        <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line>
                        <line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line>
                        <line x1="1" y1="12" x2="3" y2="12"></line>
                        <line x1="21" y1="12" x2="23" y2="12"></line>
                        <line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line>
                        <line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line>
                    </svg>
                    <svg class="moon-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
                    </svg>
                </button>

                <!-- Mobile Menu Button -->
                <button id="mobile-menu-btn" class="icon-btn mobile-only" aria-label="Toggle Navigation Menu">
                    <svg class="menu-open-icon" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="3" y1="12" x2="21" y2="12"></line>
                        <line x1="3" y1="6" x2="21" y2="6"></line>
                        <line x1="3" y1="18" x2="21" y2="18"></line>
                    </svg>
                    <svg class="menu-close-icon" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        style="display:none;">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg>
                </button>

                <a href="{{ route('contact') }}" class="btn btn-primary btn-sm desktop-only">Contact Now</a>
            </div>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-grid">
                <div class="footer-brand">
                    <a href="{{ route('home') }}" class="logo">
                        <svg width="28" height="24" viewBox="0 0 36 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 28L12 2H16L8 28H4Z" fill="currentColor" />
                            <path d="M11 28L19 2H23L15 28H11Z" fill="currentColor" />
                            <path d="M18 28L26 2H30L22 28H18Z" fill="currentColor" />
                        </svg>
                        <span class="logo-text">THE<span>LIFECENTS</span></span>
                    </a>
                    <p class="footer-tagline">At TheLifeCents, we help businesses grow online, attract the right
                        audience, and boost conversions.</p>
                    <div class="social-links">
                        <a href="https://www.facebook.com/Junaidii.Hafeez/" target="_blank" aria-label="Facebook">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                            </svg>
                        </a>
                        <a href="https://twitter.com/@junaidihafeez" target="_blank" aria-label="Twitter">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path
                                    d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z">
                                </path>
                            </svg>
                        </a>
                        <a href="https://www.linkedin.com/in/junaidi-hafeez/" target="_blank" aria-label="LinkedIn">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path
                                    d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z">
                                </path>
                                <rect x="2" y="9" width="4" height="12"></rect>
                                <circle cx="4" cy="4" r="2"></circle>
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="footer-links-group">
                    <h4>Services</h4>
                    <ul>
                        <li><a href="{{ route('services') }}">Search Engine Optimization</a></li>
                        <li><a href="{{ route('services') }}">Content Marketing</a></li>
                        <li><a href="{{ route('services') }}">Guest Posting</a></li>
                        <li><a href="{{ route('services') }}">Copywriting Brilliance</a></li>
                        <li><a href="{{ route('services') }}">Social Media Marketing</a></li>
                        <li><a href="{{ route('services') }}">Website Design & Development</a></li>
                    </ul>
                </div>

                <div class="footer-links-group">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('about') }}">About</a></li>
                        <li><a href="{{ route('blog') }}">Blog</a></li>
                        <li><a href="{{ route('services') }}">Services</a></li>
                        <li><a href="{{ route('contact') }}">Contact</a></li>
                    </ul>
                </div>

                <div class="footer-links-group">
                    <h4>Get In Touch</h4>
                    <p>Haripur, Pakistan</p>
                    <p class="footer-contact-info">
                        <a href="mailto:info@thelifecents.com">Email: info@thelifecents.com</a><br>
                        <a href="tel:+923345557778">Phone: +92-334-5557778</a>
                    </p>
                </div>
            </div>

            <div class="footer-bottom">
                <p>&copy; {{ date('Y') }} TheLifeCents. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Custom JS -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>