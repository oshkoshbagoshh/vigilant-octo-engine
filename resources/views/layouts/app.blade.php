<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Your App</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex flex-col min-h-screen">

<!-- Navbar -->
<nav class="bg-gray-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            <!-- Logo -->
            <div class="flex-shrink-0">
                <a href="{{ route('home') }}" class="text-white font-bold text-xl">YourApp</a>
            </div>
            <!-- Desktop Menu -->
            <div class="hidden md:block">
                <div class="ml-10 flex items-baseline space-x-4">
                    <a href="{{ route('home') }}" class="px-3 py-2 rounded-md text-sm font-medium text-white hover:bg-gray-700">Home</a>
                    <a href="{{ route('about') }}" class="px-3 py-2 rounded-md text-sm font-medium text-white hover:bg-gray-700">About</a>
                    <a href="{{ route('contact') }}" class="px-3 py-2 rounded-md text-sm font-medium text-white hover:bg-gray-700">Contact</a>

                    <!-- Auth Links -->
                    @guest
                        {{--                        <a href="{{ route('login') }}" class="px-3 py-2 rounded-md text-sm font-medium text-white hover:bg-gray-700">Login</a>--}}
                        <a href="#" class="px-3 py-2 rounded-md text-sm font-medium text-white hover:bg-gray-700">Login</a>
                        @if (Route::has('register'))
                            {{--                            <a href="{{ route('register') }}" class="px-3 py-2 rounded-md text-sm font-medium text-white hover:bg-gray-700">Register</a>--}}
                            <a href="#" class="px-3 py-2 rounded-md text-sm font-medium text-white hover:bg-gray-700">Register</a>
                        @endif
                    @else
                        <span class="px-3 py-2 rounded-md text-sm font-medium text-white">{{ Auth::user()->name }}</span>
                        <a href="{{ route('logout') }}"
                           class="px-3 py-2 rounded-md text-sm font-medium text-white hover:bg-gray-700"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            @csrf
                        </form>
                    @endguest
                </div>
            </div>
            <!-- Mobile Menu Button -->
            <div class="md:hidden">
                <button id="mobile-menu-button" class="text-white focus:outline-none">
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8h16M4 16h16"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden md:hidden">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
            <a href="{{ route('home') }}" class="block px-3 py-2 rounded-md text-base font-medium text-white hover:bg-gray-700">Home</a>
            <a href="{{ route('about') }}" class="block px-3 py-2 rounded-md text-base font-medium text-white hover:bg-gray-700">About</a>
            <a href="{{ route('contact') }}" class="block px-3 py-2 rounded-md text-base font-medium text-white hover:bg-gray-700">Contact</a>

            <!-- Auth Links for Mobile -->
            @guest
                {{--                <a href="{{ route('login') }}" class="block px-3 py-2 rounded-md text-base font-medium text-white hover:bg-gray-700">Login</a>--}}
                <a href=#" class="block px-3 py-2 rounded-md text-base font-medium text-white hover:bg-gray-700">Login</a>
                @if (Route::has('register'))
                    {{--                    <a href="{{ route('register') }}" class="block px-3 py-2 rounded-md text-base font-medium text-white hover:bg-gray-700">Register</a>--}}
                    <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-white hover:bg-gray-700">Register</a>
                @endif
            @else
                <span class="block px-3 py-2 rounded-md text-base font-medium text-white">{{ Auth::user()->name }}</span>
                <a href="{{ route('logout') }}"
                   class="block px-3 py-2 rounded-md text-base font-medium text-white hover:bg-gray-700"
                   onclick="event.preventDefault(); document.getElementById('logout-form-mobile').submit();">
                    Logout
                </a>
                <form id="logout-form-mobile" action="{{ route('logout') }}" method="POST" class="hidden">
                    @csrf
                </form>
            @endguest
        </div>
    </div>
</nav>

<!-- Main Content -->
<main class="flex-grow">
    @yield('content')
</main>

<!-- Footer -->
<footer class="bg-gray-800">
    <div class="max-w-7xl mx-auto py-4 px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row justify-between items-center text-white">
            <p class="text-sm">&copy; {{ date('Y') }} YourApp. All rights reserved.</p>
            <div class="mt-2 md:mt-0">
                <a href="#" class="text-sm hover:underline mx-2">Privacy Policy</a>
                <a href="#" class="text-sm hover:underline mx-2">Terms of Service</a>
                <a href="#" class="text-sm hover:underline mx-2">Contact</a>
            </div>
        </div>
    </div>
</footer>

<!-- Mobile Menu Toggle Script -->
<script>
    const menuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');

    menuButton.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
</script>
</body>
</html>
