<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - EventSphere</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/feather-icons"></script>
</head>

<body class="bg-gray-50 text-gray-800 selection:bg-indigo-200 selection:text-indigo-900">

    @include('components.navbar')

    <!-- HERO SECTION -->
    <section class="relative bg-[#14062A] py-20 px-6 sm:px-12 lg:px-20 min-h-[60vh] flex items-center overflow-hidden">
        <div class="absolute top-0 left-0 w-64 h-64 bg-purple-500 opacity-10 rounded-full filter blur-3xl animate-blob"></div>
        <div class="absolute bottom-1/4 right-1/4 w-96 h-96 bg-blue-500 opacity-10 rounded-full filter blur-3xl animate-blob animation-delay-2000"></div>

        <div class="relative z-10 flex flex-col items-center text-center max-w-3xl mx-auto">
            <h1 class="text-5xl md:text-6xl font-bold text-white leading-tight mb-6" data-aos="fade-down">
                Get in Touch with EventSphere
            </h1>
            <p class="text-lg text-gray-300 mb-12" data-aos="fade-down" data-aos-duration="800">
                We'd love to hear about your next big event!
            </p>
        </div>
    </section>

    <!-- CONTACT CARDS & FORM -->
    <section class="py-24 bg-[#14062A]">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">

                <!-- Contact Info Side Panel -->
                <div class="lg:col-span-1 space-y-8">
                    <!-- Email Card -->
                    <div class="p-6 rounded-2xl border border-purple-700 bg-white/5 backdrop-blur-sm shadow-lg transform hover:scale-105 transition duration-300"
                        data-aos="fade-right" data-aos-duration="1000">
                        <div class="flex items-center gap-4 mb-2">
                            <div class="text-indigo-500 text-3xl animate-bounce">
                                <i data-feather="mail"></i>
                            </div>
                            <h3 class="text-xl font-bold text-white">Email Us</h3>
                        </div>
                        <p class="text-gray-300">Send us a detailed message. We aim to reply within 24 hours.</p>
                        <a href="mailto:contact@eventsphere.com"
                            class="text-indigo-400 font-semibold hover:underline mt-2 block">contact@eventsphere.com</a>
                    </div>

                    <!-- Phone Card -->
                    <div class="p-6 rounded-2xl border border-purple-700 bg-white/5 backdrop-blur-sm shadow-lg transform hover:scale-105 transition duration-300"
                        data-aos="fade-right" data-aos-duration="1200">
                        <div class="flex items-center gap-4 mb-2">
                            <div class="text-indigo-500 text-3xl animate-bounce">
                                <i data-feather="phone"></i>
                            </div>
                            <h3 class="text-xl font-bold text-white">Call Us</h3>
                        </div>
                        <p class="text-gray-300">Available Monday to Friday, 9am - 5pm EST.</p>
                        <a href="tel:+15551234567"
                            class="text-indigo-400 font-semibold hover:underline mt-2 block">+1 (555) 123-4567</a>
                    </div>

                    <!-- Location Card -->
                    <div class="p-6 rounded-2xl border border-purple-700 bg-white/5 backdrop-blur-sm shadow-lg transform hover:scale-105 transition duration-300"
                        data-aos="fade-right" data-aos-duration="1400">
                        <div class="flex items-center gap-4 mb-2">
                            <div class="text-indigo-500 text-3xl animate-bounce">
                                <i data-feather="map-pin"></i>
                            </div>
                            <h3 class="text-xl font-bold text-white">Our Office</h3>
                        </div>
                        <p class="text-gray-300">Visit us by appointment only.</p>
                        <p class="text-gray-300 font-semibold mt-2">123 Event Lane, Suite 400, City, State 10001</p>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="lg:col-span-2 p-10 rounded-2xl border border-purple-700 bg-white/5 backdrop-blur-sm shadow-lg transform hover:scale-105 transition duration-300"
                    data-aos="fade-left" data-aos-duration="1000">
                    <h3 class="text-3xl font-bold text-white mb-6 border-b border-purple-700 pb-4">Send us a quick message</h3>

                    <form class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <label class="form-control w-full">
                                <div class="label"><span class="label-text font-medium text-gray-300">Your Full Name</span></div>
                                <input type="text" placeholder="John Doe"
                                    class="input input-bordered w-full focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 text-white bg-black" required />
                            </label>
                            <label class="form-control w-full">
                                <div class="label"><span class="label-text font-medium text-gray-300">Your Email</span></div>
                                <input type="email" placeholder="you@example.com"
                                    class="input input-bordered w-full focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 text-white bg-black" required />
                            </label>
                        </div>

                        <label class="form-control w-full">
                            <div class="label"><span class="label-text font-medium text-gray-300">Subject / Event Type</span></div>
                            <input type="text" placeholder="Booking Inquiry, Partnership, etc."
                                class="input input-bordered w-full focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 text-white bg-black" required />
                        </label>

                        <label class="form-control">
                            <div class="label"><span class="label-text font-medium text-gray-300">Your Message Details</span></div>
                            <textarea class="textarea textarea-bordered h-36 focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 text-white bg-black mt-3"
                                placeholder="Tell us more about your needs or question..."></textarea>
                        </label>

                        <button type="submit"
                            class="btn btn-primary btn-lg w-full bg-indigo-600 border-indigo-600 hover:bg-indigo-700 hover:border-indigo-700 text-white transform hover:scale-[1.01] transition-transform duration-300"
                            data-aos="zoom-in" data-aos-duration="1200">
                            Send Message
                        </button>
                    </form>
                </div>

            </div>
        </div>
    </section>

    @include('components.footer')

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <script>
        AOS.init({ duration: 1000, once: true });
        feather.replace();
    </script>
</body>
</html>
