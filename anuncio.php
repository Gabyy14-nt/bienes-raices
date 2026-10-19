<?php 
    require  'includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Casa en Venta Frente al bosque</h1>

        <picture>
            <source srcset="build/img/destacada.webp" type="image/webp">
            <source srcset="build/img/destacada.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/destacada.jpg" alt="Imagen de la propiedad">
        </picture>

        <div class="resumen-propiedad">
            <p class="precio">
                $3,000,000
            </p>

            <ul class="iconos-caracteristicas">
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                    <p>3</p>
                </li>
                <li>
                    <img loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono icono estacionamiento">
                    <p>3</p>
                </li>
                <li>
                    <img loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono icono dormitorio">
                    <p>4</p>
                </li>
            </ul>

            <p>Esta es una excelente oportunidad para adquirir una propiedad en la ciudad. Con acabados de lujo 
                y una ubicación privilegiada, esta casa es ideal para familias que buscan comodidad y estilo de 
                vida. Cuenta con todas las comodidades que necesitas para disfrutar de una vida de calidad.
                Además, ofrece un entorno seguro y tranquilo para disfrutar de la vida en familia. La casa 
                está ubicada en un área residencial tranquila, perfecta para familias que desean vivir en un 
                entorno seguro y amigable. Más allá de su ubicación, la casa también ofrece un diseño moderno 
                y funcional que se adapta a las necesidades de cualquier familia. Totalmente equipada y lista 
                para que puedas disfrutar de tu nuevo hogar.
            </p>
            <p>
                Contáctanos hoy mismo para programar una visita y conocer más sobre esta increíble propiedad. 
                Nuestro equipo de expertos en bienes raíces estará encantado de ayudarte a encontrar la casa de 
                tus sueños. No pierdas la oportunidad de vivir en un lugar que combina lujo, comodidad y 
                seguridad. ¡Te esperamos!
            </p>

        </div>
    </main>

<?php
    incluirTemplate('footer');
?>