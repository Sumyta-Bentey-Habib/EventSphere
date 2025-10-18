<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - EventSphere</title>

    {{-- Tailwind + DaisyUI (Using your home page setup) --}}
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    {{-- Font Awesome --}}
    <script src="https://kit.fontawesome.com/a2e0e9c6b4.js" crossorigin="anonymous"></script>

    {{-- Custom Theme Styling --}}
    <style>
        /* Customize the sidebar active link color to match your purple/indigo gradient */
        .menu li .sidebar-link.active {
            background-color: #3b4254; /* A dark background from your navbar */
            color: #A35CF8 !important; /* Your signature light purple */
            border-left: 4px solid #6C3EF8;
            font-weight: 600;
        }
    </style>
</head>

<body class="bg-[#170E28] text-gray-200 min-h-screen"> {{-- DARK BACKGROUND --}}

    <div class="drawer lg:drawer-open">
        <input type="checkbox" id="sidebar-toggle" class="drawer-toggle" />

        {{-- Drawer Content (Main Page Area) --}}
        <div class="drawer-content flex flex-col p-4 lg:p-8">

            {{-- Mobile Navbar --}}
            <div class="lg:hidden flex justify-between items-center bg-[#2A3142] p-4 shadow-xl rounded-xl mb-4 text-white">
                <label for="sidebar-toggle" class="btn btn-ghost">
                    <i class="fas fa-bars text-xl"></i>
                </label>
                <span class="font-bold text-xl bg-gradient-to-r from-[#6C3EF8] to-[#A35CF8] text-transparent bg-clip-text">EventSphere</span>
                <span class="font-medium text-sm">👤 {{ Auth::user()->name ?? 'User' }}</span>
            </div>

            @yield('content')
        </div>

        {{-- Drawer Sidebar --}}
        <div class="drawer-side z-50">
            <label for="sidebar-toggle" class="drawer-overlay"></label>
            <ul class="menu p-4 w-80 min-h-full bg-[#170E28] text-gray-200 shadow-2xl"> {{-- DARK SIDEBAR BG --}}
                <li class="menu-title text-2xl font-bold bg-gradient-to-r from-[#6C3EF8] to-[#A35CF8] text-transparent bg-clip-text mb-4 border-b border-[#ffffff10] pb-2">EventSphere Menu</li>

                <li>
                    <a id="link-create" class="sidebar-link active hover:bg-[#2A3142]" onclick="showSection('create')">
                        <i class="fas fa-calendar-plus text-xl text-[#6C3EF8]"></i> Create Event
                    </a>
                </li>
                <li>
                    <a id="link-browse" class="sidebar-link hover:bg-[#2A3142]" onclick="showSection('browse')">
                        <i class="fas fa-search text-xl text-[#A35CF8]"></i> Browse Events
                    </a>
                </li>
                <li>
                    <a id="link-bookmarked" class="sidebar-link hover:bg-[#2A3142]" onclick="showSection('bookmarked')">
                        <i class="fas fa-bookmark text-xl text-yellow-400"></i> Bookmarked Events
                    </a>
                </li>

                <li class="menu-title mt-6 text-lg text-gray-400">Account Actions</li>
                <li>
                    <a href="{{ route('home') }}" class="text-gray-400 hover:bg-[#2A3142] hover:text-white">
                        <i class="fas fa-home text-lg"></i> Return to Home Page
                    </a>
                </li>
                <li>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="text-red-400 hover:bg-red-900/50 hover:text-white">
                            <i class="fas fa-sign-out-alt text-lg"></i> Logout
                        </button>
                    </form>
                </li>
            </ul>
        </div>
    </div>

    <script>
        // Sidebar link function
        function showSection(sectionId) {
            document.querySelectorAll('#sections > div').forEach(el => el.classList.add('hidden'));
            document.querySelectorAll('.sidebar-link').forEach(el => el.classList.remove('active'));
            document.getElementById(`section-${sectionId}`).classList.remove('hidden');
            document.getElementById(`link-${sectionId}`).classList.add('active');
            document.getElementById('sidebar-toggle').checked = false;
        }

        document.addEventListener('DOMContentLoaded', () => {
            if (document.getElementById('link-create')) {
                showSection('create');
            }
        });
    </script>
</body>
</html>
