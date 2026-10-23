<?php 
    require  'includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion">
        <h1>Conoce sobre nosotros</h1>

        <div class="contenido-nosotros">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/nosotros.webp" type="image/webp">
                    <source srcset="build/img/nosotros.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/nosotros.jpg" alt="Sobre Nosotros">
                </picture>
            </div>

            <div class="texto-nosotros">
                <blockquote>25 Años de experiencia</blockquote>
                <p> Somos una empresa dedicada a la venta de bienes raíces con más de 25 años de experiencia en el mercado. 
                    Nuestro equipo de profesionales está comprometido con brindar el mejor servicio posible a nuestros clientes. 
                    Somos expertos en el mercado inmobiliario y nos aseguramos de ofrecer propiedades de alta calidad que se 
                    ajusten a las necesidades de nuestros clientes. Estamos aquí para ayudarte a encontrar tu hogar ideal.
                </p>
                <p>Contamos con una amplia red de contactos y relaciones en el mercado inmobiliario, lo que nos permite ofrecer 
                    una amplia variedad de propiedades para satisfacer las necesidades de nuestros clientes. Lo que nos permite 
                    brindar un servicio personalizado y de calidad a nuestros clientes. Nuestra misión es ayudarte a encontrar 
                    la propiedad perfecta para ti.</p>
            </div>

        </div>
    </main>

    <section class="contenedor seccion">
        <h1>Más Sobre Nosotros</h1>

        <div class="iconos-nosotros">
            <div class="icono">
                <img src="build/img/icono1.svg" alt="Icono Seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>Nuestra empresa se preocupa por la seguridad de nuestros clientes y 
                    sus propiedades. Contamos con medidas de seguridad avanzadas para 
                    proteger tu inversión y tu familia.
                </p>
            </div>

            <div class="icono">
                <img src="build/img/icono2.svg" alt="Icono  Precio" loading="lazy">
                <h3>Precio</h3>
                <p>Ofrecemos precios competitivos para nuestras propiedades. Nuestro 
                    equipo de expertos en el mercado inmobiliario te ayudará a 
                    encontrar la mejor opción para tu presupuesto.
                </p>
            </div>

            <div class="icono">
                <img src="build/img/icono3.svg" alt="Icono Tiempo" loading="lazy">
                <h3>Tiempo</h3>
                <p>Trabajamos con eficiencia para ofrecer soluciones rápidas y efectivas 
                    en el mercado inmobiliario. Nuestro objetivo es ayudarte a encontrar 
                    la propiedad perfecta en el tiempo que necesitas.
                </p>
            </div>
        </div>

    </section> <!--Nosotros-->

<?php
    incluirTemplate('footer');
?>
