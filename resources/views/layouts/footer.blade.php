<footer class="bg-black text-white">

    <div class="mx-auto max-w-7xl px-6 py-16">

        <div class="grid gap-12 md:grid-cols-2 lg:grid-cols-4">

            <!-- Logo / descripción -->
            <div>

                <div class="mb-6 flex items-center gap-3">

                    <div class="flex h-20 w-20 ">
                        <img src="{{asset('images/logofooter.png')}}" alt="carrillomakeup">
                    </div>

                    <div>
                        <h2 class="text-2xl font-bold">
                            Carrillo MakeUp
                        </h2>

                        <p class="text-sm text-gray-400">
                            Maquillaje Profesional
                        </p>
                    </div>

                </div>

                <p class="leading-relaxed text-gray-400">
                    Servicios profesionales de belleza, maquillaje y tratamientos personalizados para resaltar tu
                    estilo.
                </p>

            </div>

            <!-- Mapa del sitio -->
            <div>

                <h3 class="mb-6 text-lg font-semibold">
                    Mapa del sitio
                </h3>

                <ul class="space-y-4 text-gray-400">

                    <li>
                        <a href="#" class="transition hover:text-white">
                            Inicio
                        </a>
                    </li>

                    <li>
                        <a href="#" class="transition hover:text-white">
                            Servicios
                        </a>
                    </li>

                    <li>
                        <a href="#" class="transition hover:text-white">
                            Galería
                        </a>
                    </li>

                </ul>

            </div>

            <!-- Contacto -->
            <div>

                <h3 class="mb-6 text-lg font-semibold">
                    Contacto
                </h3>

                <ul class="space-y-4 text-gray-400">

                    <li>
                        📍 Villahermosa, Tabasco
                    </li>

                    <li>
                        📞 +52 993 000 0000
                    </li>

                    <li>
                        ✉️ contacto@beutysalon.com
                    </li>

                    <li>
                        🕒 Lun - Sáb / 9:00 AM - 7:00 PM
                    </li>

                </ul>

            </div>

            <!-- Redes sociales -->
            <div>

                <h3 class="mb-6 text-lg font-semibold">
                    Síguenos
                </h3>

                <div class="flex gap-4">

                    <!-- Facebook -->
                    <a href="https://www.facebook.com/profile.php?id=61552668389938&locale=es_LA"
                        target="blank"
                        class="flex h-12 w-12 items-center justify-center rounded-full bg-white/10 transition hover:bg-white hover:text-black">
                        F
                    </a>

                    <!-- Instagram -->
                    <a href="https://www.instagram.com/lizbeth_carrillomakeup?fbclid=IwY2xjawSBhA5leHRuA2FlbQIxMABicmlkETFBVzFuU1lQUktHNkNVTUVWc3J0YwZhcHBfaWQQMjIyMDM5MTc4ODIwMDg5MgABHhCZr5WmRKLFUI7rdkOV8SZOWxE6V8QuicSZsJVNhGwlPzuYxELVwkOAXC5G_aem_VNpHJe2a2dJAagYd0_Wm8w"
                        target="blanck"
                        class="flex h-12 w-12 items-center justify-center rounded-full bg-white/10 transition hover:bg-white hover:text-black">
                        I
                    </a>

                    <!-- WhatsApp -->
                    <a href="#"
                        class="flex h-12 w-12 items-center justify-center rounded-full bg-white/10 transition hover:bg-white hover:text-black">
                        W
                    </a>

                </div>

            </div>

        </div>

        <!-- Línea -->
        <div class="my-10 h-px bg-white/10"></div>

        <!-- Bottom -->
        <div class="flex flex-col items-center justify-between gap-4 text-center text-sm text-gray-500 md:flex-row">

            <p>
                © {{date('Y')}} Carrilo Make UP. Todos los derechos reservados.
            </p>

            <p class="text-sm text-gray-500">
                Diseñado y desarrollado por
                <a href="https://fcomtzdev.com.mx/"
                    class="font-semibold text-pink-500 underline-offset-4 transition hover:underline"
                    target="blank">
                    FcoMtzDev
                </a>
            </p>

            <div class="flex gap-6">

                {{-- <a href="#" class="transition hover:text-white">
                    Aviso de privacidad
                </a>

                <a href="#" class="transition hover:text-white">
                    Términos y condiciones
                </a> --}}

            </div>

        </div>

    </div>

</footer>