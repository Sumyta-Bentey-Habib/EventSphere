<section class="bg-[#14062A] py-20 px-6 sm:px-12 lg:px-20">
    <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-12">

        {{-- Left: Image --}}
        <div class="relative flex justify-center lg:justify-start">
            <div class="p-1 rounded-[2rem] bg-gradient-to-br from-[#6C22E1] to-[#3A0F7E] shadow-2xl">
                <img src="{{ asset('images/banner/hero.jpg') }}"
                     alt="EventSphere Community"
                     class="rounded-[1.9rem] object-cover w-full h-full max-h-[400px]" />
            </div>
        </div>

        {{-- Right: Text --}}
        <div class="space-y-10">
            <div class="p-8 rounded-2xl border border-[#3A0F7E] bg-white/5 backdrop-blur-sm">
                <h2 class="text-3xl font-bold text-white mb-4">Our Mission</h2>
                <p class="text-gray-300 leading-relaxed">
                    EventSphere is dedicated to making event discovery and organization effortless.
                    Our mission is to empower organizers and attendees through technology that brings people together.
                </p>
            </div>

            <div class="p-8 rounded-2xl border border-[#3A0F7E] bg-white/5 backdrop-blur-sm">
                <h2 class="text-3xl font-bold text-white mb-4">Our Story</h2>
                <p class="text-gray-300 leading-relaxed">
                    What started as a small idea to simplify event planning has now grown into a vibrant
                    community of creators and participants. We continue to evolve, keeping our users at the heart of everything we do.
                </p>
            </div>
        </div>
    </div>
</section>
