@extends('app')

@section('title')
Inicio | Carrillo MakeUp
@endsection

@section('content')



{{-- ---- Hero ----- --}}


<section class="relative min-h-[calc(100vh-4rem)] overflow-hidden">

    <!-- Imagen -->
    <img src="{{asset('images/hero.png')}}" alt="Estética" class="absolute inset-0 h-full w-full object-cover">

    <!-- Overlay oscuro -->
    <div class="absolute inset-0 bg-black/50"></div>

    <!-- Contenido -->
    <div class="relative z-10 flex h-full items-center justify-center px-6 pt-15">

        <div class="max-w-3xl text-center text-white">

            <p class="mb-4 text-sm uppercase tracking-[0.3em] text-white/80">
                Estética Premium
            </p>

            <h1 class="mb-6 text-4xl font-bold leading-tight sm:text-5xl md:text-7xl">
                Tu belleza merece atención profesional.
            </h1>

            <p class="mb-8 text-base text-white/90 sm:text-lg md:text-xl">
                Servicios de belleza y tratamientos personalizados.
            </p>

            <a href="https://wa.me/529932366813?text=Hola,%20quiero%20agendar%20una%20cita" target="_blank"
                class="inline-block rounded-full bg-white px-8 py-4 text-sm font-semibold text-black transition hover:scale-105 hover:bg-gray-100">
                Agenda tu cita
            </a>

        </div>

    </div>

</section>

{{-- Promicones --}}
{{-- Promociones --}}

@php
$promociones = \App\Models\Promotion::query()->where('is_active', true)
->latest()
->take(3)
->get();
@endphp

<section class="py-5 bg-white">

    <div class="max-w-7xl mx-auto px-6 lg:px-8">

        <!-- Título -->
        <div class="text-center mb-14">

            <h2 class="mt-3 text-4xl font-extrabold text-gray-900">
                Ofertas y promociones
            </h2>

            <p class="mt-4 text-gray-600 max-w-2xl mx-auto">
                Aprovecha nuestras promociones especiales disponibles por tiempo limitado.
            </p>

        </div>

        @if ($promociones->count())

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">

            @foreach ($promociones as $promocion)

            <div
                class="bg-white rounded-3xl shadow-lg overflow-hidden border border-gray-100 hover:shadow-2xl transition">

                <!-- Imagen -->
                <img src="{{ asset('storage/' . $promocion->image_path) }}" alt="{{ $promocion->title }}" />

            </div>

            @endforeach

        </div>

        @else

        <!-- Sin promociones -->
        <div class="bg-gray-50 border border-dashed border-gray-300 rounded-3xl py-16 text-center">

            <h3 class="text-2xl font-bold text-gray-700">
                No hay promociones
            </h3>

            <p class="mt-3 text-gray-500">
                Próximamente tendremos nuevas ofertas para ti.
            </p>

        </div>

        @endif

    </div>

</section>


{{-- Termina Promociones --}}



@endsection