<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet" />
    <title>WCoffee - Best Coffee Shop Jember </title>
    <meta name="description"
        content="WCoffee is coffee shop in Jember that provides the best coffee products from various regions in Indonesia. We are committed to providing high-quality coffee and a great shopping experience." />

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets\images\logos\logo-64.png') }}" />
    <link rel="apple-touch-icon" href="{{ asset('assets\images\logos\logo-64.png') }}" />

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="WCoffee - Best Coffee Shop Jember" />
    <meta property="og:description"
        content="WCoffee is coffee shop in Jember that provides the best coffee products from various regions in Indonesia. We are committed to providing high-quality coffee and a great shopping experience." />
    <meta property="og:image" content="{{ asset('assets\images\logos\logo-64.png') }}">
    <meta property="og:url" content="https://w-coffee-landing-page.vercel.app/">
    <meta property="og:type" content="website">
</head>

<body class= "font-family-sans">
    <x-navbar/>
    <x-footer/>
</body>