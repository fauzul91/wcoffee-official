<!DOCTYPE html>
<html lang="en">
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
<body class="font-family-sans">
    {{-- Navbar --}}
    <x-navbar/>
    
    <!-- Kataloge Product -->
    <section class="w-full bg-white py-10">
        <div class="flex flex-col w-full max-w-[1280px] px-6 md:px-[75px] mx-auto">
            <h1 class="text-3xl font-bold">Shop</h1>
            <p class="leading-7 mt-2 text-obito-text-secondary">Jelajahi Produk dari WCoffee</p>
    
            <!-- Grid Produk -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8 mt-10">
                <!-- Kartu Produk -->
                <div class="bg-white border border-gray-200 rounded-xl shadow hover:shadow-lg transition p-4">
                    <img src="{{ asset('assets/images/photos/robusta-product.png') }}" alt="Nama Produk" class="w-full h-48 object-cover rounded-md mb-4">
                    <h2 class="text-lg font-semibold text-font mb-1">Kopi Arabika Gayo</h2>
                    <div class="flex items-center text-yellow-400 mb-2">
                        <!-- Bintang rating -->
                        <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex shrink-0 w-5" alt="star">
                        <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex shrink-0 w-5" alt="star">
                        <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex shrink-0 w-5" alt="star">
                        <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex shrink-0 w-5" alt="star">
                        <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex shrink-0 w-5" alt="star">
                    </div>
                    <p class="text-obito-black font-medium mt-4 mb-4">Rp 65.000</p>
                    <button class="w-full bg-obito-green text-white py-2 rounded-full cursor-pointer font-medium hover:shadow-2xl transition duration-300 ease-in-out">
                        Add to Cart
                    </button>
                </div>   
                <div class="bg-white border border-gray-200 rounded-xl shadow hover:shadow-lg transition p-4">
                    <img src="{{ asset('assets/images/photos/robusta-product.png') }}" alt="Nama Produk" class="w-full h-48 object-cover rounded-md mb-4">
                    <h2 class="text-lg font-semibold text-font mb-1">Kopi Arabika Gayo</h2>
                    <div class="flex items-center text-yellow-400 mb-2">
                        <!-- Bintang rating -->
                        <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex shrink-0 w-5" alt="star">
                        <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex shrink-0 w-5" alt="star">
                        <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex shrink-0 w-5" alt="star">
                        <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex shrink-0 w-5" alt="star">
                        <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex shrink-0 w-5" alt="star">
                    </div>
                    <p class="text-obito-black font-medium mt-4 mb-4">Rp 65.000</p>
                    <button class="w-full bg-obito-green text-white py-2 rounded-full cursor-pointer font-medium hover:shadow-2xl transition duration-300 ease-in-out">
                        Add to Cart
                    </button>
                </div>  
                <div class="bg-white border border-gray-200 rounded-xl shadow hover:shadow-lg transition p-4">
                    <img src="{{ asset('assets/images/photos/robusta-product.png') }}" alt="Nama Produk" class="w-full h-48 object-cover rounded-md mb-4">
                    <h2 class="text-lg font-semibold text-font mb-1">Kopi Arabika Gayo</h2>
                    <div class="flex items-center text-yellow-400 mb-2">
                        <!-- Bintang rating -->
                        <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex shrink-0 w-5" alt="star">
                        <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex shrink-0 w-5" alt="star">
                        <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex shrink-0 w-5" alt="star">
                        <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex shrink-0 w-5" alt="star">
                        <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex shrink-0 w-5" alt="star">
                    </div>
                    <p class="text-obito-black font-medium mt-4 mb-4">Rp 65.000</p>
                    <button class="w-full bg-obito-green text-white py-2 rounded-full cursor-pointer font-medium hover:shadow-2xl transition duration-300 ease-in-out">
                        Add to Cart
                    </button>
                </div>  
                <div class="bg-white border border-gray-200 rounded-xl shadow hover:shadow-lg transition p-4">
                    <img src="{{ asset('assets/images/photos/robusta-product.png') }}" alt="Nama Produk" class="w-full h-48 object-cover rounded-md mb-4">
                    <h2 class="text-lg font-semibold text-font mb-1">Kopi Arabika Gayo</h2>
                    <div class="flex items-center text-yellow-400 mb-2">
                        <!-- Bintang rating -->
                        <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex shrink-0 w-5" alt="star">
                        <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex shrink-0 w-5" alt="star">
                        <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex shrink-0 w-5" alt="star">
                        <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex shrink-0 w-5" alt="star">
                        <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex shrink-0 w-5" alt="star">
                    </div>
                    <p class="text-obito-black font-medium mt-4 mb-4">Rp 65.000</p>
                    <button class="w-full bg-obito-green text-white py-2 rounded-full cursor-pointer font-medium hover:shadow-2xl transition duration-300 ease-in-out">
                        Add to Cart
                    </button>
                </div>  
                <div class="bg-white border border-gray-200 rounded-xl shadow hover:shadow-lg transition p-4">
                    <img src="{{ asset('assets/images/photos/robusta-product.png') }}" alt="Nama Produk" class="w-full h-48 object-cover rounded-md mb-4">
                    <h2 class="text-lg font-semibold text-font mb-1">Kopi Arabika Gayo</h2>
                    <div class="flex items-center text-yellow-400 mb-2">
                        <!-- Bintang rating -->
                        <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex shrink-0 w-5" alt="star">
                        <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex shrink-0 w-5" alt="star">
                        <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex shrink-0 w-5" alt="star">
                        <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex shrink-0 w-5" alt="star">
                        <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex shrink-0 w-5" alt="star">
                    </div>
                    <p class="text-obito-black font-medium mt-4 mb-4">Rp 65.000</p>
                    <button class="w-full bg-obito-green text-white py-2 rounded-full cursor-pointer font-medium hover:shadow-2xl transition duration-300 ease-in-out">
                        Add to Cart
                    </button>
                </div>  
                <div class="bg-white border border-gray-200 rounded-xl shadow hover:shadow-lg transition p-4">
                    <img src="{{ asset('assets/images/photos/robusta-product.png') }}" alt="Nama Produk" class="w-full h-48 object-cover rounded-md mb-4">
                    <h2 class="text-lg font-semibold text-font mb-1">Kopi Arabika Gayo</h2>
                    <div class="flex items-center text-yellow-400 mb-2">
                        <!-- Bintang rating -->
                        <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex shrink-0 w-5" alt="star">
                        <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex shrink-0 w-5" alt="star">
                        <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex shrink-0 w-5" alt="star">
                        <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex shrink-0 w-5" alt="star">
                        <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex shrink-0 w-5" alt="star">
                    </div>
                    <p class="text-obito-black font-medium mt-4 mb-4">Rp 65.000</p>
                    <button class="w-full bg-obito-green text-white py-2 rounded-full cursor-pointer font-medium hover:shadow-2xl transition duration-300 ease-in-out">
                        Add to Cart
                    </button>
                </div>  
                <div class="bg-white border border-gray-200 rounded-xl shadow hover:shadow-lg transition p-4">
                    <img src="{{ asset('assets/images/photos/robusta-product.png') }}" alt="Nama Produk" class="w-full h-48 object-cover rounded-md mb-4">
                    <h2 class="text-lg font-semibold text-font mb-1">Kopi Arabika Gayo</h2>
                    <div class="flex items-center text-yellow-400 mb-2">
                        <!-- Bintang rating -->
                        <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex shrink-0 w-5" alt="star">
                        <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex shrink-0 w-5" alt="star">
                        <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex shrink-0 w-5" alt="star">
                        <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex shrink-0 w-5" alt="star">
                        <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex shrink-0 w-5" alt="star">
                    </div>
                    <p class="text-obito-black font-medium mt-4 mb-4">Rp 65.000</p>
                    <button class="w-full bg-obito-green text-white py-2 rounded-full cursor-pointer font-medium hover:shadow-2xl transition duration-300 ease-in-out">
                        Add to Cart
                    </button>
                </div>  
                <div class="bg-white border border-gray-200 rounded-xl shadow hover:shadow-lg transition p-4">
                    <img src="{{ asset('assets/images/photos/robusta-product.png') }}" alt="Nama Produk" class="w-full h-48 object-cover rounded-md mb-4">
                    <h2 class="text-lg font-semibold text-font mb-1">Kopi Arabika Gayo</h2>
                    <div class="flex items-center text-yellow-400 mb-2">
                        <!-- Bintang rating -->
                        <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex shrink-0 w-5" alt="star">
                        <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex shrink-0 w-5" alt="star">
                        <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex shrink-0 w-5" alt="star">
                        <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex shrink-0 w-5" alt="star">
                        <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex shrink-0 w-5" alt="star">
                    </div>
                    <p class="text-obito-black font-medium mt-4 mb-4">Rp 65.000</p>
                    <button class="w-full bg-obito-green text-white py-2 rounded-full cursor-pointer font-medium hover:shadow-2xl transition duration-300 ease-in-out">
                        Add to Cart
                    </button>
                </div>               
            </div>
        </div>
    </section>    

    <!-- Bundling Product -->
    <section class="w-full bg-white py-10">
        <div class="flex flex-col w-full max-w-[1280px] px-6 md:px-[75px] mx-auto">
            <h1 class="text-3xl font-bold">Bundling Product</h1>
            <p class="leading-7 mt-2 text-obito-text-secondary">Jelajahi Produk dari WCoffee</p>
    
            <!-- Grid Produk -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8 mt-10">
                <!-- Kartu Produk -->                           
                <div class="bg-white border border-gray-200 rounded-xl shadow hover:shadow-lg transition p-4">
                    <img src="{{ asset('assets/images/photos/robusta-product.png') }}" alt="Nama Produk" class="w-full h-48 object-cover rounded-md mb-4">
                    <h2 class="text-lg font-semibold text-font mb-1">Kopi Arabika Gayo</h2>
                    <div class="flex items-center text-yellow-400 mb-2">
                        <!-- Bintang rating -->
                        <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex shrink-0 w-5" alt="star">
                        <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex shrink-0 w-5" alt="star">
                        <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex shrink-0 w-5" alt="star">
                        <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex shrink-0 w-5" alt="star">
                        <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex shrink-0 w-5" alt="star">
                    </div>
                    <p class="text-obito-black font-medium mt-4 mb-4">Rp 65.000</p>
                    <button class="w-full bg-obito-green text-white py-2 rounded-full cursor-pointer font-medium hover:shadow-2xl transition duration-300 ease-in-out">
                        Add to Cart
                    </button>
                </div>  
                <div class="bg-white border border-gray-200 rounded-xl shadow hover:shadow-lg transition p-4">
                    <img src="{{ asset('assets/images/photos/robusta-product.png') }}" alt="Nama Produk" class="w-full h-48 object-cover rounded-md mb-4">
                    <h2 class="text-lg font-semibold text-font mb-1">Kopi Arabika Gayo</h2>
                    <div class="flex items-center text-yellow-400 mb-2">
                        <!-- Bintang rating -->
                        <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex shrink-0 w-5" alt="star">
                        <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex shrink-0 w-5" alt="star">
                        <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex shrink-0 w-5" alt="star">
                        <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex shrink-0 w-5" alt="star">
                        <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex shrink-0 w-5" alt="star">
                    </div>
                    <p class="text-obito-black font-medium mt-4 mb-4">Rp 65.000</p>
                    <button class="w-full bg-obito-green text-white py-2 rounded-full cursor-pointer font-medium hover:shadow-2xl transition duration-300 ease-in-out">
                        Add to Cart
                    </button>
                </div>  
                <div class="bg-white border border-gray-200 rounded-xl shadow hover:shadow-lg transition p-4">
                    <img src="{{ asset('assets/images/photos/robusta-product.png') }}" alt="Nama Produk" class="w-full h-48 object-cover rounded-md mb-4">
                    <h2 class="text-lg font-semibold text-font mb-1">Kopi Arabika Gayo</h2>
                    <div class="flex items-center text-yellow-400 mb-2">
                        <!-- Bintang rating -->
                        <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex shrink-0 w-5" alt="star">
                        <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex shrink-0 w-5" alt="star">
                        <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex shrink-0 w-5" alt="star">
                        <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex shrink-0 w-5" alt="star">
                        <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex shrink-0 w-5" alt="star">
                    </div>
                    <p class="text-obito-black font-medium mt-4 mb-4">Rp 65.000</p>
                    <button class="w-full bg-obito-green text-white py-2 rounded-full cursor-pointer font-medium hover:shadow-2xl transition duration-300 ease-in-out">
                        Add to Cart
                    </button>
                </div>  
                <div class="bg-white border border-gray-200 rounded-xl shadow hover:shadow-lg transition p-4">
                    <img src="{{ asset('assets/images/photos/robusta-product.png') }}" alt="Nama Produk" class="w-full h-48 object-cover rounded-md mb-4">
                    <h2 class="text-lg font-semibold text-font mb-1">Kopi Arabika Gayo</h2>
                    <div class="flex items-center text-yellow-400 mb-2">
                        <!-- Bintang rating -->
                        <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex shrink-0 w-5" alt="star">
                        <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex shrink-0 w-5" alt="star">
                        <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex shrink-0 w-5" alt="star">
                        <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex shrink-0 w-5" alt="star">
                        <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex shrink-0 w-5" alt="star">
                    </div>
                    <p class="text-obito-black font-medium mt-4 mb-4">Rp 65.000</p>
                    <button class="w-full bg-obito-green text-white py-2 rounded-full cursor-pointer font-medium hover:shadow-2xl transition duration-300 ease-in-out">
                        Add to Cart
                    </button>
                </div>               
            </div>
        </div>
    </section> 
</body>
</html>