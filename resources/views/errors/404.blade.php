<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet" />
    <title>WCoffee -  Best Coffee Shop Jember </title>
    <meta name="description" content="WCoffee is coffee shop in Jember that provides the best coffee products from various regions in Indonesia. We are committed to providing high-quality coffee and a great shopping experience." />

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/logos/logo-64.png">
    <link rel="apple-touch-icon" href="assets/images/logos/logo-64.png">

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="WCoffee - Best Coffee Shop Jember" />
    <meta property="og:description" content="WCoffee is coffee shop in Jember that provides the best coffee products from various regions in Indonesia. We are committed to providing high-quality coffee and a great shopping experience." />
    <meta property="og:image" content="https://obito-platform.netlify.app/assets/images/logos/logo-64-big.png">
    <meta property="og:url" content="https://w-coffee-landing-page.vercel.app/">
    <meta property="og:type" content="website">
    <title>Oops! Halaman tidak ditemukan</title>    
</head>
<body class="font-family-sans">
    <div class="flex items-center justify-center rounded-xl w-full h-screen">
        {{-- Buat yang bagus dong --}}
        <div class="flex flex-col items-center justify-center bg-white rounded-lg shadow-lg p-10 w-full max-w-md">
            <img src="{{ asset('assets/images/logos/logo.svg') }}" alt="Logo" class="w-30 h-auto">
            <h1 class="text-[7rem] font-bold text-center">404</h1>
            <p class="text-2xl font-bold text-center mb-4">Halaman tidak ditemukan</p>
            <p class="text-center mb-4">Maaf, halaman yang Anda cari tidak ada. <br>Yuk balik ke home :'</p>
            <a href="{{ route('home') }}" class="flex items-center rounded-full h-[45px] py-5 px-7 mt-4 gap-[10px] bg-obito-green hover:drop-shadow-2xl transition-all duration-300">
                <span class="text-white font-semibold text-lg">Go Back</span>
            </a>  
        </div>       
    </div>

    {{-- Buatkan dong --}}

</body>
</html>
