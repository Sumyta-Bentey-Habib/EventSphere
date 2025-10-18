<section class="relative bg-[#14062A] py-20 px-6 sm:px-12 lg:px-20 min-h-[80vh] flex items-center overflow-hidden">
    {{-- Gradient blobs --}}
    <div class="absolute top-0 left-0 w-64 h-64 bg-purple-500 opacity-10 rounded-full filter blur-3xl animate-pulse"></div>
    <div class="absolute bottom-1/4 right-1/4 w-96 h-96 bg-blue-500 opacity-10 rounded-full filter blur-3xl animate-pulse delay-1000"></div>

    <div class="relative z-10 flex flex-col lg:flex-row items-center justify-between w-full max-w-7xl mx-auto">
        {{-- Left Content --}}
        <div class="lg:w-1/2 text-center lg:text-left mb-12 lg:mb-0 pr-0 lg:pr-12">
            <h1 class="text-5xl md:text-6xl font-bold text-white leading-tight mb-6">
                Unveiling the Essence <br /> of EventSphere
            </h1>
            <p class="text-lg text-gray-300 mb-6">
                Welcome to EventSphere, where events come alive. We connect organizers and attendees through
                seamless experiences that inspire, engage, and create lasting memories.
            </p>
            <p class="text-lg text-gray-300 mb-8">
                Our goal is to empower creators, communities, and brands by making event management smarter,
                simpler, and more impactful.
            </p>

            <a href="#"
               class="inline-flex items-center px-8 py-3 bg-gradient-to-r from-indigo-600 to-purple-600 text-white text-lg font-semibold rounded-lg shadow-lg hover:opacity-90 transition-all duration-300">
                Join Now
            </a>
        </div>

        {{-- Right Image --}}
        <div class="lg:w-1/2 flex justify-center lg:justify-end relative">
            <div class="relative rounded-[2rem] p-2 bg-gradient-to-br from-[#6C22E1] to-[#3A0F7E] shadow-2xl">
                <img src="{{ asset('images/others/image3.jpg') }}"
                     alt="EventSphere Team Working"
                     class="rounded-[1.7rem] object-cover w-[550px] h-[550px]" />
            </div>
        </div>
    </div>
</section>
