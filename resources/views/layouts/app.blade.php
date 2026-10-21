<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Pensión Plena — Orientación y asesoría personalizada sobre pensiones en Lagos de Moreno, Jalisco. Toma decisiones informadas sobre tu retiro.">
    <meta property="og:title" content="Pensión Plena — Asesoría de Pensiones en Lagos de Moreno">
    <meta property="og:description" content="Recibe orientación personalizada para comprender tus opciones y tomar decisiones informadas sobre tu retiro.">
    <meta property="og:type" content="website">
    <meta name="robots" content="index, follow">
    <meta name="theme-color" content="#135C47">

    <script type="application/ld+json">
    @verbatim
    {
        "@context": "https://schema.org",
        "@type": "LocalBusiness",
        "name": "Pensión Plena",
        "description": "Orientación y asesoría personalizada sobre pensiones en Lagos de Moreno, Jalisco.",
        "address": {
            "@type": "PostalAddress",
            "addressLocality": "Lagos de Moreno",
            "addressRegion": "Jalisco",
            "addressCountry": "MX"
        },
        "serviceArea": { "@type": "Place", "name": "Lagos de Moreno, Jalisco, México" }
    }
    @endverbatim
    </script>

    <title>@yield('title', 'Pensión Plena — Asesoría de Pensiones en Lagos de Moreno')</title>

    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    @yield('content')
</body>
</html>
