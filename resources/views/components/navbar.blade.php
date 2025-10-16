   <div class="sticky top-0 z-50 shadow-sm navbar bg-base-100 rounded-3xl">
        <div class="navbar-start">
            <div class="dropdown">
                <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h8m-8 6h16" />
                    </svg>
                </div>
                <ul tabindex="0"
                    class="menu menu-sm dropdown-content bg-base-100 rounded-box z-1 mt-3 w-52 p-2 shadow">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a>About</a></li>
                    <li><a>Services</a></li>
                    <li><a>Contact</a></li>
                </ul>
            </div>
            <a class="btn btn-ghost text-xl">EventSphere</a>
        </div>

        <div class="navbar-center hidden lg:flex">
            <ul class="menu menu-horizontal px-1">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a>About</a></li>
                <li><a>Services</a></li>
                <li><a>Contact</a></li>
            </ul>
        </div>

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
