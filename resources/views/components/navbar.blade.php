<div class="sticky top-0 z-50 shadow-sm navbar bg-base-100 rounded-3xl px-4">
    {{-- Navbar Start --}}
    <div class="navbar-start">
        {{-- Mobile dropdown --}}
        <div class="dropdown">
            <label tabindex="0" class="btn btn-ghost lg:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 6h16M4 12h8m-8 6h16" />
                </svg>
            </label>
            <ul tabindex="0"
                class="menu menu-sm dropdown-content bg-base-100 rounded-box mt-3 w-52 p-2 shadow z-50 animate-slide-in">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('about') }}">About</a></li>
                <li><a href="{{ route('services') }}">Services</a></li>
                <li><a href="{{ route('contract') }}">Contract</a></li>
            </ul>
        </div>
        <a class="btn btn-ghost text-xl normal-case">EventSphere</a>
    </div>

    {{-- Navbar Center --}}
    <div class="navbar-center hidden lg:flex">
        <ul class="menu menu-horizontal px-1">
            <li><a href="{{ route('home') }}" class="hover:underline hover:text-indigo-600 transition duration-300">Home</a></li>
            <li><a href="{{ route('about') }}" class="hover:underline hover:text-indigo-600 transition duration-300">About</a></li>
            <li><a href="{{ route('services') }}" class="hover:underline hover:text-indigo-600 transition duration-300">Services</a></li>
            <li><a href="{{ route('contract') }}" class="hover:underline hover:text-indigo-600 transition duration-300">Contract</a></li>
        </ul>
    </div>

    {{-- Navbar End --}}
    <div class="navbar-end gap-2">
        @auth
        <form method="POST" action="/logout">
            @csrf
            <button class="btn btn-error">Logout</button>
        </form>
        <a href="{{ route('dashboard') }}" class="btn btn-primary">Dashboard</a>
        @else
        <a href="{{ route('login') }}" class="btn">Login</a>
        <a href="{{ route('register') }}" class="btn btn-primary">Register</a>
        @endauth
    </div>
</div>

{{-- Tailwind CSS Animation --}}
<style>
    @keyframes slide-in {
        0% {
            opacity: 0;
            transform: translateY(-10px);
        }
        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animate-slide-in {
        animation: slide-in 0.3s ease-out forwards;
    }
</style>
