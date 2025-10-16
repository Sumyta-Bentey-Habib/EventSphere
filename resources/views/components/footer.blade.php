<footer class="bg-indigo-100 text-gray-800 py-20 relative overflow-hidden">
    <div class="max-w-6xl mx-auto px-6 grid grid-cols-1 md:grid-cols-3 gap-12">

        <div data-aos="fade-up" data-aos-duration="800">
            <h3 class="text-3xl font-extrabold mb-4 tracking-wide text-indigo-700">EventSphere</h3>
            <p class="text-gray-600 mb-6">Your trusted partner for unforgettable events. We bring your vision to life with style and precision.</p>
            <div class="flex gap-4">
                <a href="#" class="text-indigo-600 hover:text-indigo-500 transition-all duration-300 transform hover:-translate-y-1 hover:scale-110">
                    <i data-feather="facebook" class="hover:drop-shadow-lg"></i>
                </a>
                <a href="#" class="text-indigo-600 hover:text-indigo-500 transition-all duration-300 transform hover:-translate-y-1 hover:scale-110">
                    <i data-feather="instagram" class="hover:drop-shadow-lg"></i>
                </a>
                <a href="#" class="text-indigo-600 hover:text-indigo-500 transition-all duration-300 transform hover:-translate-y-1 hover:scale-110">
                    <i data-feather="twitter" class="hover:drop-shadow-lg"></i>
                </a>
                <a href="#" class="text-indigo-600 hover:text-indigo-500 transition-all duration-300 transform hover:-translate-y-1 hover:scale-110">
                    <i data-feather="linkedin" class="hover:drop-shadow-lg"></i>
                </a>
            </div>
        </div>

        {{-- Quick Links --}}
        <div data-aos="fade-up" data-aos-duration="1000">
            <h3 class="text-2xl font-bold mb-4 text-indigo-700">Quick Links</h3>
            <ul class="space-y-3">
                <li><a href="{{ route('home') }}" class="hover:text-indigo-500 transition-colors duration-300">Home</a></li>
                <li><a href="{{ route('about') }}" class="hover:text-indigo-500 transition-colors duration-300">About</a></li>
                <li><a href="{{ route('services') }}" class="hover:text-indigo-500 transition-colors duration-300">Services</a></li>
                <li><a href="{{ route('contract') }}" class="hover:text-indigo-500 transition-colors duration-300">Contract</a></li>
            </ul>
        </div>

        {{-- Contact --}}
        <div data-aos="fade-up" data-aos-duration="1200">
            <h3 class="text-2xl font-bold mb-4 text-indigo-700">Get in Touch</h3>
            <ul class="space-y-3">
                <li class="flex items-center gap-2">
                    <i data-feather="mail" class="text-indigo-500"></i>
                    <a href="mailto:contact@eventsphere.com" class="hover:text-indigo-600 transition-colors duration-300">contact@eventsphere.com</a>
                </li>
                <li class="flex items-center gap-2">
                    <i data-feather="phone" class="text-indigo-500"></i>
                    <a href="tel:+15551234567" class="hover:text-indigo-600 transition-colors duration-300">+1 (555) 123-4567</a>
                </li>
                <li class="flex items-start gap-2">
                    <i data-feather="map-pin" class="mt-1 text-indigo-500"></i>
                    <span>123 Event Lane, Suite 400,<br>City, State 10001</span>
                </li>
            </ul>
        </div>

    </div>

    <div class="mt-12 text-center text-gray-500 border-t border-indigo-200 pt-6">
        &copy; {{ date('Y') }} EventSphere. All rights reserved.
    </div>

    <script>
        feather.replace();
    </script>
</footer>
