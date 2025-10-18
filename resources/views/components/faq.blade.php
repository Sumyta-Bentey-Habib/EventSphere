<section class="relative py-24 text-white overflow-hidden">
  <!-- subtle glow background -->
  <div class="absolute inset-0 pointer-events-none"></div>

  <div class="relative max-w-6xl mx-auto px-6 z-10">
    <h2 class="text-4xl md:text-5xl font-extrabold text-center mb-16" data-aos="fade-up" data-aos-duration="800">
      <span class="bg-gradient-to-r from-purple-400 via-indigo-400 to-blue-500 text-transparent bg-clip-text">
        Frequently Asked Questions
      </span>
    </h2>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
      @foreach ([
        ['question' => 'How do I create a new event?', 'answer' => 'After logging in, go to your dashboard and click "Create Event" to add your event details.'],
        ['question' => 'How do I browse events?', 'answer' => 'Use the "Browse Events" page to see all available events. You can filter by category, date, or popularity.'],
        ['question' => 'Can I bookmark or save events?', 'answer' => 'Absolutely! Click the bookmark icon on any event to save it for later in your dashboard.'],
        ['question' => 'Who can see my created events?', 'answer' => 'Your events are visible to all users browsing the platform unless you set them as private.'],
        ['question' => 'Is there a limit to how many events I can create?', 'answer' => 'No, you can create as many events as you like once you have an account.']
      ] as $faq)
      <div
        class="relative bg-white/10 backdrop-blur-lg border border-white/10 rounded-2xl p-8
        transition-all duration-500 hover:-translate-y-1 hover:border-indigo-500/50 hover:shadow-[0_0_25px_rgba(138,43,226,0.3)]
        group"
        data-aos="fade-up"
        data-aos-duration="1000"
      >
        <h3 class="text-2xl font-bold mb-3 bg-gradient-to-r from-indigo-400 to-purple-400 text-transparent bg-clip-text">
          {{ $faq['question'] }}
        </h3>
        <p class="text-gray-300 leading-relaxed group-hover:text-gray-100 transition-colors duration-300">
          {{ $faq['answer'] }}
        </p>
      </div>
      @endforeach
    </div>
  </div>
</section>
