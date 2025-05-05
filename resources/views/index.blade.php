@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="flex items-center justify-center">
        <div class="flex items-center justify-between w-[85%] py-4">
            <div class="flex flex-col w-1/2">
                <p class="flex items-center gap-[6px] w-fit rounded-full py-2 px-[14px] bg-obito-light-green mb-4">
                    <span class="font-bold text-sm">TRUSTED BY COFFEE LOVERS NATIONWIDE</span>
                </p>
                <h1 class="text-[50px] leading-[65px] font-extrabold">
                    Nikmati Kesegaran <br />
                    Kopi Khas Jember
                </h1>
                <p class="leading-7 mt-[10px] text-obito-text-secondary">
                    Temukan kenikmatan kopi terbaik dari berbagai penjuru nusantara. WCoffee, solusi mudah untuk pecinta
                    kopi sejati.
                </p>
                <div class="flex items-center gap-[18px] mt-6 space-x-4">
                    <a href="{{ route('shop') }}"
                        class="flex items-center rounded-full h-[67px] py-5 px-7 mt-4 gap-[10px] bg-obito-green hover:drop-shadow-2xl transition-all duration-300">
                        <span class="text-white font-semibold text-lg">Jelajahi Produk</span>
                    </a>
                </div>
            </div>
            <img src="{{ asset('assets/images/photos/coffee.png') }}" alt="Kopi" class="w-1/2" />
        </div>
    </section>

    <!-- Partner Section -->
    <section class="flex justify-center items-center text-center py-12">
        <div class="container w-[85%]">
            <p class="mx-auto w-fit rounded-full py-2 px-[14px] bg-obito-light-green mb-4">
                <span class="font-bold text-sm">OUR PARTNERS</span>
            </p>
            <h2 class="text-[2.5rem] font-bold">Partner Keren Kami</h2>
            <p class="text-[0.85rem] leading-7 mt-[10px] text-obito-text-obbg-obito-green">
                Kolaborasi dengan mitra terbaik untuk menghadirkan kopi
                <span class="block">berkualitas. Bersama, kita tumbuh dan berkembang!</span>
            </p>
            <div class="flex flex-wrap justify-center gap-6 max-w-3xl mx-auto mt-6">
                <div class="bg-whitetext-white p-3.5 rounded-2xl">
                    <img src="{{ asset('assets/images/photos/point-coffee.png') }}" alt="Partner"
                        class="w-32 h-auto" />
                </div>
                <div class="bg-whitetext-white p-3.5 rounded-2xl">
                    <img src="{{ asset('assets/images/photos/point-coffee.png') }}" alt="Partner"
                        class="w-32 h-auto" />
                </div>
                <div class="bg-whitetext-white p-3.5 rounded-2xl">
                    <img src="{{ asset('assets/images/photos/point-coffee.png') }}" alt="Partner"
                        class="w-32 h-auto" />
                </div>
                <div class="bg-whitetext-white p-3.5 rounded-2xl">
                    <img src="{{ asset('assets/images/photos/point-coffee.png') }}" alt="Partner"
                        class="w-32 h-auto" />
                </div>
                <div class="bg-whitetext-white p-3.5 rounded-2xl">
                    <img src="{{ asset('assets/images/photos/point-coffee.png') }}" alt="Partner"
                        class="w-32 h-auto" />
                </div>
                <div class="bg-whitetext-white p-3.5 rounded-2xl">
                    <img src="{{ asset('assets/images/photos/point-coffee.png') }}" alt="Partner"
                        class="w-32 h-auto" />
                </div>
                <div class="bg-whitetext-white p-3.5 rounded-2xl">
                    <img src="{{ asset('assets/images/photos/point-coffee.png') }}" alt="Partner"
                        class="w-32 h-auto" />
                </div>
            </div>
        </div>
    </section>

    <!-- Top Product Section -->
    <section class="flex justify-center items-center text-center py-12">
        <div class="container w-[80%]">
            <p class="mx-auto w-fit rounded-full py-2 px-[14px] bg-obito-light-green mb-4">
                <span class="font-bold text-sm">BEST SELLER</span>
            </p>
            <h2 class="text-[2.5rem] font-bold">Produk Terlaris</h2>
            <p class="text-[0.85rem] leading-7 mt-[10px] text-obito-text-obbg-obito-green">
                Jelajahi produk berkualitas kami langsung dari <br> petani lokal terpercaya
            </p>
            <div class="flex justify-center space-x-6 mt-6 gap-6">
                <div class="bg-white p-4 shadow-md rounded-2xl">
                    <img src="{{ asset('assets/images/photos/robusta-product.png') }}" alt="Produk"
                        class="h-40 mx-auto" />
                    <h3 class="mt-4">Robusta Khas Panti</h3>
                    <p class="opacity-60 mb-4">Rp30.000,00</p>
                    <a
                        class="bg-obito-green text-white text-sm px-4 py-2 rounded-lg hover:bg-btn-hover transition ease-in-out duration-300 cursor-pointer">
                        Add To Cart
                    </a>
                </div>
                <div class="bg-white p-4 shadow-md rounded-2xl">
                    <img src="{{ asset('assets/images/photos/robusta-product.png') }}" alt="Produk"
                        class="h-40 mx-auto" />
                    <h3 class="mt-4">Robusta Khas Panti</h3>
                    <p class="opacity-60 mb-4">Rp30.000,00</p>
                    <a
                        class="bg-obito-green text-white text-sm px-4 py-2 rounded-lg mt-4 hover:bg-btn-hover transition ease-in-out duration-300 cursor-pointer">
                        Add To Cart
                    </a>
                </div>
                <div class="bg-white p-4 shadow-md rounded-2xl">
                    <img src="{{ asset('assets/images/photos/robusta-product.png') }}" alt="Produk"
                        class="h-40 mx-auto" />
                    <h3 class="mt-4">Robusta Khas Panti</h3>
                    <p class="opacity-60 mb-4">Rp30.000,00</p>
                    <a
                        class="bg-obito-green text-white text-sm px-4 py-2 rounded-lg mt-4 hover:bg-btn-hover transition ease-in-out duration-300 cursor-pointer">
                        Add To Cart
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- About WCoffee Section -->
    <section class="flex justify-center items-center text-center py-12">
        <div class="container w-[80%]">
            <p class="mx-auto w-fit rounded-full py-2 px-[14px] bg-obito-light-green mb-4">
                <span class="font-bold text-sm">ABOUT US</span>
            </p>
            <h2 class="text-[2.5rem] font-bold leading-tight">
                Satu Platform <br>Ribuan Peluang Kopi
            </h2>
            <p class="text-[0.85rem] leading-7 mt-[10px] text-obito-text-obbg-obito-green">
                WCoffee menghubungkan pecinta kopi dalam satu ekosistem <br>digital untuk pertumbuhan bisnis yang lebih
                efisien.
            </p>
            <img src="{{ asset('assets/images/photos/coffee-assets.png') }}" alt="coffee"
                class="mx-auto my-10 w-3xl" />
        </div>
    </section>

    <!-- Why WCoffee? Section -->
    <section class="flex justify-center items-center text-center py-12">
        <div class="container w-[80%]">
            <p class="mx-auto w-fit rounded-full py-2 px-[14px] bg-obito-light-green mb-4">
                <span class="font-bold text-sm">WHY WCOFFEE</span>
            </p>
            <h2 class="text-[2.5rem] font-bold leading-tight">
                Kenapa Harus WCoffee?
            </h2>
            <p class="text-[0.85rem] mt-2 opacity-60">
                WCoffee memberikan pengalaman belanja kopi yang lebih mudah, hemat, dan <br>terpercaya. Temukan kopi
                terbaik dengan promo eksklusif dan layanan transparan!
            </p>

            <!-- Grid Layout -->
            <div class="grid grid-cols-1 md:grid-cols-3 items-center gap-12 mt-12">

                <!-- Kiri -->
                <div class="space-y-6">
                    <div class="flex flex-col items-center text-center gap-4">
                        <div class="w-8 h-8 flex items-center justify-center bg-black text-white rounded-full mb-1.5">✔
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 leading-0">Praktis</h3>
                        <p class="text-font text-sm opacity-60">Belanja jadi lebih murah, praktis, dan <br>cepat
                            melalui WCoffee</p>
                    </div>
                    <div class="flex flex-col items-center text-center gap-4">
                        <div class="w-8 h-8 flex items-center justify-center bg-black text-white rounded-full mb-1.5">✔
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 leading-0">Berkualitas</h3>
                        <p class="text-font text-sm opacity-60">Diolah dari biji kopi dengan <br>kualitas high grade
                        </p>
                    </div>
                </div>

                <!-- Gambar Kopi -->
                <div class="flex justify-center">
                    <img src="{{ asset('assets/images/photos/coffee-assets-2.png') }}" alt="Biji Kopi"
                        class="w-4xl object-cover rounded-lg">
                </div>

                <!-- Kanan -->
                <div class="space-y-6">
                    <div class="flex flex-col items-center text-center gap-4">
                        <div class="w-8 h-8 flex items-center justify-center bg-black text-white rounded-full mb-1.5">✔
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 leading-0">Harga Terbaik</h3>
                        <p class="text-font text-sm opacity-60">Promo eksklusif setiap bulan <br>dengan harga miring
                        </p>
                    </div>
                    <div class="flex flex-col items-center text-center gap-4">
                        <div class="w-8 h-8 flex items-center justify-center bg-black text-white rounded-full mb-1.5">✔
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 leading-0">Peluang Bisnis</h3>
                        <p class="text-font text-sm opacity-60">Jalin kerjasama dengan kami untuk <br>mendapatkan
                            benefit lainnya</p>
                    </div>
                </div>
            </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="mt-[50px] w-full pb-[66px]">
        <div class="flex flex-col items-center justify-center text-center mb-10">
            <p class="mx-auto w-fit rounded-full py-2 px-[14px] bg-obito-light-green mb-4">
                <span class="font-bold text-sm">TESTIMONIALS</span>
            </p>
            <h2 class="text-[2.5rem] font-bold leading-tight">
                Apa Kata Mereka?
            </h2>
            <p class="text-[0.85rem] leading-7 mt-[10px] text-obito-text-obbg-obito-green">
                <!-- Testimoni Kopi Yang Unik-->
                Dapatkan pengalaman berbelanja kopi yang menyenangkan bersama kami. <br> Temukan produk berkualitas
                dengan harga terjangkau.
            </p>
        </div>
        <div id="testimonial-slide" class="w-full flex flex-nowrap overflow-x-hidden">
            <div class="slide-container flex gap-5 pl-5 flex-nowrap animate-[slide_50s_linear_infinite]">
                <div
                    class="testimonial-card flex flex-col w-[359px] shrink-0 rounded-[20px] border border-obito-grey p-5 gap-4 bg-white">
                    <div class="flex">
                        <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex shrink-0 w-5"
                            alt="star">
                        <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex shrink-0 w-5"
                            alt="star">
                        <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex shrink-0 w-5"
                            alt="star">
                        <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex shrink-0 w-5"
                            alt="star">
                        <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex shrink-0 w-5"
                            alt="star">
                    </div>
                    <p class="leading-7">Kopinya enak banget dan ga nyangka dapet produk berkualitas dengan harga yang
                        terjangkau. Good Job WCoffee!.</p>
                    <div class="flex items-center gap-3">
                        <div class="flex w-[50px] h-[50px] shrink-0 rounded-full overflow-hidden bg-obito-grey">
                            <img src="{{ asset('assets/images/photos/Atha Halilintar.png') }}"
                                class="w-full h-full object-cover" alt="photo profile">
                        </div>
                        <div>
                            <p class="font-semibold">Atha Halilintar</p>
                        </div>
                    </div>
                </div>
                <div
                    class="testimonial-card flex flex-col w-[359px] shrink-0 rounded-[20px] border border-obito-grey p-5 gap-4 bg-white">
                    <div class="flex">
                        <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex shrink-0 w-5"
                            alt="star">
                        <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex shrink-0 w-5"
                            alt="star">
                        <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex shrink-0 w-5"
                            alt="star">
                        <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex shrink-0 w-5"
                            alt="star">
                        <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex shrink-0 w-5"
                            alt="star">
                    </div>
                    <p class="leading-7">Kopinya enak banget dan ga nyangka dapet produk berkualitas dengan harga yang
                        terjangkau. Good Job WCoffee!.</p>
                    <div class="flex items-center gap-3">
                        <div class="flex w-[50px] h-[50px] shrink-0 rounded-full overflow-hidden bg-obito-grey">
                            <img src="{{ asset('assets/images/photos/Atha Halilintar.png') }}"
                                class="w-full h-full object-cover" alt="photo profile">
                        </div>
                        <div>
                            <p class="font-semibold">Atha Halilintar</p>
                        </div>
                    </div>
                </div>
                <div
                    class="testimonial-card flex flex-col w-[359px] shrink-0 rounded-[20px] border border-obito-grey p-5 gap-4 bg-white">
                    <div class="flex">
                        <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex shrink-0 w-5"
                            alt="star">
                        <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex shrink-0 w-5"
                            alt="star">
                        <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex shrink-0 w-5"
                            alt="star">
                        <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex shrink-0 w-5"
                            alt="star">
                        <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex shrink-0 w-5"
                            alt="star">
                    </div>
                    <p class="leading-7">Kopinya enak banget dan ga nyangka dapet produk berkualitas dengan harga yang
                        terjangkau. Good Job WCoffee!.</p>
                    <div class="flex items-center gap-3">
                        <div class="flex w-[50px] h-[50px] shrink-0 rounded-full overflow-hidden bg-obito-grey">
                            <img src="{{ asset('assets/images/photos/Atha Halilintar.png') }}"
                                class="w-full h-full object-cover" alt="photo profile">
                        </div>
                        <div>
                            <p class="font-semibold">Atha Halilintar</p>
                        </div>
                    </div>
                </div>
                <div
                    class="testimonial-card flex flex-col w-[359px] shrink-0 rounded-[20px] border border-obito-grey p-5 gap-4 bg-white">
                    <div class="flex">
                        <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex shrink-0 w-5"
                            alt="star">
                        <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex shrink-0 w-5"
                            alt="star">
                        <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex shrink-0 w-5"
                            alt="star">
                        <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex shrink-0 w-5"
                            alt="star">
                        <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex shrink-0 w-5"
                            alt="star">
                    </div>
                    <p class="leading-7">Kopinya enak banget dan ga nyangka dapet produk berkualitas dengan harga yang
                        terjangkau. Good Job WCoffee!.</p>
                    <div class="flex items-center gap-3">
                        <div class="flex w-[50px] h-[50px] shrink-0 rounded-full overflow-hidden bg-obito-grey">
                            <img src="{{ asset('assets/images/photos/Atha Halilintar.png') }}"
                                class="w-full h-full object-cover" alt="photo profile">
                        </div>
                        <div>
                            <p class="font-semibold">Atha Halilintar</p>
                        </div>
                    </div>
                </div>
                <div
                    class="testimonial-card flex flex-col w-[359px] shrink-0 rounded-[20px] border border-obito-grey p-5 gap-4 bg-white">
                    <div class="flex">
                        <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex shrink-0 w-5"
                            alt="star">
                        <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex shrink-0 w-5"
                            alt="star">
                        <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex shrink-0 w-5"
                            alt="star">
                        <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex shrink-0 w-5"
                            alt="star">
                        <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex shrink-0 w-5"
                            alt="star">
                    </div>
                    <p class="leading-7">Kopinya enak banget dan ga nyangka dapet produk berkualitas dengan harga yang
                        terjangkau. Good Job WCoffee!.</p>
                    <div class="flex items-center gap-3">
                        <div class="flex w-[50px] h-[50px] shrink-0 rounded-full overflow-hidden bg-obito-grey">
                            <img src="{{ asset('assets/images/photos/Atha Halilintar.png') }}"
                                class="w-full h-full object-cover" alt="photo profile">
                        </div>
                        <div>
                            <p class="font-semibold">Atha Halilintar</p>
                        </div>
                    </div>
                </div>
                <div
                    class="testimonial-card flex flex-col w-[359px] shrink-0 rounded-[20px] border border-obito-grey p-5 gap-4 bg-white">
                    <div class="flex">
                        <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex shrink-0 w-5"
                            alt="star">
                        <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex shrink-0 w-5"
                            alt="star">
                        <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex shrink-0 w-5"
                            alt="star">
                        <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex shrink-0 w-5"
                            alt="star">
                        <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex shrink-0 w-5"
                            alt="star">
                    </div>
                    <p class="leading-7">Kopinya enak banget dan ga nyangka dapet produk berkualitas dengan harga yang
                        terjangkau. Good Job WCoffee!.</p>
                    <div class="flex items-center gap-3">
                        <div class="flex w-[50px] h-[50px] shrink-0 rounded-full overflow-hidden bg-obito-grey">
                            <img src="{{ asset('assets/images/photos/Atha Halilintar.png') }}"
                                class="w-full h-full object-cover" alt="photo profile">
                        </div>
                        <div>
                            <p class="font-semibold">Atha Halilintar</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide-container flex gap-5 pl-5 flex-nowrap animate-[slide_50s_linear_infinite]">
                <div
                    class="testimonial-card flex flex-col w-[359px] shrink-0 rounded-[20px] border border-obito-grey p-5 gap-4 bg-white">
                    <div class="flex">
                        <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex shrink-0 w-5"
                            alt="star">
                        <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex shrink-0 w-5"
                            alt="star">
                        <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex shrink-0 w-5"
                            alt="star">
                        <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex shrink-0 w-5"
                            alt="star">
                        <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex shrink-0 w-5"
                            alt="star">
                    </div>
                    <p class="leading-7">Kopinya enak banget dan ga nyangka dapet produk berkualitas dengan harga yang
                        terjangkau. Good Job WCoffee!.</p>
                    <div class="flex items-center gap-3">
                        <div class="flex w-[50px] h-[50px] shrink-0 rounded-full overflow-hidden bg-obito-grey">
                            <img src="{{ asset('assets/images/photos/Atha Halilintar.png') }}"
                                class="w-full h-full object-cover" alt="photo profile">
                        </div>
                        <div>
                            <p class="font-semibold">Atha Halilintar</p>
                        </div>
                    </div>
                </div>
                <div
                    class="testimonial-card flex flex-col w-[359px] shrink-0 rounded-[20px] border border-obito-grey p-5 gap-4 bg-white">
                    <div class="flex">
                        <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex shrink-0 w-5"
                            alt="star">
                        <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex shrink-0 w-5"
                            alt="star">
                        <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex shrink-0 w-5"
                            alt="star">
                        <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex shrink-0 w-5"
                            alt="star">
                        <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex shrink-0 w-5"
                            alt="star">
                    </div>
                    <p class="leading-7">Kopinya enak banget dan ga nyangka dapet produk berkualitas dengan harga yang
                        terjangkau. Good Job WCoffee!.</p>
                    <div class="flex items-center gap-3">
                        <div class="flex w-[50px] h-[50px] shrink-0 rounded-full overflow-hidden bg-obito-grey">
                            <img src="{{ asset('assets/images/photos/Atha Halilintar.png') }}"
                                class="w-full h-full object-cover" alt="photo profile">
                        </div>
                        <div>
                            <p class="font-semibold">Atha Halilintar</p>
                        </div>
                    </div>
                </div>
                <div
                    class="testimonial-card flex flex-col w-[359px] shrink-0 rounded-[20px] border border-obito-grey p-5 gap-4 bg-white">
                    <div class="flex">
                        <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex shrink-0 w-5"
                            alt="star">
                        <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex shrink-0 w-5"
                            alt="star">
                        <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex shrink-0 w-5"
                            alt="star">
                        <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex shrink-0 w-5"
                            alt="star">
                        <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex shrink-0 w-5"
                            alt="star">
                    </div>
                    <p class="leading-7">Kopinya enak banget dan ga nyangka dapet produk berkualitas dengan harga yang
                        terjangkau. Good Job WCoffee!.</p>
                    <div class="flex items-center gap-3">
                        <div class="flex w-[50px] h-[50px] shrink-0 rounded-full overflow-hidden bg-obito-grey">
                            <img src="{{ asset('assets/images/photos/Atha Halilintar.png') }}"
                                class="w-full h-full object-cover" alt="photo profile">
                        </div>
                        <div>
                            <p class="font-semibold">Atha Halilintar</p>
                        </div>
                    </div>
                </div>
                <div
                    class="testimonial-card flex flex-col w-[359px] shrink-0 rounded-[20px] border border-obito-grey p-5 gap-4 bg-white">
                    <div class="flex">
                        <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex shrink-0 w-5"
                            alt="star">
                        <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex shrink-0 w-5"
                            alt="star">
                        <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex shrink-0 w-5"
                            alt="star">
                        <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex shrink-0 w-5"
                            alt="star">
                        <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex shrink-0 w-5"
                            alt="star">
                    </div>
                    <p class="leading-7">Kopinya enak banget dan ga nyangka dapet produk berkualitas dengan harga yang
                        terjangkau. Good Job WCoffee!.</p>
                    <div class="flex items-center gap-3">
                        <div class="flex w-[50px] h-[50px] shrink-0 rounded-full overflow-hidden bg-obito-grey">
                            <img src="{{ asset('assets/images/photos/Atha Halilintar.png') }}"
                                class="w-full h-full object-cover" alt="photo profile">
                        </div>
                        <div>
                            <p class="font-semibold">Atha Halilintar</p>
                        </div>
                    </div>
                </div>
                <div
                    class="testimonial-card flex flex-col w-[359px] shrink-0 rounded-[20px] border border-obito-grey p-5 gap-4 bg-white">
                    <div class="flex">
                        <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex shrink-0 w-5"
                            alt="star">
                        <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex shrink-0 w-5"
                            alt="star">
                        <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex shrink-0 w-5"
                            alt="star">
                        <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex shrink-0 w-5"
                            alt="star">
                        <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex shrink-0 w-5"
                            alt="star">
                    </div>
                    <p class="leading-7">Kopinya enak banget dan ga nyangka dapet produk berkualitas dengan harga yang
                        terjangkau. Good Job WCoffee!.</p>
                    <div class="flex items-center gap-3">
                        <div class="flex w-[50px] h-[50px] shrink-0 rounded-full overflow-hidden bg-obito-grey">
                            <img src="{{ asset('assets/images/photos/Atha Halilintar.png') }}"
                                class="w-full h-full object-cover" alt="photo profile">
                        </div>
                        <div>
                            <p class="font-semibold">Atha Halilintar</p>
                        </div>
                    </div>
                </div>
                <div
                    class="testimonial-card flex flex-col w-[359px] shrink-0 rounded-[20px] border border-obito-grey p-5 gap-4 bg-white">
                    <div class="flex">
                        <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex shrink-0 w-5"
                            alt="star">
                        <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex shrink-0 w-5"
                            alt="star">
                        <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex shrink-0 w-5"
                            alt="star">
                        <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex shrink-0 w-5"
                            alt="star">
                        <img src="{{ asset('assets/images/icons/Star 1.svg') }}" class="flex shrink-0 w-5"
                            alt="star">
                    </div>
                    <p class="leading-7">Kopinya enak banget dan ga nyangka dapet produk berkualitas dengan harga yang
                        terjangkau. Good Job WCoffee!.</p>
                    <div class="flex items-center gap-3">
                        <div class="flex w-[50px] h-[50px] shrink-0 rounded-full overflow-hidden bg-obito-grey">
                            <img src="{{ asset('assets/images/photos/Atha Halilintar.png') }}"
                                class="w-full h-full object-cover" alt="photo profile">
                        </div>
                        <div>
                            <p class="font-semibold">Atha Halilintar</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection