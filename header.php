<?php
/**
 * Header Dulciela Theme
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

    <!-- Fuentes e íconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="dulciela-header">

    <div class="header-inner">

        <!-- LOGO -->
        <a class="logo-area" href="<?php echo esc_url( home_url('/') ); ?>">
            <div class="logo-icon">
                <i class="fa-solid fa-cake-candles"></i>
            </div>
            <div class="logo-text">
                <span class="title">Dulciela</span>
                <span class="subtitle">Pastelería Artesanal</span>
            </div>
        </a>

        <!-- BUSCADOR -->
        <div class="search-area">
            <?php get_product_search_form(); ?>
        </div>

        <!-- ACCIONES DERECHA -->
        <div class="right-actions">
            <a href="<?php echo esc_url( get_permalink( get_option('woocommerce_myaccount_page_id') ) ); ?>" class="header-btn">
                <i class="fa-regular fa-user"></i>
                <span>Mi Cuenta</span>
            </a>

            <a href="#" id="open-mini-cart" class="header-btn cart">
    <i class="fa-solid fa-cart-shopping"></i>
    <span>Carrito</span>
    <span class="cart-bubble"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
</a>
        </div>
    </div>

    <!-- MENÚ -->
    <nav class="main-menu">
        <?php
        wp_nav_menu([
            'theme_location' => 'primary-menu',
            'container'      => false
        ]);
        ?>
    </nav>

</header>
<?php get_template_part('woocommerce/cart/mini-cart'); ?>

<div id="content" class="site-content">
