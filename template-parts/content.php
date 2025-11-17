<?php
/**
 * La plantilla para mostrar el contenido de UN producto individual.
 *
 * Ruta: /themes/dulciela-tema/woocommerce/content-single-product.php
 *
 * Esta plantilla llama a todos los "hooks" necesarios para mostrar
 * la imagen, el resumen (título, precio, estrellas, botón) 
 * y las pestañas (descripción, reseñas).
 */

defined( 'ABSPATH' ) || exit;

global $product;
?>

<?php
    /**
     * Hook: woocommerce_before_single_product.
     *
     * @hooked wc_print_notices - 10
     */
    do_action( 'woocommerce_before_single_product' );

    if ( post_password_required() ) {
        echo get_the_password_form(); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
        return;
    }
?>

<div id="product-<?php the_ID(); ?>" <?php wc_product_class( 'dulciela-single-product', $product ); ?>>

    <div class="product-gallery-wrapper">
        <?php
        /**
         * Hook: woocommerce_before_single_product_summary.
         *
         * @hooked woocommerce_show_product_sale_flash - 10
         * @hooked woocommerce_show_product_images - 20 (La galería de imágenes)
         */
        do_action( 'woocommerce_before_single_product_summary' );
        ?>
    </div>

    <div class="product-summary-wrapper">
        <?php
        /**
         * Hook: woocommerce_single_product_summary.
         *
         * @hooked woocommerce_template_single_title - 5
         * @hooked woocommerce_template_single_rating - 10 (Estrellas de valoración)
         * @hooked woocommerce_template_single_price - 10
         * @hooked woocommerce_template_single_excerpt - 20 (Descripción corta)
         * @hooked woocommerce_template_single_add_to_cart - 30 (Botón de añadir al carrito)
         * @hooked woocommerce_template_single_meta - 40 (Categorías, etc)
         * @hooked woocommerce_template_single_sharing - 50
         */
        do_action( 'woocommerce_single_product_summary' );
        ?>
    </div>

    <?php
    /**
     * Hook: woocommerce_after_single_product_summary.
     *
     * @hooked woocommerce_output_product_data_tabs - 10 (Pestañas de Descripción/Reseñas)
     * @hooked woocommerce_upsell_display - 15
     * @hooked woocommerce_output_related_products - 20
     */
    do_action( 'woocommerce_after_single_product_summary' );
    ?>
</div>

<?php do_action( 'woocommerce_after_single_product' ); ?>