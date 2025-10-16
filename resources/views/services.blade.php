<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services - EventSphere</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/feather-icons"></script>
</head>
<body class="bg-gray-50 text-gray-800">

    @include('components.navbar')

    <section class="py-24 bg-gradient-to-r from-indigo-50 via-white to-indigo-50">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <h2 class="text-5xl font-extrabold text-indigo-700 mb-16" data-aos="fade-down" data-aos-duration="1000">Our Event-Centric Services ✨</h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">

                {{-- Event Management Card --}}
                <div class="card bg-white shadow-xl p-10 rounded-2xl border border-gray-100 transform hover:shadow-indigo-300/50 hover:bg-indigo-50 transition-all duration-500" data-aos="fade-right" data-aos-duration="1000">
                    <div class="flex flex-col items-center">
                        <div class="text-indigo-600 mb-6 text-7xl animate-bounce">
                            <i data-feather="calendar"></i>
                        </div>
                        <h3 class="text-3xl font-extrabold text-indigo-700 mb-4 border-b-2 border-indigo-200 pb-2 w-full">Event Management</h3>
                    </div>
                    <p class="text-gray-700 leading-relaxed mt-4">Plan and organize complex events effortlessly. We handle scheduling, venue logistics, and on-site execution professionally from start to finish.</p>
                </div>

                {{-- Community Engagement Card --}}
                <div class="card bg-white shadow-xl p-10 rounded-2xl border border-gray-100 transform hover:shadow-indigo-300/50 hover:bg-indigo-50 transition-all duration-500" data-aos="fade-up" data-aos-duration="1200">
                    <div class="flex flex-col items-center">
                        <div class="text-indigo-600 mb-6 text-7xl animate-bounce">
                            <i data-feather="users"></i>
                        </div>
                        <h3 class="text-3xl font-extrabold text-indigo-700 mb-4 border-b-2 border-indigo-200 pb-2 w-full">Community Engagement</h3>
                    </div>
                    <p class="text-gray-700 leading-relaxed mt-4">Keep your attendees engaged and informed. Manage RSVPs, send real-time updates, and facilitate connections for a superior community experience.</p>
                </div>

                {{-- Analytics & Feedback Card --}}
                <div class="card bg-white shadow-xl p-10 rounded-2xl border border-gray-100 transform hover:shadow-indigo-300/50 hover:bg-indigo-50 transition-all duration-500" data-aos="fade-left" data-aos-duration="1400">
                    <div class="flex flex-col items-center">
                        <div class="text-indigo-600 mb-6 text-7xl animate-bounce">
                            <i data-feather="bar-chart-2"></i>
                        </div>
                        <h3 class="text-3xl font-extrabold text-indigo-700 mb-4 border-b-2 border-indigo-200 pb-2 w-full">Analytics & Feedback</h3>
                    </div>
                    <p class="text-gray-700 leading-relaxed mt-4">Leverage powerful data to improve. Gain actionable insights from attendee data, analyze performance metrics, and collect valuable post-event feedback.</p>
                </div>

            </div>
        </div>
    </section>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
        feather.replace(); // Initialize Feather icons
    </script>
</body>
</html>
