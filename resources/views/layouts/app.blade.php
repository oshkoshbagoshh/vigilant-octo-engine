<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bulma CSS CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css" />
    <title> @yield('title','TFN Music Services') </title>
</head>
<body>
<!-- Navbar -->
<nav class="navbar is-dark" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a class="navbar-item" href="{{ route('home') }}">
            <strong>TFN Music</strong>
        </a>
        <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasic">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>
    </div>
    <div id="navbarBasic" class="navbar-menu">
        <div class="navbar-start">
            <a href="{{ route('home') }}" class="navbar-item">
                Home
            </a>
            <a href="{{ route('about') }}" class="navbar-item">
                About
            </a>
            <a href="{{ route('contact') }}" class="navbar-item">
                Contact
            </a>
        </div>
        <div class="navbar-end">
            @guest
                <div class="navbar-item">
                    <div class="buttons">
                        {{-- Replace "#" with route('login') if routes are set --}}
                        <a href="#" class="button is-light">
                            Login
                        </a>
                        @if (Route::has('register'))
                            {{-- Replace "#" with route('register') if routes are set --}}
                            <a href="#" class="button is-primary">
                                <strong>Register</strong>
                            </a>
                        @endif
                    </div>
                </div>
            @else
                <div class="navbar-item">
                    <span>{{ Auth::user()->name }}</span>
                </div>
                <div class="navbar-item">
                    <div class="buttons">
                        <a href="{{ route('logout') }}" class="button is-light"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>
            @endguest
        </div>
    </div>
</nav>

<!-- Main Content -->
<section class="section">
    <div class="container">
        @yield('content')
    </div>
</section>

<!-- Footer -->
<footer class="footer">
    <div class="content has-text-centered">
        <p>&copy; {{ date('Y') }} TFN -  All rights reserved.</p>
        (c) Copyright 2025 Scrooge McDuck. All Rights Reserved.
        <a class="text-reset fw-bold text-decoration-none" target="_blank"
           href="https://en.wikipedia.org/wiki/Scrooge_McDuck"></a>


        <p>
            <a href="#">Privacy Policy</a> |
            <a href="#">Terms of Service</a> |
            <a href="#">Contact</a>
        </p>
    </div>
</footer>

<!-- Bulma Navbar Burger Toggle Script -->
<script>
    document.addEventListener('DOMContentLoaded', () => {
        // Get all "navbar-burger" elements
        const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

        // Check if there are any navbar burgers
        if ($navbarBurgers.length > 0) {
            // Add a click event on each of them
            $navbarBurgers.forEach( el => {
                el.addEventListener('click', () => {
                    // Get the target from the "data-target" attribute
                    const target = el.dataset.target;
                    const $target = document.getElementById(target);

                    // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
                    el.classList.toggle('is-active');
                    $target.classList.toggle('is-active');
                });
            });
        }
    });
</script>
</body>
</html>
