<?php
defined( 'ABSPATH' ) || exit;
$user = wp_get_current_user();
?>

<div class="myaccount-dashboard">

    <!-- HEADER DEL DASHBOARD -->
    <div class="dashboard-header">
        <div class="dashboard-icon">
            <i class="fa-solid fa-user"></i>
        </div>

        <div class="dashboard-greeting">
            <h1>Mi Cuenta</h1>
            <p>Bienvenido de nuevo, <?php echo $user->display_name; ?></p>
        </div>
    </div>

    <!-- GRID PRINCIPAL -->
    <div class="dashboard-grid">

        <!-- INFORMACIÓN PERSONAL -->
        <div class="dashboard-card big-card">
            <h2>Información Personal</h2>

            <p><strong>Nombre</strong><br><?php echo $user->display_name; ?></p>
            <p><strong>Email</strong><br><?php echo $user->user_email; ?></p>

            <?php 
            $address = WC()->customer->get_billing_address_1();
            if ($address): ?>
                <p><strong>Dirección</strong><br><?php echo $address; ?></p>
            <?php endif; ?>

            <a class="settings-btn" href="<?php echo wc_get_endpoint_url( 'edit-account' ); ?>">
                Configuración
            </a>

            <a class="logout-btn" href="<?php echo wp_logout_url( home_url() ); ?>">
                Cerrar Sesión
            </a>
        </div>

        <!-- PEDIDOS -->
        <div class="dashboard-card small-card">
            <i class="fa-solid fa-box dashboard-icon-sm"></i>
            <h2><?php echo wc_get_customer_order_count( $user->ID ); ?></h2>
            <p>Pedidos Totales</p>
        </div>

        <!-- FAVORITOS -->
        <div class="dashboard-card small-card">
            <i class="fa-solid fa-heart dashboard-icon-sm"></i>
            <h2>0</h2>
            <p>Favoritos</p>
        </div>

        <!-- EN CAMINO -->
        <div class="dashboard-card small-card">
            <i class="fa-solid fa-truck-fast dashboard-icon-sm"></i>
            <h2>1</h2>
            <p>En Camino</p>
        </div>

        <!-- PEDIDOS RECIENTES -->
<div class="dashboard-card full-card recent-orders">
    <h3>Pedidos Recientes</h3>

    <?php
    $customer_orders = wc_get_orders([
        'customer_id' => get_current_user_id(),
        'limit'       => 3,
        'orderby'     => 'date',
        'order'       => 'DESC',
    ]);

    if ( !empty($customer_orders) ) : ?>

        <ul class="recent-orders-list">
            <?php foreach ( $customer_orders as $order ) : ?>
                <li class="recent-order-item">
                    <span class="order-number">#<?php echo $order->get_id(); ?></span>
                    <span class="order-date"><?php echo $order->get_date_created()->date('d/m/Y'); ?></span>
                    <span class="order-status"><?php echo wc_get_order_status_name( $order->get_status() ); ?></span>
                </li>
            <?php endforeach; ?>
        </ul>

    <?php else : ?>
        <p>No tienes pedidos aún.</p>
        <a href="<?php echo wc_get_page_permalink('shop'); ?>" class="settings-btn">
            Explorar Productos
        </a>
    <?php endif; ?>

    <a href="<?php echo wc_get_endpoint_url( 'orders' ); ?>" class="settings-btn" style="margin-top:15px;">
        Ver Todos
    </a>
</div>
