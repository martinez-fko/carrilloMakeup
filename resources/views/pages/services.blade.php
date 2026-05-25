@extends('app')

@section('title')
Servicios | Carrillo MakeUp
@endsection

@section('content')


<section class="py-15 lg:py-5 bg-pink-50">
  <div class="max-w-7xl mx-auto px-6">

    <div class="text-center mb-12">
      <h2 class="text-4xl font-bold text-gray-800">
        Nuestros Servicios
      </h2>
      <p class="text-gray-500 mt-2">
        Realza tu belleza con maquillaje profesional para cada ocasión.
      </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

      <!-- Card -->
      <div class="bg-white rounded-3xl shadow-lg overflow-hidden hover:shadow-2xl transition duration-300 group">
        <div class="overflow-hidden">
          <img src="{{asset('images/services/service1.png')}}" alt="Maquillaje social"
            class="w-full h-72 object-cover group-hover:scale-110 transition duration-500">
        </div>

        <div class="p-6">
          <span class="text-pink-500 text-sm font-semibold">
            Maquillaje
          </span>

          <h3 class="text-2xl font-bold text-gray-800 mt-2">
            Maquillaje Social
          </h3>

          <p class="text-gray-500 mt-3">
            Ideal para fiestas, reuniones y eventos especiales.
          </p>

          <div class="flex items-center justify-between mt-6">

            <a href="https://wa.me/529932366813?text=Hola,%20quiero%20maquillaje%20social" target="_blank"
              class="bg-pink-500 hover:bg-pink-600 text-white px-5 py-2 rounded-full transition">
              Reservar
            </a>
          </div>
        </div>
      </div>

      <!-- Card -->
      <div class="bg-white rounded-3xl shadow-lg overflow-hidden hover:shadow-2xl transition duration-300 group">
        <div class="overflow-hidden">
          <img src="{{asset('images/services/service2.png')}}" alt="Maquillaje novia"
            class="w-full h-72 object-cover object-top group-hover:scale-110 transition duration-500">
        </div>

        <div class="p-6">
          <span class="text-pink-500 text-sm font-semibold">
            Bridal
          </span>

          <h3 class="text-2xl font-bold text-gray-800 mt-2">
            Maquillaje para Novia
          </h3>

          <p class="text-gray-500 mt-3">
            Look elegante y duradero para tu día especial.
          </p>

          <div class="flex items-center justify-between mt-6">

            <a href="https://wa.me/529932366813?text=Hola,%20quiero%20agendar%20una%20cita%20para%20maquillaje%20de%20novia"
              target="_blank" class="bg-pink-500 hover:bg-pink-600 text-white px-5 py-2 rounded-full transition">
              Reservar
            </a>
          </div>
        </div>
      </div>

      <!-- Card -->
      <div class="bg-white rounded-3xl shadow-lg overflow-hidden hover:shadow-2xl transition duration-300 group">
        <div class="overflow-hidden">
          <img src="{{asset('images/services/service3.png')}}" alt="Maquillaje XV años"
            class="w-full h-72 object-cover object-top group-hover:scale-110 transition duration-500">
        </div>

        <div class="p-6">
          <span class="text-pink-500 text-sm font-semibold">
            Glam
          </span>

          <h3 class="text-2xl font-bold text-gray-800 mt-2">
            XV Años y Graduación
          </h3>

          <p class="text-gray-500 mt-3">
            Maquillaje fresco y fotográfico para eventos inolvidables.
          </p>

          <div class="flex items-center justify-between mt-6">

            <a href="https://wa.me/529932366813?text=Hola,%20quiero%20agendar%20una%20cita%20para%20XV/graduacion" target="_blank"
              class="bg-pink-500 hover:bg-pink-600 text-white px-5 py-2 rounded-full transition">
              Reservar
            </a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>


@endsection