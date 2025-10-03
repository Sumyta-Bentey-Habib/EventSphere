<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - EventSphere</title>

    {{-- Tailwind CSS + DaisyUI --}}
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    {{-- AOS --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body class="bg-gray-100 text-gray-800">

    @include('components.navbar')

    <section class="py-20 bg-gradient-to-r from-purple-100 via-white to-purple-100">
        <div class="max-w-6xl mx-auto px-6 flex flex-col lg:flex-row items-center gap-12">

            {{-- Image --}}
            <div class="lg:w-1/2" data-aos="fade-right" data-aos-duration="1000">
                <div class="card bg-base-100 shadow-xl image-full rounded-3xl overflow-hidden hover:scale-105 transition-transform duration-500">
                    <figure>
                        <img src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp" alt="About EventSphere" class="object-cover h-96 w-full">
                    </figure>
                </div>
            </div>

            {{-- Text Content --}}
            <div class="lg:w-1/2 flex flex-col justify-center space-y-6" data-aos="fade-left" data-aos-duration="1000">
                <h2 class="text-5xl font-extrabold text-purple-600">About EventSphere</h2>
                <p class="text-lg text-gray-700 leading-relaxed">
                    EventSphere is your all-in-one platform to discover, organize, and enjoy amazing events. From concerts and workshops to corporate meetups, we help you make every event a success.
                </p>
                <p class="text-lg text-gray-700 leading-relaxed">
                    Our mission is to connect people with experiences that matter and help organizers manage their events smoothly. Join our growing community that celebrates creativity, learning, and connection.
                </p>
                <a href="#"
                    class="btn btn-primary btn-lg w-max hover:scale-105 transition-transform duration-300"
                    data-aos="zoom-in" data-aos-duration="1000">Join Now</a>
            </div>

        </div>
    </section>

    {{-- AOS JS --}}
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

</body>

</html>
