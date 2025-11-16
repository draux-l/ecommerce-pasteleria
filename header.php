<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
    <header id="masthead" class="site-header">
        <div class="site-branding">
            <?php
            // Aquí va el logo o el título de tu sitio
            if ( has_custom_logo() ) {
                the_custom_logo();
            } else {
                echo '<p class="site-title"><a href="' . esc_url( home_url( '/' ) ) . '" rel="home">' . get_bloginfo( 'name' ) . '</a></p>';
            }
            ?>
        </div><nav id="site-navigation" class="main-navigation">
            <?php
            wp_nav_menu( array(
                'theme_location' => 'menu-principal', // Registrarás este menú en functions.php
                'menu_id'        => 'primary-menu',
            ) );
            ?>
        </nav><div class="header-actions">
            <div class="search-form">
    <?php 
    // Verifica si la función de WooCommerce existe antes de llamarla
    if ( function_exists( 'get_product_search_form' ) ) {
        get_product_search_form();
    }
    ?>
</div>
            <div class="header-cart">
                <a href="<?php echo esc_url( wc_get_page_permalink( 'myaccount' ) ); ?>" class="my-account-link">Mi Cuenta</a>
                <a href="<?php echo esc_url( wc_get_cart_url() ); ?>" class="cart-contents">
                    <?php echo WC()->cart->get_cart_total(); ?>
                    <span class="count"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
                    Carrito
                </a>
            </div>
        </div>

    </header>```

