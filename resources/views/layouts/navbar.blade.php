
<nav class="relative bg-white border-b border-pink-100 shadow-sm">

    <div class="relative mx-auto flex h-16 max-w-7xl items-center justify-between px-4 md:px-6">

        <!-- Logo sobresalido -->
        <a href="#" class="absolute left-4 md:left-6 -bottom-15 z-30">
            <img src="/images/logo.png" alt="Logo"
                class="size-30 md:size-28 rounded-full border-4 border-white object-cover shadow-lg bg-white">
        </a>

        <!-- Desktop links -->
        <div class="hidden md:flex flex-1 items-center justify-center gap-10">
            <a href="{{route('home')}}" class="font-medium text-gray-700 transition hover:text-pink-500">
                Inicio
            </a>

            <a href="{{route('services')}}" class="font-medium text-gray-700 transition hover:text-pink-500">
                Servicios
            </a>

            <a href="{{route('gallery')}}" class="font-medium text-gray-700 transition hover:text-pink-500">
                Galería
            </a>
        </div>
        <!-- Desktop dashboard -->
        @auth
        <div class="hidden md:block ml-auto">
            <a href="/admin"
                class="rounded-xl bg-pink-500 px-5 py-2 text-sm font-semibold text-white transition hover:bg-pink-600">
                Dashboard
            </a>
        </div>

        @endauth

        <!-- Mobile button -->
        <button id="menu-btn" class="ml-auto md:hidden rounded-lg p-2 text-gray-700 hover:bg-pink-50">

            <svg xmlns="http://www.w3.org/2000/svg" class="size-7" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>

        </button>

    </div>

    <!-- Mobile menu -->
    <div id="mobile-menu" class="hidden border-t border-pink-100 bg-white px-4 pb-6 pt-10 md:hidden">

        <div class="flex flex-col items-center gap-4">

            <a href="{{route('home')}}" class="font-medium text-gray-700 hover:text-pink-500">
                Inicio
            </a>

            <a href="{{route('services')}}" class="font-medium text-gray-700 hover:text-pink-500">
                Servicios
            </a>

            <a href="{{route('gallery')}}" class="font-medium text-gray-700 hover:text-pink-500">
                Galería
            </a>

            @auth
            <a href="/admin"
                class="mt-2 rounded-xl bg-pink-500 px-4 py-2 text-center font-semibold text-white hover:bg-pink-600">
                Dashboard
            </a>
            @endauth


        </div>
    </div>
</nav>