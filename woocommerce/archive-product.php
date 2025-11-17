<?php
/**
 * Template personalizado para la página de tienda (Productos)
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );
?>

<div class="dulciela-shop-wrapper woocommerce">

    <!-- =======================================================
         🎀 ENCABEZADO DE CATEGORÍAS (chips)
    ======================================================== -->
    <section class="shop-categories-header">
        <h2 class="section-title">Categorías de Productos</h2>
        <p class="section-subtitle">Explora nuestra variedad de productos artesanales</p>

        <div class="term-buttons">

            <!-- Botón: Todos los productos -->
            <a href="<?php echo wc_get_page_permalink( 'shop' ); ?>" 
               class="term-btn <?php if( !is_product_category() ) echo 'active'; ?>">
                <i class="fa-solid fa-grid-2"></i> 
                Todos los Productos
            </a>

            <?php
            $categorias = get_terms([
                'taxonomy' => 'product_cat',
                'hide_empty' => true
            ]);

            foreach ($categorias as $cat) :
            ?>
                <a href="<?php echo get_term_link($cat); ?>" 
                   class="term-btn <?php if (is_product_category($cat->slug)) echo 'active'; ?>">
                    <i class="fa-solid fa-cake-candles"></i>
                    <?php echo $cat->name; ?>

                    <span class="count"><?php echo $cat->count; ?></span>
                </a>
            <?php endforeach; ?>

        </div>
    </section>


    <!-- =======================================================
         🎀 TITULO “Todos los Productos”
    ======================================================== -->
    <section class="products-title-area">
        <h1 class="shop-title">
            <span class="icon">📦</span>
            <?php woocommerce_page_title(); ?>
        </h1>
        <p class="product-count">
            <?php echo $wp_query->found_posts; ?> productos disponibles
        </p>
    </section>


    <!-- =======================================================
         🎀 GRID DE PRODUCTOS
    ======================================================== -->
    <?php if ( woocommerce_product_loop() ) : ?>

        <?php woocommerce_product_loop_start(); // Esto imprime el <ul class="products ..."> ?>

        <?php if ( wc_get_loop_prop( 'total' ) ) : ?>
            <?php while ( have_posts() ) : ?>
                <?php the_post(); ?>

                <?php
                /*
                 * Ya no lo envolvemos en un <li> extra.
                 * Esta función de abajo ya imprime el <li>.
                 */
                wc_get_template_part( 'content', 'product' ); 
                ?>

            <?php endwhile; ?>
        <?php endif; ?>

        <?php woocommerce_product_loop_end();?>

    <?php else : ?>
        <?php wc_get_template( 'loop/no-products-found.php' ); ?>
    <?php endif; ?>

</div>

<?php
get_footer( 'shop' );
?>
