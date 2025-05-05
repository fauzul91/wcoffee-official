<!-- Navbar -->
<nav id="nav-guest" class="flex w-full bg-white border-b border-obito-grey">
    <div class="flex w-[1280px] px-[75px] py-5 items-center justify-between mx-auto">
        <div class="flex items-center gap-[50px]">
            <a href="{{ url('index') }}" class="flex shrink-0">
                <img src="{{ asset('assets/images/logos/logo.svg') }}" class="w-40" alt="logo">
            </a>
            <ul class="flex items-center gap-10">
                @if (auth()->check() && auth()->user()->hasRole('mitra'))
                    <li class="hover:font-semibold transition-all duration-300">
                        <a href="{{ route('mitra.dashboard') }}">Dasbor</a>
                    </li>  
                    <li class="hover:font-semibold transition-all duration-300">
                        <a href="{{ route('mitra.ajukan-kerjasama') }}">Ajukan Kerjasama</a>
                    </li>  
                    <li class="hover:font-semibold transition-all duration-300">
                        <a href="{{ route('shop') }}">Shop</a>
                    </li> 
                @else
                    <li class="hover:font-semibold transition-all duration-300">
                        <a href="{{ route('home') }}">Home</a>
                    </li>                  
                    <li class="hover:font-semibold transition-all duration-300">
                        <a href="{{ route('shop') }}">Shop</a>
                    </li>                
                    <li class="hover:font-semibold transition-all duration-300">
                        <a href="{{ route('join-us') }}">Join Us</a>
                    </li>
                @endif
            </ul>
        </div>
        

        <div class="flex items-center gap-5 justify-end">
            <a href="#" class="relative flex shrink-0">
                <svg xmlns="http://www.w3.org/2000/svg" alt="icon" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                </svg>
                <span class="absolute -top-1 -right-1 bg-obito-green text-white text-[10px] font-semibold rounded-full w-4 h-4 flex items-center justify-center leading-none shadow-lg">
                    3
                </span>
            </a>

            <div class="h-[50px] w-px bg-obito-grey"></div>

            {{-- Authenticated User --}}            
            @auth
                <div class="flex items-center gap-3">
                    @if(auth()->user()->hasRole('admin'))
                        <a href="{{ url('/dashboard') }}" class="rounded-full py-3 px-5 bg-obito-green text-white font-semibold hover:drop-shadow-2xl transition-all duration-300">
                            Dashboard
                        </a>                    
                    @else
                        <div x-data="{ open: false }" class="relative flex items-center gap-2">
                            @php
                                $namaDepan = explode(' ', auth()->user()->name)[0]
                            @endphp
                            @if (auth()->user()->photo)
                                <img src="{{ asset('storage/' . auth()->user()->photo) }}" alt="avatar" class="w-10.5 h-10.5 rounded-full object-cover mr-0.5">
                                <span class="font-semibold text-[1rem] mr-2">Hello, {{ $namaDepan }}</span> 
                            @else
                                <img src="{{ asset('assets/images/icons/profile-user.svg') }}" alt="avatar" class="w-10.5 h-10.5 rounded-full object-cover mr-0.5">
                                <span class="font-semibold text-[1rem] mr-2">Hello, {{ $namaDepan }}</span> 
                          
                            <button @click="open = !open" class="cursor-pointer">
                                {{-- Icon Dropdown --}}
                                <img src="{{ asset('assets/images/icons/arrow-circle-down.svg') }}" alt="dropdown icon" class="w-5 h-5">
                            </button>
                            @endif

                            <div 
                                x-show="open"
                                @click.away="open = false"
                                x-transition
                                class="absolute top-full mt-2 right-0 bg-white shadow-md rounded-md w-[12.5rem] z-50"
                            >
                                <ul class="py-2">
                                    @if (auth()->user()->hasRole('customer'))
                                        <li>
                                            <a href="{{ url('/customer/profile') }}" class="block px-4 py-4 hover:bg-gray-100">Profile</a>
                                        </li>
                                    @elseif (auth()->user()->hasRole('mitra'))
                                        <li>
                                            <a href="{{ url('/mitras/profile') }}" class="block px-4 py-4 hover:bg-gray-100">Profile</a>
                                        </li>
                                    @endif
                                    <li>
                                        <a href="{{ route('logout') }}" class="block px-4 py-2 hover:bg-gray-100"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>                                                               
                    @endif
                </div>
            @else
            {{-- Guest --}}
            <div class="flex items-center gap-3">
                <a href="{{ url('/dashboard/register') }}" class="rounded-full border border-obito-grey py-3 px-5 bg-white hover:border-obito-green transition-all duration-300">
                    <span class="font-semibold">Sign Up</span>
                </a>
                <a href="{{ url('/dashboard/login') }}" class="rounded-full py-3 px-5 bg-obito-green hover:drop-shadow-2xl transition-all duration-300">
                    <span class="font-semibold text-white">Sign In</span>
                </a>
            </div>
            @endauth
        </div>
    </div>
</nav>
<script src="//unpkg.com/alpinejs" defer></script>