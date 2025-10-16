<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - EventSphere</title>

    {{-- Tailwind + DaisyUI --}}
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>

    {{-- Font Awesome (Icons) --}}
    <script src="https://kit.fontawesome.com/a2e0e9c6b4.js" crossorigin="anonymous"></script>

    {{-- AOS (Animation on Scroll) --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body class="bg-base-200 min-h-screen">

    {{-- Main Container (Drawer Layout) --}}
    <div class="drawer lg:drawer-open">
        <input type="checkbox" id="sidebar-toggle" class="drawer-toggle" />

        {{-- Drawer Content (Main Page Content Area) --}}
        <div class="drawer-content flex flex-col p-4 lg:p-8">

            {{-- Mobile Navbar (Visible on small screens) --}}
            <div class="lg:hidden flex justify-between items-center bg-base-100 p-4 shadow-md rounded-xl mb-4">
                <label for="sidebar-toggle" class="btn btn-ghost">
                    <i class="fas fa-bars text-lg"></i>
                </label>
                <span class="font-bold text-xl text-indigo-600">EventSphere</span>
                {{-- Assuming Auth::user() is available in the layout --}}
                <span class="font-medium text-sm">👤 {{ Auth::user()->name ?? 'User' }}</span>
            </div>

            @yield('content')
        </div>

        {{-- Drawer Sidebar --}}
        <div class="drawer-side z-50">
            <label for="sidebar-toggle" aria-label="close sidebar" class="drawer-overlay"></label>

            <ul class="menu p-4 w-80 min-h-full bg-base-100 text-base-content shadow-xl">

                {{-- Logo/Title --}}
                <li class="menu-title text-2xl font-bold text-indigo-600 mb-4 border-b pb-2">EventSphere Menu</li>

                {{-- Dashboard Links --}}
                <li>
                    <a id="link-create" class="sidebar-link active" onclick="showSection('create')">
                        <i class="fas fa-calendar-plus text-xl"></i>
                        Create Event
                    </a>
                </li>
                <li>
                    <a id="link-browse" class="sidebar-link" onclick="showSection('browse')">
                        <i class="fas fa-search text-xl"></i>
                        Browse Events
                    </a>
                </li>
                <li>
                    <a id="link-bookmarked" class="sidebar-link" onclick="showSection('bookmarked')">
                        <i class="fas fa-bookmark text-xl"></i>
                        Bookmarked Events
                    </a>
                </li>

                <li class="menu-title mt-6 text-lg">Account Actions</li>

                <li>
                    <a href="{{ route('home') }}" class="text-gray-600">
                        <i class="fas fa-home text-lg"></i>
                        Return to Home Page
                    </a>
                </li>

                {{-- Logout Button --}}
                <li>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="text-error hover:bg-red-50 hover:text-red-600">
                            <i class="fas fa-sign-out-alt text-lg"></i>
                            Logout
                        </button>
                    </form>
                </li>
            </ul>
        </div>
    </div>

    {{-- AOS Initialization --}}
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            once: true,
            duration: 800,
        });

        // Sidebar link function (defined in the layout so it's globally available)
        function showSection(sectionId) {
            // Hide all content sections
            document.querySelectorAll('#sections > div').forEach(el => el.classList.add('hidden'));

            // Remove active class from all sidebar items
            document.querySelectorAll('.sidebar-link').forEach(el => el.classList.remove('active'));

            // Show the target content section
            document.getElementById(`section-${sectionId}`).classList.remove('hidden');

            // Add active class to the corresponding sidebar link
            document.getElementById(`link-${sectionId}`).classList.add('active');

            // Close the drawer/sidebar on mobile
            document.getElementById('sidebar-toggle').checked = false;
        }

        // Default load: ensure the 'create' section is shown and active
        document.addEventListener('DOMContentLoaded', () => {
            // Check if the link element exists before calling showSection
            if (document.getElementById('link-create')) {
                showSection('create');
            }
        });
    </script>
</body>
</html>
