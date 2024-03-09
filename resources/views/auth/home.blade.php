@extends('auth.layouts')
@section('content')
    <style>
        /* Estilos adicionales para el slider */
        .slide {
            display: none;
            /* Ocultar todos los slides por defecto */
            transition: transform 0.5s ease;
        }

        .active {
            display: block;
            /* Mostrar el slide activo */
        }
    </style>

    <div class="container text-center gap w-[900px] flex flex-col gap-5 mx-auto px-4">
        <h2 class="text-3xl font-bold mb-4">Acerca de GameNow</h2>
        <p>
            <b>GameNow</b> es tu destino definitivo para explorar, descubrir y
            disfrutar del vasto universo de los videojuegos. Con una
            <b>colección inigualable</b> que abarca desde los clásicos
            atemporales hasta los últimos lanzamientos, ofrecemos una
            experiencia única para cada tipo de jugador.
        </p>
        <p>
            Nuestra plataforma se construye sobre tres pilares fundamentales:
            <b>variedad</b>, <b>comunidad</b> y <b>accesibilidad</b>. Creemos
            firmemente que el mundo de los videojuegos es para todos, y nuestro
            objetivo es eliminar cualquier barrera que impida a los jugadores
            disfrutar de su pasión.
        </p>
        <p>
            En <b>GameNow</b>, la <b>variedad</b> no conoce límites. Desde
            emocionantes aventuras de acción hasta enigmáticos puzzles, pasando
            por mundos de estrategia en tiempo real y experiencias inmersivas de
            rol, nuestra biblioteca está diseñada para satisfacer todos los
            gustos y preferencias.
        </p>
    </div>

    <div class="rounded-sm mb-20 max-w-xl mx-auto mt-10">
        <div class="relative h-[500px]">
            <div class="slide active">
                <img src="https://images.squarespace-cdn.com/content/v1/606d159a953867291018f801/1619987722169-VV6ZASHHZNRBJW9X0PLK/Key_Art_02_layeredjpg.jpg?format=1000w"
                    class="w-full h-[500px]" />
            </div>
            <div class="slide">
                <img src="https://cdn.cloudflare.steamstatic.com/steam/apps/2726450/capsule_616x353.jpg?t=1709777821"
                    class="w-full h-[500px]" />
            </div>
            <div class="slide">
                <img src="https://assets-prd.ignimgs.com/2021/12/20/stardewvalley-1640044262769.jpg"
                    class="w-full h-[500px]" />
            </div>

            <a class="absolute top-1/2 left-0 transform -translate-y-1/2 bg-gray-900 text-white p-3 cursor-pointer"
                onclick="moveSlide(-1)">&#10094;</a>
            <a class="absolute top-1/2 right-0 transform -translate-y-1/2 bg-gray-900 text-white p-3 cursor-pointer"
                onclick="moveSlide(1)">&#10095;</a>
        </div>
    </div>

    <script>
        let slideIndex = 0;
        showSlides();

        function moveSlide(n) {
            slideIndex += n;
            showSlides();
        }

        function showSlides() {
            let i;
            let slides = document.getElementsByClassName("slide");
            if (slideIndex >= slides.length) {
                slideIndex = 0;
            }
            if (slideIndex < 0) {
                slideIndex = slides.length - 1;
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slides[slideIndex].style.display = "block";
        }
    </script>
@endsection
