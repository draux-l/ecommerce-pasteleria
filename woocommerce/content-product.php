<?php
/**
 * La plantilla para mostrar el contenido de CADA producto en la cuadrícula
 *
 * Ruta: /themes/dulciela-tema/woocommerce/content-product.php
 *
 * ¡¡VERSIÓN FINAL CON LLAMADAS DIRECTAS!!
 */

defined( 'ABSPATH' ) || exit;

global $product;

// Asegurarse de que el producto esté visible
if ( empty( $product ) || ! $product->is_visible() ) {
    return;
}
?>
<li <?php wc_product_class( '', $product ); ?>>

    <?php
    /**
     * Hook: woocommerce_before_shop_loop_item.
     * @hooked woocommerce_template_loop_product_link_open - 10 (Abre el enlace <a>)
     */
    do_action( 'woocommerce_before_shop_loop_item' );
    ?>

    <div class="product-image-wrapper">
        <?php
        /**
         * Hook: woocommerce_before_shop_loop_item_title.
         * @hooked woocommerce_show_product_loop_sale_flash - 10
         * @hooked woocommerce_template_loop_product_thumbnail - 10 (LA IMAGEN)
         */
        do_action( 'woocommerce_before_shop_loop_item_title' );
        ?>
    </div>

    <?php
    /**
     * Hook: woocommerce_template_loop_product_link_close.
     * ¡Cierra el enlace <a> de la imagen!
     * @hooked woocommerce_template_loop_product_link_close - 5
     */
    do_action( 'woocommerce_template_loop_product_link_close' );
    ?>

    <div class="product-info-wrapper">
        <?php
        
        // =======================================================
        //  ¡¡AQUÍ ESTÁ EL CAMBIO IMPORTANTE!!
        //  Llamamos a las funciones directamente para saltar 
        //  cualquier 'remove_action' que esté escondido.
        // =======================================================

        woocommerce_template_loop_product_title(); // <-- LLAMADA DIRECTA AL TÍTULO
        
        woocommerce_template_loop_price(); // <-- LLAMADA DIRECTA AL PRECIO
        
        ?>
    </div>

    <?php
    /**
     * Hook: woocommerce_after_shop_loop_item.
     * @hooked woocommerce_template_loop_add_to_cart - 10 (MUESTRA EL BOTÓN "Add to cart")
     */
    do_action( 'woocommerce_after_shop_loop_item' );
    ?>
</li>