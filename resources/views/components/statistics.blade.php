<section class="py-24 text-white relative overflow-hidden ">
  <div class="max-w-6xl mx-auto px-6 text-center relative z-10" data-aos="fade-up" data-aos-duration="1000">
    <h2 class="text-4xl md:text-5xl font-extrabold mb-14 text-transparent bg-clip-text bg-gradient-to-r from-purple-400 to-indigo-400">
      Our Achievements
    </h2>

    <div class="grid grid-cols-1 sm:grid-cols-3 gap-12">
      <div class="bg-white/10 backdrop-blur-xl border border-white/10 rounded-2xl p-8 shadow-lg hover:scale-105 transition-transform duration-500">
        <h3 class="text-6xl font-extrabold text-indigo-300 counter" data-target="500">0</h3>
        <p class="text-gray-200 mt-3 text-lg">Events Hosted</p>
      </div>
      <div class="bg-white/10 backdrop-blur-xl border border-white/10 rounded-2xl p-8 shadow-lg hover:scale-105 transition-transform duration-500">
        <h3 class="text-6xl font-extrabold text-indigo-300 counter" data-target="10000">0</h3>
        <p class="text-gray-200 mt-3 text-lg">Happy Attendees</p>
      </div>
      <div class="bg-white/10 backdrop-blur-xl border border-white/10 rounded-2xl p-8 shadow-lg hover:scale-105 transition-transform duration-500">
        <h3 class="text-6xl font-extrabold text-indigo-300 counter" data-target="50">0</h3>
        <p class="text-gray-200 mt-3 text-lg">Cities Covered</p>
      </div>
    </div>
  </div>

  <!-- Soft overlay -->
  <div class="absolute inset-0 bg-gradient-to-t from-black/20 via-transparent to-transparent pointer-events-none"></div>
</section>

{{-- Counter JS --}}
<script>
document.addEventListener("DOMContentLoaded", () => {
  const counters = document.querySelectorAll('.counter');
  const speed = 150; // lower = faster

  const runCounter = (counter) => {
    const updateCount = () => {
      const target = +counter.getAttribute('data-target');
      const count = +counter.innerText;
      const increment = target / speed;

      if (count < target) {
        counter.innerText = Math.ceil(count + increment);
        setTimeout(updateCount, 20);
      } else {
        counter.innerText = target.toLocaleString();
      }
    };
    updateCount();
  };

  // Run when visible
  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        runCounter(entry.target);
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.5 });

  counters.forEach(counter => observer.observe(counter));
});
</script>
