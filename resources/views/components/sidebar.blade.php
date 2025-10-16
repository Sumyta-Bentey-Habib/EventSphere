@php
    $currentRoute = Route::currentRouteName();
@endphp

<aside
    class="fixed lg:static inset-y-0 left-0 z-50 w-64 bg-base-100 shadow-md flex flex-col justify-between transition-all duration-300 ease-in-out
           lg:w-64 lg:translate-x-0
           -translate-x-64 lg:peer-checked:translate-x-0"
    id="sidebar"
>
    {{-- User Info --}}
    <div class="p-4 flex items-center gap-3 border-b border-base-300">
        <div class="avatar">
            <div class="w-12 rounded-full">
                <img src="https://i.pravatar.cc/100?img={{ Auth::id() }}" alt="User Avatar" />
            </div>
        </div>
        <div>
            <h2 class="font-bold">{{ Auth::user()->name }}</h2>
            <p class="text-sm opacity-70">{{ Auth::user()->email }}</p>
        </div>
    </div>

    {{-- Navigation --}}
    <ul class="menu flex-1 p-4 gap-1">
        <li>
            <a href="{{ route('dashboard') }}" class="flex items-center gap-3 {{ $currentRoute == 'dashboard' ? 'bg-primary text-white rounded-lg' : '' }}">
                <i class="fas fa-home w-5"></i> <span class="flex-1">Dashboard</span>
            </a>
        </li>
        <li>
            <a href="{{ route('events.store') }}" class="flex items-center gap-3 {{ $currentRoute == 'events.store' ? 'bg-primary text-white rounded-lg' : '' }}">
                <i class="fas fa-plus-circle w-5"></i> <span class="flex-1">Create Event</span>
            </a>
        </li>
        <li>
            <a href="{{ route('events.browse') }}" class="flex items-center gap-3 {{ $currentRoute == 'events.browse' ? 'bg-primary text-white rounded-lg' : '' }}">
                <i class="fas fa-compass w-5"></i> <span class="flex-1">Browse</span>
            </a>
        </li>
        <li>
            <a href="{{ route('events.bookmarked') }}" class="flex items-center gap-3 {{ $currentRoute == 'events.bookmarked' ? 'bg-primary text-white rounded-lg' : '' }}">
                <i class="fas fa-bookmark w-5"></i> <span class="flex-1">Bookmarked</span>
            </a>
        </li>
        <li>
            <a href="{{ route('home') }}" class="flex items-center gap-3">
                <i class="fas fa-arrow-left w-5"></i> <span class="flex-1">Return Home</span>
            </a>
        </li>
    </ul>

    {{-- Logout --}}
    <form action="{{ route('logout') }}" method="POST" class="p-4">
        @csrf
        <button type="submit" class="btn btn-error w-full text-white flex items-center justify-center gap-2">
            <i class="fas fa-sign-out-alt"></i> Logout
        </button>
    </form>
</aside>
