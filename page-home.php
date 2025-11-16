<?php
/**
 * Template Name: Página de Inicio Dulciela
 * Template Post Type: page
 */

get_header();
?>

<section class="home-banner">
    <div class="banner-left">
        <h1>Dulciela</h1>
        <p>Pastelería artesanal hecha con amor. Tortas, postres y mucho más para tus celebraciones especiales.</p>

        <div class="banner-buttons">
            <a href="<?php echo esc_url( wc_get_page_permalink('shop') ); ?>" class="btn primary">Ver Productos</a>
            <a href="/contacto" class="btn secondary">Contáctanos</a>
        </div>
    </div>

    <div class="banner-right">
        <img src="<?php echo get_stylesheet_directory_uri() . '/images/chica-con-pastel.png'; ?>" alt="">
    </div>
</section>

<section class="home-features">
    <div class="feature">
        <i class="fa-solid fa-cake-candles"></i>
        <h4>Ingredientes frescos</h4>
        <p>Todo hecho al día</p>
    </div>

    <div class="feature">
        <i class="fa-solid fa-clock"></i>
        <h4>Entrega rápida</h4>
        <p>24-48 horas</p>
    </div>

    <div class="feature">
        <i class="fa-solid fa-wand-magic-sparkles"></i>
        <h4>Personalizado</h4>
        <p>Como tú lo quieras</p>
    </div>
</section>

<section class="featured-products">
    <div class="section-header">
        <h2>Productos Destacados</h2>
        <p>Lo más popular</p>
    </div>

    <ul class="products-grid">
        <?php
        $args = [
            'post_type' => 'product',
            'posts_per_page' => 4,
            'tax_query' => [
                [
                    'taxonomy' => 'product_visibility',
                    'field'    => 'name',
                    'terms'    => 'featured',
                    'operator' => 'IN'
                ]
            ]
        ];

        $loop = new WP_Query($args);

        if ($loop->have_posts()) :
            while ($loop->have_posts()) :
                $loop->the_post();
                wc_get_template_part('content', 'product');
            endwhile;
        endif;
        ?>
    </ul>

    <div class="view-all">
        <a href="<?php echo wc_get_page_permalink('shop'); ?>" class="btn view-all-btn">Ver Todos los Productos →</a>
    </div>
</section>

<section class="custom-cake-cta">
    <h2>¿Necesitas una Torta Personalizada?</h2>
    <p>Hacemos diseños únicos para tu evento</p>

    <a href="/cotizacion" class="btn cta-btn">
        Solicitar Cotización <i class="fa-solid fa-arrow-right"></i>
    </a>
</section>

<?php get_footer(); ?>
