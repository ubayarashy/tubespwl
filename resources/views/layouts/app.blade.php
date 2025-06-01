<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mentor Kita')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        nav {
            background-color: #fff;
            border-bottom: 1px solid #e5e7eb;
            padding: 10px 50px;
        }
        .navbar-logo img {
            height: 40px;
        }
        .navbar-menu {
            display: flex;
            gap: 40px;
            margin-left: 50px;
        }
        .navbar-menu a {
            text-decoration: none;
            color: #4b5563;
            font-size: 16px;
        }
        .navbar-menu a.active {
            color: #facc15; /* Warna kuning untuk menu aktif */
            font-weight: 500;
        }
        .navbar-profile img {
            height: 40px;
            border-radius: 50%;
        }
    </style>
</head>
<body class="bg-gray-100">
    <nav class="flex justify-between items-center max-w-7xl mx-auto">
        <div class="flex items-center">
            <div class="navbar-logo">
                <a href="{{ route('dashboard') }}">
                    <img src="{{ asset('images/tes.png') }}" alt="Mentor Kita Logo">
                </a>
            </div>
            <div class="navbar-menu">
                <x-nav-link :href="route('dashboard')" :active="request()->routeIs('home')">
                    {{ __('Beranda') }}
                </x-nav-link>
                <x-nav-link :href="route('about')" :active="request()->routeIs('about')">
                    {{ __('Tentang') }}
                </x-nav-link>
                <x-nav-link :href="route('courses')" :active="request()->routeIs('courses')">
                    {{ __('Kelas') }}
                </x-nav-link>
                <x-nav-link :href="route('contact')" :active="request()->routeIs('contact')">
                    {{ __('Kontak') }}
                </x-nav-link>
                <x-nav-link :href="route('faq')" :active="request()->routeIs('faq')">
                    {{ __('FAQ') }}
                </x-nav-link>
            </div>
        </div>
        <div class="navbar-profile">
            @auth
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700">
                            <img src="https://via.placeholder.com/40" alt="Profile">
                        </button>
                    </x-slot>
                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>
                        <x-dropdown-link :href="route('logout')" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            {{ __('Log Out') }}
                        </x-dropdown-link>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </x-slot>
                </x-dropdown>
            @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                @endif
            @endauth
        </div>
    </nav>

    <main>
        @yield('content')
    </main>
</body>
</html>