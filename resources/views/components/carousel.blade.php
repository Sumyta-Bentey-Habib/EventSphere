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

<div class="relative max-w-6xl mx-auto mt-10">
    <div id="carousel" class="relative overflow-hidden rounded-lg h-96">
        @foreach($carouselItems as $index => $item)
        <div class="absolute inset-0 transition-opacity duration-1000 {{ $index === 0 ? 'opacity-100' : 'opacity-0' }}" data-slide="{{ $index }}">
            <img src="{{ $item['img'] }}" class="w-full h-full object-cover" alt="{{ $item['title'] }}">
            <div class="absolute inset-0 bg-black/40 flex items-center justify-center text-center p-5">
                <div class="text-white max-w-md">
                    <h2 class="text-3xl md:text-4xl font-bold mb-3">{{ $item['title'] }}</h2>
                    <p class="text-sm md:text-base">{{ $item['des'] }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    {{-- Thumbnails --}}
    <div class="flex justify-center gap-3 mt-4">
        @foreach($carouselItems as $index => $item)
        <button class="w-12 h-12 rounded-md overflow-hidden border-2 border-transparent hover:border-blue-500" data-target="{{ $index }}">
            <img src="{{ $item['img'] }}" class="w-full h-full object-cover" alt="{{ $item['title'] }}">
        </button>
        @endforeach
    </div>
</div>

{{-- Carousel JS --}}
<script>
const slides = document.querySelectorAll('#carousel [data-slide]');
const buttons = document.querySelectorAll('[data-target]');
let current = 0;

function showSlide(index) {
    slides.forEach((slide, i) => {
        slide.classList.toggle('opacity-100', i === index);
        slide.classList.toggle('opacity-0', i !== index);
    });
    current = index;
}

// Auto slide every 5s
setInterval(() => {
    let next = (current + 1) % slides.length;
    showSlide(next);
}, 5000);

// Buttons
buttons.forEach(btn => {
    btn.addEventListener('click', () => {
        showSlide(parseInt(btn.dataset.target));
    });
});
</script>
