<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Tailwind CSS and DaisyUI --}}
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <title>EventSphere</title>
</head>

<body class="bg-gradient-to-b from-[#170E28] to-[#2B1E4E]">

    {{-- Navbar --}}
    @include('components.navbar')

    {{-- Hero Section --}}
    @include('components.hero')

    {{-- Carousel --}}
    @include('components.carousel')

    {{-- User Reviews / Testimonials --}}
    @include('components.review')

    {{-- Frequently Asked Questions --}}
    @include('components.faq')

    {{-- Statistics / Achievements --}}
    @include('components.statistics')

    {{-- Footer --}}
    @include('components.footer')

</body>

</html>
