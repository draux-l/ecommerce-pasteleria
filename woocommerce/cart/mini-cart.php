<div id="dulciela-mini-cart" class="mini-cart-overlay">
    <div class="mini-cart-panel">
        
        <button class="mini-cart-close">&times;</button>

        <h2 class="mini-cart-title">Carrito de Compras</h2>

        <div class="mini-cart-content">
            <?php if ( WC()->cart->is_empty() ) : ?>

                <div class="empty-cart">
                    <img src="https://cdn-icons-png.flaticon.com/512/679/679821.png" width="80">
                    <p class="empty-title">Tu carrito está vacío</p>
                    <p class="empty-text">Agrega productos para comenzar tu compra</p>
                    <a href="<?php echo wc_get_page_permalink('shop'); ?>" class="btn go-shop">
                        Explorar Productos
                    </a>
                </div>

            <?php else : ?>

                <ul class="cart_list">
                    <?php woocommerce_mini_cart(); ?>
                </ul>

            <?php endif; ?>
        </div>

    </div>
</div>
