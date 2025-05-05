@extends('layouts.app')

@section('content')
    <section class="flex items-center justify-center py-24">
        <div class="container w-[85%]  mx-auto px-6 text-center">
            <!-- Headline -->
            <h2 class="text-[50px] leading-[65px] md:text-5xl font-extrabold">
                Dapatkan Harga Grosir, <br>Jadi Mitra WCoffee Sekarang!
            </h2>

            <!-- Subheadline -->
            <p class="mt-4 text-lg md:text-xl text-obito-text-secondary">
                Bergabung sebagai mitra dan nikmati akses spesial untuk pembelian skala besar. <br>Hemat lebih banyak,
                jual lebih untung, dan dukung petani kopi lokal!
            </p>

            <!-- CTA Button -->
            <div class="mt-8">
                <a href="{{ url('/mitras/register') }}"
                    class="inline-block bg-obito-green text-white px-8 py-3 rounded-full text-lg font-semibold hover:bg-btn-hover transition duration-300">
                    Daftar Jadi Mitra
                </a>
            </div>
        </div>
    </section>

    <!-- Benefit Mitra -->
    <section class="flex items-center justify-cente py-16">
        <div class="w-[85%] mx-auto px-6">
            <h2 class="text-[2.5rem] font-bold text-center">Keuntungan Menjadi Mitra</h2>
            <p class="leading-7 mt-[10px] text-obito-text-secondary text-center mb-10">
                Kolaborasi dengan mitra terbaik untuk menghadirkan kopi
                <span class="block">berkualitas. Bersama, kita tumbuh dan berkembang!</span>
            </p>
            <div class="grid md:grid-cols-3 gap-10 text-center">
                <!-- Benefit 1 -->
                <div class="bg-[#F9F9F9] rounded-2xl p-8 shadow-md hover:shadow-lg transition">
                    <div class="mb-4 flex justify-center">
                        <!-- Icon (e.g. discount) -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-secondary" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M9 14l-3-3m0 0l3-3m-3 3h12m-6-3v12" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2 text-font">Harga Grosir Khusus</h3>
                    <p class="text-obito-text-secondary">Nikmati harga spesial untuk pembelian dalam jumlah besar
                        sebagai mitra resmi kami.</p>
                </div>

                <!-- Benefit 2 -->
                <div class="bg-[#F9F9F9] rounded-2xl p-8 shadow-md hover:shadow-lg transition">
                    <div class="mb-4 flex justify-center">
                        <!-- Icon (support) -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-secondary" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M18 13v6a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2v-6M12 3v10m0 0l-3-3m3 3l3-3" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2 text-font">Dukungan Mitra</h3>
                    <p class="text-obito-text-secondary">Tim kami siap membantu kebutuhan mitra, mulai dari pengiriman
                        hingga stok produk.</p>
                </div>

                <!-- Benefit 3 -->
                <div class="bg-[#F9F9F9] rounded-2xl p-8 shadow-md hover:shadow-lg transition">
                    <div class="mb-4 flex justify-center">
                        <!-- Icon (community/coffee) -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-secondary" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M8 16h8m-8 0a4 4 0 0 1-4-4V6a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v6a4 4 0 0 1-4 4m-8 0v4m8-4v4" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2 text-font">Dukung Kopi Lokal</h3>
                    <p class="text-obito-text-secondary">Setiap pembelian Anda turut memberdayakan petani kopi lokal di
                        Indonesia.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- How To Join -->
    <section class="w-full bg-white py-16">
        <div class="max-w-6xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-center text-primary mb-16">Cara Menjadi Mitra WCoffee</h2>

            <div class="relative border-l-2 border-primary ml-6">
                <!-- Langkah 1 -->
                <div class="mb-12 ml-10 flex items-start">
                    <div class="flex flex-col items-center mr-6">
                        <div
                            class="bg-primary text-white w-10 h-10 rounded-full flex items-center justify-center font-semibold">
                            1</div>
                        <div class="w-px h-full bg-primary"></div>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold text-primary">Registrasi Mitra</h3>
                        <p class="mt-2 text-gray-600 max-w-md">
                            Isi formulir pendaftaran kemitraan secara lengkap melalui halaman Join Us untuk membuat akun
                            mitra.
                        </p>
                    </div>
                </div>

                <!-- Langkah 2 -->
                <div class="mb-12 ml-10 flex items-start">
                    <div class="flex flex-col items-center mr-6">
                        <div
                            class="bg-primary text-white w-10 h-10 rounded-full flex items-center justify-center font-semibold">
                            2</div>
                        <div class="w-px h-full bg-primary"></div>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold text-primary">Ajukan Permintaan</h3>
                        <p class="mt-2 text-gray-600 max-w-md">
                            Setelah akun aktif, ajukan permintaan kemitraan melalui dashboard mitra Anda.
                        </p>
                    </div>
                </div>

                <!-- Langkah 3 -->
                <div class="mb-12 ml-10 flex items-start">
                    <div class="flex flex-col items-center mr-6">
                        <div
                            class="bg-primary text-white w-10 h-10 rounded-full flex items-center justify-center font-semibold">
                            3</div>
                        <div class="w-px h-full bg-primary"></div>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold text-primary">Tunggu Verifikasi Admin</h3>
                        <p class="mt-2 text-gray-600 max-w-md">
                            Kami akan memverifikasi data Anda dalam waktu maksimal 1x24 jam kerja.
                        </p>
                    </div>
                </div>

                <!-- Langkah 4 -->
                <div class="mb-12 ml-10 flex items-start">
                    <div class="flex flex-col items-center mr-6">
                        <div
                            class="bg-primary text-white w-10 h-10 rounded-full flex items-center justify-center font-semibold">
                            4</div>
                        <div class="w-px h-full bg-primary"></div>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold text-primary">Cek Notifikasi</h3>
                        <p class="mt-2 text-gray-600 max-w-md">
                            Periksa notifikasi secara berkala di dashboard untuk melihat status pengajuan kemitraan
                            Anda.
                        </p>
                    </div>
                </div>

                <!-- Langkah 5 -->
                <div class="ml-10 flex items-start">
                    <div class="flex flex-col items-center mr-6">
                        <div
                            class="bg-primary text-white w-10 h-10 rounded-full flex items-center justify-center font-semibold">
                            5</div>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold text-primary">Selamat, Anda Menjadi Mitra!</h3>
                        <p class="mt-2 text-gray-600 max-w-md">
                            Nikmati harga grosir dan berbagai keuntungan eksklusif lainnya sebagai mitra resmi WCoffee.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
