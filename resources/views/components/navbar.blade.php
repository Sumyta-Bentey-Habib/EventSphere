<div class="sticky top-0 z-50 shadow-md navbar bg-[#170E28] text-white  px-4 lg:px-10 py-2">
    {{-- Navbar Start --}}
    <div class="navbar-start">
        {{-- Mobile dropdown --}}
        <div class="dropdown">
            <label tabindex="0" class="btn btn-ghost lg:hidden text-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 6h16M4 12h8m-8 6h16" />
                </svg>
            </label>
            <ul tabindex="0"
                class="menu menu-sm dropdown-content bg-[#2A3142] rounded-2xl mt-3 w-52 p-2 shadow-lg z-50 animate-slide-in">
                <li><a href="{{ route('home') }}" class="text-gray-200 hover:bg-[#3B4254] rounded-lg px-3 py-2">Home</a></li>
                <li><a href="{{ route('about') }}" class="text-gray-200 hover:bg-[#3B4254] rounded-lg px-3 py-2">About</a></li>
                <li><a href="{{ route('services') }}" class="text-gray-200 hover:bg-[#3B4254] rounded-lg px-3 py-2">Services</a></li>
                <li><a href="{{ route('contract') }}" class="text-gray-200 hover:bg-[#3B4254] rounded-lg px-3 py-2">Contract</a></li>
            </ul>
        </div>
        <a href="{{ route('home') }}" class="btn btn-ghost normal-case text-xl font-semibold bg-gradient-to-r from-[#6C3EF8] to-[#A35CF8] text-transparent bg-clip-text">
            EventSphere
        </a>
    </div>

    {{-- Navbar Center --}}
    <div class="navbar-center hidden lg:flex">
        <ul class="flex items-center gap-4 bg-[#2A3142] rounded-full px-6 py-2">
            <li><a href="{{ route('home') }}" class="px-4 py-1.5 rounded-full text-sm font-medium border border-transparent text-gray-300 hover:text-white hover:border-[#ffffff40] hover:bg-[#3B4254] transition">Home</a></li>
            <li><a href="{{ route('about') }}" class="px-4 py-1.5 rounded-full text-sm font-medium border border-transparent text-gray-300 hover:text-white hover:border-[#ffffff40] hover:bg-[#3B4254] transition">About</a></li>
            <li><a href="{{ route('services') }}" class="px-4 py-1.5 rounded-full text-sm font-medium border border-transparent text-gray-300 hover:text-white hover:border-[#ffffff40] hover:bg-[#3B4254] transition">Services</a></li>
            <li><a href="{{ route('contract') }}" class="px-4 py-1.5 rounded-full text-sm font-medium border border-transparent text-gray-300 hover:text-white hover:border-[#ffffff40] hover:bg-[#3B4254] transition">Contract</a></li>
        </ul>
    </div>

    {{-- Navbar End --}}
    <div class="navbar-end gap-3">
        @auth
        <form method="POST" action="/logout" class="hidden lg:block">
            @csrf
            <button
                class="px-5 py-2 rounded-full bg-[#2A3142] hover:bg-[#3A4052] text-white border border-[#ffffff40] transition duration-200">
                Logout
            </button>
        </form>
        <a href="{{ route('dashboard') }}"
            class="hidden lg:flex items-center gap-2 bg-gradient-to-r from-[#6C3EF8] to-[#A35CF8] text-white px-5 py-2 rounded-full border border-[#ffffff40] hover:opacity-90 transition">
            Dashboard
        </a>

        {{-- Mobile buttons --}}
        <div class="lg:hidden flex gap-2">
            <form method="POST" action="/logout">
                @csrf
                <button class="p-2 rounded-full bg-[#2A3142] hover:bg-[#3A4052] transition">
                    🚪
                </button>
            </form>
            <a href="{{ route('dashboard') }}" class="p-2 rounded-full bg-gradient-to-r from-[#6C3EF8] to-[#A35CF8] hover:opacity-90 transition">
                🏠
            </a>
        </div>

        @else
        <a href="{{ route('login') }}"
            class="hidden lg:flex items-center gap-2 bg-[#2A3142] hover:bg-[#3A4052] px-5 py-2 rounded-full border border-[#ffffff40] text-white transition">
            Login
        </a>
        <a href="{{ route('register') }}"
            class="hidden lg:flex items-center gap-2 bg-gradient-to-r from-[#6C3EF8] to-[#A35CF8] text-white px-5 py-2 rounded-full border border-[#ffffff40] hover:opacity-90 transition">
            Register
        </a>

        {{-- Mobile --}}
        <div class="lg:hidden flex gap-2">
            <a href="{{ route('login') }}" class="p-2 rounded-full bg-[#2A3142] hover:bg-[#3A4052] transition">🔑</a>
            <a href="{{ route('register') }}" class="p-2 rounded-full bg-gradient-to-r from-[#6C3EF8] to-[#A35CF8] hover:opacity-90 transition">✨</a>
        </div>
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
