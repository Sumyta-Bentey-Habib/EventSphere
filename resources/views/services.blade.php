<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services - EventSphere</title>

    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body class="bg-gray-50 text-gray-800 selection:bg-indigo-200 selection:text-indigo-900">

    @include('components.navbar')
    @include('components.services.services-hero')
    @include('components.services.services-cards')
    @include('components.footer')

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <script>
        AOS.init({ duration: 1000, once: true });
        feather.replace();
    </script>
</body>
</html>
