<div
  class="hero min-h-screen relative overflow-hidden bg-black text-white"
  style="background-image: url('{{ asset('images/banner/hero.jpg') }}'); background-size: cover; background-position: center;"
>
  <!-- Dark overlay with slight gradient -->
  <div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/60 to-transparent"></div>

  <!-- Hero content -->
  <div class="hero-content relative z-10 flex flex-col lg:flex-row-reverse w-full justify-between py-20 px-6 sm:px-12 lg:px-20">

    <!-- Right Side Image (from background theme concept) -->
    <div class="w-full lg:w-1/2 flex justify-center">
      <img
        src="{{ asset('images/banner/hero.jpg') }}"
        alt="Event Hero"
        class="w-full lg:w-4/5 max-w-lg rounded-2xl shadow-2xl border border-[#ffffff20]"
      />
    </div>

    <!-- Left Side Text -->
    <div class="lg:w-1/2 mt-10 lg:mt-0 text-left">
      <h1 class="text-4xl md:text-6xl font-bold leading-tight">
        Discover & Book
        <span class="bg-gradient-to-r from-purple-500 to-indigo-500 text-transparent bg-clip-text">Amazing Events</span>
      </h1>
      <p class="py-6 text-lg md:text-xl max-w-xl text-gray-300">
        From concerts to conferences, EventSphere connects you with the moments that matter.
        Explore, book, and enjoy events around you — all in one place.
      </p>
      <a
        href="{{ route('services') }}"
        class="inline-block text-lg font-semibold px-8 py-3 rounded-xl
          bg-gradient-to-r from-purple-500 to-indigo-600
          hover:from-purple-600 hover:to-indigo-700
          shadow-xl shadow-purple-900/50 transition duration-300"
      >
        ✨ Explore Now
      </a>
    </div>
  </div>

  <!-- Floating chatbot button -->
  <div class="fixed bottom-8 right-8 z-50 hidden md:block">
    <button
      class="p-3 rounded-full bg-gradient-to-r from-[#6C3EF8] to-[#A35CF8]
      hover:scale-110 focus:outline-none focus:ring-4 focus:ring-purple-500/50
      shadow-lg transition duration-300"
    >
      💬
    </button>
  </div>
</div>
