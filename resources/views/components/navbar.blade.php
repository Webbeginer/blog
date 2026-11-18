<!-- Navbar Wrapper dengan Alpine.js -->
<nav x-data="{ isOpen: false }" class="bg-white shadow-md">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">

            <!-- Logo & Menu Desktop -->
            <div class="flex w-full py-4 justify-between items-center">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <span class="text-2xl font-bold text-indigo-600">MyLogo</span>
                </div>

                <!-- Menu Desktop (Sembunyi di Mobile) -->
                <div class="hidden md:flex space-x-8 text-xl">
                    <x-nav-link href="/home" :active="request()->is('home')">Home</x-nav-link>
                    <x-nav-link href="/about" :active="request()->is('about')">About</x-nav-link>
                    <x-nav-link href="/blogs" :active="request()->is('blogs')">Blog</x-nav-link>
                    <x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link>
                </div>
            </div>

            <!-- Tombol Hamburger (Hanya Muncul di Mobile) -->
            <div class="flex items-center md:hidden">
                <button @click="isOpen = !isOpen" type="button"
                    class="text-gray-500 hover:text-gray-700 focus:outline-none" aria-label="Toggle menu">
                    <!-- Icon Hamburger (Saat Menu Tertutup) -->
                    <svg x-show="!isOpen" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <!-- Icon X / Close (Saat Menu Terbuka) -->
                    <svg x-show="isOpen" x-cloak class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

        </div>
    </div>

    <!-- Menu Mobile (Muncul saat isOpen = true) -->
    <div x-show="isOpen" x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 transform -translate-y-2"
        x-transition:enter-end="opacity-100 transform translate-y-0"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100 transform translate-y-0"
        x-transition:leave-end="opacity-0 transform -translate-y-2" class="md:hidden bg-white border-t border-gray-200">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
            <a href="/home"
                class="block text-gray-700 {{ request()->is('home') ? 'bg-indigo-50 text-indigo-600' : 'hover:bg-indigo-50 hover:text-indigo-600' }} px-3 py-2 rounded-md text-base font-medium">Home</a>
            <a href="/about"
                class="block text-gray-700 {{ request()->is('about') ? 'bg-indigo-50 text-indigo-600' : 'hover:bg-indigo-50 hover:text-indigo-600' }} px-3 py-2 rounded-md text-base font-medium">About</a>
            <a href="/blogs"
                class="block text-gray-700 {{ request()->is('blogs') ? 'bg-indigo-50 text-indigo-600' : 'hover:bg-indigo-50 hover:text-indigo-600' }} px-3 py-2 rounded-md text-base font-medium">Blog</a>
            <a href="/contact"
                class="block text-gray-700 {{ request()->is('contact') ? 'bg-indigo-50 text-indigo-600' : 'hover:bg-indigo-50 hover:text-indigo-600' }} px-3 py-2 rounded-md text-base font-medium">Contact</a>
        </div>
    </div>
</nav>