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
<body class="bg-gray-50 text-gray-800">

    @include('components.navbar')

    <section class="py-24 bg-gradient-to-r from-indigo-50 via-white to-indigo-50">
        <div class="max-w-6xl mx-auto px-6">
            {{-- Title Section --}}
            <h2 class="text-5xl font-extrabold text-indigo-700 mb-6 text-center" data-aos="fade-down" data-aos-duration="800">Get in Touch with EventSphere</h2>
            <p class="text-xl text-center text-gray-500 mb-16" data-aos="fade-down" data-aos-duration="1000">We'd love to hear about your next big event!</p>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">

                {{-- Contact Info Side Panel (Replaces old terms) --}}
                <div class="lg:col-span-1 space-y-8">

                    {{-- Email Card --}}
                    <div class="card p-6 bg-white shadow-xl border-l-4 border-indigo-400 rounded-xl transform hover:scale-[1.03] transition-transform duration-500" data-aos="fade-right" data-aos-duration="1000">
                        <div class="flex items-center gap-4 mb-2">
                            <div class="text-indigo-600 text-3xl animate-bounce">
                                <i data-feather="mail"></i>
                            </div>
                            <h3 class="text-xl font-bold text-indigo-700">Email Us</h3>
                        </div>
                        <p class="text-gray-700">Send us a detailed message. We aim to reply within 24 hours.</p>
                        <a href="mailto:contact@eventsphere.com" class="text-indigo-500 font-semibold hover:underline mt-2 block">contact@eventsphere.com</a>
                    </div>

                    {{-- Phone Card --}}
                    <div class="card p-6 bg-white shadow-xl border-l-4 border-indigo-400 rounded-xl transform hover:scale-[1.03] transition-transform duration-500" data-aos="fade-right" data-aos-duration="1200">
                        <div class="flex items-center gap-4 mb-2">
                            <div class="text-indigo-600 text-3xl animate-bounce">
                                <i data-feather="phone"></i>
                            </div>
                            <h3 class="text-xl font-bold text-indigo-700">Call Us</h3>
                        </div>
                        <p class="text-gray-700">Available Monday to Friday, 9am - 5pm EST.</p>
                        <a href="tel:+15551234567" class="text-indigo-500 font-semibold hover:underline mt-2 block">+1 (555) 123-4567</a>
                    </div>

                    {{-- Location Card --}}
                    <div class="card p-6 bg-white shadow-xl border-l-4 border-indigo-400 rounded-xl transform hover:scale-[1.03] transition-transform duration-500" data-aos="fade-right" data-aos-duration="1400">
                        <div class="flex items-center gap-4 mb-2">
                            <div class="text-indigo-600 text-3xl animate-bounce">
                                <i data-feather="map-pin"></i>
                            </div>
                            <h3 class="text-xl font-bold text-indigo-700">Our Office</h3>
                        </div>
                        <p class="text-gray-700">Visit us by appointment only.</p>
                        <p class="text-gray-700 font-semibold mt-2">123 Event Lane, Suite 400, City, State 10001</p>
                    </div>
                </div>

                {{-- Contact Form --}}
                <div class="lg:col-span-2 card bg-white shadow-2xl p-10 rounded-2xl" data-aos="fade-left" data-aos-duration="1000">
                    <h3 class="text-3xl font-bold text-indigo-700 mb-6 border-b pb-4">Send us a quick message</h3>

                    <form class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            {{-- Name --}}
                            <label class="form-control w-full">
                                <div class="label"><span class="label-text font-medium text-gray-700">Your Full Name</span></div>
                                <input type="text" placeholder="John Doe" class="input input-bordered w-full focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500" required />
                            </label>

                            {{-- Email --}}
                            <label class="form-control w-full">
                                <div class="label"><span class="label-text font-medium text-gray-700">Your Email</span></div>
                                <input type="email" placeholder="you@example.com" class="input input-bordered w-full focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500" required />
                            </label>
                        </div>

                        {{-- Subject --}}
                        <label class="form-control w-full">
                            <div class="label"><span class="label-text font-medium text-gray-700">Subject / Event Type</span></div>
                            <input type="text" placeholder="Booking Inquiry, Partnership, etc." class="input input-bordered w-full focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500" required />
                        </label>

                        {{-- Message --}}
                        <label class="form-control">
                            <div class="label"><span class="label-text font-medium text-gray-700">Your Message Details</span></div>
                            <textarea class="textarea textarea-bordered h-36 focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500" placeholder="Tell us more about your needs or question..."></textarea>
                        </label>

                        {{-- Submit Button --}}
                        <button type="submit" class="btn btn-primary btn-lg w-full bg-indigo-600 border-indigo-600 hover:bg-indigo-700 hover:border-indigo-700 text-white transform hover:scale-[1.01] transition-transform duration-300" data-aos="zoom-in" data-aos-duration="1200">
                            Send Message
                        </button>
                    </form>
                </div>

            </div>
        </div>
    </section>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
        feather.replace();
    </script>
</body>
</html>
