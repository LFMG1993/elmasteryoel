<?php
/**
 * La plantilla para mostrar una página de afiliado individual.
 *
 * @package ThemeYoel
 */

// Obtenemos la URL de seguimiento guardada en el campo personalizado.
$tracking_url = get_post_meta(get_the_ID(), '_afiliado_url', true);

// Si no hay URL, usamos una URL de fallback para evitar errores.
if (empty($tracking_url)) {
    $tracking_url = '#'; // O la URL principal de tu sitio.
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<?php
while (have_posts()) :
    the_post();

    get_template_part('template-parts/content', 'afiliado', [
            'tracking_url' => $tracking_url,
    ]);

endwhile;
?>

<?php wp_footer(); ?>
</body>
</html>