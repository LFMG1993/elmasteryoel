<?php
/**
 * Configuración inicial del tema.
 */
function theme_yoel_setup() {
    // Habilita el soporte para que WordPress gestione el <title> de forma automática.
    add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'theme_yoel_setup' );

/**
 * Archivo de funciones del tema El Master Yoel.
 *
 * @package ThemeYoel
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Encola los scripts y estilos del tema.
 */
function theme_yoel_enqueue_styles()
{
    // 1. Carga nuestro style.css principal.
    wp_enqueue_style('theme-yoel-style', get_stylesheet_uri(), array(), '1.1');

    // --- CSS innecesario de WordPress ---
    wp_dequeue_style('wp-block-library');
    wp_deregister_style('wp-block-library');
    wp_dequeue_style('dashicons');

    // 2. Carga nuestro JS principal para la interactividad del menú y el scroll suave.
    wp_enqueue_script('theme-yoel-main-js', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0', true);
}

add_action('wp_enqueue_scripts', 'theme_yoel_enqueue_styles');
