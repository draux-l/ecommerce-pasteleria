<?php
/**
 * La plantilla para mostrar la página de producto individual.
 *
 * Ruta: /themes/dulciela-tema/woocommerce/single-product.php
 *
 * Este archivo es el "contenedor" principal de la página de producto.
 * Llama a 'content-single-product.php' para mostrar el contenido.
 *
 * ¡Importante! NO llamamos a get_sidebar() aquí para tener ancho completo.
 */

defined( 'ABSPATH' ) || exit;

// Carga el header de tu tema (header.php)
get_header(); 
?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main">

            <?php
            /**
             * Hook: woocommerce_before_main_content.
             * (Usualmente pone el breadcrumb y abre un <div class="woocommerce">)
             */
            do_action( 'woocommerce_before_main_content' );
            ?>

            <?php while ( have_posts() ) : ?>
                <?php the_post(); ?>

                <?php 
                /**
                 * ¡AQUÍ ESTÁ LA MAGIA!
                 * Esta función busca y carga nuestro archivo:
                 * /woocommerce/content-single-product.php
                 * que hicimos en el paso anterior.
                 */
                wc_get_template_part( 'content', 'single-product' ); 
                ?>

            <?php endwhile; // Fin del loop de WordPress. ?>

            <?php
            /**
             * Hook: woocommerce_after_main_content.
             * (Usualmente cierra el <div class="woocommerce">)
             */
            do_action( 'woocommerce_after_main_content' );
            ?>

        </main></div><?php
// Carga el footer de tu tema (footer.php)
get_footer();