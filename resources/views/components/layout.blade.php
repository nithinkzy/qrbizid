<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        {{ $meta['title'] ?? 'QrBizID - Empower Your Presence with QR.' }}

    </title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Meta SEO -->
    <meta name="title" content="QrBizID - Empower Your Presence with QR">
    <meta name="description"
        content="Create and share QR codes for your business with QrBizID. Enhance your online and offline presence.">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">
    <meta name="author" content="Nithin Kumar K S">

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="QrBizID - Empower Your Presence with QR">
    <meta property="og:description"
        content="Create and share QR codes for your business with QrBizID. Enhance your online and offline presence.">
    {{-- <meta property="og:image" content="https://example.com/qrbizid-logo.png"> --}}
    <meta property="og:url" content="https://qrbizid.com">
    <meta property="og:type" content="website">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="QrBizID - Empower Your Presence with QR">
    <meta name="twitter:description"
        content="Create and share QR codes for your business with QrBizID. Enhance your online and offline presence.">
    <meta name="twitter:image" content="https://example.com/qrbizid-logo.png">
    <meta name="twitter:url" content="https://qrbizid.com">


    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    {{-- <link rel="manifest" href="/site.webmanifest"> --}}
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <script async defer src="https://buttons.github.io/buttons.js"></script>
</head>

<body>
    @include('partials._header')
    {{ $slot }}
    @include('partials._footer')
    <script src="https://unpkg.com/flowbite@1.4.1/dist/flowbite.js"></script>
</body>

</html>
