<?php
/**
 * Archivo de funciones del tema El Master Yoel.
 *
 * @package ThemeYoel
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Configuración inicial del tema.
 */
function theme_yoel_setup()
{
    // Habilita el soporte para que WordPress gestione el <title> de forma automática.
    add_theme_support('title-tag');

}

add_action('after_setup_theme', 'theme_yoel_setup');

/**
 * Encola los scripts y estilos del tema.
 */
function theme_yoel_enqueue_styles()
{
    // 1. Carga las fuentes de Google de forma optimizada.
    wp_enqueue_style(
        'theme-yoel-google-fonts',
        'https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Roboto:wght@400;700&display=swap',
        array(),
        null // No necesita versión ya que es un recurso externo
    );

    wp_enqueue_style('theme-yoel-style', get_stylesheet_uri(), array(), '1.2');

    wp_enqueue_script('theme-yoel-main-js', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0', true);
}

add_action('wp_enqueue_scripts', 'theme_yoel_enqueue_styles');

/**
 * ========================================================================
 * GENERADOR DE PÁGINAS DE AFILIADOS
 * ========================================================================
 */

// 1. Registrar el Custom Post Type "Afiliado"
function themeyoel_register_afiliado_cpt() {
    $labels = array(
        'name'                  => _x( 'Afiliados', 'Post Type General Name', 'themeyoel' ),
        'singular_name'         => _x( 'Afiliado', 'Post Type Singular Name', 'themeyoel' ),
        'menu_name'             => __( 'Afiliados', 'themeyoel' ),
        'name_admin_bar'        => __( 'Afiliado', 'themeyoel' ),
        'archives'              => __( 'Archivo de Afiliados', 'themeyoel' ),
        'attributes'            => __( 'Atributos de Afiliado', 'themeyoel' ),
        'parent_item_colon'     => __( 'Afiliado Padre:', 'themeyoel' ),
        'all_items'             => __( 'Todos los Afiliados', 'themeyoel' ),
        'add_new_item'          => __( 'Añadir Nuevo Afiliado', 'themeyoel' ),
        'add_new'               => __( 'Añadir Nuevo', 'themeyoel' ),
        'new_item'              => __( 'Nuevo Afiliado', 'themeyoel' ),
        'edit_item'             => __( 'Editar Afiliado', 'themeyoel' ),
        'update_item'           => __( 'Actualizar Afiliado', 'themeyoel' ),
        'view_item'             => __( 'Ver Afiliado', 'themeyoel' ),
        'view_items'            => __( 'Ver Afiliados', 'themeyoel' ),
        'search_items'          => __( 'Buscar Afiliado', 'themeyoel' ),
    );
    $args = array(
        'label'                 => __( 'Afiliado', 'themeyoel' ),
        'description'           => __( 'Páginas de aterrizaje para afiliados.', 'themeyoel' ),
        'labels'                => $labels,
        'supports'              => array( 'title' ), // Solo necesitamos un título
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-admin-links',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => false,
        'can_export'            => true,
        'has_archive'           => false,
        'exclude_from_search'   => true,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
        'rewrite'               => array( 'slug' => 'afiliado' ), // URL base: /afiliado/nombre
    );
    register_post_type( 'afiliado', $args );
}
add_action( 'init', 'themeyoel_register_afiliado_cpt', 0 );

// 2. Añadir el "meta box" (el campo personalizado) para la URL
function themeyoel_add_url_meta_box() {
    add_meta_box(
        'themeyoel_afiliado_url_box',
        'URL de Seguimiento del Afiliado',
        'themeyoel_afiliado_url_callback',
        'afiliado', // Mostrar solo en el CPT "afiliado"
        'normal',
        'high'
    );
}
add_action( 'add_meta_boxes', 'themeyoel_add_url_meta_box' );

// 3. HTML del campo personalizado
function themeyoel_afiliado_url_callback( $post ) {
    wp_nonce_field( 'themeyoel_save_afiliado_url', 'themeyoel_afiliado_url_nonce' );
    $url = get_post_meta( $post->ID, '_afiliado_url', true );
    echo '<label for="themeyoel_afiliado_url_field" style="font-weight:bold; display:block; margin-bottom:8px;">Pegue aquí la URL completa:</label>';
    echo '<input type="url" id="themeyoel_afiliado_url_field" name="themeyoel_afiliado_url_field" value="' . esc_attr( $url ) . '" size="25" style="width:100%; padding:8px;" placeholder="https://ejemplo.com/tracker/..." />';
}

// 4. Guardar el valor del campo personalizado
function themeyoel_save_afiliado_url( $post_id ) {
    if ( ! isset( $_POST['themeyoel_afiliado_url_nonce'] ) || ! wp_verify_nonce( $_POST['themeyoel_afiliado_url_nonce'], 'themeyoel_save_afiliado_url' ) ) {
        return;
    }
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
    }
    if ( isset( $_POST['post_type'] ) && 'afiliado' == $_POST['post_type'] ) {
        if ( ! current_user_can( 'edit_page', $post_id ) ) {
            return;
        }
    } else {
        if ( ! current_user_can( 'edit_post', $post_id ) ) {
            return;
        }
    }
    if ( isset( $_POST['themeyoel_afiliado_url_field'] ) ) {
        update_post_meta( $post_id, '_afiliado_url', sanitize_text_field( $_POST['themeyoel_afiliado_url_field'] ) );
    }
}
add_action( 'save_post', 'themeyoel_save_afiliado_url' );
