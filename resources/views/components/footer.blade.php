<!-- Footer -->
<footer class= "text- py-10 mt-10 w-[85%] mx-auto">
    <div class="max-w-screen-xl mx-auto px-6 grid grid-cols-1 md:grid-cols-4 gap-8">
        <!-- Brand -->
        <div>
            <h2 class="text-xl font-bold mb-3">WCoffee</h2>
            <p class="text-sm leading-relaxed">
                Nikmati kopi terbaik dari petani lokal Indonesia. Kami hadirkan rasa, aroma, dan kualitas dalam
                setiap tegukan.
            </p>
        </div>

        <!-- Links -->
        <div>
            <h3 class="text-lg font-semibold mb-2">Menu</h3>
            <ul class="space-y-1 text-sm">
                <li><a href="{{ url('index') }}" class="hover:text-obbg-obito-green transition">Home</a></li>
                <li><a href="{{ url('pages.shop') }}" class="hover:text-obbg-obito-green transition">Shop</a>
                </li>
                <li><a href="{{ url('pages.join-us') }}" class="hover:text-obbg-obito-green transition">Join
                        Us</a></li>
            </ul>
        </div>

        <!-- Social -->
        <div>
            <h3 class="text-lg font-semibold mb-2">Ikuti Kami</h3>
            <div class="flex flex-col space-x-4">
                <a href="#" class="hover:text-obbg-obito-green transition">Instagram</a>
                <a href="#" class="hover:text-obbg-obito-green transition">Facebook</a>
                <a href="#" class="hover:text-obbg-obito-green transition">X</a>
            </div>
        </div>

        <!-- Contact -->
        <div>
            <h3 class="text-lg font-semibold mb-2">Kontak</h3>
            <p class="text-sm">Email: support@wcoffee.id</p>
            <p class="text-sm">Telp: +62 812-3456-7890</p>
            <p class="text-sm mt-1">Jl. Aroma Kopi No.10, Jember</p>
        </div>
    </div>

    <div class="mt-10 text-center text-xs text-gray-400">
        &copy; {{ date('Y') }} WCoffee. All rights reserved.
    </div>
</footer>