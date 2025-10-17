<!DOCTYPE html>
<html lang="es" <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Descripción -->
    <meta name="description"
          content="Conviértete en un trader rentable en 90 días. Aprende estrategias de scalping y opera índices sintéticos con la guía de Yoel Montes.">
    <!-- Open Graph  -->
    <meta property="og:title" content="El Master Yoel - De 0 a Rentable en 90 Días">
    <meta property="og:description"
          content="Tu camino hacia la rentabilidad en solo 3 meses. Aprende trading con estrategias efectivas.">
    <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/images/tradingYoel.avif">
    <meta property="og:url" content="<?php echo esc_url(home_url('/')); ?>">
    <meta property="og:type" content="website">
    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="El Master Yoel - De 0 a Rentable en 90 Días">
    <meta name="twitter:description"
          content="Tu camino hacia la rentabilidad en solo 3 meses. Aprende trading con estrategias efectivas.">
    <meta name="twitter:image" content="<?php echo get_template_directory_uri(); ?>/assets/images/tradingYoel.avif">
    <link rel="preload" href="<?php echo get_template_directory_uri(); ?>/assets/images/tradingYoel.avif" as="image"
          fetchpriority="high">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.png" type="image/png">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="sticky top-0 z-50 font-cuerpo bg-principal text-fondo-claro shadow-lg">
    <div class="container mx-auto px-4">
        <!-- Barra Principal de Navegación -->
        <div class="flex justify-between items-center py-4">
            <!-- Logo / Título del Sitio -->
            <a href="<?php echo esc_url(home_url('/')); ?>"
               class="block rounded-md focus:outline-none focus:ring-2 focus:ring-acento-dorado"
               aria-label="Página de inicio de <?php bloginfo('name'); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logoMasterYoel.png"
                     alt="<?php bloginfo('name'); ?> - Logo"
                     class="h-12 md:h-14 w-auto transition-all duration-300">
            </a>

            <!-- Menú Desktop -->
            <nav class="hidden lg:flex items-center gap-x-1">
                <a href="#inicio"
                   class="text-sm font-bold hover:text-acento-dorado transition-colors px-3 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-acento-dorado">Inicio</a>
                <a href="#quien-soy"
                   class="text-sm font-bold hover:text-acento-dorado transition-colors px-3 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-acento-dorado">Quiénes
                    Somos</a>
                <a href="#servicios"
                   class="text-sm font-bold hover:text-acento-dorado transition-colors px-3 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-acento-dorado">Servicios</a>
                <a href="#contacto"
                   class="text-sm font-bold hover:text-acento-dorado transition-colors px-3 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-acento-dorado">Contacto</a>
                <a href="https://soporte.ganaporencuestas.com/go/002892a1-402c-4952-81ff-063b30c0bff4" target="_blank"
                   class="ml-4 inline-block bg-acento-dorado text-principal font-bold text-sm py-2 px-5 rounded-md hover:bg-yellow-500 transition-transform transform hover:-translate-y-0.5 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-principal focus:ring-acento-dorado">Empieza
                    Ahora</a>
            </nav>

            <!-- Botón Menú Móvil -->
            <div class="lg:hidden">
                <button id="mobile-menu-button" aria-label="Abrir menú"
                        class="p-2 rounded-md focus:outline-none focus:ring-2 focus:ring-acento-dorado">
                    <!-- Icono Hamburguesa (Lucide) -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="4" x2="20" y1="12" y2="12"/>
                        <line x1="4" x2="20" y1="6" y2="6"/>
                        <line x1="4" x2="20" y1="18" y2="18"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Panel del Menú Móvil  -->
    <div id="mobile-menu" class="hidden lg:hidden border-t border-fondo-claro/10">
        <nav class="flex flex-col items-center gap-y-6 py-8">
            <a href="#inicio" class="font-bold hover:text-acento-dorado transition-colors">Inicio</a>
            <a href="#quien-soy" class="font-bold hover:text-acento-dorado transition-colors">Quiénes Somos</a>
            <a href="#servicios" class="font-bold hover:text-acento-dorado transition-colors">Servicios</a>
            <a href="#contacto" class="font-bold hover:text-acento-dorado transition-colors">Contacto</a>
            <a href="https://soporte.ganaporencuestas.com/go/002892a1-402c-4952-81ff-063b30c0bff4" target="_blank"
               class="mt-4 inline-block bg-acento-dorado text-principal font-bold py-3 px-8 rounded-md hover:bg-yellow-500">Empieza
                Ahora</a>
        </nav>
    </div>
</header>
<main>

