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
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/logoLeon.png" type="image/png">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="sticky top-0 z-50 font-cuerpo bg-principal text-fondo-claro shadow-lg">
    <div class="container mx-auto px-4">
        <!-- Barra Principal de Navegación -->
        <div class="flex justify-between items-center py-4">
            <!-- Logo / Título del Sitio -->
            <div class="flex-shrink-0">
                <a href="<?php echo esc_url(home_url('/')); ?>"
                   class="block rounded-md focus:outline-none focus:ring-2 focus:ring-acento-dorado"
                   aria-label="Página de inicio de <?php bloginfo('name'); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logoMasterYoel.png"
                         alt="<?php bloginfo('name'); ?> - Logo"
                         class="h-12 md:h-14 w-auto transition-all duration-300">
                </a>
            </div>

            <!-- Contenedor para menús a la derecha -->
            <div class="flex items-center gap-x-4">
                <!-- Menú Desktop (se oculta en móvil) -->
                <nav class="hidden lg:flex justify-center items-center gap-x-4">
                    <a href="#inicio"
                       class="text-xs font-bold hover:text-acento-dorado transition-colors px-4 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-acento-dorado">Inicio</a>
                    <a href="#que-es-trading"
                       class="text-xs font-bold hover:text-acento-dorado transition-colors px-4 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-acento-dorado">¿Qué
                        es Trading?</a>
                    <a href="#indices-sinteticos"
                       class="text-xs font-bold hover:text-acento-dorado transition-colors px-4 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-acento-dorado">¿Qué
                        son los Índices Sintéticos?</a>
                    <a href="#que-es-broker"
                       class="text-xs font-bold hover:text-acento-dorado transition-colors px-4 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-acento-dorado">¿Qué
                        es un Bróker?</a>
                    <a href="#que-es-weltrade"
                       class="text-xs font-bold hover:text-acento-dorado transition-colors px-4 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-acento-dorado">¿Qué
                        es Weltrade?</a>
                    <a href="#como-recargar"
                       class="text-xs font-bold hover:text-acento-dorado transition-colors px-4 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-acento-dorado">¿Cómo
                        Recargar la Cuenta?
                    </a>
                    <a href="#estrategias"
                       class="text-xs font-bold hover:text-acento-dorado transition-colors px-4 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-acento-dorado">Estrategias</a>
                    <a href="#aprende-con-yoel"
                       class="text-xs font-bold hover:text-acento-dorado transition-colors px-4 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-acento-dorado">Aprende
                        con Yoel</a>
                    <a href="#contacto"
                       class="text-xs font-bold hover:text-acento-dorado transition-colors px-4 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-acento-dorado">Contacto</a>
                </nav>

                <!-- Botón Menú Hamburguesa (visible en todas las pantallas) -->
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
    </div>

    <!-- Overlay para el menú -->
    <div id="menu-overlay"
         class="fixed inset-0 bg-black/60 z-50 opacity-0 pointer-events-none transition-opacity duration-300 ease-in-out"></div>

    <!-- Panel del Menú Hamburguesa (Deslizante) -->
    <div id="mobile-menu"
         class="fixed top-0 right-0 h-full w-full max-w-md bg-principal shadow-2xl z-50 transform translate-x-full transition-transform duration-300 ease-in-out lg:border-l lg:border-fondo-claro/20">
        <div class="flex justify-between items-center p-4 border-b border-fondo-claro/10">
            <span class="font-bold text-lg text-acento-dorado">Contenido</span>
            <button id="close-menu-button" aria-label="Cerrar menú"
                    class="p-2 rounded-md focus:outline-none focus:ring-2 focus:ring-acento-dorado">
                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="18" y1="6" x2="6" y2="18"/>
                    <line x1="6" y1="6" x2="18" y2="18"/>
                </svg>
            </button>
        </div>
        <nav class="flex flex-col gap-y-4 p-6">
            <!-- Enlaces principales (solo visibles en móvil) -->
            <a href="#inicio" class="lg:hidden font-bold hover:text-acento-dorado transition-colors">Inicio</a>
            <a href="#que-es-trading" class="font-bold hover:text-acento-dorado transition-colors"> ¿Qué es
                Trading?</a>
            <a href="#indices-sinteticos" class="font-bold hover:text-acento-dorado transition-colors">¿Qué son los
                Índices Sintéticos?</a>
            <a href="#que-es-broker" class="font-bold hover:text-acento-dorado transition-colors"> ¿Qué es un
                Bróker?</a>
            <a href="#que-es-weltrade" class="font-bold hover:text-acento-dorado transition-colors"> ¿Qué es
                Weltrade?</a>
            <a href="#como-recargar" class="font-bold hover:text-acento-dorado transition-colors"> ¿Cómo Recargar la
                Cuenta?</a>
            <a href="#estrategias" class="font-bold hover:text-acento-dorado transition-colors"> Estrategias y
                Gestión del Riesgo</a>
            <a href="#aprende-con-yoel" class="font-bold hover:text-acento-dorado transition-colors"> Aprende con
                Yoel Montes</a>
            <hr class="border-fondo-claro/20 my-2">
            <a href="#contacto" class="font-bold hover:text-acento-dorado transition-colors">Contacto</a>
        </nav>
    </div>
</header>
<main>

