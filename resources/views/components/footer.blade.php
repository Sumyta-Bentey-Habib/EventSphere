<footer class="bg-gradient-to-b from-[#1E2433] to-[#2B1E4E] text-white pt-16 pb-8 px-6 lg:px-20 relative overflow-hidden">
  <!-- Newsletter -->
  @include('components.newsletter')

  <div class="grid grid-cols-1 lg:grid-cols-5 gap-10 mb-12">
    <!-- Contact Info -->
    <div>
      <h3 class="font-semibold text-lg mb-3">Got Questions? Call us!</h3>
      <p class="text-gray-400 text-sm mb-4">
        123 Event Lane, Suite 400, City, State 10001
      </p>
      <p class="flex items-center gap-2 text-gray-300 text-sm mb-2">
        <i data-feather="phone" class="w-4 h-4 text-indigo-400"></i>
        +15551234567
      </p>
      <p class="flex items-center gap-2 text-gray-300 text-sm mb-4">
        <i data-feather="mail" class="w-4 h-4 text-indigo-400"></i>
      contact@eventsphere.com
      </p>
    </div>

    <!-- Company -->
    <div>
      <h4 class="font-semibold text-md mb-3 text-indigo-300">Company</h4>
      <ul class="space-y-2 text-gray-400 text-sm">
        <li><a href="{{ route('home') }}" class="hover:text-indigo-400 transition">Home</a></li>
        <li><a href="{{ route('about') }}" class="hover:text-indigo-400 transition">About Us</a></li>
        <li><a href="{{ route('services') }}" class="hover:text-indigo-400 transition">Our Team</a></li>
        <li><a href="{{ route('contract') }}" class="hover:text-indigo-400 transition">Contact</a></li>
      </ul>
    </div>

    <!-- Support -->
    <div>
      <h4 class="font-semibold text-md mb-3 text-indigo-300">Support</h4>
      <ul class="space-y-2 text-gray-400 text-sm">
        <li><a href="#" class="hover:text-indigo-400 transition">Help Center</a></li>
        <li><a href="#" class="hover:text-indigo-400 transition">Privacy Policy</a></li>
        <li><a href="#" class="hover:text-indigo-400 transition">Terms & Conditions</a></li>
      </ul>
    </div>

    <!-- Services -->
    <div>
      <h4 class="font-semibold text-md mb-3 text-indigo-300">Services</h4>
      <ul class="space-y-2 text-gray-400 text-sm">
        <li>Event Management</li>
        <li>Venue Booking</li>
        <li>Digital Marketing</li>
        <li>Ticketing & Promotion</li>
      </ul>
    </div>





  <!-- Bottom Bar -->
  <div class="text-center text-gray-500 text-xs mt-6 border-t border-white/10 pt-4">
    &copy; {{ date('Y') }} EventSphere. All Rights Reserved.
  </div>

  <script>
    feather.replace();
  </script>
</footer>
