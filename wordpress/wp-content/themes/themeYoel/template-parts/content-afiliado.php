<?php
/**
 * Template part para mostrar el contenido de la página de afiliado.
 *
 * @package ThemeYoel
 */

// Recibimos la URL de seguimiento desde los argumentos pasados por get_template_part.
$tracking_url = isset($args['tracking_url']) ? $args['tracking_url'] : '#';
?>

<!-- Contenedor principal relativo para la imagen de fondo y la superposición -->
<div class="relative bg-principal text-fondo-claro min-h-screen flex flex-col font-cuerpo bg-cover bg-center"
     style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/tradingYoel.avif');"
>
    <!-- Capa de superposición oscura para mejorar el contraste del texto -->
    <div class="absolute inset-0 bg-principal/80 z-0"></div>

    <!-- 1. Pseudo-Header con el logo -->
    <header class="relative z-10 py-4 px-4">
        <div class="container mx-auto">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logoMasterYoel.png"
                 alt="<?php bloginfo('name'); ?> - Logo"
                 class="h-12 md:h-16 w-auto">
        </div>
    </header>

    <!-- Contenedor del contenido principal, centrado vertical y horizontalmente -->
    <main class="relative z-10 flex-grow flex items-center justify-center">
        <div class="container max-w-4xl mx-auto text-center p-4">

            <!-- 2. Título de la página principal -->
            <h1 class="font-titulo text-4xl md:text-6xl font-bold mb-4">De 0 a Rentable en 90 días</h1>
            <p class="text-lg md:text-xl max-w-3xl mx-auto opacity-90 mb-12">Tu camino hacia la rentabilidad
                en solo 3 meses.</p>

            <!-- 3. Mensaje del formulario e imagen -->
            <p class="mb-6">En el enlace encontraras el siguiente formulario para lograr la rentabilidad:</p>
            <div class="max-w-xl mx-auto mb-12">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/formulario-ejemplo.png"
                     alt="Ejemplo del formulario de registro"
                     class="rounded-xl shadow-lg shadow-black/50 w-full max-w-xs mx-auto h-auto object-cover">
            </div>

            <!-- 4. Mensaje de urgencia -->
            <p class="font-titulo text-2xl text-acento-dorado font-bold mb-8">
                Estás frente a la decisión de entrar ahora o quedarte afuera para siempre.
            </p>

            <!-- 5. Lista de beneficios -->
            <ul class="list-none space-y-3 my-4 pl-0 max-w-md mx-auto text-left mb-12">
                <li class="flex items-start"><span class="mr-3 text-green-400 text-xl">✅</span> <span>Acceso completo a la comunidad de traders</span>
                </li>
                <li class="flex items-start"><span class="mr-3 text-green-400 text-xl">✅</span> <span>Alertas, más de un 95% de efectividad</span>
                </li>
                <li class="flex items-start"><span class="mr-3 text-green-400 text-xl">✅</span> <span>Clases en vivo todos los jueves con el Master Yoel (Trading)</span>
                </li>
                <li class="flex items-start"><span class="mr-3 text-green-400 text-xl">✅</span> <span>Clases en vivo todos los miercoles con el Master Yoel (Para los miembros del MS10X)</span>
                </li>
            </ul>

            <!-- 6. Llamada a la acción final con imagen -->
            <div class="max-w-md mx-auto">
                <a href="<?php echo esc_url($tracking_url); ?>" target="_blank"
                   class="block transition-transform transform hover:-translate-y-1.5 duration-300"
                   aria-label="Empezar ahora">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/boton-empieza-ahora.png"
                         alt="Botón para empezar ahora"
                         class="w-full h-auto max-w-xs mx-auto">
                </a>
            </div>
        </div>
    </main>

    <!-- Pequeño footer para dar espacio en la parte inferior -->
    <footer class="relative z-10 py-4"></footer>

</div>