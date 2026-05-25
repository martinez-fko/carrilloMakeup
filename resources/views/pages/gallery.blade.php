@extends('app')

@section('title')
Galeria | Carrillo MakeUp
@endsection

@section('content')


<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-6">

        <!-- Título -->
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold text-gray-800">
                Antes y Después
            </h2>
            <p class="text-gray-500 mt-2">
                Mira la transformación de nuestras clientas.
            </p>
        </div>

        <!-- Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

            <!-- Item -->
            <div class="bg-pink-50 rounded-3xl overflow-hidden shadow-lg">
                <div class="grid grid-cols-2">

                    <!-- Antes -->
                    <div class="relative group overflow-hidden">
                        <img src="{{ asset('images/gallery/before1.png') }}"
                            class="w-full h-72 object-cover object-top group-hover:scale-105 transition duration-500">
                        <span class="absolute top-3 left-3 bg-gray-900/70 text-white text-xs px-3 py-1 rounded-full">
                            Antes
                        </span>
                    </div>

                    <!-- Después -->
                    <div class="relative group overflow-hidden">
                        <img src="{{ asset('images/gallery/after1.png') }}"
                            class="w-full h-72 object-cover object-top group-hover:scale-105 transition duration-500">
                        <span class="absolute top-3 right-3 bg-pink-500 text-white text-xs px-3 py-1 rounded-full">
                            Después
                        </span>
                    </div>

                </div>
            </div>

            <!-- Item -->
            <div class="bg-pink-50 rounded-3xl overflow-hidden shadow-lg">
                <div class="grid grid-cols-2">

                    <div class="relative group overflow-hidden">
                        <img src="{{ asset('images/gallery/before2.png') }}"
                            class="w-full h-72 object-cover object-top group-hover:scale-105 transition duration-500">
                        <span class="absolute top-3 left-3 bg-gray-900/70 text-white text-xs px-3 py-1 rounded-full">
                            Antes
                        </span>
                    </div>

                    <div class="relative group overflow-hidden">
                        <img src="{{ asset('images/gallery/after2.png') }}"
                            class="w-full h-72 object-cover object-top group-hover:scale-105 transition duration-500">
                        <span class="absolute top-3 right-3 bg-pink-500 text-white text-xs px-3 py-1 rounded-full">
                            Después
                        </span>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>


{{-- Imagenes Random --}}

<section class="py-16 bg-pink-50">
    <div class="max-w-7xl mx-auto px-6">

        <!-- Título -->
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold text-gray-800">
                Nuestra Galería
            </h2>
            <p class="text-gray-500 mt-2">
                Algunos de nuestros maquillajes y trabajos recientes.
            </p>
        </div>

        <!-- Masonry fake -->
        <div class="columns-2 md:columns-3 lg:columns-4 gap-4 space-y-4">

            <div class="overflow-hidden rounded-3xl shadow-lg group">
                <img src="{{ asset('images/gallery/g1.png') }}"
                    class="w-full object-cover group-hover:scale-105 transition duration-500">
            </div>

            <div class="overflow-hidden rounded-3xl shadow-lg group">
                <img src="{{ asset('images/gallery/g2.png') }}"
                    class="w-full object-cover group-hover:scale-105 transition duration-500">
            </div>

            <div class="overflow-hidden rounded-3xl shadow-lg group">
                <img src="{{ asset('images/gallery/g3.png') }}"
                    class="w-full object-cover group-hover:scale-105 transition duration-500">
            </div>

            <div class="overflow-hidden rounded-3xl shadow-lg group">
                <img src="{{ asset('images/gallery/g4.png') }}"
                    class="w-full object-cover group-hover:scale-105 transition duration-500">
            </div>

            <div class="overflow-hidden rounded-3xl shadow-lg group">
                <img src="{{ asset('images/gallery/g5.png') }}"
                    class="w-full object-cover group-hover:scale-105 transition duration-500">
            </div>

            <div class="overflow-hidden rounded-3xl shadow-lg group">
                <img src="{{ asset('images/gallery/g6.png') }}"
                    class="w-full object-cover group-hover:scale-105 transition duration-500">
            </div>

            <div class="overflow-hidden rounded-3xl shadow-lg group">
                <img src="{{ asset('images/gallery/g7.png') }}"
                    class="w-full object-cover group-hover:scale-105 transition duration-500">
            </div>

            <div class="overflow-hidden rounded-3xl shadow-lg group">
                <img src="{{ asset('images/gallery/g8.png') }}"
                    class="w-full object-cover group-hover:scale-105 transition duration-500">
            </div>

        </div>
    </div>
</section>

@endsection