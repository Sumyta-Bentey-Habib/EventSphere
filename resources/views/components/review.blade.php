<section class="py-24  relative overflow-hidden">
  <div class="max-w-6xl mx-auto px-6 relative z-10">
    <!-- Heading -->
    <h2
      class="text-4xl md:text-5xl font-extrabold mb-14 text-center text-transparent bg-clip-text bg-gradient-to-r from-purple-400 to-indigo-400"
      data-aos="fade-up"
      data-aos-duration="800"
    >
      What Our Users Say
    </h2>

    <!-- Testimonials -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
      @foreach ([
          ['name' => 'Alice Johnson', 'role' => 'Event Organizer', 'review' => 'EventSphere made managing my events so easy! I can track bookings, update details, and engage attendees all in one place.'],
          ['name' => 'Michael Lee', 'role' => 'Attendee', 'review' => 'I love browsing events here. The interface is intuitive and I can bookmark my favorite events effortlessly.'],
          ['name' => 'Sophia Patel', 'role' => 'Event Planner', 'review' => 'Creating events has never been smoother. The dashboard is user-friendly and gives me all the tools I need.'],
          ['name' => 'David Kim', 'role' => 'Community Organizer', 'review' => 'I appreciate the seamless experience. Bookmarking and managing multiple events is now a breeze.'],
          ['name' => 'Emily Smith', 'role' => 'Volunteer', 'review' => 'EventSphere keeps me updated on all upcoming events. The notifications and user interface are top-notch.'],
      ] as $user)
      <div
        class="bg-white/10 backdrop-blur-xl border border-white/10 shadow-xl rounded-2xl p-6 transform hover:-translate-y-2 hover:scale-105 transition-all duration-500 text-white"
        data-aos="fade-up"
        data-aos-duration="1000"
        data-aos-offset="200"
      >
        <div class="mb-4">
          <h3 class="text-lg font-bold text-indigo-300">{{ $user['name'] }}</h3>
          <p class="text-sm text-gray-300">{{ $user['role'] }}</p>
        </div>
        <p class="italic text-gray-200 leading-relaxed">“{{ $user['review'] }}”</p>
      </div>
      @endforeach
    </div>
  </div>

  <!-- Subtle gradient overlay effect -->
  <div class="absolute inset-0 bg-gradient-to-t from-black/20 via-transparent to-transparent pointer-events-none"></div>
</section>

<script>
  AOS.init({
    duration: 1000,
    once: true,
    easing: 'ease-in-out',
  });
</script>
