@php
$carouselItems = [
    [
        'img' => asset('images/carousel/carousel1.jpg'),
        'title' => 'Concert Bliss',
        'des' => 'Host concerts, festivals, and cultural events with ease. Manage tickets and reach wider audiences.'
    ],
    [
        'img' => asset('images/carousel/carousel2.jpg'),
        'title' => 'Workshops & Learning',
        'des' => 'From professional workshops to fun classes, EventSphere helps you organize engaging experiences.'
    ],
    [
        'img' => asset('images/carousel/carousel3.jpg'),
        'title' => 'Networking Events',
        'des' => 'Plan and deliver corporate meetups, seminars, and networking sessions effortlessly.'
    ]
];
@endphp

<div class="relative max-w-6xl mx-auto mt-16 px-4">
    <!-- Carousel container -->
    <div id="carousel" class="relative overflow-hidden rounded-3xl shadow-2xl border border-[#ffffff20] h-[28rem] bg-[#0E0A1A]">
        @foreach($carouselItems as $index => $item)
        <div class="absolute inset-0 transition-all duration-1000 ease-in-out transform {{ $index === 0 ? 'opacity-100 scale-100' : 'opacity-0 scale-95' }}" data-slide="{{ $index }}">
            <!-- Background Image -->
            <img src="{{ $item['img'] }}" class="w-full h-full object-cover rounded-3xl" alt="{{ $item['title'] }}">

            <!-- Dark Overlay -->
            <div class="absolute inset-0 bg-gradient-to-b from-black/80 via-black/60 to-black/80 rounded-3xl flex flex-col items-center justify-center text-center p-6">
                <div class="max-w-2xl text-white space-y-4">
                    <h2 class="text-4xl md:text-5xl font-extrabold bg-gradient-to-r from-purple-400 to-indigo-400 text-transparent bg-clip-text drop-shadow-[0_0_20px_rgba(155,135,255,0.5)]">
                        {{ $item['title'] }}
                    </h2>
                    <p class="text-gray-300 text-lg leading-relaxed">
                        {{ $item['des'] }}
                    </p>
                </div>
            </div>
        </div>
        @endforeach
    </div>


{{-- Carousel JS --}}
<script>
document.addEventListener('DOMContentLoaded', () => {
    const slides = document.querySelectorAll('#carousel [data-slide]');
    const buttons = document.querySelectorAll('[data-target]');
    let current = 0;

    function showSlide(index) {
        slides.forEach((slide, i) => {
            slide.classList.toggle('opacity-100', i === index);
            slide.classList.toggle('scale-100', i === index);
            slide.classList.toggle('opacity-0', i !== index);
            slide.classList.toggle('scale-95', i !== index);
        });
        current = index;
    }

    // Auto slide every 5 seconds
    setInterval(() => {
        const next = (current + 1) % slides.length;
        showSlide(next);
    }, 5000);

    // Thumbnail navigation
    buttons.forEach(btn => {
        btn.addEventListener('click', () => {
            showSlide(parseInt(btn.dataset.target));
        });
    });
});
</script>
