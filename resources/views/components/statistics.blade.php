<section class="py-24 bg-indigo-50">
    <div class="max-w-6xl mx-auto px-6 text-center" data-aos="fade-up" data-aos-duration="1000">
        <h2 class="text-4xl md:text-5xl font-extrabold text-indigo-700 mb-12">Our Achievements</h2>
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-12">
            <div>
                <h3 class="text-5xl font-bold text-indigo-600 counter" data-target="500">0</h3>
                <p class="text-gray-700 mt-2 text-lg">Events Hosted</p>
            </div>
            <div>
                <h3 class="text-5xl font-bold text-indigo-600 counter" data-target="10000">0</h3>
                <p class="text-gray-700 mt-2 text-lg">Happy Attendees</p>
            </div>
            <div>
                <h3 class="text-5xl font-bold text-indigo-600 counter" data-target="50">0</h3>
                <p class="text-gray-700 mt-2 text-lg">Cities Covered</p>
            </div>
        </div>
    </div>
</section>

{{-- Counter JS --}}
<script>
document.addEventListener("DOMContentLoaded", () => {
    const counters = document.querySelectorAll('.counter');
    counters.forEach(counter => {
        const updateCount = () => {
            const target = +counter.getAttribute('data-target');
            const count = +counter.innerText;
            const increment = target / 200;
            if(count < target) {
                counter.innerText = Math.ceil(count + increment);
                setTimeout(updateCount, 20);
            } else {
                counter.innerText = target;
            }
        };
        updateCount();
    });
});
</script>
