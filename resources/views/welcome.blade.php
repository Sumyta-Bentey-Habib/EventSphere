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

<body>
    @include('components.navbar')
    @include('components.hero')
    @include('components.carousel')
    @include('components.review')
    @include('components.faq')
    @include('components.statistics')
    @include('components.newsletter')
    @include('components.footer')

</body>

</html>
