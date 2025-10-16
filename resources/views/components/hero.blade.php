<div
  class="hero min-h-screen relative"
  style="background-image: url('{{ asset('images/banner/hero.jpg') }}');"
>
  <div class="hero-overlay bg-opacity-50"></div>
  <div class="hero-content text-neutral-content text-center">
    <div class="max-w-2xl">
      <h1 class="mb-5 text-5xl font-bold">
        <span id="typewriter"></span><span id="cursor" class="text-indigo-400">|</span>
      </h1>
      <p class="mb-5 text-lg">
        From concerts to conferences, EventSphere connects you with the moments that matter.
        Explore, book, and enjoy events around you — all in one place.
      </p>
    </div>
  </div>
</div>

<script>
  const phrases = ["Discover Amazing Events", "Explore Your Favorite Moments", "Book and Enjoy Events"];
  const typewriter = document.getElementById('typewriter');
  const cursor = document.getElementById('cursor');

  let i = 0, j = 0, currentPhrase = [], isDeleting = false, speed = 150; 

  function type() {
    if (i >= phrases.length) i = 0;
    const fullText = phrases[i];

    if (isDeleting) {
      currentPhrase = fullText.substring(0, j--);
    } else {
      currentPhrase = fullText.substring(0, j++);
    }

    typewriter.textContent = currentPhrase;

    if (!isDeleting && j === fullText.length) {
      isDeleting = true;
      speed = 100; // pause speed
      setTimeout(type, 2000); // pause at end before deleting
    } else if (isDeleting && j === 0) {
      isDeleting = false;
      i++;
      speed = 150;
      setTimeout(type, 500); // small pause before typing next phrase
    } else {
      speed = isDeleting ? 100 : 150;
      setTimeout(type, speed);
    }
  }

  document.addEventListener('DOMContentLoaded', type);

  // Blinking cursor
  setInterval(() => {
    cursor.style.opacity = cursor.style.opacity === '0' ? '1' : '0';
  }, 500);
</script>
