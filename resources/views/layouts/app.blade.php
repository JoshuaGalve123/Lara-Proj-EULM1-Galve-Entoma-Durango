<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Timpla Café')</title>

    <!-- Shared CSS -->
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">

    <!-- Individual page CSS -->
    @stack('styles')
</head>

<body>

    <!-- NAVIGATION -->
    <header class="site-header">
        <nav class="navbar">

            <a href="{{ url('/') }}" class="logo">
                Timpla<span>.</span>
            </a>

            <div class="nav-links">
                <a href="{{ url('/') }}">Home</a>
                <a href="{{ url('/about') }}">About</a>
                <a href="{{ url('/contact') }}">Contact</a>
            </div>

        </nav>
    </header>

    <!-- PAGE CONTENT -->
    <main>
        @yield('content')
    </main>

    <!-- FOOTER -->
    <footer class="site-footer">

        <div class="footer-container">

            <div class="footer-brand">
                <h2>Timpla<span>.</span></h2>
                <p>
                    Every cup tells a story.
                    Experience coffee made with passion.
                </p>
            </div>

            <div class="footer-links">
                <h3>Quick Links</h3>
                <a href="{{ url('/') }}">Home</a>
                <a href="{{ url('/about') }}">About Us</a>
                <a href="{{ url('/contact') }}">Contact</a>
            </div>

            <div class="footer-contact">
                <h3>Contact Us</h3>
                <p>Email: templocafe@gmail.com</p>
                <p>Location: Butuan City, Philippines</p>
            </div>

        </div>

        <div class="footer-bottom">
            <p>© {{ date('Y') }} Timpla Café. All rights reserved.</p>
            <p>Created by: Galve, Entoma, and Durango</p>
        </div>

    </footer>

    <!-- Individual page JavaScript -->
    @stack('scripts')

</body>
</html>