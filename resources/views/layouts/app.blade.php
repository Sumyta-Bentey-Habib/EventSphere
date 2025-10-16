<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'EventSphere Dashboard') }}</title>

    {{-- Tailwind + DaisyUI --}}
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>

    {{-- Font Awesome --}}
    <script src="https://kit.fontawesome.com/a2e0e9c6b4.js" crossorigin="anonymous"></script>
</head>
<body class="bg-base-200 min-h-screen flex flex-col">

    {{-- Navbar --}}
    <nav class="sticky top-0 z-40 flex justify-between items-center bg-base-100 p-4 shadow">
        <div class="flex items-center gap-2">
            {{-- Mobile Sidebar Toggle --}}
            <label for="sidebar-toggle" class="btn btn-ghost lg:hidden cursor-pointer">
                <i class="fas fa-bars text-lg"></i>
            </label>
            <a href="{{ route('dashboard') }}" class="font-bold text-xl">EventSphere</a>
        </div>
        <div class="hidden lg:flex items-center gap-4">
            <span class="font-medium">👤 {{ Auth::user()->name }}</span>
        </div>
    </nav>

    {{-- Drawer / Sidebar --}}
    <div class="flex-1 flex relative">
        <input type="checkbox" id="sidebar-toggle" class="hidden peer">

        {{-- Main content --}}
        <div class="flex-1 drawer-content p-4 transition-all duration-300 ease-in-out lg:ml-64">
            @yield('content')
        </div>

        {{-- Sidebar --}}
    </div>

</body>
</html>
